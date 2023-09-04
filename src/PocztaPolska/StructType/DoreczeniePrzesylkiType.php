<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doreczeniePrzesylkiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoreczeniePrzesylkiType extends AbstractStructBase
{
    /**
     * The data
     * @var string|null
     */
    protected ?string $data = null;
    /**
     * The osobaOdbierajaca
     * @var string|null
     */
    protected ?string $osobaOdbierajaca = null;
    /**
     * The podmiotDoreczenia
     * @var string|null
     */
    protected ?string $podmiotDoreczenia = null;
    /**
     * The dataPelnomocnictwa
     * @var string|null
     */
    protected ?string $dataPelnomocnictwa = null;
    /**
     * The numerPelnomocnictwa
     * @var string|null
     */
    protected ?string $numerPelnomocnictwa = null;
    /**
     * The pieczecFirmowa
     * @var bool|null
     */
    protected ?bool $pieczecFirmowa = null;
    /**
     * The miejscePozostawieniaZawiadomieniaODoreczeniu
     * @var string|null
     */
    protected ?string $miejscePozostawieniaZawiadomieniaODoreczeniu = null;
    /**
     * Constructor method for doreczeniePrzesylkiType
     * @uses DoreczeniePrzesylkiType::setData()
     * @uses DoreczeniePrzesylkiType::setOsobaOdbierajaca()
     * @uses DoreczeniePrzesylkiType::setPodmiotDoreczenia()
     * @uses DoreczeniePrzesylkiType::setDataPelnomocnictwa()
     * @uses DoreczeniePrzesylkiType::setNumerPelnomocnictwa()
     * @uses DoreczeniePrzesylkiType::setPieczecFirmowa()
     * @uses DoreczeniePrzesylkiType::setMiejscePozostawieniaZawiadomieniaODoreczeniu()
     * @param string $data
     * @param string $osobaOdbierajaca
     * @param string $podmiotDoreczenia
     * @param string $dataPelnomocnictwa
     * @param string $numerPelnomocnictwa
     * @param bool $pieczecFirmowa
     * @param string $miejscePozostawieniaZawiadomieniaODoreczeniu
     */
    public function __construct(?string $data = null, ?string $osobaOdbierajaca = null, ?string $podmiotDoreczenia = null, ?string $dataPelnomocnictwa = null, ?string $numerPelnomocnictwa = null, ?bool $pieczecFirmowa = null, ?string $miejscePozostawieniaZawiadomieniaODoreczeniu = null)
    {
        $this
            ->setData($data)
            ->setOsobaOdbierajaca($osobaOdbierajaca)
            ->setPodmiotDoreczenia($podmiotDoreczenia)
            ->setDataPelnomocnictwa($dataPelnomocnictwa)
            ->setNumerPelnomocnictwa($numerPelnomocnictwa)
            ->setPieczecFirmowa($pieczecFirmowa)
            ->setMiejscePozostawieniaZawiadomieniaODoreczeniu($miejscePozostawieniaZawiadomieniaODoreczeniu);
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \PocztaPolska\StructType\DoreczeniePrzesylkiType
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
    /**
     * Get osobaOdbierajaca value
     * @return string|null
     */
    public function getOsobaOdbierajaca(): ?string
    {
        return $this->osobaOdbierajaca;
    }
    /**
     * Set osobaOdbierajaca value
     * @param string $osobaOdbierajaca
     * @return \PocztaPolska\StructType\DoreczeniePrzesylkiType
     */
    public function setOsobaOdbierajaca(?string $osobaOdbierajaca = null): self
    {
        // validation for constraint: string
        if (!is_null($osobaOdbierajaca) && !is_string($osobaOdbierajaca)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($osobaOdbierajaca, true), gettype($osobaOdbierajaca)), __LINE__);
        }
        $this->osobaOdbierajaca = $osobaOdbierajaca;
        
        return $this;
    }
    /**
     * Get podmiotDoreczenia value
     * @return string|null
     */
    public function getPodmiotDoreczenia(): ?string
    {
        return $this->podmiotDoreczenia;
    }
    /**
     * Set podmiotDoreczenia value
     * @uses \PocztaPolska\EnumType\PodmiotDoreczeniaEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\PodmiotDoreczeniaEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $podmiotDoreczenia
     * @return \PocztaPolska\StructType\DoreczeniePrzesylkiType
     */
    public function setPodmiotDoreczenia(?string $podmiotDoreczenia = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\PodmiotDoreczeniaEnum::valueIsValid($podmiotDoreczenia)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\PodmiotDoreczeniaEnum', is_array($podmiotDoreczenia) ? implode(', ', $podmiotDoreczenia) : var_export($podmiotDoreczenia, true), implode(', ', \PocztaPolska\EnumType\PodmiotDoreczeniaEnum::getValidValues())), __LINE__);
        }
        $this->podmiotDoreczenia = $podmiotDoreczenia;
        
        return $this;
    }
    /**
     * Get dataPelnomocnictwa value
     * @return string|null
     */
    public function getDataPelnomocnictwa(): ?string
    {
        return $this->dataPelnomocnictwa;
    }
    /**
     * Set dataPelnomocnictwa value
     * @param string $dataPelnomocnictwa
     * @return \PocztaPolska\StructType\DoreczeniePrzesylkiType
     */
    public function setDataPelnomocnictwa(?string $dataPelnomocnictwa = null): self
    {
        // validation for constraint: string
        if (!is_null($dataPelnomocnictwa) && !is_string($dataPelnomocnictwa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataPelnomocnictwa, true), gettype($dataPelnomocnictwa)), __LINE__);
        }
        $this->dataPelnomocnictwa = $dataPelnomocnictwa;
        
        return $this;
    }
    /**
     * Get numerPelnomocnictwa value
     * @return string|null
     */
    public function getNumerPelnomocnictwa(): ?string
    {
        return $this->numerPelnomocnictwa;
    }
    /**
     * Set numerPelnomocnictwa value
     * @param string $numerPelnomocnictwa
     * @return \PocztaPolska\StructType\DoreczeniePrzesylkiType
     */
    public function setNumerPelnomocnictwa(?string $numerPelnomocnictwa = null): self
    {
        // validation for constraint: string
        if (!is_null($numerPelnomocnictwa) && !is_string($numerPelnomocnictwa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPelnomocnictwa, true), gettype($numerPelnomocnictwa)), __LINE__);
        }
        $this->numerPelnomocnictwa = $numerPelnomocnictwa;
        
        return $this;
    }
    /**
     * Get pieczecFirmowa value
     * @return bool|null
     */
    public function getPieczecFirmowa(): ?bool
    {
        return $this->pieczecFirmowa;
    }
    /**
     * Set pieczecFirmowa value
     * @param bool $pieczecFirmowa
     * @return \PocztaPolska\StructType\DoreczeniePrzesylkiType
     */
    public function setPieczecFirmowa(?bool $pieczecFirmowa = null): self
    {
        // validation for constraint: boolean
        if (!is_null($pieczecFirmowa) && !is_bool($pieczecFirmowa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pieczecFirmowa, true), gettype($pieczecFirmowa)), __LINE__);
        }
        $this->pieczecFirmowa = $pieczecFirmowa;
        
        return $this;
    }
    /**
     * Get miejscePozostawieniaZawiadomieniaODoreczeniu value
     * @return string|null
     */
    public function getMiejscePozostawieniaZawiadomieniaODoreczeniu(): ?string
    {
        return $this->miejscePozostawieniaZawiadomieniaODoreczeniu;
    }
    /**
     * Set miejscePozostawieniaZawiadomieniaODoreczeniu value
     * @uses \PocztaPolska\EnumType\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $miejscePozostawieniaZawiadomieniaODoreczeniu
     * @return \PocztaPolska\StructType\DoreczeniePrzesylkiType
     */
    public function setMiejscePozostawieniaZawiadomieniaODoreczeniu(?string $miejscePozostawieniaZawiadomieniaODoreczeniu = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum::valueIsValid($miejscePozostawieniaZawiadomieniaODoreczeniu)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum', is_array($miejscePozostawieniaZawiadomieniaODoreczeniu) ? implode(', ', $miejscePozostawieniaZawiadomieniaODoreczeniu) : var_export($miejscePozostawieniaZawiadomieniaODoreczeniu, true), implode(', ', \PocztaPolska\EnumType\MiejscePozostawieniaZawiadomieniaODoreczeniuEnum::getValidValues())), __LINE__);
        }
        $this->miejscePozostawieniaZawiadomieniaODoreczeniu = $miejscePozostawieniaZawiadomieniaODoreczeniu;
        
        return $this;
    }
}
