<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Wyslij ServiceType
 * @subpackage Services
 */
class Wyslij extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named wyslijLinkaOStatusieEZwrotu
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\WyslijLinkaOStatusieEZwrotu $parameters
     * @return \PocztaPolska\StructType\WyslijLinkaOStatusieEZwrotuResponse|bool
     */
    public function wyslijLinkaOStatusieEZwrotu(\PocztaPolska\StructType\WyslijLinkaOStatusieEZwrotu $parameters)
    {
        try {
            $this->setResult($resultWyslijLinkaOStatusieEZwrotu = $this->getSoapClient()->__soapCall('wyslijLinkaOStatusieEZwrotu', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultWyslijLinkaOStatusieEZwrotu;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\WyslijLinkaOStatusieEZwrotuResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
