<?php

namespace Andrebian\BrazilianHelpers\Filters;

use Zend\Filter\FilterInterface;

/**
 * Class RemoveCnpjMaskFilter
 * @package Andrebian\BrazilianHelpers\Filters
 */
class RemoveCnpjMaskFilter implements FilterInterface
{
    /**
     * @inheritdoc
     */
    public function filter($value)
    {
        $value = preg_replace("/\D/", '', $value);
        return str_pad($value, '14', '0', STR_PAD_LEFT);
    }
}
