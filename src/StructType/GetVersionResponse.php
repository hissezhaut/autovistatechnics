<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVersionResponse StructType
 * @subpackage Structs
 */
class GetVersionResponse extends AbstractStructBase
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
     * The VersionInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Technics\StructType\ETGversionInformationType
     */
    public $VersionInformation;
    /**
     * Constructor method for GetVersionResponse
     * @uses GetVersionResponse::setSettings()
     * @uses GetVersionResponse::setVersionInformation()
     * @param \Autovista\Technics\StructType\ETGsettingType $settings
     * @param \Autovista\Technics\StructType\ETGversionInformationType
     * $versionInformation
     */
    public function __construct(\Autovista\Technics\StructType\ETGsettingType $settings = null, \Autovista\Technics\StructType\ETGversionInformationType $versionInformation = null)
    {
        $this
            ->setSettings($settings)
            ->setVersionInformation($versionInformation);
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
     * @return \Autovista\Technics\StructType\GetVersionResponse
     */
    public function setSettings(\Autovista\Technics\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get VersionInformation value
     * @return \Autovista\Technics\StructType\ETGversionInformationType
     */
    public function getVersionInformation()
    {
        return $this->VersionInformation;
    }
    /**
     * Set VersionInformation value
     * @param \Autovista\Technics\StructType\ETGversionInformationType
     * $versionInformation
     * @return \Autovista\Technics\StructType\GetVersionResponse
     */
    public function setVersionInformation(\Autovista\Technics\StructType\ETGversionInformationType $versionInformation = null)
    {
        $this->VersionInformation = $versionInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\GetVersionResponse
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
