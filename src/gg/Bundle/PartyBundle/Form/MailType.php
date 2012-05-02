<?php

namespace gg\Bundle\PartyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class MailType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('gfrom','email')
                ->add('gto','hidden')
                ->add('gsubject')
                ->add('gcontent','textarea')
        ;
    }

    public function getName() {
        return 'gg_bundle_partybundle_mailtype';
    }

}
