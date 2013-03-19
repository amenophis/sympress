<?php

namespace Amenophis\SympressUserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Amenophis\SympressUserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Amenophis\SympressBundle\Entity\Post", mappedBy="author")
     */
    private $posts;

    public function __construct()
    {
        parent::__construct();

        $this->posts = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add post
     *
     * @param \Amenophis\SympressBundle\Entity\Post $post
     * @return User
     */
    public function addPost(\Amenophis\SympressBundle\Entity\Post $post)
    {
        $this->posts[] = $post;
    
        return $this;
    }

    /**
     * Remove post
     *
     * @param \Amenophis\SympressBundle\Entity\Post $post
     */
    public function removePost(\Amenophis\SympressBundle\Entity\Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }
}