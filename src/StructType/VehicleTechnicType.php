<?php

namespace Autovista\Technics\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleTechnicType StructType
 * @subpackage Structs
 */
class VehicleTechnicType extends AbstractStructBase
{
    /**
     * The NationalVehicleCode
     * @var long
     */
    public $NationalVehicleCode;
    /**
     * The Engine
     * @var \Autovista\Technics\StructType\EngineType
     */
    public $Engine;
    /**
     * The GearBox
     * @var \Autovista\Technics\StructType\GearBoxType
     */
    public $GearBox;
    /**
     * The Fuel
     * @var \Autovista\Technics\StructType\FuelType
     */
    public $Fuel;
    /**
     * The Dimension
     * @var \Autovista\Technics\StructType\DimensionType
     */
    public $Dimension;
    /**
     * The Capacity
     * @var \Autovista\Technics\StructType\CapacityType
     */
    public $Capacity;
    /**
     * The Weight
     * @var \Autovista\Technics\StructType\WeightType
     */
    public $Weight;
    /**
     * The Performance
     * @var \Autovista\Technics\StructType\PerformanceType
     */
    public $Performance;
    /**
     * The Consumption
     * @var \Autovista\Technics\StructType\ConsumptionType
     */
    public $Consumption;
    /**
     * The Exhaust
     * @var \Autovista\Technics\StructType\ExhaustType
     */
    public $Exhaust;
    /**
     * The InsuranceGroup
     * Meta informations extracted from the WSDL
     * - documentation: It defines an insurance group of a vehicle defined by insurance association of insurers or insurance authority of a country or region
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceGroup;
    /**
     * The InsuranceGroup20
     * Meta informations extracted from the WSDL
     * - documentation: ABI insurance group 20 rating valid only in UK
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceGroup20;
    /**
     * The InsuranceGroup50
     * Meta informations extracted from the WSDL
     * - documentation: ABI insurance group 50 rating valid only in UK
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceGroup50;
    /**
     * The TaxHorsePower
     * Meta informations extracted from the WSDL
     * - documentation: Fiscal horse power
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Technics\StructType\ETGmeasurement
     */
    public $TaxHorsePower;
    /**
     * The CertificateID
     * Meta informations extracted from the WSDL
     * - documentation: Type certification number
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $CertificateID;
    /**
     * The EnergyEfficiencyClass
     * Meta informations extracted from the WSDL
     * - documentation: Most vehicles are rated in terms of a set of energy efficiency classes from A to G, A being the most energy efficient, G the least efficient. Energy efficiency classes are measured based on fuel consumption (l/100km) and CO2 (Carbon
     * dioxide) emissions in grammes per kilometre travelled. This information provides useful information to the customers as they choose between various models.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EnergyEfficiencyClass;
    /**
     * The WheelInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Technics\StructType\WheelInformationType
     */
    public $WheelInformation;
    /**
     * Constructor method for VehicleTechnicType
     * @uses VehicleTechnicType::setNationalVehicleCode()
     * @uses VehicleTechnicType::setEngine()
     * @uses VehicleTechnicType::setGearBox()
     * @uses VehicleTechnicType::setFuel()
     * @uses VehicleTechnicType::setDimension()
     * @uses VehicleTechnicType::setCapacity()
     * @uses VehicleTechnicType::setWeight()
     * @uses VehicleTechnicType::setPerformance()
     * @uses VehicleTechnicType::setConsumption()
     * @uses VehicleTechnicType::setExhaust()
     * @uses VehicleTechnicType::setInsuranceGroup()
     * @uses VehicleTechnicType::setInsuranceGroup20()
     * @uses VehicleTechnicType::setInsuranceGroup50()
     * @uses VehicleTechnicType::setTaxHorsePower()
     * @uses VehicleTechnicType::setCertificateID()
     * @uses VehicleTechnicType::setEnergyEfficiencyClass()
     * @uses VehicleTechnicType::setWheelInformation()
     * @param long $nationalVehicleCode
     * @param \Autovista\Technics\StructType\EngineType $engine
     * @param \Autovista\Technics\StructType\GearBoxType $gearBox
     * @param \Autovista\Technics\StructType\FuelType $fuel
     * @param \Autovista\Technics\StructType\DimensionType $dimension
     * @param \Autovista\Technics\StructType\CapacityType $capacity
     * @param \Autovista\Technics\StructType\WeightType $weight
     * @param \Autovista\Technics\StructType\PerformanceType $performance
     * @param \Autovista\Technics\StructType\ConsumptionType $consumption
     * @param \Autovista\Technics\StructType\ExhaustType $exhaust
     * @param string $insuranceGroup
     * @param string $insuranceGroup20
     * @param string $insuranceGroup50
     * @param \Autovista\Technics\StructType\ETGmeasurement $taxHorsePower
     * @param string $certificateID
     * @param string $energyEfficiencyClass
     * @param \Autovista\Technics\StructType\WheelInformationType $wheelInformation
     */
    public function __construct($nationalVehicleCode = null, \Autovista\Technics\StructType\EngineType $engine = null, \Autovista\Technics\StructType\GearBoxType $gearBox = null, \Autovista\Technics\StructType\FuelType $fuel = null, \Autovista\Technics\StructType\DimensionType $dimension = null, \Autovista\Technics\StructType\CapacityType $capacity = null, \Autovista\Technics\StructType\WeightType $weight = null, \Autovista\Technics\StructType\PerformanceType $performance = null, \Autovista\Technics\StructType\ConsumptionType $consumption = null, \Autovista\Technics\StructType\ExhaustType $exhaust = null, $insuranceGroup = null, $insuranceGroup20 = null, $insuranceGroup50 = null, \Autovista\Technics\StructType\ETGmeasurement $taxHorsePower = null, $certificateID = null, $energyEfficiencyClass = null, \Autovista\Technics\StructType\WheelInformationType $wheelInformation = null)
    {
        $this
            ->setNationalVehicleCode($nationalVehicleCode)
            ->setEngine($engine)
            ->setGearBox($gearBox)
            ->setFuel($fuel)
            ->setDimension($dimension)
            ->setCapacity($capacity)
            ->setWeight($weight)
            ->setPerformance($performance)
            ->setConsumption($consumption)
            ->setExhaust($exhaust)
            ->setInsuranceGroup($insuranceGroup)
            ->setInsuranceGroup20($insuranceGroup20)
            ->setInsuranceGroup50($insuranceGroup50)
            ->setTaxHorsePower($taxHorsePower)
            ->setCertificateID($certificateID)
            ->setEnergyEfficiencyClass($energyEfficiencyClass)
            ->setWheelInformation($wheelInformation);
    }
    /**
     * Get NationalVehicleCode value
     * @return long|null
     */
    public function getNationalVehicleCode()
    {
        return $this->NationalVehicleCode;
    }
    /**
     * Set NationalVehicleCode value
     * @param long $nationalVehicleCode
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setNationalVehicleCode($nationalVehicleCode = null)
    {
        $this->NationalVehicleCode = $nationalVehicleCode;
        return $this;
    }
    /**
     * Get Engine value
     * @return \Autovista\Technics\StructType\EngineType|null
     */
    public function getEngine()
    {
        return $this->Engine;
    }
    /**
     * Set Engine value
     * @param \Autovista\Technics\StructType\EngineType $engine
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setEngine(\Autovista\Technics\StructType\EngineType $engine = null)
    {
        $this->Engine = $engine;
        return $this;
    }
    /**
     * Get GearBox value
     * @return \Autovista\Technics\StructType\GearBoxType|null
     */
    public function getGearBox()
    {
        return $this->GearBox;
    }
    /**
     * Set GearBox value
     * @param \Autovista\Technics\StructType\GearBoxType $gearBox
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setGearBox(\Autovista\Technics\StructType\GearBoxType $gearBox = null)
    {
        $this->GearBox = $gearBox;
        return $this;
    }
    /**
     * Get Fuel value
     * @return \Autovista\Technics\StructType\FuelType|null
     */
    public function getFuel()
    {
        return $this->Fuel;
    }
    /**
     * Set Fuel value
     * @param \Autovista\Technics\StructType\FuelType $fuel
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setFuel(\Autovista\Technics\StructType\FuelType $fuel = null)
    {
        $this->Fuel = $fuel;
        return $this;
    }
    /**
     * Get Dimension value
     * @return \Autovista\Technics\StructType\DimensionType|null
     */
    public function getDimension()
    {
        return $this->Dimension;
    }
    /**
     * Set Dimension value
     * @param \Autovista\Technics\StructType\DimensionType $dimension
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setDimension(\Autovista\Technics\StructType\DimensionType $dimension = null)
    {
        $this->Dimension = $dimension;
        return $this;
    }
    /**
     * Get Capacity value
     * @return \Autovista\Technics\StructType\CapacityType|null
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }
    /**
     * Set Capacity value
     * @param \Autovista\Technics\StructType\CapacityType $capacity
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setCapacity(\Autovista\Technics\StructType\CapacityType $capacity = null)
    {
        $this->Capacity = $capacity;
        return $this;
    }
    /**
     * Get Weight value
     * @return \Autovista\Technics\StructType\WeightType|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Autovista\Technics\StructType\WeightType $weight
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setWeight(\Autovista\Technics\StructType\WeightType $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Performance value
     * @return \Autovista\Technics\StructType\PerformanceType|null
     */
    public function getPerformance()
    {
        return $this->Performance;
    }
    /**
     * Set Performance value
     * @param \Autovista\Technics\StructType\PerformanceType $performance
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setPerformance(\Autovista\Technics\StructType\PerformanceType $performance = null)
    {
        $this->Performance = $performance;
        return $this;
    }
    /**
     * Get Consumption value
     * @return \Autovista\Technics\StructType\ConsumptionType|null
     */
    public function getConsumption()
    {
        return $this->Consumption;
    }
    /**
     * Set Consumption value
     * @param \Autovista\Technics\StructType\ConsumptionType $consumption
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setConsumption(\Autovista\Technics\StructType\ConsumptionType $consumption = null)
    {
        $this->Consumption = $consumption;
        return $this;
    }
    /**
     * Get Exhaust value
     * @return \Autovista\Technics\StructType\ExhaustType|null
     */
    public function getExhaust()
    {
        return $this->Exhaust;
    }
    /**
     * Set Exhaust value
     * @param \Autovista\Technics\StructType\ExhaustType $exhaust
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setExhaust(\Autovista\Technics\StructType\ExhaustType $exhaust = null)
    {
        $this->Exhaust = $exhaust;
        return $this;
    }
    /**
     * Get InsuranceGroup value
     * @return string|null
     */
    public function getInsuranceGroup()
    {
        return $this->InsuranceGroup;
    }
    /**
     * Set InsuranceGroup value
     * @param string $insuranceGroup
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setInsuranceGroup($insuranceGroup = null)
    {
        $this->InsuranceGroup = $insuranceGroup;
        return $this;
    }
    /**
     * Get InsuranceGroup20 value
     * @return string|null
     */
    public function getInsuranceGroup20()
    {
        return $this->InsuranceGroup20;
    }
    /**
     * Set InsuranceGroup20 value
     * @param string $insuranceGroup20
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setInsuranceGroup20($insuranceGroup20 = null)
    {
        $this->InsuranceGroup20 = $insuranceGroup20;
        return $this;
    }
    /**
     * Get InsuranceGroup50 value
     * @return string|null
     */
    public function getInsuranceGroup50()
    {
        return $this->InsuranceGroup50;
    }
    /**
     * Set InsuranceGroup50 value
     * @param string $insuranceGroup50
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setInsuranceGroup50($insuranceGroup50 = null)
    {
        $this->InsuranceGroup50 = $insuranceGroup50;
        return $this;
    }
    /**
     * Get TaxHorsePower value
     * @return \Autovista\Technics\StructType\ETGmeasurement|null
     */
    public function getTaxHorsePower()
    {
        return $this->TaxHorsePower;
    }
    /**
     * Set TaxHorsePower value
     * @param \Autovista\Technics\StructType\ETGmeasurement $taxHorsePower
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setTaxHorsePower(\Autovista\Technics\StructType\ETGmeasurement $taxHorsePower = null)
    {
        $this->TaxHorsePower = $taxHorsePower;
        return $this;
    }
    /**
     * Get CertificateID value
     * @return string|null
     */
    public function getCertificateID()
    {
        return $this->CertificateID;
    }
    /**
     * Set CertificateID value
     * @param string $certificateID
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setCertificateID($certificateID = null)
    {
        $this->CertificateID = $certificateID;
        return $this;
    }
    /**
     * Get EnergyEfficiencyClass value
     * @return string|null
     */
    public function getEnergyEfficiencyClass()
    {
        return $this->EnergyEfficiencyClass;
    }
    /**
     * Set EnergyEfficiencyClass value
     * @param string $energyEfficiencyClass
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setEnergyEfficiencyClass($energyEfficiencyClass = null)
    {
        $this->EnergyEfficiencyClass = $energyEfficiencyClass;
        return $this;
    }
    /**
     * Get WheelInformation value
     * @return \Autovista\Technics\StructType\WheelInformationType|null
     */
    public function getWheelInformation()
    {
        return $this->WheelInformation;
    }
    /**
     * Set WheelInformation value
     * @param \Autovista\Technics\StructType\WheelInformationType $wheelInformation
     * @return \Autovista\Technics\StructType\VehicleTechnicType
     */
    public function setWheelInformation(\Autovista\Technics\StructType\WheelInformationType $wheelInformation = null)
    {
        $this->WheelInformation = $wheelInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Technics\StructType\VehicleTechnicType
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
