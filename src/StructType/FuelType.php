<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FuelType StructType
 * @subpackage Structs
 */
class FuelType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Common data Type for names (short and long names)
     * @var \Autovista\Technics\StructType\ETGnameType
     */
    public $Type;
    /**
     * Constructor method for FuelType
     * @uses FuelType::setType()
     * @param \Autovista\Technics\StructType\ETGnameType $type
     */
    public function __construct(\Autovista\Technics\StructType\ETGnameType $type = null)
    {
        $this
            ->setType($type);
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
     * @return \Autovista\Technics\StructType\FuelType
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
     * @return \Autovista\Technics\StructType\FuelType
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
