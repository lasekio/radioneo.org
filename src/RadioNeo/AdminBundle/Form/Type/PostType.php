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
            ->add('tags', 'tags')
            ->add('publication_date', 'datepicker', ['label' => 'Date de publication'])
            ->add('picture_file', null, ['required' => false])
            ->add('picture_credits')
            ->add('audio_file', null, ['required' => false])
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'post';
    }
}
