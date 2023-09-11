<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zwrotPrzesylkiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZwrotPrzesylkiType extends AbstractStructBase
{
    /**
     * The przyczyna
     * @var string|null
     */
    protected ?string $przyczyna = null;
    /**
     * The data
     * @var string|null
     */
    protected ?string $data = null;
    /**
     * The przyczynaZwrotuDodatkowa
     * Meta information extracted from the WSDL
     * - documentation: Dodatkowy opisowy powód zwrotu przesyłki
     * - base: xsd:string
     * - maxLength: 255
     * - use: optional
     * @var string|null
     */
    protected ?string $przyczynaZwrotuDodatkowa = null;

    /**
     * Constructor method for zwrotPrzesylkiType
     * @uses ZwrotPrzesylkiType::setPrzyczyna()
     * @uses ZwrotPrzesylkiType::setData()
     * @uses ZwrotPrzesylkiType::setPrzyczynaZwrotuDodatkowa()
     * @param string $przyczyna
     * @param string $data
     * @param string $przyczynaZwrotuDodatkowa
     */
    public function __construct(?string $przyczyna = null, ?string $data = null, ?string $przyczynaZwrotuDodatkowa = null)
    {
        $this
            ->setPrzyczyna($przyczyna)
            ->setData($data)
            ->setPrzyczynaZwrotuDodatkowa($przyczynaZwrotuDodatkowa);
    }

    /**
     * Get przyczyna value
     * @return string|null
     */
    public function getPrzyczyna(): ?string
    {
        return $this->przyczyna;
    }

    /**
     * Set przyczyna value
     * @uses \PocztaPolska\EnumType\PrzyczynaZwrotuEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\PrzyczynaZwrotuEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $przyczyna
     * @return \PocztaPolska\StructType\ZwrotPrzesylkiType
     */
    public function setPrzyczyna(?string $przyczyna = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\PrzyczynaZwrotuEnum::valueIsValid($przyczyna)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\PrzyczynaZwrotuEnum', is_array($przyczyna) ? implode(', ', $przyczyna) : var_export($przyczyna, true), implode(', ', \PocztaPolska\EnumType\PrzyczynaZwrotuEnum::getValidValues())), __LINE__);
        }
        $this->przyczyna = $przyczyna;

        return $this;
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
     * @return \PocztaPolska\StructType\ZwrotPrzesylkiType
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
     * Get przyczynaZwrotuDodatkowa value
     * @return string|null
     */
    public function getPrzyczynaZwrotuDodatkowa(): ?string
    {
        return $this->przyczynaZwrotuDodatkowa;
    }

    /**
     * Set przyczynaZwrotuDodatkowa value
     * @param string $przyczynaZwrotuDodatkowa
     * @return \PocztaPolska\StructType\ZwrotPrzesylkiType
     */
    public function setPrzyczynaZwrotuDodatkowa(?string $przyczynaZwrotuDodatkowa = null): self
    {
        // validation for constraint: string
        if (!is_null($przyczynaZwrotuDodatkowa) && !is_string($przyczynaZwrotuDodatkowa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($przyczynaZwrotuDodatkowa, true), gettype($przyczynaZwrotuDodatkowa)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($przyczynaZwrotuDodatkowa) && mb_strlen((string) $przyczynaZwrotuDodatkowa) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $przyczynaZwrotuDodatkowa)), __LINE__);
        }
        $this->przyczynaZwrotuDodatkowa = $przyczynaZwrotuDodatkowa;

        return $this;
    }
}
