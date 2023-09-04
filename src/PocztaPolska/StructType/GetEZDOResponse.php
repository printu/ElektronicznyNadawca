<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getEZDOResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetEZDOResponse extends AbstractStructBase
{
    /**
     * The adres
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\AdresType
     */
    protected \PocztaPolska\StructType\AdresType $adres;
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\EZDOPrzesylkaType[]
     */
    protected array $przesylka;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * The numerKD
     * @var string|null
     */
    protected ?string $numerKD = null;
    /**
     * The numerEZDO
     * @var string|null
     */
    protected ?string $numerEZDO = null;
    /**
     * Constructor method for getEZDOResponse
     * @uses GetEZDOResponse::setAdres()
     * @uses GetEZDOResponse::setPrzesylka()
     * @uses GetEZDOResponse::setError()
     * @uses GetEZDOResponse::setNumerKD()
     * @uses GetEZDOResponse::setNumerEZDO()
     * @param \PocztaPolska\StructType\AdresType $adres
     * @param \PocztaPolska\StructType\EZDOPrzesylkaType[] $przesylka
     * @param \PocztaPolska\StructType\ErrorType[] $error
     * @param string $numerKD
     * @param string $numerEZDO
     */
    public function __construct(\PocztaPolska\StructType\AdresType $adres, array $przesylka, ?array $error = null, ?string $numerKD = null, ?string $numerEZDO = null)
    {
        $this
            ->setAdres($adres)
            ->setPrzesylka($przesylka)
            ->setError($error)
            ->setNumerKD($numerKD)
            ->setNumerEZDO($numerEZDO);
    }
    /**
     * Get adres value
     * @return \PocztaPolska\StructType\AdresType
     */
    public function getAdres(): \PocztaPolska\StructType\AdresType
    {
        return $this->adres;
    }
    /**
     * Set adres value
     * @param \PocztaPolska\StructType\AdresType $adres
     * @return \PocztaPolska\StructType\GetEZDOResponse
     */
    public function setAdres(\PocztaPolska\StructType\AdresType $adres): self
    {
        $this->adres = $adres;
        
        return $this;
    }
    /**
     * Get przesylka value
     * @return \PocztaPolska\StructType\EZDOPrzesylkaType[]
     */
    public function getPrzesylka(): array
    {
        return $this->przesylka;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrzesylka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrzesylkaForArrayConstraintFromSetPrzesylka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEZDOResponsePrzesylkaItem) {
            // validation for constraint: itemType
            if (!$getEZDOResponsePrzesylkaItem instanceof \PocztaPolska\StructType\EZDOPrzesylkaType) {
                $invalidValues[] = is_object($getEZDOResponsePrzesylkaItem) ? get_class($getEZDOResponsePrzesylkaItem) : sprintf('%s(%s)', gettype($getEZDOResponsePrzesylkaItem), var_export($getEZDOResponsePrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The przesylka property can only contain items of type \PocztaPolska\StructType\EZDOPrzesylkaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set przesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\EZDOPrzesylkaType[] $przesylka
     * @return \PocztaPolska\StructType\GetEZDOResponse
     */
    public function setPrzesylka(array $przesylka): self
    {
        // validation for constraint: array
        if ('' !== ($przesylkaArrayErrorMessage = self::validatePrzesylkaForArrayConstraintFromSetPrzesylka($przesylka))) {
            throw new InvalidArgumentException($przesylkaArrayErrorMessage, __LINE__);
        }
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Add item to przesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\EZDOPrzesylkaType $item
     * @return \PocztaPolska\StructType\GetEZDOResponse
     */
    public function addToPrzesylka(\PocztaPolska\StructType\EZDOPrzesylkaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\EZDOPrzesylkaType) {
            throw new InvalidArgumentException(sprintf('The przesylka property can only contain items of type \PocztaPolska\StructType\EZDOPrzesylkaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->przesylka[] = $item;
        
        return $this;
    }
    /**
     * Get error value
     * @return \PocztaPolska\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEZDOResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getEZDOResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getEZDOResponseErrorItem) ? get_class($getEZDOResponseErrorItem) : sprintf('%s(%s)', gettype($getEZDOResponseErrorItem), var_export($getEZDOResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type \PocztaPolska\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set error value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ErrorType[] $error
     * @return \PocztaPolska\StructType\GetEZDOResponse
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ErrorType $item
     * @return \PocztaPolska\StructType\GetEZDOResponse
     */
    public function addToError(\PocztaPolska\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type \PocztaPolska\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
    /**
     * Get numerKD value
     * @return string|null
     */
    public function getNumerKD(): ?string
    {
        return $this->numerKD;
    }
    /**
     * Set numerKD value
     * @param string $numerKD
     * @return \PocztaPolska\StructType\GetEZDOResponse
     */
    public function setNumerKD(?string $numerKD = null): self
    {
        // validation for constraint: string
        if (!is_null($numerKD) && !is_string($numerKD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerKD, true), gettype($numerKD)), __LINE__);
        }
        $this->numerKD = $numerKD;
        
        return $this;
    }
    /**
     * Get numerEZDO value
     * @return string|null
     */
    public function getNumerEZDO(): ?string
    {
        return $this->numerEZDO;
    }
    /**
     * Set numerEZDO value
     * @param string $numerEZDO
     * @return \PocztaPolska\StructType\GetEZDOResponse
     */
    public function setNumerEZDO(?string $numerEZDO = null): self
    {
        // validation for constraint: string
        if (!is_null($numerEZDO) && !is_string($numerEZDO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerEZDO, true), gettype($numerEZDO)), __LINE__);
        }
        $this->numerEZDO = $numerEZDO;
        
        return $this;
    }
}
