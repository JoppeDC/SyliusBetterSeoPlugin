<?php

declare(strict_types=1);

namespace Tests\JoppeDc\SyliusBetterSeoPlugin\Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use JoppeDc\SyliusBetterSeoPlugin\Entity\HasSeoInterface;
use JoppeDc\SyliusBetterSeoPlugin\Entity\Traits\SeoTrait;
use Sylius\Component\Core\Model\Taxon as SyliusTaxon;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_taxon")
 */
class Taxon extends SyliusTaxon implements HasSeoInterface
{
    use SeoTrait;
}
