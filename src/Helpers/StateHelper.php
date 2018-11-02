<?php

namespace Andrebian\BrazilianHelpers\Helpers;

use InvalidArgumentException;

/**
 * Class StateHelper
 * @package Andrebian\BrazilianHelper\Helper
 */
class StateHelper
{
    /**
     * @var array
     */
    protected static $states = array(
        'AC' => 'Acre',
        'AL' => 'Alagoas',
        'AP' => 'Amapá',
        'AM' => 'Amazonas',
        'BA' => 'Bahia',
        'CE' => 'Ceará',
        'DF' => 'Distrito Federal',
        'ES' => 'Espírito Santo',
        'GO' => 'Goiás',
        'MA' => 'Maranhão',
        'MT' => 'Mato Grosso',
        'MS' => 'Mato Grosso do Sul',
        'MG' => 'Minas Gerais',
        'PA' => 'Pará',
        'PB' => 'Paraíba',
        'PR' => 'Paraná',
        'PE' => 'Pernambuco',
        'PI' => 'Piauí',
        'RJ' => 'Rio de Janeiro',
        'RN' => 'Rio Grande do Norte',
        'RS' => 'Rio Grande do Sul',
        'RO' => 'Rondônia',
        'RR' => 'Roraima',
        'SE' => 'Sergipe',
        'SC' => 'Santa Catarina',
        'SP' => 'São Paulo',
        'TO' => 'Tocantins'
    );

    /**
     * Populates a select element
     *
     * @return string
     */
    public static function getHtmlForSelectElement()
    {
        $options = '';

        foreach (self::$states as $shortName => $name) {
            $options .= '<option value="' . $shortName . '">' . $name . '</option>';
        }

        return $options;
    }

    /**
     * @param $shortName
     * @return mixed
     */
    public static function getStateName($shortName)
    {
        if (! array_key_exists($shortName, self::$states)) {
            throw new InvalidArgumentException('UF inexistente');
        }

        return self::$states[$shortName];
    }

    /**
     * @param $stateName
     * @return mixed
     */
    public static function getStateShortName($stateName)
    {
        $states = array_flip(self::$states);

        if (! array_key_exists($stateName, $states)) {
            throw new InvalidArgumentException('Estado inexistente');
        }

        return $states[$stateName];
    }

    /**
     * @return array
     */
    public static function getStates()
    {
        return self::$states;
    }
}
