<?php

namespace BrazilianHelper;


class StateHelper
{
    /**
     * @var array
     */
    protected static $states = [
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
    ];

    /**
     * Monta a estrutura para popular um select
     * 
     * @return string
     */
    public static function getOptions()
    {
        $options = '';
        
        foreach (self::$states as $uf => $state) {
            $options .= '<option value="' . $uf . '">' . $state . '</option>';
        }
        
        return $options;
    }
    
    /**
     * 
     * @param string $uf
     * @return string
     * @throws InvalidArgumentException
     */
    public static function getStateName( $uf )
    {
        if( !array_key_exists($uf, self::$states) ) {
            throw new \InvalidArgumentException('UF inexistente');
        }
        
        return self::$states[$uf];
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
