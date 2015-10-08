<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTechnicalSpecificationResponse StructType
 * @subpackage Structs
 */
class GetTechnicalSpecificationResponse extends AbstractStructBase
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
     * The VehicleTechnic
     * @var \Autovista\Technics\StructType\VehicleTechnicType
     */
    public $VehicleTechnic;
    /**
     * Constructor method for GetTechnicalSpecificationResponse
     * @uses GetTechnicalSpecificationResponse::setSettings()
     * @uses GetTechnicalSpecificationResponse::setVehicleTechnic()
     * @param \Autovista\Technics\StructType\ETGsettingType $settings
     * @param \Autovista\Technics\StructType\VehicleTechnicType $vehicleTechnic
     */
    public function __construct(\Autovista\Technics\StructType\ETGsettingType $settings = null, \Autovista\Technics\StructType\VehicleTechnicType $vehicleTechnic = null)
    {
        $this
            ->setSettings($settings)
            ->setVehicleTechnic($vehicleTechnic);
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
     * @return \Autovista\Technics\StructType\GetTechnicalSpecificationResponse
     */
    public function setSettings(\Autovista\Technics\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get VehicleTechnic value
     * @return \Autovista\Technics\StructType\VehicleTechnicType|null
     */
    public function getVehicleTechnic()
    {
        return $this->VehicleTechnic;
    }
    /**
     * Set VehicleTechnic value
     * @param \Autovista\Technics\StructType\VehicleTechnicType $vehicleTechnic
     * @return \Autovista\Technics\StructType\GetTechnicalSpecificationResponse
     */
    public function setVehicleTechnic(\Autovista\Technics\StructType\VehicleTechnicType $vehicleTechnic = null)
    {
        $this->VehicleTechnic = $vehicleTechnic;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\GetTechnicalSpecificationResponse
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
