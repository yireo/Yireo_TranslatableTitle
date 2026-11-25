# Yireo TranslatableTitle

<!-- badges.specs.start -->
<div class="github-specs-badges">

![Magento version](https://img.shields.io/badge/Magento-2.4.6%20%7C%202.4.9-orange)
![PHP version](https://img.shields.io/badge/PHP-8.2%E2%80%938.5-777BB4)
![License](https://img.shields.io/badge/License-OSL--3.0-blue)
![Latest Version](https://img.shields.io/packagist/v/yireo/magento2-translatabletitle)

</div>
<!-- badges.specs.end -->

Magento 2 extension to make page titles that are set as plain strings translatable in the frontend.

## Backgrounds
Magento core already makes page titles defined in XML layout translatable:

    <page>
        <head>
            <title>Example</title>
        </head>
    </page>

However, titles that are set at runtime as plain strings (`$pageConfig->getTitle()->set('Example')`) are not translated. This
module adds a plugin to `Magento\Framework\View\Page\Title::set()` that wraps such strings in a `Phrase`, so that they are
translated when the title is rendered.

The plugin is only active in the `frontend` area. Titles that already are a `Phrase` are left untouched, so that they are
not translated twice. Empty strings and non-string values are left untouched as well.

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
<div class="github-pipeline-badges">

![Static Tests](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_TranslatableTitle/static-tests.yml?label=static-tests)
![Unit Tests](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_TranslatableTitle/unit-tests.yml?label=unit-tests)
![Integration Tests](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_TranslatableTitle/integration-tests.yml?label=integration-tests)
![Playwright](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_TranslatableTitle/playwright.yml?label=playwright)
![DI Compilation](https://img.shields.io/github/actions/workflow/status/yireo/Yireo_TranslatableTitle/compile.yml?label=compile)

</div>
<!-- badges.test.end -->
