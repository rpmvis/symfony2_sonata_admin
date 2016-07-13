<?php

/*
 * to render the breadcrumb, just use this Twig helper :
{{ sonata_block_render_event('breadcrumb', { 'context': 'my_custom_context', 'current_uri': app.request.requestUri }) }}
 */

namespace RVis\DemoBundle\Block;

use Sonata\SeoBundle\Block\Breadcrumb\BaseBreadcrumbMenuBlockService;
use Sonata\BlockBundle\Block\BlockContextInterface;

class MyCustomBreadcrumbBlockService extends BaseBreadcrumbMenuBlockService
{

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'appbundle.block.breadcrumb';
    }

    /**
     * {@inheritdoc}
     */
    protected function getMenu(BlockContextInterface $blockContext)
    {

        $menu = $this->getMenu($blockContext);

        $menu->addChild('my_awesome_action');

        return $menu;
    }
}