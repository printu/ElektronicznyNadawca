<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zawartoscPocztex2021Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZawartoscPocztex2021Type extends AbstractStructBase
{
    /**
     * The zawartoscSpecjalna
     * Meta information extracted from the WSDL
     * - choice: zawartoscSpecjalna | zawartoscInna
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    protected ?string $zawartoscSpecjalna = null;
    /**
     * The zawartoscInna
     * Meta information extracted from the WSDL
     * - choice: zawartoscSpecjalna | zawartoscInna
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    protected ?string $zawartoscInna = null;

    /**
     * Constructor method for zawartoscPocztex2021Type
     * @uses ZawartoscPocztex2021Type::setZawartoscSpecjalna()
     * @uses ZawartoscPocztex2021Type::setZawartoscInna()
     * @param string $zawartoscSpecjalna
     * @param string $zawartoscInna
     */
    public function __construct(?string $zawartoscSpecjalna = null, ?string $zawartoscInna = null)
    {
        $this
            ->setZawartoscSpecjalna($zawartoscSpecjalna)
            ->setZawartoscInna($zawartoscInna);
    }

    /**
     * Get zawartoscSpecjalna value
     * @return string|null
     */
    public function getZawartoscSpecjalna(): ?string
    {
        return $this->zawartoscSpecjalna ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setZawartoscSpecjalna method
     * This method is willingly generated in order to preserve the one-line inline validation within the setZawartoscSpecjalna method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateZawartoscSpecjalnaForChoiceConstraintFromSetZawartoscSpecjalna($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'zawartoscInna',
        ];

        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property zawartoscSpecjalna can\'t be set as the property %s is already set. Only one property must be set among these properties: zawartoscSpecjalna, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set zawartoscSpecjalna value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @uses \PocztaPolska\EnumType\ZawartoscSpecjalnaEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\ZawartoscSpecjalnaEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $zawartoscSpecjalna
     * @return \PocztaPolska\StructType\ZawartoscPocztex2021Type
     */
    public function setZawartoscSpecjalna(?string $zawartoscSpecjalna = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\ZawartoscSpecjalnaEnum::valueIsValid($zawartoscSpecjalna)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\ZawartoscSpecjalnaEnum', is_array($zawartoscSpecjalna) ? implode(', ', $zawartoscSpecjalna) : var_export($zawartoscSpecjalna, true), implode(', ', \PocztaPolska\EnumType\ZawartoscSpecjalnaEnum::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(zawartoscSpecjalna, zawartoscInna)
        if ('' !== ($zawartoscSpecjalnaChoiceErrorMessage = self::validateZawartoscSpecjalnaForChoiceConstraintFromSetZawartoscSpecjalna($zawartoscSpecjalna))) {
            throw new InvalidArgumentException($zawartoscSpecjalnaChoiceErrorMessage, __LINE__);
        }
        if (is_null($zawartoscSpecjalna) || (is_array($zawartoscSpecjalna) && empty($zawartoscSpecjalna))) {
            unset($this->zawartoscSpecjalna);
        } else {
            $this->zawartoscSpecjalna = $zawartoscSpecjalna;
        }

        return $this;
    }

    /**
     * Get zawartoscInna value
     * @return string|null
     */
    public function getZawartoscInna(): ?string
    {
        return $this->zawartoscInna ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setZawartoscInna method
     * This method is willingly generated in order to preserve the one-line inline validation within the setZawartoscInna method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateZawartoscInnaForChoiceConstraintFromSetZawartoscInna($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'zawartoscSpecjalna',
        ];

        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property zawartoscInna can\'t be set as the property %s is already set. Only one property must be set among these properties: zawartoscInna, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set zawartoscInna value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $zawartoscInna
     * @return \PocztaPolska\StructType\ZawartoscPocztex2021Type
     */
    public function setZawartoscInna(?string $zawartoscInna = null): self
    {
        // validation for constraint: string
        if (!is_null($zawartoscInna) && !is_string($zawartoscInna)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zawartoscInna, true), gettype($zawartoscInna)), __LINE__);
        }
        // validation for constraint: choice(zawartoscSpecjalna, zawartoscInna)
        if ('' !== ($zawartoscInnaChoiceErrorMessage = self::validateZawartoscInnaForChoiceConstraintFromSetZawartoscInna($zawartoscInna))) {
            throw new InvalidArgumentException($zawartoscInnaChoiceErrorMessage, __LINE__);
        }
        if (is_null($zawartoscInna) || (is_array($zawartoscInna) && empty($zawartoscInna))) {
            unset($this->zawartoscInna);
        } else {
            $this->zawartoscInna = $zawartoscInna;
        }

        return $this;
    }
}
