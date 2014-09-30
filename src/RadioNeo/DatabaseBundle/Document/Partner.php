<?php

namespace RadioNeo\DatabaseBundle\Document;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Partner
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $description;

    /**
     * @MongoDB\String
     * @Assert\Image()
     */
    protected $picture_file;

    /**
     * @MongoDB\String
     * @Assert\Url()
     */
    protected $website_url;

    /**
     * @MongoDB\Int
     */
    protected $sort;

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
     * Set description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pictureFile
     *
     * @param string $pictureFile
     * @return self
     */
    public function setPictureFile($pictureFile)
    {
        $this->picture_file = $pictureFile;
        return $this;
    }

    /**
     * Get pictureFile
     *
     * @return string $pictureFile
     */
    public function getPictureFile()
    {
        return $this->picture_file;
    }

    /**
     * Set websiteUrl
     *
     * @param string $websiteUrl
     * @return self
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->website_url = $websiteUrl;
        return $this;
    }

    /**
     * Get websiteUrl
     *
     * @return string $websiteUrl
     */
    public function getWebsiteUrl()
    {
        return $this->website_url;
    }

    /**
     * Set sort
     *
     * @param int $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * Get sort
     *
     * @return int $sort
     */
    public function getSort()
    {
        return $this->sort;
    }
}
