<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HouseRepository")
 */
class House
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="integer")
     */
    private $flour;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start_year;

    /**
     * @ORM\Column(type="string")
     */
    private $description;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pict;

    /**
     * @ORM\Column(type="integer")
     */
    private $ratio;

    /**
     * @ORM\Column(type="integer")
     */
    private $posts;

    /**
     * @ORM\Column(type="integer")
     */
    private $comments;

    /**
     * @ORM\Column(type="integer")
     */
    private $subscr_to;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getFlour()
    {
        return $this->flour;
    }

    /**
     * @param mixed $flour
     */
    public function setFlour($flour): void
    {
        $this->flour = $flour;
    }

    /**
     * @return mixed
     */
    public function getStartYear()
    {
        return $this->start_year;
    }

    /**
     * @param mixed $start_year
     */
    public function setStartYear($start_year): void
    {
        $this->start_year = $start_year;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPict()
    {
        return $this->pict;
    }

    /**
     * @param mixed $pict
     */
    public function setPict($pict): void
    {
        $this->pict = $pict;
    }

    /**
     * @return mixed
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * @param mixed $ratio
     */
    public function setRatio($ratio): void
    {
        $this->ratio = $ratio;
    }

    /**
     * @return mixed
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param mixed $posts
     */
    public function setPosts($posts): void
    {
        $this->posts = $posts;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments): void
    {
        $this->comments = $comments;
    }

    /**
     * @return mixed
     */
    public function getSubscrTo()
    {
        return $this->subscr_to;
    }

    /**
     * @param mixed $subscr_to
     */
    public function setSubscrTo($subscr_to): void
    {
        $this->subscr_to = $subscr_to;
    }


}
