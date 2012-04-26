<?php

namespace gg\Bundle\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('date_create')
            ->add('date_modif')
            ->add('version')
            ->add('url')
            ->add('description')
        ;
    }

    public function getName()
    {
        return 'gg_bundle_sitebundle_sitetype';
    }
}
