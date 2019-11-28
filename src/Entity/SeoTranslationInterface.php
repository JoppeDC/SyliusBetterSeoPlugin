<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity;

interface SeoTranslationInterface
{
    public function getId(): ?int;

    public function setId(?int $id): void;

    public function getPageTitle(): ?string;

    public function setPageTitle(?string $pageTitle): void;

    public function getOgTitle(): ?string;

    public function setOgTitle(?string $ogTitle): void;

    public function getOgDescription(): ?string;

    public function setOgDescription(?string $ogDescription): void;

    public function getTwitterTitle(): ?string;

    public function setTwitterTitle(?string $twitterTitle): void;

    public function getTwitterDescription(): ?string;

    public function setTwitterDescription(?string $twitterDescription): void;

    public function getTwitterSite(): ?string;

    public function setTwitterSite(?string $twitterSite): void;

    public function getExtraTags(): ?string;

    public function setExtraTags(?string $extraTags): void;

    public function getImage(): ?SeoImageInterface;

    public function setImage(?SeoImageInterface $image): void;
}
