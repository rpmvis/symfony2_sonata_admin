<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ControleverzoektypeAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('controleverzoektypeCode')
            ->add('controleverzoektype')
            ->add('standaardPrijs')
            ->add('actief')
            ->add('volgorde')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('controleverzoektypeCode', null, array(
                'associated_tostring'  => '__toString',
                'label' => 'controleverzoektypeCode'))
            ->add('controleverzoektype', null, array(
                'associated_tostring'  => '__toString',
                'label' => 'Controleverzoektype'))
            ->add('standaardPrijs')
            ->add('actief')
            ->add('volgorde')
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
//            ->add('controleverzoektypeCode')
            ->add('controleverzoektypeCode', 'entity', array(
                'class' => 'AppBundle\Entity\Controleverzoektype',
                'property' => 'ControleverzoektypeCode',))
            ->add('Controleverzoektype', 'entity', array(
                'class' => 'AppBundle\Entity\Controleverzoektype',
                'property' => 'Controleverzoektype',))
            ->add('standaardPrijs')
            ->add('actief')
            ->add('volgorde')
        ;
    }



    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('controleverzoektypeCode')
            ->add('controleverzoektype')
            ->add('standaardPrijs')
            ->add('actief')
            ->add('volgorde')
        ;
    }
}
