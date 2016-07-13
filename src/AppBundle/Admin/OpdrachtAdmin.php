<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class OpdrachtAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('opdrachtDatum', 'doctrine_orm_date', array('date' => 'MM d, y',))
            ->add('akkoordMetAlgemeneVoorwaarden')
            ->add('akkoordVoorOpdracht')
            ->add('klant')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('opdrachtDatum', null, array('format' => 'd-m-Y'))
            ->add('akkoordMetAlgemeneVoorwaarden')
            ->add('akkoordVoorOpdracht')
            ->add('klant')
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
            ->add('opdrachtDatum', 'date', array('format' => 'd-M-y'))
            ->add('akkoordMetAlgemeneVoorwaarden')
            ->add('akkoordVoorOpdracht')
            ->add('klant')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('opdrachtDatum', null, array('format' => 'd-m-Y'))
            ->add('akkoordMetAlgemeneVoorwaarden')
            ->add('akkoordVoorOpdracht')
            ->add('klant')
        ;
    }

    public function getTemplate($name)
    {
        switch ($name) {
            case 'list':
                return parent::getTemplate($name);
//                return 'AppBundle:Admin:list.html.twig';
                break;

            default:
                return parent::getTemplate($name);
                break;
        }
    }
}
