<?php

namespace Autovista\Technics;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ETGnameType' => 'Autovista\Technics\StructType\ETGnameType',
            'ETGmeasurement' => 'Autovista\Technics\StructType\ETGmeasurement',
            'ETGsettingType' => 'Autovista\Technics\StructType\ETGsettingType',
            'LoginDataType' => 'Autovista\Technics\StructType\LoginDataType',
            'OriginatorType' => 'Autovista\Technics\StructType\OriginatorType',
            'FailureType' => 'Autovista\Technics\StructType\FailureType',
            'SuccessType' => 'Autovista\Technics\StructType\SuccessType',
            'ResponseType' => 'Autovista\Technics\StructType\ResponseType',
            'StatisticsType' => 'Autovista\Technics\StructType\StatisticsType',
            'ETGStatus' => 'Autovista\Technics\StructType\ETGStatus',
            'ETGHeaderType' => 'Autovista\Technics\StructType\ETGHeaderType',
            'EngineType' => 'Autovista\Technics\StructType\EngineType',
            'FuelType' => 'Autovista\Technics\StructType\FuelType',
            'GearBoxType' => 'Autovista\Technics\StructType\GearBoxType',
            'DimensionType' => 'Autovista\Technics\StructType\DimensionType',
            'CapacityType' => 'Autovista\Technics\StructType\CapacityType',
            'WeightType' => 'Autovista\Technics\StructType\WeightType',
            'PerformanceType' => 'Autovista\Technics\StructType\PerformanceType',
            'ConsumptionType' => 'Autovista\Technics\StructType\ConsumptionType',
            'ExhaustType' => 'Autovista\Technics\StructType\ExhaustType',
            'WheelInformationType' => 'Autovista\Technics\StructType\WheelInformationType',
            'VehicleTechnicType' => 'Autovista\Technics\StructType\VehicleTechnicType',
            'VehicleType' => 'Autovista\Technics\StructType\VehicleType',
            'ETGdateType' => 'Autovista\Technics\StructType\ETGdateType',
            'ETGversionInformationType' => 'Autovista\Technics\StructType\ETGversionInformationType',
            'GetVersion' => 'Autovista\Technics\StructType\GetVersion',
            'GetVersionResponse' => 'Autovista\Technics\StructType\GetVersionResponse',
            'GetTechnicalSpecification' => 'Autovista\Technics\StructType\GetTechnicalSpecification',
            'GetTechnicalSpecificationResponse' => 'Autovista\Technics\StructType\GetTechnicalSpecificationResponse',
        );
    }
}
