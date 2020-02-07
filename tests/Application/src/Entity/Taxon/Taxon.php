<?php


namespace Tests\JoppeDc\SyliusBetterSeoPlugin\Application\src\Entity\Taxon;

use Doctrine\ORM\Mapping as ORM;
use JoppeDc\SyliusBetterSeoPlugin\Entity\HasSeoInterface;
use JoppeDc\SyliusBetterSeoPlugin\Entity\Traits\SeoTrait;
use Sylius\Component\Core\Model\Taxon as BaseTaxon;
use Sylius\Component\Taxonomy\Model\TaxonTranslationInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_taxon")
 */
class Taxon extends BaseTaxon implements HasSeoInterface
{
    use SeoTrait;

    protected function createTranslation(): TaxonTranslationInterface
    {
        return new TaxonTranslation();
    }
}
