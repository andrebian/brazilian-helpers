<?php

namespace Test\Andrebian\BrazilianHelpers\Filters;

use Andrebian\BrazilianHelpers\Filters\RemoveCpfMaskFilter;
use PHPUnit\Framework\TestCase;

/**
 * Class ApplyCpfMaskFilterTest
 * @package Test\Andrebian\BrazilianHelpers\Filters
 */
class RemoveCpfMaskFilterTest extends TestCase
{

    public function getData()
    {
        // autogenerated CPF using this tool: https://www.4devs.com.br/gerador_de_cpf
        return array(
            array('91701648008', '917.016.480-08'),
            array('63237132098', '632.371.320-98'),
            array('60594962021', '605.949.620-21'),
            array('30487389085', '304.873.890-85'),
        );
    }

    /**
     * @param $expected
     * @param $target
     * @dataProvider getData
     */
    public function testFilter($expected, $target)
    {
        $filter = new RemoveCpfMaskFilter();
        $result = $filter->filter($target);

        $this->assertEquals($expected, $result);
    }
}
