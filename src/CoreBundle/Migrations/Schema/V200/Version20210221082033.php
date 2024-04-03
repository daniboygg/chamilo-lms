<?php

declare(strict_types=1);

/* For licensing terms, see /license.txt */

namespace Chamilo\CoreBundle\Migrations\Schema\V200;

use Chamilo\CoreBundle\Entity\Course;
use Chamilo\CoreBundle\Migrations\AbstractMigrationChamilo;
use Chamilo\CourseBundle\Entity\CLp;
use Chamilo\CourseBundle\Repository\CLpRepository;
use Chamilo\Kernel;
use Doctrine\DBAL\Schema\Schema;

class Version20210221082033 extends AbstractMigrationChamilo
{
    public function getDescription(): string
    {
        return 'Migrate c_lp images';
    }

    public function up(Schema $schema): void
    {
        /** @var Kernel $kernel */
        $kernel = $this->getContainer()->get('kernel');
        $rootPath = $kernel->getProjectDir();

        $em = $this->getEntityManager();

        $connection = $em->getConnection();
        $lpRepo = $this->container->get(CLpRepository::class);

        $q = $em->createQuery('SELECT c FROM Chamilo\CoreBundle\Entity\Course c');

        /** @var Course $course */
        foreach ($q->toIterable() as $course) {
            $courseId = $course->getId();
            $sql = "SELECT * FROM c_lp WHERE c_id = {$courseId}
                    ORDER BY iid";
            $result = $connection->executeQuery($sql);
            $items = $result->fetchAllAssociative();
            foreach ($items as $itemData) {
                $id = $itemData['iid'];
                $path = $itemData['preview_image'];
                $lp = $lpRepo->find($id);
                if ($lp && !empty($path)) {
                    $filePath = $rootPath.'/app/courses/'.$course->getDirectory().'/upload/learning_path/images/'.$path;
                    error_log('MIGRATIONS :: $filePath -- '.$filePath.' ...');
                    if ($this->fileExists($filePath)) {
                        $this->addLegacyFileToResource($filePath, $lpRepo, $lp, $lp->getIid(), $path);
                        $em->persist($lp);
                        $em->flush();
                    }
                }
            }

            $em->flush();
            $em->clear();
        }
    }
}
