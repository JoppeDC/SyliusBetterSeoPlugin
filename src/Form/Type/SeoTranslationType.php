<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class SeoTranslationType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('pageTitle', TextType::class, [
            'empty_data' => '',
            'label' => 'seo.ui.page_title',
            'required' => false,
        ]);

        $builder->add('ogTitle', TextType::class, [
            'empty_data' => '',
            'label' => 'seo.ui.og_title',
            'required' => false,
        ]);

        $builder->add('ogDescription', TextareaType::class, [
            'empty_data' => '',
            'label' => 'seo.ui.og_description',
            'required' => false,
        ]);

        $builder->add('twitterTitle', TextType::class, [
            'empty_data' => '',
            'label' => 'seo.ui.twitter_title',
            'required' => false,
        ]);

        $builder->add('twitterDescription', TextareaType::class, [
            'empty_data' => '',
            'label' => 'seo.ui.twitter_description',
            'required' => false,
        ]);

        $builder->add('twitterSite', TextType::class, [
            'empty_data' => '',
            'label' => 'seo.ui.twitter_site',
            'required' => false,
        ]);

        $builder->add('extraTags', TextareaType::class, [
            'empty_data' => '',
            'label' => 'seo.ui.extra_tags',
            'required' => false,
        ]);

        $builder->add('image', SeoImageType::class, [
            'label' => false,
            'required' => false,
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'joppedc_seo_translation';
    }
}
