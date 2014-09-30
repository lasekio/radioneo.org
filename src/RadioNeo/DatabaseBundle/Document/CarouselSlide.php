<?php

namespace RadioNeo\DatabaseBundle\Document;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class CarouselSlide
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $title;

    /**
     * @MongoDB\String
     */
    protected $body;

    /**
     * @MongoDB\String
     * @Assert\Image()
     */
    protected $picture_file;

    /**
     * @MongoDB\Date
     */
    protected $end_date;

    /**
     * @MongoDB\String
     * @Assert\Url()
     */
    protected $website_url;

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
     * Set title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Get body
     *
     * @return string $body
     */
    public function getBody()
    {
        return $this->body;
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
     * Set endDate
     *
     * @param date $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return date $endDate
     */
    public function getEndDate()
    {
        return $this->end_date;
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
}
