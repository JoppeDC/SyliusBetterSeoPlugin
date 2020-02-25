<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/JoppeDC/SyliusBetterSeoPlugin/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/JoppeDC/SyliusBetterSeoPlugin/?branch=master)
[![Build Status](https://travis-ci.org/JoppeDC/SyliusBetterSeoPlugin.svg?branch=master)](https://travis-ci.org/JoppeDC/SyliusBetterSeoPlugin)

<h1 align="center">Sylius Better SEO Plugin</h1>
    
<p align="center">

  - Adds configurable SEO meta tags, image and Google rich snippets to product pages.
  
  - Adds configurable SEO meta tags and image to taxon pages.
  
</p>

## Installation 

1. Require plugin with composer:

    ```bash
    composer require joppedc/sylius-better-seo-plugin:^1.0
    ```

2. Add plugin class to your `bundles.php`.

    ```php
    JoppeDc\SyliusBetterSeoPlugin\SyliusBetterSeoPlugin::class => ['all' => true],
    ```

    or `appkernel.php`

    ```php
    $bundles = [
       new \JoppeDc\SyliusBetterSeoPlugin\SyliusBetterSeoPlugin(),
    ];
    ```
   

3. Import resources:

    ```yaml
    imports:
        - { resource: "@SyliusBetterSeoPlugin/Resources/config/config.yaml" }
    ```

4. Override Product and Taxon resource:

    You need to add `HasSeoInterface` and add `SeoTrait` to Product and Taxon entity.

    ```yaml
    sylius_product:
        resources:
            product:
                classes:
                    model: App\Entity\Product
    
    sylius_taxonomy:
        resources:
            taxon:
                classes:
                    model: App\Entity\Taxon
    ```
   
5. Finish the installation by updating the database schema

    ```
    $ bin/console doctrine:migrations:diff
    $ bin/console doctrine:migrations:migrate
    ```


## Examples

<img align="center" src="https://imgur.com/wTZtSDa.jpg" alt="Kitten" title="Google Preview" height="150" >
<img align="center" src="https://imgur.com/wvLt5em.jpg" alt="Kitten" title="Facebook Preview" height="150" >
<img align="center" src="https://imgur.com/hMNvu2C.jpg" alt="Kitten" title="Twitter Preview" height="150" >

## Documentation

* [Local development](docs/LOCAL_DEVELOPMENT.md)

## License

[The MIT License (MIT)](LICENSE)

Copyright © 2019 Joppe De Cuyper
