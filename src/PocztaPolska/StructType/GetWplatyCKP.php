<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getWplatyCKP StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWplatyCKP extends AbstractStructBase
{
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - choice: numerNadania
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 20
     * - maxOccurs: 1
     * - minLength: 10
     * - minOccurs: 1
     * @var string
     */
    protected string $numerNadania;
    /**
     * The startDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $startDate;
    /**
     * The stopDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $stopDate = null;
    /**
     * Constructor method for getWplatyCKP
     * @uses GetWplatyCKP::setNumerNadania()
     * @uses GetWplatyCKP::setStartDate()
     * @uses GetWplatyCKP::setStopDate()
     * @param string $numerNadania
     * @param string $startDate
     * @param string $stopDate
     */
    public function __construct(string $numerNadania = null, string $startDate, ?string $stopDate = null)
    {
        $this
            ->setNumerNadania($numerNadania)
            ->setStartDate($startDate)
            ->setStopDate($stopDate);
    }
    /**
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNumerNadania method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNumerNadania method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNumerNadaniaForChoiceConstraintFromSetNumerNadania($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property numerNadania can\'t be set as the property %s is already set. Only one property must be set among these properties: numerNadania, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set numerNadania value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $numerNadania
     * @return \PocztaPolska\StructType\GetWplatyCKP
     */
    public function setNumerNadania(string $numerNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: choice(numerNadania)
        if ('' !== ($numerNadaniaChoiceErrorMessage = self::validateNumerNadaniaForChoiceConstraintFromSetNumerNadania($numerNadania))) {
            throw new InvalidArgumentException($numerNadaniaChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $numerNadania)), __LINE__);
        }
        if (is_null($numerNadania) || (is_array($numerNadania) && empty($numerNadania))) {
            unset($this->numerNadania);
        } else {
            $this->numerNadania = $numerNadania;
        }
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \PocztaPolska\StructType\GetWplatyCKP
     */
    public function setStartDate(string $startDate): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get stopDate value
     * @return string|null
     */
    public function getStopDate(): ?string
    {
        return $this->stopDate;
    }
    /**
     * Set stopDate value
     * @param string $stopDate
     * @return \PocztaPolska\StructType\GetWplatyCKP
     */
    public function setStopDate(?string $stopDate = null): self
    {
        // validation for constraint: string
        if (!is_null($stopDate) && !is_string($stopDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stopDate, true), gettype($stopDate)), __LINE__);
        }
        $this->stopDate = $stopDate;
        
        return $this;
    }
}
