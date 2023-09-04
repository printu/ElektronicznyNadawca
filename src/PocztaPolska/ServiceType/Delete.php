<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named deleteShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\DeleteShopEZwroty $parameters
     * @return \PocztaPolska\StructType\DeleteShopEZwrotyResponse|bool
     */
    public function deleteShopEZwroty(\PocztaPolska\StructType\DeleteShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultDeleteShopEZwroty = $this->getSoapClient()->__soapCall('deleteShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteParcelContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\DeleteParcelContent $parameters
     * @return \PocztaPolska\StructType\DeleteParcelContentResponse|bool
     */
    public function deleteParcelContent(\PocztaPolska\StructType\DeleteParcelContent $parameters)
    {
        try {
            $this->setResult($resultDeleteParcelContent = $this->getSoapClient()->__soapCall('deleteParcelContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteParcelContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteReturnDocumentsProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\DeleteReturnDocumentsProfile $parameters
     * @return \PocztaPolska\StructType\DeleteReturnDocumentsProfileResponse|bool
     */
    public function deleteReturnDocumentsProfile(\PocztaPolska\StructType\DeleteReturnDocumentsProfile $parameters)
    {
        try {
            $this->setResult($resultDeleteReturnDocumentsProfile = $this->getSoapClient()->__soapCall('deleteReturnDocumentsProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteChecklistTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\DeleteChecklistTemplate $parameters
     * @return \PocztaPolska\StructType\DeleteChecklistTemplateResponse|bool
     */
    public function deleteChecklistTemplate(\PocztaPolska\StructType\DeleteChecklistTemplate $parameters)
    {
        try {
            $this->setResult($resultDeleteChecklistTemplate = $this->getSoapClient()->__soapCall('deleteChecklistTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteChecklistTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\DeleteChecklistTemplateResponse|\PocztaPolska\StructType\DeleteParcelContentResponse|\PocztaPolska\StructType\DeleteReturnDocumentsProfileResponse|\PocztaPolska\StructType\DeleteShopEZwrotyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
