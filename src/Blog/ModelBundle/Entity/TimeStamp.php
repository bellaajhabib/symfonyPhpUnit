<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 16/10/16
 * Time: 08:01 م
 */

namespace Blog\ModelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * TimeStamp abstract class to define crated behavior
 * @ORM\MappedSuperclass
 */
abstract  class TimeStamp
{
    /**
     * @var string
     *
     * @ORM\Column(name="createAt", type="datetime")
     */
    private $createAt;
    /**
     * Construct
     */
    public function __construct()
    {
        $this->createAt=new \DateTime();
    }
    /**
     * Set createAt
     *
     * @param string $createAt
     *
     * @return Author
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return string
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }
}