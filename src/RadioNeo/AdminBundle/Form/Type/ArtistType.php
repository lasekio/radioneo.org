<?php

namespace RadioNeo\AdminBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArtistType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description', 'textarea')
            ->add('picture_file', null, ['required' => false])
            ->add('picture_credits', null, ['required' => false])
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'artist';
    }
}
