<?php declare(strict_types=1);

namespace Yireo\TranslatableTitle\Test\Unit\Plugin\Magento\Framework\View\Page;

use Magento\Framework\Phrase;
use Magento\Framework\View\Page\Title as Subject;
use PHPUnit\Framework\TestCase;
use Yireo\TranslatableTitle\Plugin\Magento\Framework\View\Page\Title;

class TitleTest extends TestCase
{
    public function testPlainStringBecomesPhrase(): void
    {
        $result = (new Title())->beforeSet($this->getSubject(), 'Foobar');
        $this->assertIsArray($result);
        $this->assertCount(1, $result);
        $this->assertInstanceOf(Phrase::class, $result[0]);
        $this->assertSame('Foobar', $result[0]->getText());
    }

    public function testZeroStringIsKept(): void
    {
        $result = (new Title())->beforeSet($this->getSubject(), '0');
        $this->assertIsArray($result);
        $this->assertSame('0', $result[0]->getText());
    }

    public function testPhraseIsLeftUntouched(): void
    {
        $this->assertNull((new Title())->beforeSet($this->getSubject(), new Phrase('Foobar')));
    }

    /**
     * @dataProvider getNonTranslatableValues
     */
    public function testNonTranslatableValuesAreLeftUntouched(mixed $value): void
    {
        $this->assertNull((new Title())->beforeSet($this->getSubject(), $value));
    }

    /**
     * @return array<string, array<int, mixed>>
     */
    public static function getNonTranslatableValues(): array
    {
        return [
            'empty string' => [''],
            'null' => [null],
            'integer' => [42],
            'array' => [['Foobar']],
        ];
    }

    private function getSubject(): Subject
    {
        return $this->createMock(Subject::class);
    }
}
