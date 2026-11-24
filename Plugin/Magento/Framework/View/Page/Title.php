<?php declare(strict_types=1);

namespace Yireo\TranslatableTitle\Plugin\Magento\Framework\View\Page;

use Magento\Framework\Phrase;
use Magento\Framework\View\Page\Title as Subject;

class Title
{
    /**
     * Wrap a plain string title in a Phrase, so that it is translated when rendered
     *
     * @param Subject $subject
     * @param mixed $title
     * @return Phrase[]|null
     */
    public function beforeSet(Subject $subject, mixed $title): ?array
    {
        if (!is_string($title) || $title === '') {
            return null;
        }

        return [new Phrase($title)];
    }
}
