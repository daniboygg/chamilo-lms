<?php

declare(strict_types=1);

/* For licensing terms, see /license.txt */

namespace Chamilo\CoreBundle\Migrations\Schema\V200;

use Chamilo\CoreBundle\Entity\Course;
use Chamilo\CoreBundle\Migrations\AbstractMigrationChamilo;
use Chamilo\CoreBundle\Repository\Node\CourseRepository;
use Chamilo\CourseBundle\Entity\CThematic;
use Chamilo\CourseBundle\Entity\CThematicAdvance;
use Chamilo\CourseBundle\Entity\CThematicPlan;
use Chamilo\CourseBundle\Repository\CThematicRepository;
use Doctrine\DBAL\Schema\Schema;

final class Version20201216105331 extends AbstractMigrationChamilo
{
    public function getDescription(): string
    {
        return 'Migrate c_thematic, c_thematic_advance, c_thematic_plan';
    }

    public function up(Schema $schema): void
    {
        $em = $this->getEntityManager();

        $connection = $em->getConnection();

        $thematicRepo = $this->container->get(CThematicRepository::class);
        $courseRepo = $this->container->get(CourseRepository::class);

        $admin = $this->getAdmin();

        $q = $em->createQuery('SELECT c FROM Chamilo\CoreBundle\Entity\Course c');

        /** @var Course $course */
        foreach ($q->toIterable() as $course) {
            $courseId = $course->getId();

            // c_thematic.
            $sql = "SELECT * FROM c_thematic WHERE c_id = {$courseId} and active = 1
                    ORDER BY iid";
            $result = $connection->executeQuery($sql);
            $items = $result->fetchAllAssociative();
            foreach ($items as $itemData) {
                $id = $itemData['iid'];

                /** @var CThematic $resource */
                $resource = $thematicRepo->find($id);
                if ($resource->hasResourceNode()) {
                    continue;
                }

                $course = $courseRepo->find($courseId);

                $result = $this->fixItemProperty(
                    'thematic',
                    $thematicRepo,
                    $course,
                    $admin,
                    $resource,
                    $course
                );

                if (false === $result) {
                    continue;
                }

                $em->persist($resource);
                $em->flush();
            }

            $em->flush();
            $em->clear();

            // c_thematic_advance.
            /*$sql = "SELECT * FROM c_thematic_advance WHERE c_id = $courseId
                    ORDER BY iid";
            $result = $connection->executeQuery($sql);
            $items = $result->fetchAllAssociative();
            foreach ($items as $itemData) {
                $id = $itemData['iid'];
                // @var CThematicAdvance $resource
                $resource = $thematicAdvanceRepo->find($id);
                if ($resource->hasResourceNode()) {
                    continue;
                }

                $course = $courseRepo->find($courseId);
                $result = $this->fixItemProperty(
                    'thematic_advance',
                    $thematicAdvanceRepo,
                    $course,
                    $admin,
                    $resource,
                    $course
                );

                if (false === $result) {
                    continue;
                }

                $em->persist($resource);
                $em->flush();
            }

            $em->flush();
            $em->clear();*/

            // c_thematic_plan.
            /*$sql = "SELECT * FROM c_thematic_plan WHERE c_id = $courseId
                    ORDER BY iid";
            $result = $connection->executeQuery($sql);
            $items = $result->fetchAllAssociative();
            foreach ($items as $itemData) {
                $id = $itemData['iid'];
                // @var CThematicPlan $resource
                $resource = $thematicPlanRepo->find($id);
                if ($resource->hasResourceNode()) {
                    continue;
                }
                $result = $this->fixItemProperty(
                    'thematic_plan',
                    $thematicPlanRepo,
                    $course,
                    $admin,
                    $resource,
                    $course
                );

                if (false === $result) {
                    continue;
                }

                $em->persist($resource);
                $em->flush();
            }
            $em->flush();
            $em->clear();*/
        }
    }
}
