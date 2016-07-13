<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ControleAdmin extends Admin
{
    public function createQuery($context = 'list')
    {
        $query = parent::createQuery($context);
        return $query;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('tijdstipBezoek', 'doctrine_orm_datetime', array('input_type' => 'timestamp')) // not: array('date' => 'd-m-Y  H:i:s')
            ->add('opmerkingen')
            ->add('facturabel')
            ->add('controleverzoek')
            ->add('controleur')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $x = 1;
        $listMapper->addIdentifier('id');

        $listMapper->add('controleverzoek.opdracht', null, array(
            'associated_tostring'  => '__toString',
            'label' => 'Opdracht'));
        $listMapper->addIdentifier('Controleverzoek', null, array(
                'class'   => 'AppBundle\Entity\Controleverzoek',
                'associated_toproperty'  => 'tijdstipVerzoek',
                'format' => 'd-m-Y  H:i:s',
                'timezone' => 'Europe/Amsterdam'));
        $listMapper->add('tijdstipBezoek', null, array(
                'format' => 'd-m-Y  H:i:s',
                'timezone' => 'Europe/Amsterdam'));
        $listMapper->add('controleur', 'entity', array(
                'class' => 'AppBundle\Entity\Controleur',
                'property' => '__toString',))
            ->add('opmerkingen')
            ->add('facturabel')
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
        $formMapper->add('controleverzoek', 'entity', array(
            'class' => 'AppBundle\Entity\Controleverzoek',));
        $formMapper->add('tijdstipBezoek', 'sonata_type_datetime_picker', array(
        'dp_side_by_side'       => true
        ));
        $formMapper->add('controleur', 'entity', array(
             'class' => 'AppBundle\Entity\Controleur'));
        $formMapper->add('opmerkingen')
            ->add('facturabel');
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('tijdstipBezoek')
            ->add('opmerkingen')
            ->add('facturabel')
        ;
    }
}
