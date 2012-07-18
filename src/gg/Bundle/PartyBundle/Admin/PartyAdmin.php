<?php

namespace gg\Bundle\PartyBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;

class PartyAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('ghow')
            ->add('gwho')
            ->add('gwhat')
            ->add('gwhen','text')
            ->add('gwhere')
            ->add('email')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('ghow')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('gwho')
            ->addIdentifier('ghow')
            ->addIdentifier('gwhat')
            ->addIdentifier('gwhen')
            ->addIdentifier('gwhere')
            ->addIdentifier('email')
        ;
    }

    public function validate(ErrorElement $errorElement, $object)
    {
        $errorElement
            ->with('ghow')
                ->assertMaxLength(array('limit' => 32))
            ->end()
        ;
    }
}
