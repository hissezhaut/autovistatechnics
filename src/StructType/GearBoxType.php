<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GearBoxType StructType
 * @subpackage Structs
 */
class GearBoxType extends AbstractStructBase
{
    /**
     * The NumberOfGear
     * @var int
     */
    public $NumberOfGear;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Common data Type for names (short and long names)
     * @var \Autovista\Technics\StructType\ETGnameType
     */
    public $Type;
    /**
     * Constructor method for GearBoxType
     * @uses GearBoxType::setNumberOfGear()
     * @uses GearBoxType::setType()
     * @param int $numberOfGear
     * @param \Autovista\Technics\StructType\ETGnameType $type
     */
    public function __construct($numberOfGear = null, \Autovista\Technics\StructType\ETGnameType $type = null)
    {
        $this
            ->setNumberOfGear($numberOfGear)
            ->setType($type);
    }
    /**
     * Get NumberOfGear value
     * @return int|null
     */
    public function getNumberOfGear()
    {
        return $this->NumberOfGear;
    }
    /**
     * Set NumberOfGear value
     * @param int $numberOfGear
     * @return \Autovista\Technics\StructType\GearBoxType
     */
    public function setNumberOfGear($numberOfGear = null)
    {
        $this->NumberOfGear = $numberOfGear;
        return $this;
    }
    /**
     * Get Type value
     * @return \Autovista\Technics\StructType\ETGnameType|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param \Autovista\Technics\StructType\ETGnameType $type
     * @return \Autovista\Technics\StructType\GearBoxType
     */
    public function setType(\Autovista\Technics\StructType\ETGnameType $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\GearBoxType
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
