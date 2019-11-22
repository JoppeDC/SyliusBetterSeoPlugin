<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity;

use JoppeDc\SyliusBetterSeoPlugin\Entity\Traits\SeoTrait;
use Sylius\Component\Core\Model\Taxon as SyliusTaxon;

class Taxon extends SyliusTaxon implements SeoInterface
{
    use SeoTrait;
}
