<?php

namespace Autovista\Technics\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the ETGHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Autovista\Technics\StructType\ETGHeaderType $eTGHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderETGHeader(\Autovista\Technics\StructType\ETGHeaderType $eTGHeader, $nameSpace = 'urn:com:eurotaxglass:tech', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ETGHeader', $eTGHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetTechnicalSpecification
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : urn:com:eurotaxglass:tech
     * - SOAPHeaderTypes : \Autovista\Technics\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Technics\StructType\GetTechnicalSpecification $inputmsg
     * @return \Autovista\Technics\StructType\GetTechnicalSpecificationResponse|bool
     */
    public function GetTechnicalSpecification(\Autovista\Technics\StructType\GetTechnicalSpecification $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetTechnicalSpecification($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVersion
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : urn:com:eurotaxglass:tech
     * - SOAPHeaderTypes : \Autovista\Technics\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Technics\StructType\GetVersion $inputmsg
     * @return \Autovista\Technics\StructType\GetVersionResponse|bool
     */
    public function GetVersion(\Autovista\Technics\StructType\GetVersion $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetVersion($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Autovista\Technics\StructType\GetTechnicalSpecificationResponse|\Autovista\Technics\StructType\GetVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
