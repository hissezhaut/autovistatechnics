<?php

namespace Autovista\Technics\EnumType;

/**
 * This class stands for ETGpriceIndicatorType EnumType
 * @subpackage Enumerations
 */
class ETGpriceIndicatorType
{
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Constant for value ' '
     * @return string ' '
     */
    const VALUE__ = ' ';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_N
     * @uses self::VALUE__
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_N,
            self::VALUE__,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
