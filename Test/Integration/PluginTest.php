<?php declare(strict_types=1);

namespace Yireo\TranslatableTitle\Test\Integration;

use Magento\Framework\App\ObjectManager;
use Magento\Framework\Phrase;
use Magento\Framework\View\Page\Title as Subject;
use Magento\TestFramework\Interception\PluginList;
use PHPUnit\Framework\TestCase;
use Yireo\IntegrationTestHelper\Test\Integration\Traits\AssertInterceptorPluginIsRegistered;
use Yireo\IntegrationTestHelper\Test\Integration\Traits\AssertModuleIsEnabled;
use Yireo\TranslatableTitle\Plugin\Magento\Framework\View\Page\Title;

class PluginTest extends TestCase
{
    use AssertModuleIsEnabled;
    use AssertInterceptorPluginIsRegistered;

    private const PLUGIN_NAME = 'yireo_translatabletitle_magento_framework_view_page_title';

    public function testModuleIsEnabled(): void
    {
        $this->assertModuleIsEnabled('Yireo_TranslatableTitle');
    }

    /**
     * @magentoAppArea frontend
     */
    public function testPluginIsRegisteredInFrontend(): void
    {
        $this->assertInterceptorPluginIsRegistered(Subject::class, Title::class, self::PLUGIN_NAME);
    }

    /**
     * @magentoAppArea adminhtml
     */
    public function testPluginIsNotRegisteredInAdminhtml(): void
    {
        $pluginList = ObjectManager::getInstance()->get(PluginList::class);
        $this->assertInstanceOf(PluginList::class, $pluginList);
        $pluginInfo = $pluginList->get(Subject::class, []);
        $this->assertIsArray($pluginInfo);
        $this->assertArrayNotHasKey(self::PLUGIN_NAME, $pluginInfo);
    }

    /**
     * @magentoAppArea frontend
     */
    public function testTitleIsStillSetInFrontend(): void
    {
        $title = ObjectManager::getInstance()->create(Subject::class);
        $this->assertInstanceOf(Subject::class, $title);
        $title->set('Foobar');
        $heading = $title->getShortHeading();
        $this->assertInstanceOf(Phrase::class, $heading);
        $this->assertSame('Foobar', $heading->render());
    }
}
