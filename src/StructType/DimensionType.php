<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DimensionType StructType
 * @subpackage Structs
 */
class DimensionType extends AbstractStructBase
{
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Length;
    /**
     * The Heigth
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Heigth;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - documentation: Width without mirrors
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Width;
    /**
     * The Wheelbase
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Wheelbase;
    /**
     * Constructor method for DimensionType
     * @uses DimensionType::setLength()
     * @uses DimensionType::setHeigth()
     * @uses DimensionType::setWidth()
     * @uses DimensionType::setWheelbase()
     * @param \Autovista\Technics\StructType\ETGmeasurement $length
     * @param \Autovista\Technics\StructType\ETGmeasurement $heigth
     * @param \Autovista\Technics\StructType\ETGmeasurement $width
     * @param \Autovista\Technics\StructType\ETGmeasurement $wheelbase
     */
    public function __construct(\Autovista\Technics\StructType\ETGmeasurement $length = null, \Autovista\Technics\StructType\ETGmeasurement $heigth = null, \Autovista\Technics\StructType\ETGmeasurement $width = null, \Autovista\Technics\StructType\ETGmeasurement $wheelbase = null)
    {
        $this
            ->setLength($length)
            ->setHeigth($heigth)
            ->setWidth($width)
            ->setWheelbase($wheelbase);
    }
    /**
     * Get Length value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param \Autovista\Technics\StructType\ETGmeasurement $length
     * @return \Autovista\Technics\StructType\DimensionType
     */
    public function setLength(\Autovista\Technics\StructType\ETGmeasurement $length = null)
    {
        $this->Length = $length;
        return $this;
    }
    /**
     * Get Heigth value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getHeigth()
    {
        return $this->Heigth;
    }
    /**
     * Set Heigth value
     * @param \Autovista\Technics\StructType\ETGmeasurement $heigth
     * @return \Autovista\Technics\StructType\DimensionType
     */
    public function setHeigth(\Autovista\Technics\StructType\ETGmeasurement $heigth = null)
    {
        $this->Heigth = $heigth;
        return $this;
    }
    /**
     * Get Width value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param \Autovista\Technics\StructType\ETGmeasurement $width
     * @return \Autovista\Technics\StructType\DimensionType
     */
    public function setWidth(\Autovista\Technics\StructType\ETGmeasurement $width = null)
    {
        $this->Width = $width;
        return $this;
    }
    /**
     * Get Wheelbase value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getWheelbase()
    {
        return $this->Wheelbase;
    }
    /**
     * Set Wheelbase value
     * @param \Autovista\Technics\StructType\ETGmeasurement $wheelbase
     * @return \Autovista\Technics\StructType\DimensionType
     */
    public function setWheelbase(\Autovista\Technics\StructType\ETGmeasurement $wheelbase = null)
    {
        $this->Wheelbase = $wheelbase;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\DimensionType
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
