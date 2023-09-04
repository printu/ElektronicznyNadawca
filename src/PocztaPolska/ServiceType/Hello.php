<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Hello ServiceType
 * @subpackage Services
 */
class Hello extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named hello
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\Hello $parameters
     * @return \PocztaPolska\StructType\HelloResponse|bool
     */
    public function hello(\PocztaPolska\StructType\Hello $parameters)
    {
        try {
            $this->setResult($resultHello = $this->getSoapClient()->__soapCall('hello', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultHello;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\HelloResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
