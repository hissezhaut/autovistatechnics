<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CapacityType StructType
 * @subpackage Structs
 */
class CapacityType extends AbstractStructBase
{
    /**
     * The MinimumTrunkVolume
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $MinimumTrunkVolume;
    /**
     * The MaximumTrunkVolume
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $MaximumTrunkVolume;
    /**
     * The NumberOfSeat
     * @var int
     */
    public $NumberOfSeat;
    /**
     * The FuelTank
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $FuelTank;
    /**
     * Constructor method for CapacityType
     * @uses CapacityType::setMinimumTrunkVolume()
     * @uses CapacityType::setMaximumTrunkVolume()
     * @uses CapacityType::setNumberOfSeat()
     * @uses CapacityType::setFuelTank()
     * @param \Autovista\Technics\StructType\ETGmeasurement $minimumTrunkVolume
     * @param \Autovista\Technics\StructType\ETGmeasurement $maximumTrunkVolume
     * @param int $numberOfSeat
     * @param \Autovista\Technics\StructType\ETGmeasurement $fuelTank
     */
    public function __construct(\Autovista\Technics\StructType\ETGmeasurement $minimumTrunkVolume = null, \Autovista\Technics\StructType\ETGmeasurement $maximumTrunkVolume = null, $numberOfSeat = null, \Autovista\Technics\StructType\ETGmeasurement $fuelTank = null)
    {
        $this
            ->setMinimumTrunkVolume($minimumTrunkVolume)
            ->setMaximumTrunkVolume($maximumTrunkVolume)
            ->setNumberOfSeat($numberOfSeat)
            ->setFuelTank($fuelTank);
    }
    /**
     * Get MinimumTrunkVolume value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getMinimumTrunkVolume()
    {
        return $this->MinimumTrunkVolume;
    }
    /**
     * Set MinimumTrunkVolume value
     * @param \Autovista\Technics\StructType\ETGmeasurement $minimumTrunkVolume
     * @return \Autovista\Technics\StructType\CapacityType
     */
    public function setMinimumTrunkVolume(\Autovista\Technics\StructType\ETGmeasurement $minimumTrunkVolume = null)
    {
        $this->MinimumTrunkVolume = $minimumTrunkVolume;
        return $this;
    }
    /**
     * Get MaximumTrunkVolume value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getMaximumTrunkVolume()
    {
        return $this->MaximumTrunkVolume;
    }
    /**
     * Set MaximumTrunkVolume value
     * @param \Autovista\Technics\StructType\ETGmeasurement $maximumTrunkVolume
     * @return \Autovista\Technics\StructType\CapacityType
     */
    public function setMaximumTrunkVolume(\Autovista\Technics\StructType\ETGmeasurement $maximumTrunkVolume = null)
    {
        $this->MaximumTrunkVolume = $maximumTrunkVolume;
        return $this;
    }
    /**
     * Get NumberOfSeat value
     * @return int|null
     */
    public function getNumberOfSeat()
    {
        return $this->NumberOfSeat;
    }
    /**
     * Set NumberOfSeat value
     * @param int $numberOfSeat
     * @return \Autovista\Technics\StructType\CapacityType
     */
    public function setNumberOfSeat($numberOfSeat = null)
    {
        $this->NumberOfSeat = $numberOfSeat;
        return $this;
    }
    /**
     * Get FuelTank value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getFuelTank()
    {
        return $this->FuelTank;
    }
    /**
     * Set FuelTank value
     * @param \Autovista\Technics\StructType\ETGmeasurement $fuelTank
     * @return \Autovista\Technics\StructType\CapacityType
     */
    public function setFuelTank(\Autovista\Technics\StructType\ETGmeasurement $fuelTank = null)
    {
        $this->FuelTank = $fuelTank;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\CapacityType
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
