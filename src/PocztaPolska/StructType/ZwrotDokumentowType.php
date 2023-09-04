<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotDokumentowType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZwrotDokumentowType extends AbstractStructBase
{
    /**
     * The rodzajPocztex
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $rodzajPocztex = null;
    /**
     * The rodzajList
     * Meta information extracted from the WSDL
     * - choice: rodzajPocztex | rodzajList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\RodzajListType|null
     */
    protected ?\PocztaPolska\StructType\RodzajListType $rodzajList = null;
    /**
     * The odleglosc
     * @var int|null
     */
    protected ?int $odleglosc = null;
    /**
     * Constructor method for zwrotDokumentowType
     * @uses ZwrotDokumentowType::setRodzajPocztex()
     * @uses ZwrotDokumentowType::setRodzajList()
     * @uses ZwrotDokumentowType::setOdleglosc()
     * @param string $rodzajPocztex
     * @param \PocztaPolska\StructType\RodzajListType $rodzajList
     * @param int $odleglosc
     */
    public function __construct(?string $rodzajPocztex = null, ?\PocztaPolska\StructType\RodzajListType $rodzajList = null, ?int $odleglosc = null)
    {
        $this
            ->setRodzajPocztex($rodzajPocztex)
            ->setRodzajList($rodzajList)
            ->setOdleglosc($odleglosc);
    }
    /**
     * Get rodzajPocztex value
     * @return string|null
     */
    public function getRodzajPocztex(): ?string
    {
        return $this->rodzajPocztex ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRodzajPocztex method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajPocztex method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRodzajPocztexForChoiceConstraintFromSetRodzajPocztex($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'rodzajList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property rodzajPocztex can\'t be set as the property %s is already set. Only one property must be set among these properties: rodzajPocztex, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set rodzajPocztex value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @uses \PocztaPolska\EnumType\TerminRodzajType::valueIsValid()
     * @uses \PocztaPolska\EnumType\TerminRodzajType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rodzajPocztex
     * @return \PocztaPolska\StructType\ZwrotDokumentowType
     */
    public function setRodzajPocztex(?string $rodzajPocztex = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\TerminRodzajType::valueIsValid($rodzajPocztex)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\TerminRodzajType', is_array($rodzajPocztex) ? implode(', ', $rodzajPocztex) : var_export($rodzajPocztex, true), implode(', ', \PocztaPolska\EnumType\TerminRodzajType::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(rodzajPocztex, rodzajList)
        if ('' !== ($rodzajPocztexChoiceErrorMessage = self::validateRodzajPocztexForChoiceConstraintFromSetRodzajPocztex($rodzajPocztex))) {
            throw new InvalidArgumentException($rodzajPocztexChoiceErrorMessage, __LINE__);
        }
        if (is_null($rodzajPocztex) || (is_array($rodzajPocztex) && empty($rodzajPocztex))) {
            unset($this->rodzajPocztex);
        } else {
            $this->rodzajPocztex = $rodzajPocztex;
        }
        
        return $this;
    }
    /**
     * Get rodzajList value
     * @return \PocztaPolska\StructType\RodzajListType|null
     */
    public function getRodzajList(): ?\PocztaPolska\StructType\RodzajListType
    {
        return $this->rodzajList ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRodzajList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajList method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRodzajListForChoiceConstraintFromSetRodzajList($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'rodzajPocztex',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property rodzajList can\'t be set as the property %s is already set. Only one property must be set among these properties: rodzajList, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set rodzajList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\RodzajListType $rodzajList
     * @return \PocztaPolska\StructType\ZwrotDokumentowType
     */
    public function setRodzajList(?\PocztaPolska\StructType\RodzajListType $rodzajList = null): self
    {
        // validation for constraint: choice(rodzajPocztex, rodzajList)
        if ('' !== ($rodzajListChoiceErrorMessage = self::validateRodzajListForChoiceConstraintFromSetRodzajList($rodzajList))) {
            throw new InvalidArgumentException($rodzajListChoiceErrorMessage, __LINE__);
        }
        if (is_null($rodzajList) || (is_array($rodzajList) && empty($rodzajList))) {
            unset($this->rodzajList);
        } else {
            $this->rodzajList = $rodzajList;
        }
        
        return $this;
    }
    /**
     * Get odleglosc value
     * @return int|null
     */
    public function getOdleglosc(): ?int
    {
        return $this->odleglosc;
    }
    /**
     * Set odleglosc value
     * @param int $odleglosc
     * @return \PocztaPolska\StructType\ZwrotDokumentowType
     */
    public function setOdleglosc(?int $odleglosc = null): self
    {
        // validation for constraint: int
        if (!is_null($odleglosc) && !(is_int($odleglosc) || ctype_digit($odleglosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($odleglosc, true), gettype($odleglosc)), __LINE__);
        }
        $this->odleglosc = $odleglosc;
        
        return $this;
    }
}
