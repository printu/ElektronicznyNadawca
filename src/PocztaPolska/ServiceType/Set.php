<?php

declare(strict_types=1);

namespace PocztaPolska\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named setAktywnaKarta
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\SetAktywnaKarta $parameters
     * @return \PocztaPolska\StructType\SetAktywnaKartaResponse|bool
     */
    public function setAktywnaKarta(\PocztaPolska\StructType\SetAktywnaKarta $parameters)
    {
        try {
            $this->setResult($resultSetAktywnaKarta = $this->getSoapClient()->__soapCall('setAktywnaKarta', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSetAktywnaKarta;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named setEnvelopeBuforDataNadania
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\SetEnvelopeBuforDataNadania $parameters
     * @return \PocztaPolska\StructType\SetEnvelopeBuforDataNadaniaResponse|bool
     */
    public function setEnvelopeBuforDataNadania(\PocztaPolska\StructType\SetEnvelopeBuforDataNadania $parameters)
    {
        try {
            $this->setResult($resultSetEnvelopeBuforDataNadania = $this->getSoapClient()->__soapCall('setEnvelopeBuforDataNadania', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSetEnvelopeBuforDataNadania;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named setStatusZgodyNaEZwrot
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\SetStatusZgodyNaEZwrot $parameters
     * @return \PocztaPolska\StructType\SetStatusZgodyNaEZwrotResponse|bool
     */
    public function setStatusZgodyNaEZwrot(\PocztaPolska\StructType\SetStatusZgodyNaEZwrot $parameters)
    {
        try {
            $this->setResult($resultSetStatusZgodyNaEZwrot = $this->getSoapClient()->__soapCall('setStatusZgodyNaEZwrot', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSetStatusZgodyNaEZwrot;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named setJednostkaOrganizacyjna
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \PocztaPolska\StructType\SetJednostkaOrganizacyjna $parameters
     * @return \PocztaPolska\StructType\SetJednostkaOrganizacyjnaResponse|bool
     */
    public function setJednostkaOrganizacyjna(\PocztaPolska\StructType\SetJednostkaOrganizacyjna $parameters)
    {
        try {
            $this->setResult($resultSetJednostkaOrganizacyjna = $this->getSoapClient()->__soapCall('setJednostkaOrganizacyjna', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSetJednostkaOrganizacyjna;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \PocztaPolska\StructType\SetAktywnaKartaResponse|\PocztaPolska\StructType\SetEnvelopeBuforDataNadaniaResponse|\PocztaPolska\StructType\SetJednostkaOrganizacyjnaResponse|\PocztaPolska\StructType\SetStatusZgodyNaEZwrotResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
