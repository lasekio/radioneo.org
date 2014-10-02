<?php

namespace RadioNeo\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category')
            ->add('title')
            ->add('body')
            ->add('tags', 'text')
            ->add('publication_date', null, array('widget' => 'single_text'))
            ->add('picture_file')
            ->add('picture_credits')
            ->add('audio_file')
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'post';
    }
}
