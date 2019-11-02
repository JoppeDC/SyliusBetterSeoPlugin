<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Product\Model\ProductInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;
use Sylius\Component\Resource\Model\TranslatableTrait;
use Sylius\Component\Resource\Model\TranslationInterface;

class ProductSeo implements TranslatableInterface, ResourceInterface
{
    use TranslatableTrait {
        __construct as private initializeTranslationsCollection;
        getTranslation as private doGetTranslation;
    }

    /**
     * @var int|null
     */
    protected $id;

    /**
     * @var ProductInterface|null
     */
    private $product;

    public function __construct()
    {
        $this->initializeTranslationsCollection();
    }

    public function __toString()
    {
        return (string) $this->getId();
    }

    public function getPageTitle(): ?string
    {
        return $this->getTranslation()->getPageTitle();
    }

    public function setPageTitle(?string $pageTitle): void
    {
        $this->getTranslation()->setPageTitle($pageTitle);
    }

    public function getOgTitle(): ?string
    {
        return $this->getTranslation()->getOgTitle();
    }

    public function setOgTitle(?string $ogTitle): void
    {
        $this->getTranslation()->setOgTitle($ogTitle);
    }

    public function getOgDescription(): ?string
    {
        return $this->getTranslation()->getOgDescription();
    }

    public function setOgDescription(?string $ogDescription): void
    {
        $this->getTranslation()->setOgDescription($ogDescription);
    }

    public function getTwitterTitle(): ?string
    {
        return $this->getTranslation()->getTwitterTitle();
    }

    public function setTwitterTitle(?string $twitterTitle): void
    {
        $this->getTranslation()->setTwitterTitle($twitterTitle);
    }

    public function getTwitterDescription(): ?string
    {
        return $this->getTranslation()->getTwitterDescription();
    }

    public function setTwitterDescription(?string $twitterDescription): void
    {
        $this->getTranslation()->setTwitterDescription($twitterDescription);
    }

    public function getTwitterSite(): ?string
    {
        return $this->getTranslation()->getTwitterSite();
    }

    public function setTwitterSite(?string $twitterSite): void
    {
        $this->getTranslation()->setTwitterSite($twitterSite);
    }

    public function getExtraTags(): ?string
    {
        return $this->getTranslation()->getExtraTags();
    }

    public function setExtraTags(?string $extraTags): void
    {
        $this->getTranslation()->setExtraTags($extraTags);
    }

    public function getImage(): ?ProductSeoTranslationImage
    {
        $images = $this->getTranslation()->getImages();

        return count($images) ? $images->first() : null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return ProductSeoTranslation
     */
    public function getTranslation(?string $locale = null): TranslationInterface
    {
        /** @var ProductSeoTranslation $translation */
        $translation = $this->doGetTranslation($locale);

        return $translation;
    }

    public function getProduct(): ?ProductInterface
    {
        return $this->product;
    }

    public function setProduct(?ProductInterface $product): void
    {
        $this->product = $product;
    }

    protected function createTranslation(): ProductSeoTranslation
    {
        return new ProductSeoTranslation();
    }
}
