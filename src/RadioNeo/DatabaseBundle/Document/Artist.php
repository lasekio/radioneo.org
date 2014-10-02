<?php

namespace RadioNeo\DatabaseBundle\Document;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document(repositoryClass="RadioNeo\DatabaseBundle\Repository\ArtistRepository")
 */
class Artist
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
     */
    protected $picture_credits;

    /**
     * @MongoDB\String
     * @Assert\Url()
     */
    protected $website_url;

    /**
     * @Gedmo\Timestampable(on="create")
     * @MongoDB\Date
     */
    protected $creation_date;

    /**
     * @Gedmo\Timestampable(on="update")
     * @MongoDB\Date
     */
    protected $update_date;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @MongoDB\String
     */
    protected $slug;

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
     * Set pictureCredits
     *
     * @param string $pictureCredits
     * @return self
     */
    public function setPictureCredits($pictureCredits)
    {
        $this->picture_credits = $pictureCredits;
        return $this;
    }

    /**
     * Get pictureCredits
     *
     * @return string $pictureCredits
     */
    public function getPictureCredits()
    {
        return $this->picture_credits;
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
     * Set creationDate
     *
     * @param date $creationDate
     * @return self
     */
    public function setCreationDate($creationDate)
    {
        $this->creation_date = $creationDate;
        return $this;
    }

    /**
     * Get creationDate
     *
     * @return date $creationDate
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Set updateDate
     *
     * @param date $updateDate
     * @return self
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;
        return $this;
    }

    /**
     * Get updateDate
     *
     * @return date $updateDate
     */
    public function getUpdateDate()
    {
        return $this->update_date;
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
}
