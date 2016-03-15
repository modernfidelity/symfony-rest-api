<?php


namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class BlogPostAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text')
            ->add('body', 'textarea')


            ->add('draft', CheckboxType::class, array(
                'label'    => 'is draft version',
                'required' => false,
            ))


            ->add('category', 'entity', array(
                'class' => 'AppBundle\Entity\Category',
                'property' => 'name',
            ))
            ->add('category', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\Category',
                'property' => 'name',
            ))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('category.name')
            ->add('draft')

        ;
    }
}

