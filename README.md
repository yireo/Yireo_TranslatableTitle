# Yireo TranslateTitle
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

    composer require yireo/yireo_translatabletitle

Afterwards, enable this module, run the setup scripts and flush the cache:

    ./bin/magento module:enable Yireo_TranslatableTitle
    ./bin/magento setup:upgrade

## Status
Stable

