<?php

namespace JoppeDc\SyliusBetterSeoPlugin\EventListener;

use JoppeDc\SyliusBetterSeoPlugin\Entity\ProductInterface;
use Sylius\Component\Core\Model\ImagesAwareInterface;
use Sylius\Component\Core\Uploader\ImageUploaderInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Webmozart\Assert\Assert;

class ProductSeoTranslationImagesUploadListener
{
    /** @var ImageUploaderInterface */
    private $uploader;

    public function __construct(ImageUploaderInterface $uploader)
    {
        $this->uploader = $uploader;
    }

    public function uploadImages(GenericEvent $event): void
    {
        $subject = $event->getSubject();

        Assert::isInstanceOf($subject, ProductInterface::class);
        foreach ($subject->getSeo()->getTranslations() as $translation) {
            Assert::isInstanceOf($translation, ImagesAwareInterface::class);
            if (null !== $translation->getImages()) {
                $this->uploadTranslationImages($translation);
            }
        }
    }

    private function uploadTranslationImages(ImagesAwareInterface $subject): void
    {
        $images = $subject->getImages();
        foreach ($images as $image) {
            if ($image->hasFile()) {
                $this->uploader->upload($image);
            }

            // Upload failed? Let's remove that image.
            if (null === $image->getPath()) {
                $images->removeElement($image);
            }
        }
    }
}
