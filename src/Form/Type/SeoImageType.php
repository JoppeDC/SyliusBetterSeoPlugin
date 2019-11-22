<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Form\Type;

use Sylius\Bundle\CoreBundle\Form\Type\ImageType as BaseImageType;

class SeoImageType extends BaseImageType
{
    public function getBlockPrefix(): string
    {
        return 'joppedc_sylius_better_seo_image';
    }
}
