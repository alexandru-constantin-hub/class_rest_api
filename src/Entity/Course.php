<?php

namespace App\Entity;

use App\Repository\CourseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursesRepository::class)
 */
class Course
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */

    private $coursename;

     /**
     * @ORM\Column(type="datetime", nullable=false)
     */

    private $startdate;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */

    private $duration;


    public function getId(): ?int
    {
        return $this->id;
    }

    
    public function getCoursename(): ?string
    {
        return $this->coursename;
    }


    public function setCoursename(string $coursename): self
    {
        $this->coursename = $coursename;
        return $this;
    }

    public function getStartDate(): ?\DateTime
    {
        return $this->startdate;
    }


    public function setstartdate(\DateTime $startdate): self
    {
        $this->startdate = $startdate;
        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }


    public function setDuration(string $duration): self
    {
        $this->duration = $duration;
        return $this;
    }


    /**
   * Specify data which should be serialized to JSON
   * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
   * @return mixed data which can be serialized by <b>json_encode</b>,
   * which is a value of any type other than a resource.
   * @since 5.4.0
   */
  public function jsonSerialize()
  {
   return [
    "id" => $this->getId(),
    "coursename" => $this->getCoursename(),
    "startdate" => $this->getStartDate(),
    "duration" => $this->getDuration()
    ];
  }

    
}
