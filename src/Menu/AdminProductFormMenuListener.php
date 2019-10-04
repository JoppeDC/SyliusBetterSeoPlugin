<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Menu;

use Sylius\Bundle\AdminBundle\Event\ProductMenuBuilderEvent;

class AdminProductFormMenuListener
{
    public function addItems(ProductMenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $menu->addChild('seo')
            ->setAttribute('template', '@SyliusBetterSeoPlugin/Admin/Product/Tab/_seo.html.twig')
            ->setLabel('app.ui.seo');
    }
}
