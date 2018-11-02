<?php

namespace Andrebian\BrazilianHelpers\Filters;

use Zend\Filter\FilterInterface;

/**
 * Class ApplyCpfMaskFilter
 * @package Andrebian\BrazilianHelpers\Filters
 */
class ApplyCpfMaskFilter implements FilterInterface
{
    /**
     * @inheritdoc
     */
    public function filter($value)
    {
        $value = preg_replace("/\D/", '', $value);
        $value = str_pad($value, 11, '0', STR_PAD_LEFT);

        $pattern = "/(\d{3})(\d{3})(\d{3})(\d{2})/";
        $replacement = "\$1.\$2.\$3-\$4";

        return preg_replace($pattern, $replacement, $value);
    }
}
