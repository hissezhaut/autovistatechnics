<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExhaustType StructType
 * @subpackage Structs
 */
class ExhaustType extends AbstractStructBase
{
    /**
     * The CO2emission
     * Meta informations extracted from the WSDL
     * - documentation: g/km
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $CO2emission;
    /**
     * The TreatmentSystem
     * Meta informations extracted from the WSDL
     * - documentation: Common data Type for names (short and long names)
     * @var \Autovista\Technics\StructType\ETGnameType
     */
    public $TreatmentSystem;
    /**
     * Constructor method for ExhaustType
     * @uses ExhaustType::setCO2emission()
     * @uses ExhaustType::setTreatmentSystem()
     * @param \Autovista\Technics\StructType\ETGmeasurement $cO2emission
     * @param \Autovista\Technics\StructType\ETGnameType $treatmentSystem
     */
    public function __construct(\Autovista\Technics\StructType\ETGmeasurement $cO2emission = null, \Autovista\Technics\StructType\ETGnameType $treatmentSystem = null)
    {
        $this
            ->setCO2emission($cO2emission)
            ->setTreatmentSystem($treatmentSystem);
    }
    /**
     * Get CO2emission value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getCO2emission()
    {
        return $this->CO2emission;
    }
    /**
     * Set CO2emission value
     * @param \Autovista\Technics\StructType\ETGmeasurement $cO2emission
     * @return \Autovista\Technics\StructType\ExhaustType
     */
    public function setCO2emission(\Autovista\Technics\StructType\ETGmeasurement $cO2emission = null)
    {
        $this->CO2emission = $cO2emission;
        return $this;
    }
    /**
     * Get TreatmentSystem value
     * @return \Autovista\Technics\StructType\ETGnameType|null
     */
    public function getTreatmentSystem()
    {
        return $this->TreatmentSystem;
    }
    /**
     * Set TreatmentSystem value
     * @param \Autovista\Technics\StructType\ETGnameType $treatmentSystem
     * @return \Autovista\Technics\StructType\ExhaustType
     */
    public function setTreatmentSystem(\Autovista\Technics\StructType\ETGnameType $treatmentSystem = null)
    {
        $this->TreatmentSystem = $treatmentSystem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\ExhaustType
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
