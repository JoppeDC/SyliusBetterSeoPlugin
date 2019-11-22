<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity;

use Sylius\Component\Resource\Model\AbstractTranslation;
use Sylius\Component\Resource\Model\ResourceInterface;

class SeoTranslation extends AbstractTranslation implements ResourceInterface
{
    /**
     * @var int|null
     */
    protected $id;

    /**
     * @var SeoImageInterface
     */
    protected $image;

    /**
     * @var string|null
     */
    private $pageTitle;

    /**
     * @var string|null
     */
    private $ogTitle;

    /**
     * @var string|null
     */
    private $ogDescription;

    /**
     * @var string|null
     */
    private $twitterTitle;

    /**
     * @var string|null
     */
    private $twitterDescription;

    /**
     * @var string|null
     */
    private $twitterSite;

    /**
     * @var string|null
     */
    private $extraTags;

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

    public function getExtraTags(): ?string
    {
        return $this->extraTags;
    }

    public function setExtraTags(?string $extraTags): void
    {
        $this->extraTags = $extraTags;
    }

    public function getImage(): ?SeoImageInterface
    {
        return $this->image;
    }

    public function setImage(?SeoImage $image): void
    {
        if (null !== $image) {
            $image->setOwner($this);
        }

        $this->image = $image;
    }
}
