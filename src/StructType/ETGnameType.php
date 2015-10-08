<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGnameType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Common data Type for names (short and long names)
 * @subpackage Structs
 */
class ETGnameType extends AbstractStructBase
{
    /**
     * The Name
     * @var string
     */
    public $Name;
    /**
     * The NameEx
     * @var string
     */
    public $NameEx;
    /**
     * Constructor method for ETGnameType
     * @uses ETGnameType::setName()
     * @uses ETGnameType::setNameEx()
     * @param string $name
     * @param string $nameEx
     */
    public function __construct($name = null, $nameEx = null)
    {
        $this
            ->setName($name)
            ->setNameEx($nameEx);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Autovista\Technics\StructType\ETGnameType
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NameEx value
     * @return string|null
     */
    public function getNameEx()
    {
        return $this->NameEx;
    }
    /**
     * Set NameEx value
     * @param string $nameEx
     * @return \Autovista\Technics\StructType\ETGnameType
     */
    public function setNameEx($nameEx = null)
    {
        $this->NameEx = $nameEx;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\ETGnameType
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
