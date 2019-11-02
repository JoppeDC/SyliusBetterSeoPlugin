<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Core\Model\ImageInterface;
use Sylius\Component\Core\Model\ImagesAwareInterface;
use Sylius\Component\Resource\Model\AbstractTranslation;
use Sylius\Component\Resource\Model\ResourceInterface;

class ProductSeoTranslation extends AbstractTranslation implements ResourceInterface, ImagesAwareInterface {

    /**
     * @var Collection|ImageInterface[]
     */
    protected $images;

    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    /**
     * @var int|null
     */
    protected $id;

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

    /**
     * {@inheritdoc}
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesByType(string $type): Collection
    {
        return $this->images->filter(function (ImageInterface $image) use ($type) {
            return $type === $image->getType();
        });
    }

    /**
     * {@inheritdoc}
     */
    public function hasImages(): bool
    {
        return !$this->images->isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function hasImage(ImageInterface $image): bool
    {
        return $this->images->contains($image);
    }

    /**
     * {@inheritdoc}
     */
    public function addImage(ImageInterface $image): void
    {
        $image->setOwner($this);
        $this->images->add($image);
    }

    /**
     * {@inheritdoc}
     */
    public function removeImage(ImageInterface $image): void
    {
        if ($this->hasImage($image)) {
            $image->setOwner(null);
            $this->images->removeElement($image);
        }
    }
}
