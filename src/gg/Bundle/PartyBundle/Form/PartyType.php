<?php

namespace gg\Bundle\PartyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PartyType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('gwho', 'textarea')
                ->add('ghow', 'textarea')
                ->add('gwhat', 'textarea')
                ->add('gwhen', 'text',array('data'=>'uhuhu'))
                ->add('gwhere')
                ->add('email','email')
        ;
    }

    public function getName() {
        return 'gg_bundle_partybundle_partytype';
    }

}
