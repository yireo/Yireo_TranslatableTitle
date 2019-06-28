<?php
/**
 * TranslatableTitle module for Magento 2
 *
 * @package     Yireo_TranslatableTitle
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Yireo_TranslatableTitle',
    __DIR__
);
