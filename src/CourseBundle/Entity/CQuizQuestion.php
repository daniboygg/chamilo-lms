<?php

/* For licensing terms, see /license.txt */

namespace Chamilo\CourseBundle\Entity;

use Chamilo\CoreBundle\Entity\AbstractResource;
use Chamilo\CoreBundle\Entity\ResourceInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CQuizQuestion.
 *
 * @ORM\Table(
 *  name="c_quiz_question",
 *  indexes={
 *      @ORM\Index(name="course", columns={"c_id"}),
 *      @ORM\Index(name="position", columns={"position"})
 *  }
 * )
 * @ORM\Entity()
 */
class CQuizQuestion extends AbstractResource implements ResourceInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="iid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $iid;

    /**
     * @var int
     *
     * @ORM\Column(name="c_id", type="integer")
     */
    protected $cId;

    /**
     * @var string
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="question", type="text", nullable=false)
     */
    protected $question;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;

    /**
     * @var float
     *
     * @ORM\Column(name="ponderation", type="float", precision=6, scale=2, nullable=false, options={"default": 0})
     */
    protected $ponderation;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    protected $position;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    protected $type;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=50, nullable=true)
     */
    protected $picture;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    protected $level;

    /**
     * @var string
     *
     * @ORM\Column(name="feedback", type="text", nullable=true)
     */
    protected $feedback;

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="string", length=255, nullable=true)
     */
    protected $extra;

    /**
     * @var string
     *
     * @ORM\Column(name="question_code", type="string", length=10, nullable=true)
     */
    protected $questionCode;

    /**
     * @var Collection|CQuizQuestionCategory[]
     *
     * @ORM\ManyToMany(targetEntity="Chamilo\CourseBundle\Entity\CQuizQuestionCategory", inversedBy="questions")
     * @ORM\JoinTable(name="c_quiz_question_rel_category",
     *      joinColumns={@ORM\JoinColumn(name="category_id", referencedColumnName="iid")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="question_id", referencedColumnName="iid")}
     * )
     */
    protected $categories;

    /**
     * @ORM\OneToMany(targetEntity="Chamilo\CourseBundle\Entity\CQuizRelQuestion", mappedBy="question", cascade={"persist"})
     */
    protected $relQuizzes;

    /**
     * CQuizQuestion constructor.
     */
    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->ponderation = 0.0;
    }

    public function __toString(): string
    {
        return $this->getQuestion();
    }

    public function addCategory(CQuizQuestionCategory $category)
    {
        if ($this->categories->contains($category)) {
            return false;
        }

        $this->categories->add($category);
        $category->addQuestion($this);
    }

    public function updateCategory(CQuizQuestionCategory $category)
    {
        if (0 === $this->categories->count()) {
            $this->addCategory($category);
        }

        if ($this->categories->contains($category)) {
            return;
        }

        foreach ($this->categories as $item) {
            $this->categories->removeElement($item);
        }

        $this->addCategory($category);

        return $this;
    }

    public function removeCategory(CQuizQuestionCategory $category)
    {
        if (!$this->categories->contains($category)) {
            return;
        }

        $this->categories->removeElement($category);
        $category->removeQuestion($this);
    }

    /**
     * Set question.
     *
     * @param string $question
     *
     * @return CQuizQuestion
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question.
     *
     * @return string
     */
    public function getQuestion()
    {
        return (string) $this->question;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return CQuizQuestion
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ponderation.
     *
     * @param float $ponderation
     *
     * @return CQuizQuestion
     */
    public function setPonderation($ponderation)
    {
        $this->ponderation = $ponderation;

        return $this;
    }

    /**
     * Get ponderation.
     *
     * @return float
     */
    public function getPonderation()
    {
        return $this->ponderation;
    }

    /**
     * Set position.
     *
     * @param int $position
     *
     * @return CQuizQuestion
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position.
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set type.
     *
     * @param int $type
     *
     * @return CQuizQuestion
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set picture.
     *
     * @param string $picture
     *
     * @return CQuizQuestion
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture.
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set level.
     *
     * @param int $level
     *
     * @return CQuizQuestion
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level.
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set extra.
     *
     * @param string $extra
     *
     * @return CQuizQuestion
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra.
     *
     * @return string
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Set questionCode.
     *
     * @param string $questionCode
     *
     * @return CQuizQuestion
     */
    public function setQuestionCode($questionCode)
    {
        $this->questionCode = $questionCode;

        return $this;
    }

    /**
     * Get questionCode.
     *
     * @return string
     */
    public function getQuestionCode()
    {
        return $this->questionCode;
    }

    /**
     * Set cId.
     *
     * @param int $cId
     *
     * @return CQuizQuestion
     */
    public function setCId($cId)
    {
        $this->cId = $cId;

        return $this;
    }

    /**
     * Get cId.
     *
     * @return int
     */
    public function getCId()
    {
        return $this->cId;
    }

    /**
     * @return string
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * @param string $feedback
     */
    public function setFeedback($feedback): self
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * Get iid.
     *
     * @return int
     */
    public function getIid()
    {
        return $this->iid;
    }

    /**
     * Resource identifier.
     */
    public function getResourceIdentifier(): int
    {
        return $this->getIid();
    }

    public function getResourceName(): string
    {
        return $this->getQuestion();
    }

    public function setResourceName(string $name): self
    {
        return $this->setQuestion($name);
    }
}
