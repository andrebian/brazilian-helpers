<?php

namespace Andrebian\BrazilianHelpers\Filters;

use Zend\Filter\FilterInterface;

/**
 * Class ApplyCnpjMaskFilter
 * @package Andrebian\BrazilianHelpers\Filters
 */
class ApplyCnpjMaskFilter implements FilterInterface
{
    /**
     * @inheritdoc
     */
    public function filter($value)
    {
        $value = preg_replace("/\D/", '', $value);
        $value = str_pad($value, '14', '0', STR_PAD_LEFT);
        $pattern = "/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/";
        $replacement = "\$1.\$2.\$3/\$4-\$5";
        $value = preg_replace($pattern, $replacement, $value);

        return $value;
    }
}
