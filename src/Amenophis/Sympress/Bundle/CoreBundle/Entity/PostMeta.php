<?php

namespace Amenophis\Sympress\Bundle\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostMeta
 *
 * @ORM\Table(name="post_meta")
 * @ORM\Entity(repositoryClass="Amenophis\Sympress\Bundle\CoreBundle\Entity\PostMetaRepository")
 */
class PostMeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text")
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="metas")
     */
    private $post;


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
     * Set name
     *
     * @param string $name
     * @return PostMeta
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return PostMeta
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * Set post
     *
     * @param \Amenophis\Sympress\Bundle\CoreBundle\Entity\Post $post
     * @return PostMeta
     */
    public function setPost(\Amenophis\Sympress\Bundle\CoreBundle\Entity\Post $post = null)
    {
        $this->post = $post;
    
        return $this;
    }

    /**
     * Get post
     *
     * @return \Amenophis\Sympress\Bundle\CoreBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }
}