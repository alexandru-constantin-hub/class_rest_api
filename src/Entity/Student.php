<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
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

    private $firstname;

     /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */

    private $lastname;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */

    private $birthdate;

    /**
     * @ORM\OneToMany(targetEntity="Course", mappedBy="id")
     */

    private $courseid;



    public function getId(): ?int
    {
        return $this->id;
    }
    


    public function getFirstname(): ?string
    {
        return $this->firstname;
    }


    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }


    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function getBirthdate(): ?\DateTime
    {
        return $this->birthdate;
    }


    public function setBirthdate(\DateTime $birthdate): self
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function getCourseid(): ?int
    {
        return $this->courseid;
    }


    public function setCourseid(int $courseid): self
    {
        $this->courseid= $courseid;
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
    "firstname" => $this->getFirstname(),
    "lastname" => $this->getLastname(),
    "birthdate" => $this->getBirthdate(),
    "course" => $this->getCourse(),
    ];
  }





    

}
