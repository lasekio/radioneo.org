<?php

namespace RadioNeo\AdminBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class TagsTransformer implements DataTransformerInterface
{
    /**
     * Transforms list of tags to string
     *
     * @param  array|null $tags
     * @return string
     */
    public function transform($tags)
    {
        if (!$tags) {
            $tags = array();
        }

        return implode(',', $tags);
    }

    /**
     * Transforms tags string to array of tags
     *
     * @param  string $tags
     *
     * @return array|null
     */
    public function reverseTransform($tags)
    {
        if (!$tags) {
            $tags = '';
        }

        return explode(',', $tags);
    }
}
