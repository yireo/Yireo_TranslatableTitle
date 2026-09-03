# Yireo TranslateTitle

<!-- badges.specs.start -->
![Magento version](https://img.shields.io/badge/Magento-2.4.6%20%7C%202.4.9-orange)
![PHP version](https://img.shields.io/badge/PHP-8.2%E2%80%938.5-777BB4)
![License](https://img.shields.io/badge/License-OSL--3.0-blue)
![Latest Version](https://img.shields.io/packagist/v/yireo/magento2-translatabletitle)
<!-- badges.specs.end -->

Magento 2 extension to make every page title (set in XML layout) translatable.

## Backgrounds
Within Magento 2.1 (version at time of writing this), you can define a page title in XML layout using code like this:

    <page>
        <head>
            <title>Example</title>
        </head>
    </page>

Unfortunately, this title is not translatable. This module can be installed to simply make it translatable anyway.

## Installation
To install this extension, use the following command:

    composer require yireo/magento2-translatabletitle

Afterwards, enable this module, run the setup scripts and flush the cache:

    ./bin/magento module:enable Yireo_TranslatableTitle
    ./bin/magento setup:upgrade

## Status
Stable


## Current status

<!-- badges.test.start -->
![Static Tests](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_TranslatableTitle/static-tests.yml?label=static-tests)
![Unit Tests](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_TranslatableTitle/unit-tests.yml?label=unit-tests)
![Integration Tests](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_TranslatableTitle/integration-tests.yml?label=integration-tests)
![Playwright](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_TranslatableTitle/playwright.yml?label=playwright)
![DI Compilation](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_TranslatableTitle/compile.yml?label=compile)
<!-- badges.test.end -->
