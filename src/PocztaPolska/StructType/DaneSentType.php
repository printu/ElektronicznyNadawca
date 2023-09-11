<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for daneSentType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DaneSentType extends AbstractStructBase
{
    /**
     * The numer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $numer;
    /**
     * The kluczPrzewoznika
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $kluczPrzewoznika;
    /**
     * The kodCN
     * Meta information extracted from the WSDL
     * - choice: kodCN | kodPKWiU
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $kodCN = null;
    /**
     * The kodPKWiU
     * Meta information extracted from the WSDL
     * - choice: kodCN | kodPKWiU
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $kodPKWiU = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $masa = null;
    /**
     * The proceduraAwaryjna
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $proceduraAwaryjna = null;

    /**
     * Constructor method for daneSentType
     * @uses DaneSentType::setNumer()
     * @uses DaneSentType::setKluczPrzewoznika()
     * @uses DaneSentType::setKodCN()
     * @uses DaneSentType::setKodPKWiU()
     * @uses DaneSentType::setMasa()
     * @uses DaneSentType::setProceduraAwaryjna()
     * @param string $numer
     * @param string $kluczPrzewoznika
     * @param string $kodCN
     * @param string $kodPKWiU
     * @param float $masa
     * @param bool $proceduraAwaryjna
     */
    public function __construct(string $numer, string $kluczPrzewoznika, ?string $kodCN = null, ?string $kodPKWiU = null, ?float $masa = null, ?bool $proceduraAwaryjna = null)
    {
        $this
            ->setNumer($numer)
            ->setKluczPrzewoznika($kluczPrzewoznika)
            ->setKodCN($kodCN)
            ->setKodPKWiU($kodPKWiU)
            ->setMasa($masa)
            ->setProceduraAwaryjna($proceduraAwaryjna);
    }

    /**
     * Get numer value
     * @return string
     */
    public function getNumer(): string
    {
        return $this->numer;
    }

    /**
     * Set numer value
     * @param string $numer
     * @return \PocztaPolska\StructType\DaneSentType
     */
    public function setNumer(string $numer): self
    {
        // validation for constraint: string
        if (!is_null($numer) && !is_string($numer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numer, true), gettype($numer)), __LINE__);
        }
        $this->numer = $numer;

        return $this;
    }

    /**
     * Get kluczPrzewoznika value
     * @return string
     */
    public function getKluczPrzewoznika(): string
    {
        return $this->kluczPrzewoznika;
    }

    /**
     * Set kluczPrzewoznika value
     * @param string $kluczPrzewoznika
     * @return \PocztaPolska\StructType\DaneSentType
     */
    public function setKluczPrzewoznika(string $kluczPrzewoznika): self
    {
        // validation for constraint: string
        if (!is_null($kluczPrzewoznika) && !is_string($kluczPrzewoznika)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kluczPrzewoznika, true), gettype($kluczPrzewoznika)), __LINE__);
        }
        $this->kluczPrzewoznika = $kluczPrzewoznika;

        return $this;
    }

    /**
     * Get kodCN value
     * @return string|null
     */
    public function getKodCN(): ?string
    {
        return $this->kodCN ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setKodCN method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKodCN method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateKodCNForChoiceConstraintFromSetKodCN($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'kodPKWiU',
        ];

        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property kodCN can\'t be set as the property %s is already set. Only one property must be set among these properties: kodCN, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set kodCN value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $kodCN
     * @return \PocztaPolska\StructType\DaneSentType
     */
    public function setKodCN(?string $kodCN = null): self
    {
        // validation for constraint: string
        if (!is_null($kodCN) && !is_string($kodCN)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodCN, true), gettype($kodCN)), __LINE__);
        }
        // validation for constraint: choice(kodCN, kodPKWiU)
        if ('' !== ($kodCNChoiceErrorMessage = self::validateKodCNForChoiceConstraintFromSetKodCN($kodCN))) {
            throw new InvalidArgumentException($kodCNChoiceErrorMessage, __LINE__);
        }
        if (is_null($kodCN) || (is_array($kodCN) && empty($kodCN))) {
            unset($this->kodCN);
        } else {
            $this->kodCN = $kodCN;
        }

        return $this;
    }

    /**
     * Get kodPKWiU value
     * @return string|null
     */
    public function getKodPKWiU(): ?string
    {
        return $this->kodPKWiU ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setKodPKWiU method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKodPKWiU method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateKodPKWiUForChoiceConstraintFromSetKodPKWiU($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'kodCN',
        ];

        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property kodPKWiU can\'t be set as the property %s is already set. Only one property must be set among these properties: kodPKWiU, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }

        return $message;
    }

    /**
     * Set kodPKWiU value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $kodPKWiU
     * @return \PocztaPolska\StructType\DaneSentType
     */
    public function setKodPKWiU(?string $kodPKWiU = null): self
    {
        // validation for constraint: string
        if (!is_null($kodPKWiU) && !is_string($kodPKWiU)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodPKWiU, true), gettype($kodPKWiU)), __LINE__);
        }
        // validation for constraint: choice(kodCN, kodPKWiU)
        if ('' !== ($kodPKWiUChoiceErrorMessage = self::validateKodPKWiUForChoiceConstraintFromSetKodPKWiU($kodPKWiU))) {
            throw new InvalidArgumentException($kodPKWiUChoiceErrorMessage, __LINE__);
        }
        if (is_null($kodPKWiU) || (is_array($kodPKWiU) && empty($kodPKWiU))) {
            unset($this->kodPKWiU);
        } else {
            $this->kodPKWiU = $kodPKWiU;
        }

        return $this;
    }

    /**
     * Get masa value
     * @return float|null
     */
    public function getMasa(): ?float
    {
        return $this->masa;
    }

    /**
     * Set masa value
     * @param float $masa
     * @return \PocztaPolska\StructType\DaneSentType
     */
    public function setMasa(?float $masa = null): self
    {
        // validation for constraint: float
        if (!is_null($masa) && !(is_float($masa) || is_numeric($masa))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        $this->masa = $masa;

        return $this;
    }

    /**
     * Get proceduraAwaryjna value
     * @return bool|null
     */
    public function getProceduraAwaryjna(): ?bool
    {
        return $this->proceduraAwaryjna;
    }

    /**
     * Set proceduraAwaryjna value
     * @param bool $proceduraAwaryjna
     * @return \PocztaPolska\StructType\DaneSentType
     */
    public function setProceduraAwaryjna(?bool $proceduraAwaryjna = null): self
    {
        // validation for constraint: boolean
        if (!is_null($proceduraAwaryjna) && !is_bool($proceduraAwaryjna)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($proceduraAwaryjna, true), gettype($proceduraAwaryjna)), __LINE__);
        }
        $this->proceduraAwaryjna = $proceduraAwaryjna;

        return $this;
    }
}
