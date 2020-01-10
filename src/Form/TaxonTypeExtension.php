<?php

declare(strict_types=1);

namespace JoppeDc\SyliusBetterSeoPlugin\Form;

use JoppeDc\SyliusBetterSeoPlugin\Form\Type\SeoType;
use Sylius\Bundle\TaxonomyBundle\Form\Type\TaxonType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;

class TaxonTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('seo', SeoType::class, [
            'label' => false,
        ]);
    }

    public static function getExtendedTypes(): iterable
    {
        yield TaxonType::class;
    }
}
