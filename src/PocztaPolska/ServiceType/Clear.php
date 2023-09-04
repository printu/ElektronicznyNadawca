<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Clear ServiceType
 * @subpackage Services
 */
class Clear extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named clearEnvelope
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\ClearEnvelope $parameters
     * @return \PocztaPolska\StructType\ClearEnvelopeResponse|bool
     */
    public function clearEnvelope(\PocztaPolska\StructType\ClearEnvelope $parameters)
    {
        try {
            $this->setResult($resultClearEnvelope = $this->getSoapClient()->__soapCall('clearEnvelope', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultClearEnvelope;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named clearEnvelopeByGuids
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\ClearEnvelopeByGuids $parameters
     * @return \PocztaPolska\StructType\ClearEnvelopeByGuidsResponse|bool
     */
    public function clearEnvelopeByGuids(\PocztaPolska\StructType\ClearEnvelopeByGuids $parameters)
    {
        try {
            $this->setResult($resultClearEnvelopeByGuids = $this->getSoapClient()->__soapCall('clearEnvelopeByGuids', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultClearEnvelopeByGuids;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\ClearEnvelopeByGuidsResponse|\PocztaPolska\StructType\ClearEnvelopeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
