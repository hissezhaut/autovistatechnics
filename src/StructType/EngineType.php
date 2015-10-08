<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EngineType StructType
 * @subpackage Structs
 */
class EngineType extends AbstractStructBase
{
    /**
     * The ValvesPerCylinder
     * Meta informations extracted from the WSDL
     * - documentation: Number of valves per cylinder.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ValvesPerCylinder;
    /**
     * The NumberOfCylinder
     * @var int
     */
    public $NumberOfCylinder;
    /**
     * The Layout
     * Meta informations extracted from the WSDL
     * - documentation: Common data Type for names (short and long names)
     * @var \Autovista\Technics\StructType\ETGnameType
     */
    public $Layout;
    /**
     * The Displacement
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Displacement;
    /**
     * The Power
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Power;
    /**
     * The Torque
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Torque;
    /**
     * The RoundedDisplacement
     * Meta informations extracted from the WSDL
     * - documentation: This is the volume of the engine rounded and converted to Litre from total displacement in ccm. This conversion is done for marketing and other purposes.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $RoundedDisplacement;
    /**
     * Constructor method for EngineType
     * @uses EngineType::setValvesPerCylinder()
     * @uses EngineType::setNumberOfCylinder()
     * @uses EngineType::setLayout()
     * @uses EngineType::setDisplacement()
     * @uses EngineType::setPower()
     * @uses EngineType::setTorque()
     * @uses EngineType::setRoundedDisplacement()
     * @param int $valvesPerCylinder
     * @param int $numberOfCylinder
     * @param \Autovista\Technics\StructType\ETGnameType $layout
     * @param \Autovista\Technics\StructType\ETGmeasurement $displacement
     * @param \Autovista\Technics\StructType\ETGmeasurement $power
     * @param \Autovista\Technics\StructType\ETGmeasurement $torque
     * @param \Autovista\Technics\StructType\ETGmeasurement $roundedDisplacement
     */
    public function __construct($valvesPerCylinder = null, $numberOfCylinder = null, \Autovista\Technics\StructType\ETGnameType $layout = null, \Autovista\Technics\StructType\ETGmeasurement $displacement = null, \Autovista\Technics\StructType\ETGmeasurement $power = null, \Autovista\Technics\StructType\ETGmeasurement $torque = null, \Autovista\Technics\StructType\ETGmeasurement $roundedDisplacement = null)
    {
        $this
            ->setValvesPerCylinder($valvesPerCylinder)
            ->setNumberOfCylinder($numberOfCylinder)
            ->setLayout($layout)
            ->setDisplacement($displacement)
            ->setPower($power)
            ->setTorque($torque)
            ->setRoundedDisplacement($roundedDisplacement);
    }
    /**
     * Get ValvesPerCylinder value
     * @return int
     */
    public function getValvesPerCylinder()
    {
        return $this->ValvesPerCylinder;
    }
    /**
     * Set ValvesPerCylinder value
     * @param int $valvesPerCylinder
     * @return \Autovista\Technics\StructType\EngineType
     */
    public function setValvesPerCylinder($valvesPerCylinder = null)
    {
        $this->ValvesPerCylinder = $valvesPerCylinder;
        return $this;
    }
    /**
     * Get NumberOfCylinder value
     * @return int|null
     */
    public function getNumberOfCylinder()
    {
        return $this->NumberOfCylinder;
    }
    /**
     * Set NumberOfCylinder value
     * @param int $numberOfCylinder
     * @return \Autovista\Technics\StructType\EngineType
     */
    public function setNumberOfCylinder($numberOfCylinder = null)
    {
        $this->NumberOfCylinder = $numberOfCylinder;
        return $this;
    }
    /**
     * Get Layout value
     * @return \Autovista\Technics\StructType\ETGnameType|null
     */
    public function getLayout()
    {
        return $this->Layout;
    }
    /**
     * Set Layout value
     * @param \Autovista\Technics\StructType\ETGnameType $layout
     * @return \Autovista\Technics\StructType\EngineType
     */
    public function setLayout(\Autovista\Technics\StructType\ETGnameType $layout = null)
    {
        $this->Layout = $layout;
        return $this;
    }
    /**
     * Get Displacement value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getDisplacement()
    {
        return $this->Displacement;
    }
    /**
     * Set Displacement value
     * @param \Autovista\Technics\StructType\ETGmeasurement $displacement
     * @return \Autovista\Technics\StructType\EngineType
     */
    public function setDisplacement(\Autovista\Technics\StructType\ETGmeasurement $displacement = null)
    {
        $this->Displacement = $displacement;
        return $this;
    }
    /**
     * Get Power value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getPower()
    {
        return $this->Power;
    }
    /**
     * Set Power value
     * @param \Autovista\Technics\StructType\ETGmeasurement $power
     * @return \Autovista\Technics\StructType\EngineType
     */
    public function setPower(\Autovista\Technics\StructType\ETGmeasurement $power = null)
    {
        $this->Power = $power;
        return $this;
    }
    /**
     * Get Torque value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getTorque()
    {
        return $this->Torque;
    }
    /**
     * Set Torque value
     * @param \Autovista\Technics\StructType\ETGmeasurement $torque
     * @return \Autovista\Technics\StructType\EngineType
     */
    public function setTorque(\Autovista\Technics\StructType\ETGmeasurement $torque = null)
    {
        $this->Torque = $torque;
        return $this;
    }
    /**
     * Get RoundedDisplacement value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getRoundedDisplacement()
    {
        return $this->RoundedDisplacement;
    }
    /**
     * Set RoundedDisplacement value
     * @param \Autovista\Technics\StructType\ETGmeasurement $roundedDisplacement
     * @return \Autovista\Technics\StructType\EngineType
     */
    public function setRoundedDisplacement(\Autovista\Technics\StructType\ETGmeasurement $roundedDisplacement = null)
    {
        $this->RoundedDisplacement = $roundedDisplacement;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\EngineType
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
