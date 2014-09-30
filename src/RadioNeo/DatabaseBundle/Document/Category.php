<?php

namespace RadioNeo\DatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document(repositoryClass="RadioNeo\DatabaseBundle\Repository\CategoryRepository")
 */
class Category
{
    const ROOT_CATEGORY_NAME = 'root';

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\ReferenceMany(targetDocument="Category")
     */
    protected $children = array();

    /**
     * @MongoDB\String
     * @Gedmo\Slug(fields={"name"})
     */
    protected $slug;

    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add child
     *
     * @param RadioNeo\DatabaseBundle\Document\Category $child
     */
    public function addChild(\RadioNeo\DatabaseBundle\Document\Category $child)
    {
        $this->children[] = $child;
    }

    /**
     * Remove child
     *
     * @param RadioNeo\DatabaseBundle\Document\Category $child
     */
    public function removeChild(\RadioNeo\DatabaseBundle\Document\Category $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection $children
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get slug
     *
     * @return string $slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Recursively get all children
     *
     * @param  array  $results List of results
     * @return Category[] List of children categories
     */
    public function getAllChildren(&$results = array())
    {
        $children = $this->getChildren();

        foreach ($children as $child) {
            $results[] = $child;

            $child->getAllChildren($results);
        }

        return $results;
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        return (null === $this->getName() ? '' : $this->getName());
    }
}
