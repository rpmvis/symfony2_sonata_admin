<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ControleverzoekAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('controleverzoektype')
            ->add('opdracht')
            ->add('werknemer')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('tijdstipVerzoek', 'datetime')
            ->add('controleverzoektype', null, array(
                'associated_tostring'  => '__toString',
                'label' => 'Controleverzoektype'))
            ->add('opdracht', null, array(
                'associated_tostring'  => '__toString',
                'label' => 'Opdracht'))
            ->add('werknemer', null, array(
                'associated_tostring'  => '__toString',
                'label' => 'Werknemer'))
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
            ->add('tijdstipVerzoek', 'datetime')
            ->add('Controleverzoektype', 'entity', array(
                'class' => 'AppBundle\Entity\Controleverzoektype',
                'property' => 'Controleverzoektype',))
            ->add('opdracht', 'entity', array(
                'class' => 'AppBundle\Entity\Opdracht',))
            ->add('werknemer', 'entity', array(
                'class' => 'AppBundle\Entity\Werknemer',
                'property' => 'Naam',))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('Controleverzoektype')
            ->add('opdracht')
            ->add('werknemer')
        ;
    }
}
