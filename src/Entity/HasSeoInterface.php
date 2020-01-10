<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Entity;

interface HasSeoInterface
{
    public function getSeo(): ?SeoInterface;
}
