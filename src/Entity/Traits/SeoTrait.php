<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity\Traits;

use JoppeDc\SyliusBetterSeoPlugin\Entity\SeoInterface;

trait SeoTrait
{
    /**
     * @var SeoInterface|null
     */
    protected $seo;

    public function getSeo(): ?SeoInterface
    {
        return $this->seo;
    }

    public function setSeo(?SeoInterface $seo): void
    {
        $this->seo = $seo;
    }
}
