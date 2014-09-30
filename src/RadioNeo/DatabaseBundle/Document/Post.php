<?php

namespace RadioNeo\DatabaseBundle\Document;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document
 */
class Post
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
     * @MongoDB\ReferenceOne(targetDocument="Category")
     */
    protected $category;

    /**
     * @MongoDB\Collection
     */
    protected $tags;

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
     * @MongoDB\Date
     */
    protected $publication_date;

    /**
     * @Gedmo\Slug(fields={"title"})
     * @MongoDB\String
     */
    protected $slug;

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
     * @Assert\File(mimeTypes = {"audio/mpeg", "audio/mp3"})
     */
    protected $audio_file;

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
     * Set tags
     *
     * @param collection $tags
     * @return self
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * Get tags
     *
     * @return collection $tags
     */
    public function getTags()
    {
        return $this->tags;
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
     * Set publicationDate
     *
     * @param date $publicationDate
     * @return self
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publication_date = $publicationDate;
        return $this;
    }

    /**
     * Get publicationDate
     *
     * @return date $publicationDate
     */
    public function getPublicationDate()
    {
        return $this->publication_date;
    }

    /**
     * Set category
     *
     * @param RadioNeo\DatabaseBundle\Document\Category $category
     * @return self
     */
    public function setCategory(\RadioNeo\DatabaseBundle\Document\Category $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return RadioNeo\DatabaseBundle\Document\Category $category
     */
    public function getCategory()
    {
        return $this->category;
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
     * Set audioFile
     *
     * @param string $audioFile
     * @return self
     */
    public function setAudioFile($audioFile)
    {
        $this->audio_file = $audioFile;
        return $this;
    }

    /**
     * Get audioFile
     *
     * @return string $audioFile
     */
    public function getAudioFile()
    {
        return $this->audio_file;
    }
}
