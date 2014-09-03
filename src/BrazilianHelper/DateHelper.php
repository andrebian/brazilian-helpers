<?php

namespace BrazilianHelper;

class DateHelper
{
    /**
     *
     * @var array
     */
    protected static $daysOfWeekMap = array(
        'sun' => 0,
        'mon' => 1,
        'tue' => 2,
        'wed' => 3,
        'thu' => 4,
        'fri' => 5,
        'sat' => 6
    );
    
    /**
     *
     * @var array
     */
    protected static $brazilianDaysOfWeek = array(
        'sun' => array('short' => 'Dom', 'long' => 'Domingo'),
        'mon' => array('short' => 'Seg', 'long' => 'Segunda-Feira'),
        'tue' => array('short' => 'Ter', 'long' => 'Terça-Feira'),
        'wed' => array('short' => 'Qua', 'long' => 'Quarta-Feira'),
        'thu' => array('short' => 'Qui', 'long' => 'Quinta-Feira'),
        'fri' => array('short' => 'Sex', 'long' => 'Sexta-Feira'),
        'sat' => array('short' => 'Sab', 'long' => 'Sábado')
    );
    
    /**
     * Obtém o nome completo do dia da semana
     * 
     * @param mixed $day
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function getDayName( $day, $shortOrLong = 'long' ) 
    {
        $day = self::__parsedReceivedDay($day);
        
        if( array_key_exists($day, self::$brazilianDaysOfWeek) ) {
            return self::$brazilianDaysOfWeek[$day][$shortOrLong];
        }
        throw new \InvalidArgumentException('Por favor forneça um dia válido.');
    }
    
    /**
     * Obtém o nome curto do dia da semana
     * 
     * @param mixed $day
     * @return string
     */
    public static function getDayShortName( $day )
    {
        return self::getDayName($day, 'short');
    }
    
    
    /**
     * Trata se o dia recebido foi um número ou string
     * 
     * @param type $day
     */
    private static function __parsedReceivedDay($day) 
    {
        if( is_numeric($day) ) {
            $daysOfWeek = array_flip(self::$daysOfWeekMap);
            $day = $daysOfWeek[$day];
        } else {
            $day = strtolower($day);
        }
        
        return $day;
    }
    
}
