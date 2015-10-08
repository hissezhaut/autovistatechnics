<?php

namespace Autovista\Technics\EnumType;

/**
 * This class stands for SIunitType EnumType
 * @subpackage Enumerations
 */
class SIunitType
{
    /**
     * Constant for value 'm'
     * @return string 'm'
     */
    const VALUE_M = 'm';
    /**
     * Constant for value 'mm'
     * @return string 'mm'
     */
    const VALUE_MM = 'mm';
    /**
     * Constant for value 'kg'
     * @return string 'kg'
     */
    const VALUE_KG = 'kg';
    /**
     * Constant for value 'ccm'
     * @return string 'ccm'
     */
    const VALUE_CCM = 'ccm';
    /**
     * Constant for value 'HP'
     * @return string 'HP'
     */
    const VALUE_HP = 'HP';
    /**
     * Constant for value 'KW'
     * @return string 'KW'
     */
    const VALUE_KW = 'KW';
    /**
     * Constant for value 'g'
     * @return string 'g'
     */
    const VALUE_G = 'g';
    /**
     * Constant for value 's'
     * @return string 's'
     */
    const VALUE_S = 's';
    /**
     * Constant for value 'degree'
     * @return string 'degree'
     */
    const VALUE_DEGREE = 'degree';
    /**
     * Constant for value 'celsius'
     * @return string 'celsius'
     */
    const VALUE_CELSIUS = 'celsius';
    /**
     * Constant for value 'l'
     * @return string 'l'
     */
    const VALUE_L = 'l';
    /**
     * Constant for value 'm3per100km'
     * @return string 'm3per100km'
     */
    const VALUE_M3PER100KM = 'm3per100km';
    /**
     * Constant for value 'Nm'
     * @return string 'Nm'
     */
    const VALUE_NM = 'Nm';
    /**
     * Constant for value 'rpm'
     * @return string 'rpm'
     */
    const VALUE_RPM = 'rpm';
    /**
     * Constant for value 'm3'
     * @return string 'm3'
     */
    const VALUE_M3 = 'm3';
    /**
     * Constant for value 'kmperhour'
     * @return string 'kmperhour'
     */
    const VALUE_KMPERHOUR = 'kmperhour';
    /**
     * Constant for value 'gperkm'
     * @return string 'gperkm'
     */
    const VALUE_GPERKM = 'gperkm';
    /**
     * Constant for value 'mph'
     * @return string 'mph'
     */
    const VALUE_MPH = 'mph';
    /**
     * Constant for value 'L'
     * @return string 'L'
     */
    const VALUE_L_1 = 'L';
    /**
     * Constant for value 'gper100mile'
     * @return string 'gper100mile'
     */
    const VALUE_GPER100MILE = 'gper100mile';
    /**
     * Constant for value 'mpg'
     * @return string 'mpg'
     */
    const VALUE_MPG = 'mpg';
    /**
     * Constant for value 'lper100km'
     * @return string 'lper100km'
     */
    const VALUE_LPER100KM = 'lper100km';
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
     * @uses self::VALUE_M
     * @uses self::VALUE_MM
     * @uses self::VALUE_KG
     * @uses self::VALUE_CCM
     * @uses self::VALUE_HP
     * @uses self::VALUE_KW
     * @uses self::VALUE_G
     * @uses self::VALUE_S
     * @uses self::VALUE_DEGREE
     * @uses self::VALUE_CELSIUS
     * @uses self::VALUE_L
     * @uses self::VALUE_M3PER100KM
     * @uses self::VALUE_NM
     * @uses self::VALUE_RPM
     * @uses self::VALUE_M3
     * @uses self::VALUE_KMPERHOUR
     * @uses self::VALUE_GPERKM
     * @uses self::VALUE_MPH
     * @uses self::VALUE_L_1
     * @uses self::VALUE_GPER100MILE
     * @uses self::VALUE_MPG
     * @uses self::VALUE_LPER100KM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_M,
            self::VALUE_MM,
            self::VALUE_KG,
            self::VALUE_CCM,
            self::VALUE_HP,
            self::VALUE_KW,
            self::VALUE_G,
            self::VALUE_S,
            self::VALUE_DEGREE,
            self::VALUE_CELSIUS,
            self::VALUE_L,
            self::VALUE_M3PER100KM,
            self::VALUE_NM,
            self::VALUE_RPM,
            self::VALUE_M3,
            self::VALUE_KMPERHOUR,
            self::VALUE_GPERKM,
            self::VALUE_MPH,
            self::VALUE_L_1,
            self::VALUE_GPER100MILE,
            self::VALUE_MPG,
            self::VALUE_LPER100KM,
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
