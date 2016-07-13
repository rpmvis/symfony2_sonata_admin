<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ControlegespreksverslagAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('controle')
            ->add('goedContactMetWerkgever')
            ->add('redenVerzuimMedisch')
            ->add('geheelOfGedeeltelijkNietKunnenWerken')
            ->add('verwachtVerzuimInDagen')
            ->add('heeftContactMetEenBehandelaar')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('controle', null, array(
                'associated_tostring'  => '__toString',
                'label' => 'Controle'))
            ->add('goedContactMetWerkgever')
            ->add('redenVerzuimMedisch')
            ->add('geheelOfGedeeltelijkNietKunnenWerken')
            ->add('verwachtVerzuimInDagen')
            ->add('heeftContactMetEenBehandelaar')
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
            ->add('Controle', 'entity', array(
                'class' => 'AppBundle\Entity\Controlegespreksverslag',
                'property' => 'Controle',))
            ->add('goedContactMetWerkgever')
            ->add('redenVerzuimMedisch')
            ->add('geheelOfGedeeltelijkNietKunnenWerken')
            ->add('verwachtVerzuimInDagen')
            ->add('heeftContactMetEenBehandelaar')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('Controle')
            ->add('goedContactMetWerkgever')
            ->add('redenVerzuimMedisch')
            ->add('geheelOfGedeeltelijkNietKunnenWerken')
            ->add('verwachtVerzuimInDagen')
            ->add('heeftContactMetEenBehandelaar')
        ;
    }
}
