<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity;

use Sylius\Component\Resource\Model\AbstractTranslation;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslationInterface;

class ProductSeoTranslation extends AbstractTranslation implements ResourceInterface, TranslationInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    private $pageTitle;

    /**
     * @var string
     */
    private $ogTitle;

    /**
     * @var string
     */
    private $ogDescription;

    /**
     * @var string
     */
    private $ogType;

    /**
     * @var string
     */
    private $twitterTitle;

    /**
     * @var string
     */
    private $twitterDescription;

    /**
     * @var string
     */
    private $twitterSite;

    /**
     * @var string
     */
    private $twitterCard;

    /**
     * @var string
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getPageTitle(): ?string
    {
        return $this->pageTitle;
    }

    public function setPageTitle(?string $pageTitle): void
    {
        $this->pageTitle = $pageTitle;
    }

    public function getOgTitle(): ?string
    {
        return $this->ogTitle;
    }

    public function setOgTitle(?string $ogTitle): void
    {
        $this->ogTitle = $ogTitle;
    }

    public function getOgDescription(): ?string
    {
        return $this->ogDescription;
    }

    public function setOgDescription(?string $ogDescription): void
    {
        $this->ogDescription = $ogDescription;
    }

    public function getOgType(): ?string
    {
        return $this->ogType;
    }

    public function setOgType(?string $ogType): void
    {
        $this->ogType = $ogType;
    }

    public function getTwitterTitle(): ?string
    {
        return $this->twitterTitle;
    }

    public function setTwitterTitle(?string $twitterTitle): void
    {
        $this->twitterTitle = $twitterTitle;
    }

    public function getTwitterDescription(): ?string
    {
        return $this->twitterDescription;
    }

    public function setTwitterDescription(?string $twitterDescription): void
    {
        $this->twitterDescription = $twitterDescription;
    }

    public function getTwitterSite(): ?string
    {
        return $this->twitterSite;
    }

    public function setTwitterSite(?string $twitterSite): void
    {
        $this->twitterSite = $twitterSite;
    }

    public function getTwitterCard(): ?string
    {
        return $this->twitterCard;
    }

    public function setTwitterCard(?string $twitterCard): void
    {
        $this->twitterCard = $twitterCard;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }
}
