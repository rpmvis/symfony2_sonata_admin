<?php

namespace AppBundle\Admin;

use Proxies\__CG__\AppBundle\Entity\Klant;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ControleurAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('naam')
            ->add('adres')
            ->add('postcode')
            ->add('plaats')
            ->add('emailAdres')
            ->add('actief')        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('naam')
            ->add('adres')
            ->add('postcode')
            ->add('plaats')
            ->add('emailAdres', 'email')
            ->add('actief')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper){
//            ->add('klantId')

        $formMapper
            ->add('naam')
            ->add('adres')
            ->add('postcode')
            ->add('plaats')
            ->add('emailAdres', 'email')
            ->add('actief')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('naam')
            ->add('adres')
            ->add('postcode')
            ->add('plaats')
            ->add('emailAdres', 'email')
            ->add('actief')
        ;
    }
}
