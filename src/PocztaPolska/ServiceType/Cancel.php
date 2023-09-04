<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancelReklamacja
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\CancelReklamacja $parameters
     * @return \PocztaPolska\StructType\CancelReklamacjaResponse|bool
     */
    public function cancelReklamacja(\PocztaPolska\StructType\CancelReklamacja $parameters)
    {
        try {
            $this->setResult($resultCancelReklamacja = $this->getSoapClient()->__soapCall('cancelReklamacja', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCancelReklamacja;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\CancelReklamacjaResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
