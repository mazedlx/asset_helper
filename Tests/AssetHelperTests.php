<?php
class AssetHelperTests extends PHPUnit_Framework_TestCase
{
    public function testCreation()
    {
        $assetHelper = new AssetHelper\AssetHelper;

        $this->assertContains('test.css', $assetHelper->link_css('test.css'));
        $this->assertContains('test.js', $assetHelper->link_js('test.js'));
    }
}
