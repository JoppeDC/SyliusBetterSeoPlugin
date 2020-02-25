<?php

declare(strict_types=1);

namespace Tests\JoppeDc\SyliusBetterSeoPlugin\Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use JoppeDc\SyliusBetterSeoPlugin\Entity\HasSeoInterface;
use JoppeDc\SyliusBetterSeoPlugin\Entity\Traits\SeoTrait;
use Sylius\Component\Core\Model\Product as SyliusProduct;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends SyliusProduct implements HasSeoInterface
{
    use SeoTrait;
}
