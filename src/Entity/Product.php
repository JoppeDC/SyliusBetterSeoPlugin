<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity;

use JoppeDc\SyliusBetterSeoPlugin\Entity\Traits\SeoTrait;
use Sylius\Component\Core\Model\Product as SyliusProduct;

class Product extends SyliusProduct
{
    use SeoTrait;
}
