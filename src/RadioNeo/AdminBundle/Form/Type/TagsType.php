<?php

namespace RadioNeo\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use RadioNeo\AdminBundle\Form\DataTransformer\TagsTransformer;

/**
 * Tags form type that automatically converts string to array and array of tags to string
 */
class TagsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new TagsTransformer());
    }

    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'tags';
    }
}
