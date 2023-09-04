<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named updateEnvelopeBufor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\UpdateEnvelopeBufor $parameters
     * @return \PocztaPolska\StructType\UpdateEnvelopeBuforResponse|bool
     */
    public function updateEnvelopeBufor(\PocztaPolska\StructType\UpdateEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($resultUpdateEnvelopeBufor = $this->getSoapClient()->__soapCall('updateEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\UpdateAccount $parameters
     * @return \PocztaPolska\StructType\UpdateAccountResponse|bool
     */
    public function updateAccount(\PocztaPolska\StructType\UpdateAccount $parameters)
    {
        try {
            $this->setResult($resultUpdateAccount = $this->getSoapClient()->__soapCall('updateAccount', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateProfil
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\UpdateProfil $parameters
     * @return \PocztaPolska\StructType\UpdateProfilResponse|bool
     */
    public function updateProfil(\PocztaPolska\StructType\UpdateProfil $parameters)
    {
        try {
            $this->setResult($resultUpdateProfil = $this->getSoapClient()->__soapCall('updateProfil', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateProfil;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateShopEZwroty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\UpdateShopEZwroty $parameters
     * @return \PocztaPolska\StructType\UpdateShopEZwrotyResponse|bool
     */
    public function updateShopEZwroty(\PocztaPolska\StructType\UpdateShopEZwroty $parameters)
    {
        try {
            $this->setResult($resultUpdateShopEZwroty = $this->getSoapClient()->__soapCall('updateShopEZwroty', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateShopEZwroty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateParcelContent
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\UpdateParcelContent $parameters
     * @return \PocztaPolska\StructType\UpdateParcelContentResponse|bool
     */
    public function updateParcelContent(\PocztaPolska\StructType\UpdateParcelContent $parameters)
    {
        try {
            $this->setResult($resultUpdateParcelContent = $this->getSoapClient()->__soapCall('updateParcelContent', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateParcelContent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateReturnDocumentsProfile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\UpdateReturnDocumentsProfile $parameters
     * @return \PocztaPolska\StructType\UpdateReturnDocumentsProfileResponse|bool
     */
    public function updateReturnDocumentsProfile(\PocztaPolska\StructType\UpdateReturnDocumentsProfile $parameters)
    {
        try {
            $this->setResult($resultUpdateReturnDocumentsProfile = $this->getSoapClient()->__soapCall('updateReturnDocumentsProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateReturnDocumentsProfile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateChecklistTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\UpdateChecklistTemplate $parameters
     * @return \PocztaPolska\StructType\UpdateChecklistTemplateResponse|bool
     */
    public function updateChecklistTemplate(\PocztaPolska\StructType\UpdateChecklistTemplate $parameters)
    {
        try {
            $this->setResult($resultUpdateChecklistTemplate = $this->getSoapClient()->__soapCall('updateChecklistTemplate', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateChecklistTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\UpdateAccountResponse|\PocztaPolska\StructType\UpdateChecklistTemplateResponse|\PocztaPolska\StructType\UpdateEnvelopeBuforResponse|\PocztaPolska\StructType\UpdateParcelContentResponse|\PocztaPolska\StructType\UpdateProfilResponse|\PocztaPolska\StructType\UpdateReturnDocumentsProfileResponse|\PocztaPolska\StructType\UpdateShopEZwrotyResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
