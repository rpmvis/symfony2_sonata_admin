<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class WerknemerAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('naam')
            ->add('huisAdres')
            ->add('huisPostcode')
            ->add('huisPlaats')
            ->add('huisAdresIsBezoekAdres')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('klant', 'entity', array(
                'class' => 'AppBundle\Entity\Klant',
                'property' => 'klantNaam',))
//            ->add('klant')
            ->add('naam')
            ->add('huisAdres')
            ->add('huisPostcode')
            ->add('huisPlaats')
            ->add('huisAdresIsBezoekAdres')
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
            ->add('klant', null, array(), array(
                'class' => 'AppBundle\Entity\Klant',
                'associated_property' => 'klantNaam',))
            ->add('naam')
            ->add('huisAdres')
            ->add('huisPostcode')
            ->add('huisPlaats')
            ->add('huisAdresIsBezoekAdres')
            ->add('bezoekAdres')
            ->add('bezoekPostcode')
            ->add('bezoekPlaats')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('klantId')
            ->add('naam')
            ->add('huisAdres')
            ->add('huisPostcode')
            ->add('huisPlaats')
            ->add('huisAdresIsBezoekAdres')
        ;
    }
}
