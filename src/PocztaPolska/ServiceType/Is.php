<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType
 * @subpackage Services
 */
class Is extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named isMiejscowa
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\IsMiejscowa $parameters
     * @return \PocztaPolska\StructType\IsMiejscowaResponse|bool
     */
    public function isMiejscowa(\PocztaPolska\StructType\IsMiejscowa $parameters)
    {
        try {
            $this->setResult($resultIsMiejscowa = $this->getSoapClient()->__soapCall('isMiejscowa', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultIsMiejscowa;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named isObszarMiasto
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\IsObszarMiasto $parameters
     * @return \PocztaPolska\StructType\IsObszarMiastoResponse|bool
     */
    public function isObszarMiasto(\PocztaPolska\StructType\IsObszarMiasto $parameters)
    {
        try {
            $this->setResult($resultIsObszarMiasto = $this->getSoapClient()->__soapCall('isObszarMiasto', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultIsObszarMiasto;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\IsMiejscowaResponse|\PocztaPolska\StructType\IsObszarMiastoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
