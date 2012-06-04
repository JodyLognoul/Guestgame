<?php

namespace gg\Bundle\DiscussionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DiscussionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('authoremail','email')
            ->add('authorpseudo')
        ;
    }

    public function getName()
    {
        return 'gg_bundle_discussionbundle_discussiontype';
    }
}
