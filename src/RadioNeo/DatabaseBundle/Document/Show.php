<?php

namespace RadioNeo\DatabaseBundle\Document;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Model for a radio show
 *
 * @MongoDB\Document
 */
class Show
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
    protected $podcast_url;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @MongoDB\String
     */
    protected $slug;

    /**
     * @MongoDB\String
     */
    protected $broadcast_time;

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
     * Set podcastUrl
     *
     * @param string $podcastUrl
     * @return self
     */
    public function setPodcastUrl($podcastUrl)
    {
        $this->podcast_url = $podcastUrl;
        return $this;
    }

    /**
     * Get podcastUrl
     *
     * @return string $podcastUrl
     */
    public function getPodcastUrl()
    {
        return $this->podcast_url;
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
     * Set broadcastTime
     *
     * @param string $broadcastTime
     * @return self
     */
    public function setBroadcastTime($broadcastTime)
    {
        $this->broadcast_time = $broadcastTime;
        return $this;
    }

    /**
     * Get broadcastTime
     *
     * @return string $broadcastTime
     */
    public function getBroadcastTime()
    {
        return $this->broadcast_time;
    }
}
