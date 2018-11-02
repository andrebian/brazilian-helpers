<?php

namespace Test\Andrebian\BrazilianHelpers\Helpers;

use Andrebian\BrazilianHelpers\Helpers\StateHelper;
use PHPUnit\Framework\TestCase;

/**
 * Class StateHelperTest
 * @package Test\Andrebian\BrazilianHelpers\Helpers
 */
class StateHelperTest extends TestCase
{
    public function testGetHtmlForSelectElement()
    {
        $result = StateHelper::getHtmlForSelectElement();
        $this->assertNotNull($result);
        $this->assertContains('<option', $result);
        $this->assertContains('</option>', $result);
    }

    public function testGetStateName()
    {
        $result = StateHelper::getStateName('PR');
        $this->assertEquals('Paraná', $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testGetStateNameException()
    {
        StateHelper::getStateName('ASC');
    }

    public function testGetStateShortName()
    {
        $result = StateHelper::getStateShortName('São Paulo');
        $this->assertEquals('SP', $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testGetStateShortNameException()
    {
        StateHelper::getStateShortName('São Paulos');
    }

    public function testGetStates()
    {
        $result = StateHelper::getStates();
        $this->assertNotNull($result);
        $this->assertArrayHasKey('PR', $result);
    }
}
