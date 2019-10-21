<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/JoppeDC/SyliusBetterSeoPlugin/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/JoppeDC/SyliusBetterSeoPlugin/?branch=master)
[![Build Status](https://travis-ci.org/JoppeDC/SyliusBetterSeoPlugin.svg?branch=master)](https://travis-ci.org/JoppeDC/SyliusBetterSeoPlugin)

<h1 align="center">Sylius Better SEO Plugin</h1>
    
<p align="center">
  Adding customizable SEO meta tags and Google structured data to product pages.
</p>

## Installation 

1. Require plugin with composer:

    ```bash
    composer require joppedc/sylius-better-seo-plugin:^1.0@dev
    ```

2. Add plugin class to your `bundles.php`.

    ```php
    JoppeDc\SyliusBetterSeoPlugin\SyliusBetterSeoPlugin::class => ['all' => true],
    ```

    or `appkernel.php`

    ```php
    $bundles = [
       new \StefanDoorn\SyliusStreetNumberPlugin\SyliusStreetNumberPlugin(),
    ];
    ```
    
3. (optional) Load resource override (if you don't have this done in your project yet):

    ```yaml
    - { resource: "@SyliusBetterSeoPlugin/Resources/config/resources.yaml" }
    ```

    If you are already overriding the Product resource, you can use the included trait.

## Examples

<img align="center" src="https://imgur.com/wTZtSDa.jpg" alt="Kitten" title="Google Preview" height="150" >
<img align="center" src="https://imgur.com/wvLt5em.jpg" alt="Kitten" title="Facebook Preview" height="150" >
<img align="center" src="https://imgur.com/hMNvu2C.jpg" alt="Kitten" title="Twitter Preview" height="150" >

## Documentation

* [Local development](docs/LOCAL_DEVELOPMENT.md)

## License

[The MIT License (MIT)](LICENSE)

Copyright © 2019 Joppe De Cuyper
