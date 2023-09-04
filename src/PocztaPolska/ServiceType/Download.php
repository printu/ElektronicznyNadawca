<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Download ServiceType
 * @subpackage Services
 */
class Download extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named downloadIWDContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\DownloadIWDContent $parameters
     * @return \PocztaPolska\StructType\DownloadIWDContentResponse|bool
     */
    public function downloadIWDContent(\PocztaPolska\StructType\DownloadIWDContent $parameters)
    {
        try {
            $this->setResult($resultDownloadIWDContent = $this->getSoapClient()->__soapCall('downloadIWDContent', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultDownloadIWDContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\DownloadIWDContentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
