<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaShortType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaShortType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $guid;
    /**
     * The czynnosciUpustowe
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $czynnosciUpustowe = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    protected ?string $numerNadania = null;
    /**
     * The dataNadania
     * @var string|null
     */
    protected ?string $dataNadania = null;
    /**
     * The razem
     * @var int|null
     */
    protected ?int $razem = null;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $pobranie = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for przesylkaShortType
     * @uses PrzesylkaShortType::setGuid()
     * @uses PrzesylkaShortType::setCzynnosciUpustowe()
     * @uses PrzesylkaShortType::setNumerNadania()
     * @uses PrzesylkaShortType::setDataNadania()
     * @uses PrzesylkaShortType::setRazem()
     * @uses PrzesylkaShortType::setPobranie()
     * @uses PrzesylkaShortType::setStatus()
     * @param string $guid
     * @param string[] $czynnosciUpustowe
     * @param string $numerNadania
     * @param string $dataNadania
     * @param int $razem
     * @param int $pobranie
     * @param string $status
     */
    public function __construct(string $guid, ?array $czynnosciUpustowe = null, ?string $numerNadania = null, ?string $dataNadania = null, ?int $razem = null, ?int $pobranie = null, ?string $status = null)
    {
        $this
            ->setGuid($guid)
            ->setCzynnosciUpustowe($czynnosciUpustowe)
            ->setNumerNadania($numerNadania)
            ->setDataNadania($dataNadania)
            ->setRazem($razem)
            ->setPobranie($pobranie)
            ->setStatus($status);
    }
    /**
     * Get guid value
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }
    /**
     * Set guid value
     * @param string $guid
     * @return \PocztaPolska\StructType\PrzesylkaShortType
     */
    public function setGuid(string $guid): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && mb_strlen((string) $guid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $guid)), __LINE__);
        }
        $this->guid = $guid;
        
        return $this;
    }
    /**
     * Get czynnosciUpustowe value
     * @return string[]
     */
    public function getCzynnosciUpustowe(): ?array
    {
        return $this->czynnosciUpustowe;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCzynnosciUpustowe method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCzynnosciUpustowe method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCzynnosciUpustoweForArrayConstraintFromSetCzynnosciUpustowe(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $przesylkaShortTypeCzynnosciUpustoweItem) {
            // validation for constraint: enumeration
            if (!\PocztaPolska\EnumType\CzynnoscUpustowaType::valueIsValid($przesylkaShortTypeCzynnosciUpustoweItem)) {
                $invalidValues[] = is_object($przesylkaShortTypeCzynnosciUpustoweItem) ? get_class($przesylkaShortTypeCzynnosciUpustoweItem) : sprintf('%s(%s)', gettype($przesylkaShortTypeCzynnosciUpustoweItem), var_export($przesylkaShortTypeCzynnosciUpustoweItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\CzynnoscUpustowaType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \PocztaPolska\EnumType\CzynnoscUpustowaType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set czynnosciUpustowe value
     * @uses \PocztaPolska\EnumType\CzynnoscUpustowaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\CzynnoscUpustowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $czynnosciUpustowe
     * @return \PocztaPolska\StructType\PrzesylkaShortType
     */
    public function setCzynnosciUpustowe(?array $czynnosciUpustowe = null): self
    {
        // validation for constraint: array
        if ('' !== ($czynnosciUpustoweArrayErrorMessage = self::validateCzynnosciUpustoweForArrayConstraintFromSetCzynnosciUpustowe($czynnosciUpustowe))) {
            throw new InvalidArgumentException($czynnosciUpustoweArrayErrorMessage, __LINE__);
        }
        $this->czynnosciUpustowe = $czynnosciUpustowe;
        
        return $this;
    }
    /**
     * Add item to czynnosciUpustowe value
     * @uses \PocztaPolska\EnumType\CzynnoscUpustowaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\CzynnoscUpustowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\PrzesylkaShortType
     */
    public function addToCzynnosciUpustowe(string $item): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\CzynnoscUpustowaType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\CzynnoscUpustowaType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \PocztaPolska\EnumType\CzynnoscUpustowaType::getValidValues())), __LINE__);
        }
        $this->czynnosciUpustowe[] = $item;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \PocztaPolska\StructType\PrzesylkaShortType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get dataNadania value
     * @return string|null
     */
    public function getDataNadania(): ?string
    {
        return $this->dataNadania;
    }
    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \PocztaPolska\StructType\PrzesylkaShortType
     */
    public function setDataNadania(?string $dataNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;
        
        return $this;
    }
    /**
     * Get razem value
     * @return int|null
     */
    public function getRazem(): ?int
    {
        return $this->razem;
    }
    /**
     * Set razem value
     * @param int $razem
     * @return \PocztaPolska\StructType\PrzesylkaShortType
     */
    public function setRazem(?int $razem = null): self
    {
        // validation for constraint: int
        if (!is_null($razem) && !(is_int($razem) || ctype_digit($razem))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($razem, true), gettype($razem)), __LINE__);
        }
        $this->razem = $razem;
        
        return $this;
    }
    /**
     * Get pobranie value
     * @return int|null
     */
    public function getPobranie(): ?int
    {
        return $this->pobranie;
    }
    /**
     * Set pobranie value
     * @param int $pobranie
     * @return \PocztaPolska\StructType\PrzesylkaShortType
     */
    public function setPobranie(?int $pobranie = null): self
    {
        // validation for constraint: int
        if (!is_null($pobranie) && !(is_int($pobranie) || ctype_digit($pobranie))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pobranie, true), gettype($pobranie)), __LINE__);
        }
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \PocztaPolska\EnumType\StatusType::valueIsValid()
     * @uses \PocztaPolska\EnumType\StatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \PocztaPolska\StructType\PrzesylkaShortType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\StatusType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\StatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \PocztaPolska\EnumType\StatusType::getValidValues())), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
