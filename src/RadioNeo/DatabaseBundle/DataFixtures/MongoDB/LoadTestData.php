<?php

namespace RadioNeo\DatabaseBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadTestData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $filesToLoad = array(
            __DIR__ . '/yml/category.yml',
            __DIR__ . '/yml/post.yml',
            __DIR__ . '/yml/artist.yml',
            __DIR__ . '/yml/user.yml',
        );

        $objects = Fixtures::load($filesToLoad, $manager, array('providers' => array($this), 'locale' => 'fr'));
    }
}
