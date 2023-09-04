<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Order ServiceType
 * @subpackage Services
 */
class Order extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named orderEasyReturnSolutionLabel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\OrderEasyReturnSolutionLabel $parameters
     * @return \PocztaPolska\StructType\OrderEasyReturnSolutionLabelResponse|bool
     */
    public function orderEasyReturnSolutionLabel(\PocztaPolska\StructType\OrderEasyReturnSolutionLabel $parameters)
    {
        try {
            $this->setResult($resultOrderEasyReturnSolutionLabel = $this->getSoapClient()->__soapCall('orderEasyReturnSolutionLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultOrderEasyReturnSolutionLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\OrderEasyReturnSolutionLabelResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
