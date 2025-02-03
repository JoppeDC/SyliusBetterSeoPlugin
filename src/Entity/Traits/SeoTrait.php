<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;
use JoppeDc\SyliusBetterSeoPlugin\Entity\SeoInterface;

trait SeoTrait
{
    #[OneToOne(
        targetEntity: SeoInterface::class,
        cascade: ['all'],
    )]
    #[JoinColumn(name: 'seo_id', referencedColumnName: 'id', nullable: true)]
    protected SeoInterface|null $seo = null;

    public function getSeo(): ?SeoInterface
    {
        return $this->seo;
    }

    public function setSeo(?SeoInterface $seo): void
    {
        $this->seo = $seo;
    }
}
