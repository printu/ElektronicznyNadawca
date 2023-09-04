<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for kierunekType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class KierunekType extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $id;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - maxOccurs: unbounded
     * - minLength: 0
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string[]
     */
    protected ?array $kodPocztowy = null;
    /**
     * The opis
     * @var string|null
     */
    protected ?string $opis = null;
    /**
     * The pna
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $pna = null;
    /**
     * Constructor method for kierunekType
     * @uses KierunekType::setId()
     * @uses KierunekType::setKodPocztowy()
     * @uses KierunekType::setOpis()
     * @uses KierunekType::setPna()
     * @param int $id
     * @param string[] $kodPocztowy
     * @param string $opis
     * @param string $pna
     */
    public function __construct(int $id, ?array $kodPocztowy = null, ?string $opis = null, ?string $pna = null)
    {
        $this
            ->setId($id)
            ->setKodPocztowy($kodPocztowy)
            ->setOpis($opis)
            ->setPna($pna);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \PocztaPolska\StructType\KierunekType
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get kodPocztowy value
     * @return string[]
     */
    public function getKodPocztowy(): ?array
    {
        return $this->kodPocztowy;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKodPocztowy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKodPocztowy method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKodPocztowyForArrayConstraintFromSetKodPocztowy(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $kierunekTypeKodPocztowyItem) {
            // validation for constraint: itemType
            if (!is_string($kierunekTypeKodPocztowyItem)) {
                $invalidValues[] = is_object($kierunekTypeKodPocztowyItem) ? get_class($kierunekTypeKodPocztowyItem) : sprintf('%s(%s)', gettype($kierunekTypeKodPocztowyItem), var_export($kierunekTypeKodPocztowyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The kodPocztowy property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKodPocztowy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKodPocztowy method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKodPocztowyForMaxLengthConstraintFromSetKodPocztowy(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $kierunekTypeKodPocztowyItem) {
            // validation for constraint: maxLength(10)
            if (mb_strlen((string) $kierunekTypeKodPocztowyItem) > 10) {
                $invalidValues[] = var_export($kierunekTypeKodPocztowyItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 10', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKodPocztowy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKodPocztowy method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKodPocztowyForMinLengthConstraintFromSetKodPocztowy(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $kierunekTypeKodPocztowyItem) {
            // validation for constraint: minLength
            if (mb_strlen((string) $kierunekTypeKodPocztowyItem) < 0) {
                $invalidValues[] = var_export($kierunekTypeKodPocztowyItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 0', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set kodPocztowy value
     * @throws InvalidArgumentException
     * @param string[] $kodPocztowy
     * @return \PocztaPolska\StructType\KierunekType
     */
    public function setKodPocztowy(?array $kodPocztowy = null): self
    {
        // validation for constraint: array
        if ('' !== ($kodPocztowyArrayErrorMessage = self::validateKodPocztowyForArrayConstraintFromSetKodPocztowy($kodPocztowy))) {
            throw new InvalidArgumentException($kodPocztowyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(10)
        if ('' !== ($kodPocztowyMaxLengthErrorMessage = self::validateKodPocztowyForMaxLengthConstraintFromSetKodPocztowy($kodPocztowy))) {
            throw new InvalidArgumentException($kodPocztowyMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: minLength
        if ('' !== ($kodPocztowyMinLengthErrorMessage = self::validateKodPocztowyForMinLengthConstraintFromSetKodPocztowy($kodPocztowy))) {
            throw new InvalidArgumentException($kodPocztowyMinLengthErrorMessage, __LINE__);
        }
        $this->kodPocztowy = $kodPocztowy;
        
        return $this;
    }
    /**
     * Add item to kodPocztowy value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\KierunekType
     */
    public function addToKodPocztowy(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The kodPocztowy property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (mb_strlen((string) $item) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: minLength
        if (mb_strlen((string) $item) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $item)), __LINE__);
        }
        $this->kodPocztowy[] = $item;
        
        return $this;
    }
    /**
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \PocztaPolska\StructType\KierunekType
     */
    public function setOpis(?string $opis = null): self
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get pna value
     * @return string|null
     */
    public function getPna(): ?string
    {
        return $this->pna;
    }
    /**
     * Set pna value
     * @param string $pna
     * @return \PocztaPolska\StructType\KierunekType
     */
    public function setPna(?string $pna = null): self
    {
        // validation for constraint: string
        if (!is_null($pna) && !is_string($pna)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pna, true), gettype($pna)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($pna) && mb_strlen((string) $pna) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $pna)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($pna) && mb_strlen((string) $pna) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $pna)), __LINE__);
        }
        $this->pna = $pna;
        
        return $this;
    }
}
