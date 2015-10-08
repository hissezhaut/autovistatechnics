<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WheelInformationType StructType
 * @subpackage Structs
 */
class WheelInformationType extends AbstractStructBase
{
    /**
     * The FrontTyreNotation
     * Meta informations extracted from the WSDL
     * - documentation: This is symbolic information (normally printed on each tyres) that represents various parameters (section width, aspect ratio, rim diameter, load index and speed index.)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FrontTyreNotation;
    /**
     * The RearTyreNotation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RearTyreNotation;
    /**
     * Constructor method for WheelInformationType
     * @uses WheelInformationType::setFrontTyreNotation()
     * @uses WheelInformationType::setRearTyreNotation()
     * @param string $frontTyreNotation
     * @param string $rearTyreNotation
     */
    public function __construct($frontTyreNotation = null, $rearTyreNotation = null)
    {
        $this
            ->setFrontTyreNotation($frontTyreNotation)
            ->setRearTyreNotation($rearTyreNotation);
    }
    /**
     * Get FrontTyreNotation value
     * @return string|null
     */
    public function getFrontTyreNotation()
    {
        return $this->FrontTyreNotation;
    }
    /**
     * Set FrontTyreNotation value
     * @param string $frontTyreNotation
     * @return \Autovista\Technics\StructType\WheelInformationType
     */
    public function setFrontTyreNotation($frontTyreNotation = null)
    {
        $this->FrontTyreNotation = $frontTyreNotation;
        return $this;
    }
    /**
     * Get RearTyreNotation value
     * @return string|null
     */
    public function getRearTyreNotation()
    {
        return $this->RearTyreNotation;
    }
    /**
     * Set RearTyreNotation value
     * @param string $rearTyreNotation
     * @return \Autovista\Technics\StructType\WheelInformationType
     */
    public function setRearTyreNotation($rearTyreNotation = null)
    {
        $this->RearTyreNotation = $rearTyreNotation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\WheelInformationType
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
