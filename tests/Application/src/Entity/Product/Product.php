<?php


namespace Tests\JoppeDc\SyliusBetterSeoPlugin\Application\src\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use JoppeDc\SyliusBetterSeoPlugin\Entity\HasSeoInterface;
use JoppeDc\SyliusBetterSeoPlugin\Entity\Traits\SeoTrait;
use Sylius\Component\Core\Model\Product as BaseProduct;
use Sylius\Component\Product\Model\ProductTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_product")
 */
class Product extends BaseProduct implements HasSeoInterface
{
    use SeoTrait;

    protected function createTranslation(): ProductTranslationInterface
    {
        return new ProductTranslation();
    }
}
