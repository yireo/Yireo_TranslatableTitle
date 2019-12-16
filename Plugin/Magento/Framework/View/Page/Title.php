<?php
/**
 * TranslatableTitle module for Magento 2
 *
 * @package     Yireo_TranslatableTitle
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

namespace Yireo\TranslatableTitle\Plugin\Magento\Framework\View\Page;

use Magento\Framework\View\Page\Title as Subject;

/**
 * Plugin Title
 * @package Yireo\TranslatableTitle\Plugin\Magento\Framework\View\Page
 */
class Title
{
    /**
     * Plugin method to make every page title translatable
     *
     * @param string $title
     * @return string
     */
    public function beforeSet(Subject $subject, string $title): string
    {
        if (empty($title)) {
            return '';
        }

        return (string) __($title);
    }
}
