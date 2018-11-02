<?php

namespace Test\Andrebian\BrazilianHelpers\Helpers;

use Andrebian\BrazilianHelpers\Helpers\DateHelper;
use PHPUnit\Framework\TestCase;

/**
 * Class DateHelperTest
 * @package Test\Andrebian\BrazilianHelpers\Helpers
 */
class DateHelperTest extends TestCase
{
    public function testGetDayName()
    {
        $result = DateHelper::getDayName('sun');
        $this->assertEquals('Domingo', $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testGetDayNameException()
    {
        DateHelper::getDayName('suns');
    }

    public function testGetDayShortName()
    {
        $result = DateHelper::getDayShortName('sun');
        $this->assertEquals('Dom', $result);
    }

    public function testGetDayShortNameByNumeric()
    {
        $result = DateHelper::getDayShortName(0);
        $this->assertEquals('Dom', $result);
    }
}
