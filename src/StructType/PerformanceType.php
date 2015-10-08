<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformanceType StructType
 * @subpackage Structs
 */
class PerformanceType extends AbstractStructBase
{
    /**
     * The TopSpeed
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $TopSpeed;
    /**
     * The AccelerationTime
     * Meta informations extracted from the WSDL
     * - documentation: The time it takes to accelerate from 0 to 100 kmphour or 0 to 60 mph (In the U.S and UK). It is used as performance measurement metric for automotive accerleration ( 0 to 100 kmphour or 0 to 60 mph). The unit is in second.
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $AccelerationTime;
    /**
     * Constructor method for PerformanceType
     * @uses PerformanceType::setTopSpeed()
     * @uses PerformanceType::setAccelerationTime()
     * @param \Autovista\Technics\StructType\ETGmeasurement $topSpeed
     * @param \Autovista\Technics\StructType\ETGmeasurement $accelerationTime
     */
    public function __construct(\Autovista\Technics\StructType\ETGmeasurement $topSpeed = null, \Autovista\Technics\StructType\ETGmeasurement $accelerationTime = null)
    {
        $this
            ->setTopSpeed($topSpeed)
            ->setAccelerationTime($accelerationTime);
    }
    /**
     * Get TopSpeed value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getTopSpeed()
    {
        return $this->TopSpeed;
    }
    /**
     * Set TopSpeed value
     * @param \Autovista\Technics\StructType\ETGmeasurement $topSpeed
     * @return \Autovista\Technics\StructType\PerformanceType
     */
    public function setTopSpeed(\Autovista\Technics\StructType\ETGmeasurement $topSpeed = null)
    {
        $this->TopSpeed = $topSpeed;
        return $this;
    }
    /**
     * Get AccelerationTime value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getAccelerationTime()
    {
        return $this->AccelerationTime;
    }
    /**
     * Set AccelerationTime value
     * @param \Autovista\Technics\StructType\ETGmeasurement $accelerationTime
     * @return \Autovista\Technics\StructType\PerformanceType
     */
    public function setAccelerationTime(\Autovista\Technics\StructType\ETGmeasurement $accelerationTime = null)
    {
        $this->AccelerationTime = $accelerationTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\PerformanceType
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
