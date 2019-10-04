<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity;

use Sylius\Component\Core\Model\Product as SyliusProduct;

class Product extends SyliusProduct
{
    /**
     * @var ProductSeo
     */
    protected $seo;

    public function __construct()
    {
        parent::__construct();

        $this->seo = new ProductSeo();
    }

    public function getSeo(): ?ProductSeo
    {
        return $this->seo;
    }

    public function setSeo(?ProductSeo $seo): void
    {
        $this->seo = $seo;
    }
}
