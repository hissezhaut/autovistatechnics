<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WeightType StructType
 * @subpackage Structs
 */
class WeightType extends AbstractStructBase
{
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Total;
    /**
     * The Curb
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $Curb;
    /**
     * The RoofLoad
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $RoofLoad;
    /**
     * The PayLoad
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $PayLoad;
    /**
     * The TrailerUnbrakedLoad
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $TrailerUnbrakedLoad;
    /**
     * The TrailerBrakedLoad
     * Meta informations extracted from the WSDL
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $TrailerBrakedLoad;
    /**
     * Constructor method for WeightType
     * @uses WeightType::setTotal()
     * @uses WeightType::setCurb()
     * @uses WeightType::setRoofLoad()
     * @uses WeightType::setPayLoad()
     * @uses WeightType::setTrailerUnbrakedLoad()
     * @uses WeightType::setTrailerBrakedLoad()
     * @param \Autovista\Technics\StructType\ETGmeasurement $total
     * @param \Autovista\Technics\StructType\ETGmeasurement $curb
     * @param \Autovista\Technics\StructType\ETGmeasurement $roofLoad
     * @param \Autovista\Technics\StructType\ETGmeasurement $payLoad
     * @param \Autovista\Technics\StructType\ETGmeasurement $trailerUnbrakedLoad
     * @param \Autovista\Technics\StructType\ETGmeasurement $trailerBrakedLoad
     */
    public function __construct(\Autovista\Technics\StructType\ETGmeasurement $total = null, \Autovista\Technics\StructType\ETGmeasurement $curb = null, \Autovista\Technics\StructType\ETGmeasurement $roofLoad = null, \Autovista\Technics\StructType\ETGmeasurement $payLoad = null, \Autovista\Technics\StructType\ETGmeasurement $trailerUnbrakedLoad = null, \Autovista\Technics\StructType\ETGmeasurement $trailerBrakedLoad = null)
    {
        $this
            ->setTotal($total)
            ->setCurb($curb)
            ->setRoofLoad($roofLoad)
            ->setPayLoad($payLoad)
            ->setTrailerUnbrakedLoad($trailerUnbrakedLoad)
            ->setTrailerBrakedLoad($trailerBrakedLoad);
    }
    /**
     * Get Total value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \Autovista\Technics\StructType\ETGmeasurement $total
     * @return \Autovista\Technics\StructType\WeightType
     */
    public function setTotal(\Autovista\Technics\StructType\ETGmeasurement $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get Curb value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getCurb()
    {
        return $this->Curb;
    }
    /**
     * Set Curb value
     * @param \Autovista\Technics\StructType\ETGmeasurement $curb
     * @return \Autovista\Technics\StructType\WeightType
     */
    public function setCurb(\Autovista\Technics\StructType\ETGmeasurement $curb = null)
    {
        $this->Curb = $curb;
        return $this;
    }
    /**
     * Get RoofLoad value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getRoofLoad()
    {
        return $this->RoofLoad;
    }
    /**
     * Set RoofLoad value
     * @param \Autovista\Technics\StructType\ETGmeasurement $roofLoad
     * @return \Autovista\Technics\StructType\WeightType
     */
    public function setRoofLoad(\Autovista\Technics\StructType\ETGmeasurement $roofLoad = null)
    {
        $this->RoofLoad = $roofLoad;
        return $this;
    }
    /**
     * Get PayLoad value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getPayLoad()
    {
        return $this->PayLoad;
    }
    /**
     * Set PayLoad value
     * @param \Autovista\Technics\StructType\ETGmeasurement $payLoad
     * @return \Autovista\Technics\StructType\WeightType
     */
    public function setPayLoad(\Autovista\Technics\StructType\ETGmeasurement $payLoad = null)
    {
        $this->PayLoad = $payLoad;
        return $this;
    }
    /**
     * Get TrailerUnbrakedLoad value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getTrailerUnbrakedLoad()
    {
        return $this->TrailerUnbrakedLoad;
    }
    /**
     * Set TrailerUnbrakedLoad value
     * @param \Autovista\Technics\StructType\ETGmeasurement $trailerUnbrakedLoad
     * @return \Autovista\Technics\StructType\WeightType
     */
    public function setTrailerUnbrakedLoad(\Autovista\Technics\StructType\ETGmeasurement $trailerUnbrakedLoad = null)
    {
        $this->TrailerUnbrakedLoad = $trailerUnbrakedLoad;
        return $this;
    }
    /**
     * Get TrailerBrakedLoad value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getTrailerBrakedLoad()
    {
        return $this->TrailerBrakedLoad;
    }
    /**
     * Set TrailerBrakedLoad value
     * @param \Autovista\Technics\StructType\ETGmeasurement $trailerBrakedLoad
     * @return \Autovista\Technics\StructType\WeightType
     */
    public function setTrailerBrakedLoad(\Autovista\Technics\StructType\ETGmeasurement $trailerBrakedLoad = null)
    {
        $this->TrailerBrakedLoad = $trailerBrakedLoad;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\WeightType
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
