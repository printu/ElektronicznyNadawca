<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getUrzedyNadania
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetUrzedyNadania $parameters
     * @return \PocztaPolska\StructType\GetUrzedyNadaniaResponse|bool
     */
    public function getUrzedyNadania(\PocztaPolska\StructType\GetUrzedyNadania $parameters)
    {
        try {
            $this->setResult($resultGetUrzedyNadania = $this->getSoapClient()->__soapCall('getUrzedyNadania', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUrzedyNadania;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getUrzedyWydajaceEPrzesylki
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetUrzedyWydajaceEPrzesylki $parameters
     * @return \PocztaPolska\StructType\GetUrzedyWydajaceEPrzesylkiResponse|bool
     */
    public function getUrzedyWydajaceEPrzesylki(\PocztaPolska\StructType\GetUrzedyWydajaceEPrzesylki $parameters)
    {
        try {
            $this->setResult($resultGetUrzedyWydajaceEPrzesylki = $this->getSoapClient()->__soapCall('getUrzedyWydajaceEPrzesylki', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUrzedyWydajaceEPrzesylki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetEnvelopeStatus $parameters
     * @return \PocztaPolska\StructType\GetEnvelopeStatusResponse|bool
     */
    public function getEnvelopeStatus(\PocztaPolska\StructType\GetEnvelopeStatus $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeStatus = $this->getSoapClient()->__soapCall('getEnvelopeStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKarty
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetKarty $parameters
     * @return \PocztaPolska\StructType\GetKartyResponse|bool
     */
    public function getKarty(\PocztaPolska\StructType\GetKarty $parameters)
    {
        try {
            $this->setResult($resultGetKarty = $this->getSoapClient()->__soapCall('getKarty', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKarty;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPasswordExpiredDate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetPasswordExpiredDate $parameters
     * @return \PocztaPolska\StructType\GetPasswordExpiredDateResponse|bool
     */
    public function getPasswordExpiredDate(\PocztaPolska\StructType\GetPasswordExpiredDate $parameters)
    {
        try {
            $this->setResult($resultGetPasswordExpiredDate = $this->getSoapClient()->__soapCall('getPasswordExpiredDate', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPasswordExpiredDate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeContentShort
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetEnvelopeContentShort $parameters
     * @return \PocztaPolska\StructType\GetEnvelopeContentShortResponse|bool
     */
    public function getEnvelopeContentShort(\PocztaPolska\StructType\GetEnvelopeContentShort $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeContentShort = $this->getSoapClient()->__soapCall('getEnvelopeContentShort', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeContentShort;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeContentFull
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetEnvelopeContentFull $parameters
     * @return \PocztaPolska\StructType\GetEnvelopeContentFullResponse|bool
     */
    public function getEnvelopeContentFull(\PocztaPolska\StructType\GetEnvelopeContentFull $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeContentFull = $this->getSoapClient()->__soapCall('getEnvelopeContentFull', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeContentFull;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddressLabel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetAddressLabel $parameters
     * @return \PocztaPolska\StructType\GetAddressLabelResponse|bool
     */
    public function getAddressLabel(\PocztaPolska\StructType\GetAddressLabel $parameters)
    {
        try {
            $this->setResult($resultGetAddressLabel = $this->getSoapClient()->__soapCall('getAddressLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddressLabel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getOutboxBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetOutboxBook $parameters
     * @return \PocztaPolska\StructType\GetOutboxBookResponse|bool
     */
    public function getOutboxBook(\PocztaPolska\StructType\GetOutboxBook $parameters)
    {
        try {
            $this->setResult($resultGetOutboxBook = $this->getSoapClient()->__soapCall('getOutboxBook', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetOutboxBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getFirmowaPocztaBook
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetFirmowaPocztaBook $parameters
     * @return \PocztaPolska\StructType\GetFirmowaPocztaBookResponse|bool
     */
    public function getFirmowaPocztaBook(\PocztaPolska\StructType\GetFirmowaPocztaBook $parameters)
    {
        try {
            $this->setResult($resultGetFirmowaPocztaBook = $this->getSoapClient()->__soapCall('getFirmowaPocztaBook', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetFirmowaPocztaBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetEnvelopeList $parameters
     * @return \PocztaPolska\StructType\GetEnvelopeListResponse|bool
     */
    public function getEnvelopeList(\PocztaPolska\StructType\GetEnvelopeList $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeList = $this->getSoapClient()->__soapCall('getEnvelopeList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddresLabelByGuid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetAddresLabelByGuid $parameters
     * @return \PocztaPolska\StructType\GetAddresLabelByGuidResponse|bool
     */
    public function getAddresLabelByGuid(\PocztaPolska\StructType\GetAddresLabelByGuid $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelByGuid = $this->getSoapClient()->__soapCall('getAddresLabelByGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddresLabelByGuid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPlacowkiPocztowe
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetPlacowkiPocztowe $parameters
     * @return \PocztaPolska\StructType\GetPlacowkiPocztoweResponse|bool
     */
    public function getPlacowkiPocztowe(\PocztaPolska\StructType\GetPlacowkiPocztowe $parameters)
    {
        try {
            $this->setResult($resultGetPlacowkiPocztowe = $this->getSoapClient()->__soapCall('getPlacowkiPocztowe', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPlacowkiPocztowe;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getGuid
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetGuid $parameters
     * @return \PocztaPolska\StructType\GetGuidResponse|bool
     */
    public function getGuid(\PocztaPolska\StructType\GetGuid $parameters)
    {
        try {
            $this->setResult($resultGetGuid = $this->getSoapClient()->__soapCall('getGuid', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetGuid;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKierunki
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetKierunki $parameters
     * @return \PocztaPolska\StructType\GetKierunkiResponse|bool
     */
    public function getKierunki(\PocztaPolska\StructType\GetKierunki $parameters)
    {
        try {
            $this->setResult($resultGetKierunki = $this->getSoapClient()->__soapCall('getKierunki', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKierunki;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getKierunkiInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetKierunkiInfo $parameters
     * @return \PocztaPolska\StructType\GetKierunkiInfoResponse|bool
     */
    public function getKierunkiInfo(\PocztaPolska\StructType\GetKierunkiInfo $parameters)
    {
        try {
            $this->setResult($resultGetKierunkiInfo = $this->getSoapClient()->__soapCall('getKierunkiInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetKierunkiInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeBufor
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetEnvelopeBufor $parameters
     * @return \PocztaPolska\StructType\GetEnvelopeBuforResponse|bool
     */
    public function getEnvelopeBufor(\PocztaPolska\StructType\GetEnvelopeBufor $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeBufor = $this->getSoapClient()->__soapCall('getEnvelopeBufor', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeBufor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEPOStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetEPOStatus $parameters
     * @return \PocztaPolska\StructType\GetEPOStatusResponse|bool
     */
    public function getEPOStatus(\PocztaPolska\StructType\GetEPOStatus $parameters)
    {
        try {
            $this->setResult($resultGetEPOStatus = $this->getSoapClient()->__soapCall('getEPOStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEPOStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddresLabelCompact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetAddresLabelCompact $parameters
     * @return \PocztaPolska\StructType\GetAddresLabelCompactResponse|bool
     */
    public function getAddresLabelCompact(\PocztaPolska\StructType\GetAddresLabelCompact $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelCompact = $this->getSoapClient()->__soapCall('getAddresLabelCompact', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddresLabelCompact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAddresLabelByGuidCompact
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetAddresLabelByGuidCompact $parameters
     * @return \PocztaPolska\StructType\GetAddresLabelByGuidCompactResponse|bool
     */
    public function getAddresLabelByGuidCompact(\PocztaPolska\StructType\GetAddresLabelByGuidCompact $parameters)
    {
        try {
            $this->setResult($resultGetAddresLabelByGuidCompact = $this->getSoapClient()->__soapCall('getAddresLabelByGuidCompact', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAddresLabelByGuidCompact;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEnvelopeBuforList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetEnvelopeBuforList $parameters
     * @return \PocztaPolska\StructType\GetEnvelopeBuforListResponse|bool
     */
    public function getEnvelopeBuforList(\PocztaPolska\StructType\GetEnvelopeBuforList $parameters)
    {
        try {
            $this->setResult($resultGetEnvelopeBuforList = $this->getSoapClient()->__soapCall('getEnvelopeBuforList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEnvelopeBuforList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getUbezpieczeniaInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetUbezpieczeniaInfo $parameters
     * @return \PocztaPolska\StructType\GetUbezpieczeniaInfoResponse|bool
     */
    public function getUbezpieczeniaInfo(\PocztaPolska\StructType\GetUbezpieczeniaInfo $parameters)
    {
        try {
            $this->setResult($resultGetUbezpieczeniaInfo = $this->getSoapClient()->__soapCall('getUbezpieczeniaInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetUbezpieczeniaInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getBlankietPobraniaByGuids
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetBlankietPobraniaByGuids $parameters
     * @return \PocztaPolska\StructType\GetBlankietPobraniaByGuidsResponse|bool
     */
    public function getBlankietPobraniaByGuids(\PocztaPolska\StructType\GetBlankietPobraniaByGuids $parameters)
    {
        try {
            $this->setResult($resultGetBlankietPobraniaByGuids = $this->getSoapClient()->__soapCall('getBlankietPobraniaByGuids', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetBlankietPobraniaByGuids;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAccountList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetAccountList $parameters
     * @return \PocztaPolska\StructType\GetAccountListResponse|bool
     */
    public function getAccountList(\PocztaPolska\StructType\GetAccountList $parameters)
    {
        try {
            $this->setResult($resultGetAccountList = $this->getSoapClient()->__soapCall('getAccountList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAccountList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getProfilList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetProfilList $parameters
     * @return \PocztaPolska\StructType\GetProfilListResponse|bool
     */
    public function getProfilList(\PocztaPolska\StructType\GetProfilList $parameters)
    {
        try {
            $this->setResult($resultGetProfilList = $this->getSoapClient()->__soapCall('getProfilList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetProfilList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getReklamacje
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetReklamacje $parameters
     * @return \PocztaPolska\StructType\GetReklamacjeResponse|bool
     */
    public function getReklamacje(\PocztaPolska\StructType\GetReklamacje $parameters)
    {
        try {
            $this->setResult($resultGetReklamacje = $this->getSoapClient()->__soapCall('getReklamacje', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReklamacje;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getZapowiedziFaktur
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetZapowiedziFaktur $parameters
     * @return \PocztaPolska\StructType\GetZapowiedziFakturResponse|bool
     */
    public function getZapowiedziFaktur(\PocztaPolska\StructType\GetZapowiedziFaktur $parameters)
    {
        try {
            $this->setResult($resultGetZapowiedziFaktur = $this->getSoapClient()->__soapCall('getZapowiedziFaktur', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetZapowiedziFaktur;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getListaPowodowReklamacji
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetListaPowodowReklamacji $parameters
     * @return \PocztaPolska\StructType\GetListaPowodowReklamacjiResponse|bool
     */
    public function getListaPowodowReklamacji(\PocztaPolska\StructType\GetListaPowodowReklamacji $parameters)
    {
        try {
            $this->setResult($resultGetListaPowodowReklamacji = $this->getSoapClient()->__soapCall('getListaPowodowReklamacji', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetListaPowodowReklamacji;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEZDO
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetEZDO $parameters
     * @return \PocztaPolska\StructType\GetEZDOResponse|bool
     */
    public function getEZDO(\PocztaPolska\StructType\GetEZDO $parameters)
    {
        try {
            $this->setResult($resultGetEZDO = $this->getSoapClient()->__soapCall('getEZDO', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEZDO;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getEZDOList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetEZDOList $parameters
     * @return \PocztaPolska\StructType\GetEZDOListResponse|bool
     */
    public function getEZDOList(\PocztaPolska\StructType\GetEZDOList $parameters)
    {
        try {
            $this->setResult($resultGetEZDOList = $this->getSoapClient()->__soapCall('getEZDOList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetEZDOList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getWplatyCKP
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetWplatyCKP $parameters
     * @return \PocztaPolska\StructType\GetWplatyCKPResponse|bool
     */
    public function getWplatyCKP(\PocztaPolska\StructType\GetWplatyCKP $parameters)
    {
        try {
            $this->setResult($resultGetWplatyCKP = $this->getSoapClient()->__soapCall('getWplatyCKP', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetWplatyCKP;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getListaZgodEZwrotow
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetListaZgodEZwrotow $parameters
     * @return \PocztaPolska\StructType\GetListaZgodEZwrotowResponse|bool
     */
    public function getListaZgodEZwrotow(\PocztaPolska\StructType\GetListaZgodEZwrotow $parameters)
    {
        try {
            $this->setResult($resultGetListaZgodEZwrotow = $this->getSoapClient()->__soapCall('getListaZgodEZwrotow', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetListaZgodEZwrotow;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getJednostkaOrganizacyjna
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetJednostkaOrganizacyjna $parameters
     * @return \PocztaPolska\StructType\GetJednostkaOrganizacyjnaResponse|bool
     */
    public function getJednostkaOrganizacyjna(\PocztaPolska\StructType\GetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($resultGetJednostkaOrganizacyjna = $this->getSoapClient()->__soapCall('getJednostkaOrganizacyjna', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetJednostkaOrganizacyjna;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPrintForParcel
     * Meta information extracted from the WSDL
     * - documentation: The method returns parcels printouts for passed guid's
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetPrintForParcel $parameters
     * @return \PocztaPolska\StructType\GetPrintForParcelResponse|bool
     */
    public function getPrintForParcel(\PocztaPolska\StructType\GetPrintForParcel $parameters)
    {
        try {
            $this->setResult($resultGetPrintForParcel = $this->getSoapClient()->__soapCall('getPrintForParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPrintForParcel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getShopEZwrotyList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetShopEZwrotyList $parameters
     * @return \PocztaPolska\StructType\GetShopEZwrotyListResponse|bool
     */
    public function getShopEZwrotyList(\PocztaPolska\StructType\GetShopEZwrotyList $parameters)
    {
        try {
            $this->setResult($resultGetShopEZwrotyList = $this->getSoapClient()->__soapCall('getShopEZwrotyList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShopEZwrotyList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getLibrariesForLegalDeposits
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetLibrariesForLegalDeposits $parameters
     * @return \PocztaPolska\StructType\GetLibrariesForLegalDepositsResponse|bool
     */
    public function getLibrariesForLegalDeposits(\PocztaPolska\StructType\GetLibrariesForLegalDeposits $parameters)
    {
        try {
            $this->setResult($resultGetLibrariesForLegalDeposits = $this->getSoapClient()->__soapCall('getLibrariesForLegalDeposits', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLibrariesForLegalDeposits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getPlacowkaPocztowa
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetPlacowkaPocztowa $parameters
     * @return \PocztaPolska\StructType\GetPlacowkaPocztowaResponse|bool
     */
    public function getPlacowkaPocztowa(\PocztaPolska\StructType\GetPlacowkaPocztowa $parameters)
    {
        try {
            $this->setResult($resultGetPlacowkaPocztowa = $this->getSoapClient()->__soapCall('getPlacowkaPocztowa', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPlacowkaPocztowa;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getParcelContentList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetParcelContentList $parameters
     * @return \PocztaPolska\StructType\GetParcelContentListResponse|bool
     */
    public function getParcelContentList(\PocztaPolska\StructType\GetParcelContentList $parameters)
    {
        try {
            $this->setResult($resultGetParcelContentList = $this->getSoapClient()->__soapCall('getParcelContentList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetParcelContentList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getReturnDocumentsProfileList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetReturnDocumentsProfileList $parameters
     * @return \PocztaPolska\StructType\GetReturnDocumentsProfileListResponse|bool
     */
    public function getReturnDocumentsProfileList(\PocztaPolska\StructType\GetReturnDocumentsProfileList $parameters)
    {
        try {
            $this->setResult($resultGetReturnDocumentsProfileList = $this->getSoapClient()->__soapCall('getReturnDocumentsProfileList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReturnDocumentsProfileList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getChecklistTemplateList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetChecklistTemplateList $parameters
     * @return \PocztaPolska\StructType\GetChecklistTemplateListResponse|bool
     */
    public function getChecklistTemplateList(\PocztaPolska\StructType\GetChecklistTemplateList $parameters)
    {
        try {
            $this->setResult($resultGetChecklistTemplateList = $this->getSoapClient()->__soapCall('getChecklistTemplateList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetChecklistTemplateList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getAdditionalActivitiesList
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\GetAdditionalActivitiesList $parameters
     * @return \PocztaPolska\StructType\GetAdditionalActivitiesListResponse|bool
     */
    public function getAdditionalActivitiesList(\PocztaPolska\StructType\GetAdditionalActivitiesList $parameters)
    {
        try {
            $this->setResult($resultGetAdditionalActivitiesList = $this->getSoapClient()->__soapCall('getAdditionalActivitiesList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAdditionalActivitiesList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\GetAccountListResponse|\PocztaPolska\StructType\GetAdditionalActivitiesListResponse|\PocztaPolska\StructType\GetAddresLabelByGuidCompactResponse|\PocztaPolska\StructType\GetAddresLabelByGuidResponse|\PocztaPolska\StructType\GetAddresLabelCompactResponse|\PocztaPolska\StructType\GetAddressLabelResponse|\PocztaPolska\StructType\GetBlankietPobraniaByGuidsResponse|\PocztaPolska\StructType\GetChecklistTemplateListResponse|\PocztaPolska\StructType\GetEnvelopeBuforListResponse|\PocztaPolska\StructType\GetEnvelopeBuforResponse|\PocztaPolska\StructType\GetEnvelopeContentFullResponse|\PocztaPolska\StructType\GetEnvelopeContentShortResponse|\PocztaPolska\StructType\GetEnvelopeListResponse|\PocztaPolska\StructType\GetEnvelopeStatusResponse|\PocztaPolska\StructType\GetEPOStatusResponse|\PocztaPolska\StructType\GetEZDOListResponse|\PocztaPolska\StructType\GetEZDOResponse|\PocztaPolska\StructType\GetFirmowaPocztaBookResponse|\PocztaPolska\StructType\GetGuidResponse|\PocztaPolska\StructType\GetJednostkaOrganizacyjnaResponse|\PocztaPolska\StructType\GetKartyResponse|\PocztaPolska\StructType\GetKierunkiInfoResponse|\PocztaPolska\StructType\GetKierunkiResponse|\PocztaPolska\StructType\GetLibrariesForLegalDepositsResponse|\PocztaPolska\StructType\GetListaPowodowReklamacjiResponse|\PocztaPolska\StructType\GetListaZgodEZwrotowResponse|\PocztaPolska\StructType\GetOutboxBookResponse|\PocztaPolska\StructType\GetParcelContentListResponse|\PocztaPolska\StructType\GetPasswordExpiredDateResponse|\PocztaPolska\StructType\GetPlacowkaPocztowaResponse|\PocztaPolska\StructType\GetPlacowkiPocztoweResponse|\PocztaPolska\StructType\GetPrintForParcelResponse|\PocztaPolska\StructType\GetProfilListResponse|\PocztaPolska\StructType\GetReklamacjeResponse|\PocztaPolska\StructType\GetReturnDocumentsProfileListResponse|\PocztaPolska\StructType\GetShopEZwrotyListResponse|\PocztaPolska\StructType\GetUbezpieczeniaInfoResponse|\PocztaPolska\StructType\GetUrzedyNadaniaResponse|\PocztaPolska\StructType\GetUrzedyWydajaceEPrzesylkiResponse|\PocztaPolska\StructType\GetWplatyCKPResponse|\PocztaPolska\StructType\GetZapowiedziFakturResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
