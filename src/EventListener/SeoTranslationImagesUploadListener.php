<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\EventListener;

use JoppeDc\SyliusBetterSeoPlugin\Entity\HasSeoInterface;
use JoppeDc\SyliusBetterSeoPlugin\Entity\SeoImageInterface;
use JoppeDc\SyliusBetterSeoPlugin\Entity\SeoInterface;
use JoppeDc\SyliusBetterSeoPlugin\Entity\SeoTranslationInterface;
use Sylius\Component\Core\Uploader\ImageUploaderInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Webmozart\Assert\Assert;

class SeoTranslationImagesUploadListener
{
    /** @var ImageUploaderInterface */
    private $uploader;

    public function __construct(ImageUploaderInterface $uploader)
    {
        $this->uploader = $uploader;
    }

    public function uploadMedia(GenericEvent $event): void
    {
        $subject = $event->getSubject();
        Assert::isInstanceOf($subject, HasSeoInterface::class);
        $seo = $subject->getSeo();
        Assert::isInstanceOf($seo, SeoInterface::class);
        /** @var SeoTranslationInterface $translation */
        foreach ($seo->getTranslations() as $translation) {
            $image = $translation->getImage();
            if ($image instanceof SeoImageInterface) {
                if ($image->hasFile()) {
                    $this->uploader->upload($image);
                }
                // Upload failed? Let's remove that image.
                if (null === $image->getPath()) {
                    $translation->setImage(null);
                }
            }
        }
    }
}
