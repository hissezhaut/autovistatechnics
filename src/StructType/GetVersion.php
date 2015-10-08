<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVersion StructType
 * @subpackage Structs
 */
class GetVersion extends AbstractStructBase
{
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\Technics\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * Constructor method for GetVersion
     * @uses GetVersion::setSettings()
     * @param \Autovista\Technics\StructType\ETGsettingType $settings
     */
    public function __construct(\Autovista\Technics\StructType\ETGsettingType $settings = null)
    {
        $this
            ->setSettings($settings);
    }
    /**
     * Get Settings value
     * @return \Autovista\Technics\StructType\ETGsettingType
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param \Autovista\Technics\StructType\ETGsettingType $settings
     * @return \Autovista\Technics\StructType\GetVersion
     */
    public function setSettings(\Autovista\Technics\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\GetVersion
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
