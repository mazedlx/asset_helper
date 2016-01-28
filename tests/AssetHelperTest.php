<?php
namespace Tests;

use AssetHelper\AssetHelper;

class AssetHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testCssLink()
    {
        $assetHelper = new AssetHelper();

        $this->assertContains('test.css', $assetHelper->link_css('test.css'));

    }

    public function testJsLink()
    {
        $assetHelper = new AssetHelper();

        $this->assertContains('test.js', $assetHelper->link_js('test.js'));
    }
}
