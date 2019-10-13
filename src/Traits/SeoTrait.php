<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Traits;

use JoppeDc\SyliusBetterSeoPlugin\Entity\ProductSeo;

trait SeoTrait
{
    /**
     * @var ProductSeo
     */
    protected $seo;

    /**
     * @return ProductSeo|null
     */
    public function getSeo(): ?ProductSeo
    {
        return $this->seo;
    }

    /**
     * @param ProductSeo|null $seo
     */
    public function setSeo(?ProductSeo $seo): void
    {
        $this->seo = $seo;
    }

    protected function initSeo(): void
    {
        $this->seo = new ProductSeo();
    }
}
