<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paletaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaletaType extends AbstractStructBase
{
    /**
     * The rodzajPalety
     * @var string|null
     */
    protected ?string $rodzajPalety = null;
    /**
     * The szerokosc
     * @var int|null
     */
    protected ?int $szerokosc = null;
    /**
     * The dlugosc
     * @var string|null
     */
    protected ?string $dlugosc = null;
    /**
     * The wysokosc
     * @var string|null
     */
    protected ?string $wysokosc = null;

    /**
     * Constructor method for paletaType
     * @uses PaletaType::setRodzajPalety()
     * @uses PaletaType::setSzerokosc()
     * @uses PaletaType::setDlugosc()
     * @uses PaletaType::setWysokosc()
     * @param string $rodzajPalety
     * @param int $szerokosc
     * @param string $dlugosc
     * @param string $wysokosc
     */
    public function __construct(?string $rodzajPalety = null, ?int $szerokosc = null, ?string $dlugosc = null, ?string $wysokosc = null)
    {
        $this
            ->setRodzajPalety($rodzajPalety)
            ->setSzerokosc($szerokosc)
            ->setDlugosc($dlugosc)
            ->setWysokosc($wysokosc);
    }

    /**
     * Get rodzajPalety value
     * @return string|null
     */
    public function getRodzajPalety(): ?string
    {
        return $this->rodzajPalety;
    }

    /**
     * Set rodzajPalety value
     * @uses \PocztaPolska\EnumType\RodzajPaletyType::valueIsValid()
     * @uses \PocztaPolska\EnumType\RodzajPaletyType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rodzajPalety
     * @return \PocztaPolska\StructType\PaletaType
     */
    public function setRodzajPalety(?string $rodzajPalety = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\RodzajPaletyType::valueIsValid($rodzajPalety)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\RodzajPaletyType', is_array($rodzajPalety) ? implode(', ', $rodzajPalety) : var_export($rodzajPalety, true), implode(', ', \PocztaPolska\EnumType\RodzajPaletyType::getValidValues())), __LINE__);
        }
        $this->rodzajPalety = $rodzajPalety;

        return $this;
    }

    /**
     * Get szerokosc value
     * @return int|null
     */
    public function getSzerokosc(): ?int
    {
        return $this->szerokosc;
    }

    /**
     * Set szerokosc value
     * @param int $szerokosc
     * @return \PocztaPolska\StructType\PaletaType
     */
    public function setSzerokosc(?int $szerokosc = null): self
    {
        // validation for constraint: int
        if (!is_null($szerokosc) && !(is_int($szerokosc) || ctype_digit($szerokosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($szerokosc, true), gettype($szerokosc)), __LINE__);
        }
        $this->szerokosc = $szerokosc;

        return $this;
    }

    /**
     * Get dlugosc value
     * @return string|null
     */
    public function getDlugosc(): ?string
    {
        return $this->dlugosc;
    }

    /**
     * Set dlugosc value
     * @param string $dlugosc
     * @return \PocztaPolska\StructType\PaletaType
     */
    public function setDlugosc(?string $dlugosc = null): self
    {
        // validation for constraint: string
        if (!is_null($dlugosc) && !is_string($dlugosc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlugosc, true), gettype($dlugosc)), __LINE__);
        }
        $this->dlugosc = $dlugosc;

        return $this;
    }

    /**
     * Get wysokosc value
     * @return string|null
     */
    public function getWysokosc(): ?string
    {
        return $this->wysokosc;
    }

    /**
     * Set wysokosc value
     * @param string $wysokosc
     * @return \PocztaPolska\StructType\PaletaType
     */
    public function setWysokosc(?string $wysokosc = null): self
    {
        // validation for constraint: string
        if (!is_null($wysokosc) && !is_string($wysokosc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wysokosc, true), gettype($wysokosc)), __LINE__);
        }
        $this->wysokosc = $wysokosc;

        return $this;
    }
}
