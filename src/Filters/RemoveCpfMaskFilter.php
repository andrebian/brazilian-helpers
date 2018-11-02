<?php

namespace Andrebian\BrazilianHelpers\Filters;

use Zend\Filter\FilterInterface;

/**
 * Class RemoveCpfMaskFilter
 * @package Andrebian\BrazilianHelpers\Filters
 */
class RemoveCpfMaskFilter implements FilterInterface
{
    /**
     * @inheritdoc
     */
    public function filter($value)
    {
        $value = preg_replace("/\D/", '', $value);
        return str_pad($value, 11, '0', STR_PAD_LEFT);
    }
}
