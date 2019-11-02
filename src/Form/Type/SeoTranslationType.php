<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Count;

class SeoTranslationType extends AbstractResourceType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('pageTitle', TextType::class, [
            'empty_data' => '',
            'label' => 'app.ui.page_title',
            'required' => false,
        ]);

        $builder->add('ogTitle', TextType::class, [
            'empty_data' => '',
            'label' => 'app.ui.og_title',
            'required' => false,
        ]);

        $builder->add('ogDescription', TextareaType::class, [
            'empty_data' => '',
            'label' => 'app.ui.og_description',
            'required' => false,
        ]);

        $builder->add('twitterTitle', TextType::class, [
            'empty_data' => '',
            'label' => 'app.ui.twitter_title',
            'required' => false,
        ]);

        $builder->add('twitterDescription', TextareaType::class, [
            'empty_data' => '',
            'label' => 'app.ui.twitter_description',
            'required' => false,
        ]);

        $builder->add('twitterSite', TextType::class, [
            'empty_data' => '',
            'label' => 'app.ui.twitter_site',
            'required' => false,
        ]);

        $builder->add('extraTags', TextareaType::class, [
            'empty_data' => '',
            'label' => 'app.ui.extra_tags',
            'required' => false,
        ]);

        $builder->add('images', CollectionType::class, [
            'entry_type' => SeoTranslationImageType::class,
            'allow_add' => true,
            'allow_delete' => true,
            'by_reference' => false,
            'label' => 'app.ui.image',
            'required' => false,
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'joppedc_product_seo_translation';
    }
}
