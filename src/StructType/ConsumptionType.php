<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsumptionType StructType
 * @subpackage Structs
 */
class ConsumptionType extends AbstractStructBase
{
    /**
     * The Urban
     * Meta informations extracted from the WSDL
     * - documentation: This element may occur in instance document more than once provided that the unit of measurement is different in each occurance of this element.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Urban;
    /**
     * The OverLand
     * Meta informations extracted from the WSDL
     * - documentation: This element may occur in instance document more than once provided that the unit of measurement is different in each occurance of this element.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $OverLand;
    /**
     * The Mixed
     * Meta informations extracted from the WSDL
     * - documentation: This element may occur in instance document more than once provided that the unit of measurement is different in each occurance of this element.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Mixed;
    /**
     * Constructor method for ConsumptionType
     * @uses ConsumptionType::setUrban()
     * @uses ConsumptionType::setOverLand()
     * @uses ConsumptionType::setMixed()
     * @param \Autovista\Technics\StructType\ETGmeasurement $urban
     * @param \Autovista\Technics\StructType\ETGmeasurement $overLand
     * @param \Autovista\Technics\StructType\ETGmeasurement $mixed
     */
    public function __construct(\Autovista\Technics\StructType\ETGmeasurement $urban = null, \Autovista\Technics\StructType\ETGmeasurement $overLand = null, \Autovista\Technics\StructType\ETGmeasurement $mixed = null)
    {
        $this
            ->setUrban($urban)
            ->setOverLand($overLand)
            ->setMixed($mixed);
    }
    /**
     * Get Urban value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getUrban()
    {
        return $this->Urban;
    }
    /**
     * Set Urban value
     * @param \Autovista\Technics\StructType\ETGmeasurement $urban
     * @return \Autovista\Technics\StructType\ConsumptionType
     */
    public function setUrban(\Autovista\Technics\StructType\ETGmeasurement $urban = null)
    {
        $this->Urban = $urban;
        return $this;
    }
    /**
     * Get OverLand value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getOverLand()
    {
        return $this->OverLand;
    }
    /**
     * Set OverLand value
     * @param \Autovista\Technics\StructType\ETGmeasurement $overLand
     * @return \Autovista\Technics\StructType\ConsumptionType
     */
    public function setOverLand(\Autovista\Technics\StructType\ETGmeasurement $overLand = null)
    {
        $this->OverLand = $overLand;
        return $this;
    }
    /**
     * Get Mixed value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getMixed()
    {
        return $this->Mixed;
    }
    /**
     * Set Mixed value
     * @param \Autovista\Technics\StructType\ETGmeasurement $mixed
     * @return \Autovista\Technics\StructType\ConsumptionType
     */
    public function setMixed(\Autovista\Technics\StructType\ETGmeasurement $mixed = null)
    {
        $this->Mixed = $mixed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\ConsumptionType
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
