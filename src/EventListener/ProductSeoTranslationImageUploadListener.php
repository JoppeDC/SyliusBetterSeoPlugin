<?php

namespace JoppeDc\SyliusBetterSeoPlugin\EventListener;

use JoppeDc\SyliusBetterSeoPlugin\Entity\ProductInterface;
use Sylius\Component\Core\Model\ImageAwareInterface;
use Sylius\Component\Core\Uploader\ImageUploaderInterface;
use Symfony\Component\EventDispatcher\GenericEvent;
use Webmozart\Assert\Assert;

class ProductSeoTranslationImageUploadListener
{
    /** @var ImageUploaderInterface */
    private $uploader;

    public function __construct(ImageUploaderInterface $uploader)
    {
        $this->uploader = $uploader;
    }

    public function uploadImage(GenericEvent $event): void
    {
        $subject = $event->getSubject();

        Assert::isInstanceOf($subject, ProductInterface::class);
        foreach ($subject->getSeo()->getTranslations() as $translation) {
            Assert::isInstanceOf($translation, ImageAwareInterface::class);
            dump($translation);
            if (null !== $translation->getImage()) {
                $this->uploader->upload($translation->getImage());
            }
        }
    }
}
