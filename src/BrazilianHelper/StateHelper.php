<?php

namespace BrazilianHelper;


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
        'RO' => 'Roraima',
        'SC' => 'Santa Catarina',
        'SP' => 'São Paulo',
        'TO' => 'Tocantins'
    );

    /**
     * Monta a estrutura para popular um select
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
     * 
     * @param string $shortName
     * @return string
     * @throws InvalidArgumentException
     */
    public static function getStateName( $shortName )
    {
        if( !array_key_exists($shortName, self::$states) ) {
            throw new \InvalidArgumentException('UF inexistente');
        }
        
        return self::$states[$shortName];
    }
    
    /**
     * Obtém a UF a partir do nome do estado
     * 
     * @param string $stateName
     * @return string
     * @throws InvalidArgumentException
     */
    public static function getStateShortName( $stateName )
    {
        $states = array_flip(self::$states);
        
        if ( !array_key_exists($stateName, $states) ) {
            throw new \InvalidArgumentException('Estado inexistente');
        }
        
        return $states[$stateName];
    }
    
    /**
     * Retorna todos os estados em formato de array
     * 
     * @return array
     */
    public static function getStates()
    {
        return self::$states;
    }
    
}
