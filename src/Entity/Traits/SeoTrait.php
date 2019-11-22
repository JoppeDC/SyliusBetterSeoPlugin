<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity\Traits;

use JoppeDc\SyliusBetterSeoPlugin\Entity\Seo;

trait SeoTrait
{
    /**
     * @var Seo|null
     */
    protected $seo;

    public function getSeo(): ?Seo
    {
        return $this->seo;
    }

    public function setSeo(?Seo $seo): void
    {
        $this->seo = $seo;
    }
}
