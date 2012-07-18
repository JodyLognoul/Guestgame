<?php

namespace gg\Bundle\DiscussionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('content','textarea')
            ->add('authorpseudo')
            ->add('authoremail','email');
    }

    public function getName()
    {
        return 'gg_bundle_discussionbundle_commenttype';
    }
}
