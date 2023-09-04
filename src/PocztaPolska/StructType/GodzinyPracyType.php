<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for godzinyPracyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GodzinyPracyType extends AbstractStructBase
{
    /**
     * The poniedzialek
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    protected ?array $poniedzialek = null;
    /**
     * The wtorek
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    protected ?array $wtorek = null;
    /**
     * The sroda
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    protected ?array $sroda = null;
    /**
     * The czwartek
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    protected ?array $czwartek = null;
    /**
     * The piatek
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    protected ?array $piatek = null;
    /**
     * The sobota
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    protected ?array $sobota = null;
    /**
     * The niedziela
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    protected ?array $niedziela = null;
    /**
     * The robocze
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    protected ?array $robocze = null;
    /**
     * The swieta
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    protected ?array $swieta = null;
    /**
     * Constructor method for godzinyPracyType
     * @uses GodzinyPracyType::setPoniedzialek()
     * @uses GodzinyPracyType::setWtorek()
     * @uses GodzinyPracyType::setSroda()
     * @uses GodzinyPracyType::setCzwartek()
     * @uses GodzinyPracyType::setPiatek()
     * @uses GodzinyPracyType::setSobota()
     * @uses GodzinyPracyType::setNiedziela()
     * @uses GodzinyPracyType::setRobocze()
     * @uses GodzinyPracyType::setSwieta()
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $poniedzialek
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $wtorek
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $sroda
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $czwartek
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $piatek
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $sobota
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $niedziela
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $robocze
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $swieta
     */
    public function __construct(?array $poniedzialek = null, ?array $wtorek = null, ?array $sroda = null, ?array $czwartek = null, ?array $piatek = null, ?array $sobota = null, ?array $niedziela = null, ?array $robocze = null, ?array $swieta = null)
    {
        $this
            ->setPoniedzialek($poniedzialek)
            ->setWtorek($wtorek)
            ->setSroda($sroda)
            ->setCzwartek($czwartek)
            ->setPiatek($piatek)
            ->setSobota($sobota)
            ->setNiedziela($niedziela)
            ->setRobocze($robocze)
            ->setSwieta($swieta);
    }
    /**
     * Get poniedzialek value
     * @return \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    public function getPoniedzialek(): ?array
    {
        return $this->poniedzialek;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPoniedzialek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPoniedzialek method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePoniedzialekForArrayConstraintFromSetPoniedzialek(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $godzinyPracyTypePoniedzialekItem) {
            // validation for constraint: itemType
            if (!$godzinyPracyTypePoniedzialekItem instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
                $invalidValues[] = is_object($godzinyPracyTypePoniedzialekItem) ? get_class($godzinyPracyTypePoniedzialekItem) : sprintf('%s(%s)', gettype($godzinyPracyTypePoniedzialekItem), var_export($godzinyPracyTypePoniedzialekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The poniedzialek property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set poniedzialek value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $poniedzialek
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function setPoniedzialek(?array $poniedzialek = null): self
    {
        // validation for constraint: array
        if ('' !== ($poniedzialekArrayErrorMessage = self::validatePoniedzialekForArrayConstraintFromSetPoniedzialek($poniedzialek))) {
            throw new InvalidArgumentException($poniedzialekArrayErrorMessage, __LINE__);
        }
        $this->poniedzialek = $poniedzialek;
        
        return $this;
    }
    /**
     * Add item to poniedzialek value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType $item
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function addToPoniedzialek(\PocztaPolska\StructType\GodzinyPracyOdDoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
            throw new InvalidArgumentException(sprintf('The poniedzialek property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->poniedzialek[] = $item;
        
        return $this;
    }
    /**
     * Get wtorek value
     * @return \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    public function getWtorek(): ?array
    {
        return $this->wtorek;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setWtorek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWtorek method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWtorekForArrayConstraintFromSetWtorek(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $godzinyPracyTypeWtorekItem) {
            // validation for constraint: itemType
            if (!$godzinyPracyTypeWtorekItem instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
                $invalidValues[] = is_object($godzinyPracyTypeWtorekItem) ? get_class($godzinyPracyTypeWtorekItem) : sprintf('%s(%s)', gettype($godzinyPracyTypeWtorekItem), var_export($godzinyPracyTypeWtorekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The wtorek property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set wtorek value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $wtorek
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function setWtorek(?array $wtorek = null): self
    {
        // validation for constraint: array
        if ('' !== ($wtorekArrayErrorMessage = self::validateWtorekForArrayConstraintFromSetWtorek($wtorek))) {
            throw new InvalidArgumentException($wtorekArrayErrorMessage, __LINE__);
        }
        $this->wtorek = $wtorek;
        
        return $this;
    }
    /**
     * Add item to wtorek value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType $item
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function addToWtorek(\PocztaPolska\StructType\GodzinyPracyOdDoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
            throw new InvalidArgumentException(sprintf('The wtorek property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->wtorek[] = $item;
        
        return $this;
    }
    /**
     * Get sroda value
     * @return \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    public function getSroda(): ?array
    {
        return $this->sroda;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSroda method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSroda method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSrodaForArrayConstraintFromSetSroda(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $godzinyPracyTypeSrodaItem) {
            // validation for constraint: itemType
            if (!$godzinyPracyTypeSrodaItem instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
                $invalidValues[] = is_object($godzinyPracyTypeSrodaItem) ? get_class($godzinyPracyTypeSrodaItem) : sprintf('%s(%s)', gettype($godzinyPracyTypeSrodaItem), var_export($godzinyPracyTypeSrodaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sroda property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set sroda value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $sroda
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function setSroda(?array $sroda = null): self
    {
        // validation for constraint: array
        if ('' !== ($srodaArrayErrorMessage = self::validateSrodaForArrayConstraintFromSetSroda($sroda))) {
            throw new InvalidArgumentException($srodaArrayErrorMessage, __LINE__);
        }
        $this->sroda = $sroda;
        
        return $this;
    }
    /**
     * Add item to sroda value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType $item
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function addToSroda(\PocztaPolska\StructType\GodzinyPracyOdDoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
            throw new InvalidArgumentException(sprintf('The sroda property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sroda[] = $item;
        
        return $this;
    }
    /**
     * Get czwartek value
     * @return \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    public function getCzwartek(): ?array
    {
        return $this->czwartek;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCzwartek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCzwartek method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCzwartekForArrayConstraintFromSetCzwartek(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $godzinyPracyTypeCzwartekItem) {
            // validation for constraint: itemType
            if (!$godzinyPracyTypeCzwartekItem instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
                $invalidValues[] = is_object($godzinyPracyTypeCzwartekItem) ? get_class($godzinyPracyTypeCzwartekItem) : sprintf('%s(%s)', gettype($godzinyPracyTypeCzwartekItem), var_export($godzinyPracyTypeCzwartekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The czwartek property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set czwartek value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $czwartek
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function setCzwartek(?array $czwartek = null): self
    {
        // validation for constraint: array
        if ('' !== ($czwartekArrayErrorMessage = self::validateCzwartekForArrayConstraintFromSetCzwartek($czwartek))) {
            throw new InvalidArgumentException($czwartekArrayErrorMessage, __LINE__);
        }
        $this->czwartek = $czwartek;
        
        return $this;
    }
    /**
     * Add item to czwartek value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType $item
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function addToCzwartek(\PocztaPolska\StructType\GodzinyPracyOdDoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
            throw new InvalidArgumentException(sprintf('The czwartek property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->czwartek[] = $item;
        
        return $this;
    }
    /**
     * Get piatek value
     * @return \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    public function getPiatek(): ?array
    {
        return $this->piatek;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPiatek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPiatek method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePiatekForArrayConstraintFromSetPiatek(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $godzinyPracyTypePiatekItem) {
            // validation for constraint: itemType
            if (!$godzinyPracyTypePiatekItem instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
                $invalidValues[] = is_object($godzinyPracyTypePiatekItem) ? get_class($godzinyPracyTypePiatekItem) : sprintf('%s(%s)', gettype($godzinyPracyTypePiatekItem), var_export($godzinyPracyTypePiatekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The piatek property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set piatek value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $piatek
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function setPiatek(?array $piatek = null): self
    {
        // validation for constraint: array
        if ('' !== ($piatekArrayErrorMessage = self::validatePiatekForArrayConstraintFromSetPiatek($piatek))) {
            throw new InvalidArgumentException($piatekArrayErrorMessage, __LINE__);
        }
        $this->piatek = $piatek;
        
        return $this;
    }
    /**
     * Add item to piatek value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType $item
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function addToPiatek(\PocztaPolska\StructType\GodzinyPracyOdDoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
            throw new InvalidArgumentException(sprintf('The piatek property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->piatek[] = $item;
        
        return $this;
    }
    /**
     * Get sobota value
     * @return \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    public function getSobota(): ?array
    {
        return $this->sobota;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSobota method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSobota method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSobotaForArrayConstraintFromSetSobota(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $godzinyPracyTypeSobotaItem) {
            // validation for constraint: itemType
            if (!$godzinyPracyTypeSobotaItem instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
                $invalidValues[] = is_object($godzinyPracyTypeSobotaItem) ? get_class($godzinyPracyTypeSobotaItem) : sprintf('%s(%s)', gettype($godzinyPracyTypeSobotaItem), var_export($godzinyPracyTypeSobotaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sobota property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set sobota value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $sobota
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function setSobota(?array $sobota = null): self
    {
        // validation for constraint: array
        if ('' !== ($sobotaArrayErrorMessage = self::validateSobotaForArrayConstraintFromSetSobota($sobota))) {
            throw new InvalidArgumentException($sobotaArrayErrorMessage, __LINE__);
        }
        $this->sobota = $sobota;
        
        return $this;
    }
    /**
     * Add item to sobota value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType $item
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function addToSobota(\PocztaPolska\StructType\GodzinyPracyOdDoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
            throw new InvalidArgumentException(sprintf('The sobota property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sobota[] = $item;
        
        return $this;
    }
    /**
     * Get niedziela value
     * @return \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    public function getNiedziela(): ?array
    {
        return $this->niedziela;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNiedziela method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNiedziela method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNiedzielaForArrayConstraintFromSetNiedziela(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $godzinyPracyTypeNiedzielaItem) {
            // validation for constraint: itemType
            if (!$godzinyPracyTypeNiedzielaItem instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
                $invalidValues[] = is_object($godzinyPracyTypeNiedzielaItem) ? get_class($godzinyPracyTypeNiedzielaItem) : sprintf('%s(%s)', gettype($godzinyPracyTypeNiedzielaItem), var_export($godzinyPracyTypeNiedzielaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The niedziela property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set niedziela value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $niedziela
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function setNiedziela(?array $niedziela = null): self
    {
        // validation for constraint: array
        if ('' !== ($niedzielaArrayErrorMessage = self::validateNiedzielaForArrayConstraintFromSetNiedziela($niedziela))) {
            throw new InvalidArgumentException($niedzielaArrayErrorMessage, __LINE__);
        }
        $this->niedziela = $niedziela;
        
        return $this;
    }
    /**
     * Add item to niedziela value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType $item
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function addToNiedziela(\PocztaPolska\StructType\GodzinyPracyOdDoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
            throw new InvalidArgumentException(sprintf('The niedziela property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->niedziela[] = $item;
        
        return $this;
    }
    /**
     * Get robocze value
     * @return \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    public function getRobocze(): ?array
    {
        return $this->robocze;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRobocze method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRobocze method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoboczeForArrayConstraintFromSetRobocze(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $godzinyPracyTypeRoboczeItem) {
            // validation for constraint: itemType
            if (!$godzinyPracyTypeRoboczeItem instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
                $invalidValues[] = is_object($godzinyPracyTypeRoboczeItem) ? get_class($godzinyPracyTypeRoboczeItem) : sprintf('%s(%s)', gettype($godzinyPracyTypeRoboczeItem), var_export($godzinyPracyTypeRoboczeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The robocze property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set robocze value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $robocze
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function setRobocze(?array $robocze = null): self
    {
        // validation for constraint: array
        if ('' !== ($roboczeArrayErrorMessage = self::validateRoboczeForArrayConstraintFromSetRobocze($robocze))) {
            throw new InvalidArgumentException($roboczeArrayErrorMessage, __LINE__);
        }
        $this->robocze = $robocze;
        
        return $this;
    }
    /**
     * Add item to robocze value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType $item
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function addToRobocze(\PocztaPolska\StructType\GodzinyPracyOdDoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
            throw new InvalidArgumentException(sprintf('The robocze property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->robocze[] = $item;
        
        return $this;
    }
    /**
     * Get swieta value
     * @return \PocztaPolska\StructType\GodzinyPracyOdDoType[]
     */
    public function getSwieta(): ?array
    {
        return $this->swieta;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSwieta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSwieta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSwietaForArrayConstraintFromSetSwieta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $godzinyPracyTypeSwietaItem) {
            // validation for constraint: itemType
            if (!$godzinyPracyTypeSwietaItem instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
                $invalidValues[] = is_object($godzinyPracyTypeSwietaItem) ? get_class($godzinyPracyTypeSwietaItem) : sprintf('%s(%s)', gettype($godzinyPracyTypeSwietaItem), var_export($godzinyPracyTypeSwietaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The swieta property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set swieta value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType[] $swieta
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function setSwieta(?array $swieta = null): self
    {
        // validation for constraint: array
        if ('' !== ($swietaArrayErrorMessage = self::validateSwietaForArrayConstraintFromSetSwieta($swieta))) {
            throw new InvalidArgumentException($swietaArrayErrorMessage, __LINE__);
        }
        $this->swieta = $swieta;
        
        return $this;
    }
    /**
     * Add item to swieta value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\GodzinyPracyOdDoType $item
     * @return \PocztaPolska\StructType\GodzinyPracyType
     */
    public function addToSwieta(\PocztaPolska\StructType\GodzinyPracyOdDoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\GodzinyPracyOdDoType) {
            throw new InvalidArgumentException(sprintf('The swieta property can only contain items of type \PocztaPolska\StructType\GodzinyPracyOdDoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->swieta[] = $item;
        
        return $this;
    }
}
