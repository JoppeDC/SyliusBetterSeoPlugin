<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use JoppeDc\SyliusBetterSeoPlugin\Entity\SeoInterface;

trait SeoTrait
{
    /**
     * @var SeoInterface|null
     *
     * @ORM\OneToOne(targetEntity="\JoppeDc\SyliusBetterSeoPlugin\Entity\Seo", cascade={"all"})
     * @ORM\JoinColumn(name="seo_id", referencedColumnName="id")
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
