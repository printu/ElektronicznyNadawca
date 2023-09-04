<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named addShipment
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\AddShipment $parameters
     * @return \PocztaPolska\StructType\AddShipmentResponse|bool
     */
    public function addShipment(\PocztaPolska\StructType\AddShipment $parameters)
    {
        try {
            $this->setResult($resultAddShipment = $this->getSoapClient()->__soapCall('addShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddShipment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addReklamacje
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\AddReklamacje $parameters
     * @return \PocztaPolska\StructType\AddReklamacjeResponse|bool
     */
    public function addReklamacje(\PocztaPolska\StructType\AddReklamacje $parameters)
    {
        try {
            $this->setResult($resultAddReklamacje = $this->getSoapClient()->__soapCall('addReklamacje', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddReklamacje;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addOdwolanieDoReklamacji
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\AddOdwolanieDoReklamacji $parameters
     * @return \PocztaPolska\StructType\AddOdwolanieDoReklamacjiResponse|bool
     */
    public function addOdwolanieDoReklamacji(\PocztaPolska\StructType\AddOdwolanieDoReklamacji $parameters)
    {
        try {
            $this->setResult($resultAddOdwolanieDoReklamacji = $this->getSoapClient()->__soapCall('addOdwolanieDoReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddOdwolanieDoReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addRozbieznoscDoZapowiedziFaktur
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\AddRozbieznoscDoZapowiedziFaktur $parameters
     * @return \PocztaPolska\StructType\AddRozbieznoscDoZapowiedziFakturResponse|bool
     */
    public function addRozbieznoscDoZapowiedziFaktur(\PocztaPolska\StructType\AddRozbieznoscDoZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($resultAddRozbieznoscDoZapowiedziFaktur = $this->getSoapClient()->__soapCall('addRozbieznoscDoZapowiedziFaktur', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddRozbieznoscDoZapowiedziFaktur;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named addZalacznikDoReklamacji
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\AddZalacznikDoReklamacji $parameters
     * @return \PocztaPolska\StructType\AddZalacznikDoReklamacjiResponse|bool
     */
    public function addZalacznikDoReklamacji(\PocztaPolska\StructType\AddZalacznikDoReklamacji $parameters)
    {
        try {
            $this->setResult($resultAddZalacznikDoReklamacji = $this->getSoapClient()->__soapCall('addZalacznikDoReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultAddZalacznikDoReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\AddOdwolanieDoReklamacjiResponse|\PocztaPolska\StructType\AddReklamacjeResponse|\PocztaPolska\StructType\AddRozbieznoscDoZapowiedziFakturResponse|\PocztaPolska\StructType\AddShipmentResponse|\PocztaPolska\StructType\AddZalacznikDoReklamacjiResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
