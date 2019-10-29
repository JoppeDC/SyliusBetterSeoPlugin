<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity\Traits;

use JoppeDc\SyliusBetterSeoPlugin\Entity\ProductSeo;

trait SeoTrait
{
    /**
     * @var ProductSeo|null
     */
    protected $seo;

    public function getSeo(): ?ProductSeo
    {
        return $this->seo;
    }

    public function setSeo(?ProductSeo $seo): void
    {
        $this->seo = $seo;
    }
}
