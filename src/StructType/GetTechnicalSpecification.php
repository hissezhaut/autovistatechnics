<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTechnicalSpecification StructType
 * @subpackage Structs
 */
class GetTechnicalSpecification extends AbstractStructBase
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
     * The Vehicle
     * @var \Autovista\Technics\StructType\VehicleType
     */
    public $Vehicle;
    /**
     * Constructor method for GetTechnicalSpecification
     * @uses GetTechnicalSpecification::setSettings()
     * @uses GetTechnicalSpecification::setVehicle()
     * @param \Autovista\Technics\StructType\ETGsettingType $settings
     * @param \Autovista\Technics\StructType\VehicleType $vehicle
     */
    public function __construct(\Autovista\Technics\StructType\ETGsettingType $settings = null, \Autovista\Technics\StructType\VehicleType $vehicle = null)
    {
        $this
            ->setSettings($settings)
            ->setVehicle($vehicle);
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
     * @return \Autovista\Technics\StructType\GetTechnicalSpecification
     */
    public function setSettings(\Autovista\Technics\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return \Autovista\Technics\StructType\VehicleType|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Autovista\Technics\StructType\VehicleType $vehicle
     * @return \Autovista\Technics\StructType\GetTechnicalSpecification
     */
    public function setVehicle(\Autovista\Technics\StructType\VehicleType $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\GetTechnicalSpecification
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
