<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class KlantAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('klantNaam')
            ->add('bedrijfNaam')
            ->add('bedrijfAdres')
            ->add('bedrijfPostcode')
            ->add('bedrijfPlaats')
            ->add('bedrijfEmailAdres')
            ->add('actief')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('klantNaam')
            ->add('bedrijfNaam')
            ->add('bedrijfAdres')
            ->add('bedrijfPostcode')
            ->add('bedrijfPlaats')
            ->add('bedrijfEmailAdres')
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
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('klantNaam')
            ->add('bedrijfNaam')
            ->add('bedrijfAdres')
            ->add('bedrijfPostcode')
            ->add('bedrijfPlaats');
        $formMapper->add('bedrijfEmailAdres', 'email'); //
        $formMapper->add('priveAdres')
            ->add('privePostcode')
            ->add('privePlaats')
            ->add('priveEmailAdres')
            ->add('actief')
            ->add('werknemers', 'sonata_type_collection', array(
                'by_reference' => false,
                'required' => false,
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
                'targetEntity' => 'AppBundle\Entity\Werknemer'
            ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('klantNaam')
            ->add('bedrijfNaam')
            ->add('bedrijfAdres')
            ->add('bedrijfPostcode')
            ->add('bedrijfPlaats')
            ->add('bedrijfEmailAdres', 'email')
            ->add('priveAdres')
            ->add('privePostcode')
            ->add('privePlaats')
            ->add('priveEmailAdres', 'email')
            ->add('actief')
        ;
    }
}
