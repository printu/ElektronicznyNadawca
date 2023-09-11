<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for EMSType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EMSType extends PrzesylkaRejestrowanaType
{
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\UbezpieczenieType|null
     */
    protected ?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The deklaracjaCelna
     * Meta information extracted from the WSDL
     * - documentation: Deklaracja celna - "deprecated" - zalecane jest ustawianie elementu deklaracjaCelna2
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DeklaracjaCelnaType|null
     */
    protected ?\PocztaPolska\StructType\DeklaracjaCelnaType $deklaracjaCelna = null;
    /**
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PotwierdzenieDoreczeniaType|null
     */
    protected ?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The deklaracjaCelna2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DeklaracjaCelna2Type|null
     */
    protected ?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null;
    /**
     * The sposobNadaniaInterconnect
     * Meta information extracted from the WSDL
     * - documentation: Umożliwia określenie sposobu nadania przesyłki w ramach systemu Interconnect. Obsługiwane wartości: - ODBIOR_Z_ADRESU_PRYWATNEGO - ODBIOR_Z_ADRESU_FIRMOWEGO - NADANIE_W_PLACOWCE_POCZTOWEJ
     * - base: xsd:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sposobNadaniaInterconnect = null;
    /**
     * The sposobDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\SposobDoreczeniaType|null
     */
    protected ?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null;
    /**
     * The typOpakowania
     * @var string|null
     */
    protected ?string $typOpakowania = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $masa = null;
    /**
     * The zalaczoneDokumenty
     * @var bool|null
     */
    protected ?bool $zalaczoneDokumenty = null;
    /**
     * The numerPrzesylkiKlienta
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;

    /**
     * Constructor method for EMSType
     * @uses EMSType::setUbezpieczenie()
     * @uses EMSType::setDeklaracjaCelna()
     * @uses EMSType::setPotwierdzenieDoreczenia()
     * @uses EMSType::setDeklaracjaCelna2()
     * @uses EMSType::setSposobNadaniaInterconnect()
     * @uses EMSType::setSposobDoreczenia()
     * @uses EMSType::setTypOpakowania()
     * @uses EMSType::setMasa()
     * @uses EMSType::setZalaczoneDokumenty()
     * @uses EMSType::setNumerPrzesylkiKlienta()
     * @param \PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie
     * @param \PocztaPolska\StructType\DeklaracjaCelnaType $deklaracjaCelna
     * @param \PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $sposobNadaniaInterconnect
     * @param \PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @param string $typOpakowania
     * @param int $masa
     * @param bool $zalaczoneDokumenty
     * @param string $numerPrzesylkiKlienta
     */
    public function __construct(?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null, ?\PocztaPolska\StructType\DeklaracjaCelnaType $deklaracjaCelna = null, ?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $sposobNadaniaInterconnect = null, ?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null, ?string $typOpakowania = null, ?int $masa = null, ?bool $zalaczoneDokumenty = null, ?string $numerPrzesylkiKlienta = null)
    {
        $this
            ->setUbezpieczenie($ubezpieczenie)
            ->setDeklaracjaCelna($deklaracjaCelna)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setSposobDoreczenia($sposobDoreczenia)
            ->setTypOpakowania($typOpakowania)
            ->setMasa($masa)
            ->setZalaczoneDokumenty($zalaczoneDokumenty)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta);
    }

    /**
     * Get ubezpieczenie value
     * @return \PocztaPolska\StructType\UbezpieczenieType|null
     */
    public function getUbezpieczenie(): ?\PocztaPolska\StructType\UbezpieczenieType
    {
        return $this->ubezpieczenie;
    }

    /**
     * Set ubezpieczenie value
     * @param \PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie
     * @return \PocztaPolska\StructType\EMSType
     */
    public function setUbezpieczenie(?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;

        return $this;
    }

    /**
     * Get deklaracjaCelna value
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType|null
     */
    public function getDeklaracjaCelna(): ?\PocztaPolska\StructType\DeklaracjaCelnaType
    {
        return $this->deklaracjaCelna;
    }

    /**
     * Set deklaracjaCelna value
     * @param \PocztaPolska\StructType\DeklaracjaCelnaType $deklaracjaCelna
     * @return \PocztaPolska\StructType\EMSType
     */
    public function setDeklaracjaCelna(?\PocztaPolska\StructType\DeklaracjaCelnaType $deklaracjaCelna = null): self
    {
        $this->deklaracjaCelna = $deklaracjaCelna;

        return $this;
    }

    /**
     * Get potwierdzenieDoreczenia value
     * @return \PocztaPolska\StructType\PotwierdzenieDoreczeniaType|null
     */
    public function getPotwierdzenieDoreczenia(): ?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * Set potwierdzenieDoreczenia value
     * @param \PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return \PocztaPolska\StructType\EMSType
     */
    public function setPotwierdzenieDoreczenia(?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;

        return $this;
    }

    /**
     * Get deklaracjaCelna2 value
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type|null
     */
    public function getDeklaracjaCelna2(): ?\PocztaPolska\StructType\DeklaracjaCelna2Type
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Set deklaracjaCelna2 value
     * @param \PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return \PocztaPolska\StructType\EMSType
     */
    public function setDeklaracjaCelna2(?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null): self
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;

        return $this;
    }

    /**
     * Get sposobNadaniaInterconnect value
     * @return string|null
     */
    public function getSposobNadaniaInterconnect(): ?string
    {
        return $this->sposobNadaniaInterconnect;
    }

    /**
     * Set sposobNadaniaInterconnect value
     * @param string $sposobNadaniaInterconnect
     * @return \PocztaPolska\StructType\EMSType
     */
    public function setSposobNadaniaInterconnect(?string $sposobNadaniaInterconnect = null): self
    {
        // validation for constraint: string
        if (!is_null($sposobNadaniaInterconnect) && !is_string($sposobNadaniaInterconnect)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sposobNadaniaInterconnect, true), gettype($sposobNadaniaInterconnect)), __LINE__);
        }
        $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;

        return $this;
    }

    /**
     * Get sposobDoreczenia value
     * @return \PocztaPolska\StructType\SposobDoreczeniaType|null
     */
    public function getSposobDoreczenia(): ?\PocztaPolska\StructType\SposobDoreczeniaType
    {
        return $this->sposobDoreczenia;
    }

    /**
     * Set sposobDoreczenia value
     * @param \PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia
     * @return \PocztaPolska\StructType\EMSType
     */
    public function setSposobDoreczenia(?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null): self
    {
        $this->sposobDoreczenia = $sposobDoreczenia;

        return $this;
    }

    /**
     * Get typOpakowania value
     * @return string|null
     */
    public function getTypOpakowania(): ?string
    {
        return $this->typOpakowania;
    }

    /**
     * Set typOpakowania value
     * @uses \PocztaPolska\EnumType\EMSTypOpakowaniaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\EMSTypOpakowaniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $typOpakowania
     * @return \PocztaPolska\StructType\EMSType
     */
    public function setTypOpakowania(?string $typOpakowania = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\EMSTypOpakowaniaType::valueIsValid($typOpakowania)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\EMSTypOpakowaniaType', is_array($typOpakowania) ? implode(', ', $typOpakowania) : var_export($typOpakowania, true), implode(', ', \PocztaPolska\EnumType\EMSTypOpakowaniaType::getValidValues())), __LINE__);
        }
        $this->typOpakowania = $typOpakowania;

        return $this;
    }

    /**
     * Get masa value
     * @return int|null
     */
    public function getMasa(): ?int
    {
        return $this->masa;
    }

    /**
     * Set masa value
     * @param int $masa
     * @return \PocztaPolska\StructType\EMSType
     */
    public function setMasa(?int $masa = null): self
    {
        // validation for constraint: int
        if (!is_null($masa) && !(is_int($masa) || ctype_digit($masa))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($masa) && $masa > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($masa, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($masa) && $masa < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($masa, true)), __LINE__);
        }
        $this->masa = $masa;

        return $this;
    }

    /**
     * Get zalaczoneDokumenty value
     * @return bool|null
     */
    public function getZalaczoneDokumenty(): ?bool
    {
        return $this->zalaczoneDokumenty;
    }

    /**
     * Set zalaczoneDokumenty value
     * @param bool $zalaczoneDokumenty
     * @return \PocztaPolska\StructType\EMSType
     */
    public function setZalaczoneDokumenty(?bool $zalaczoneDokumenty = null): self
    {
        // validation for constraint: boolean
        if (!is_null($zalaczoneDokumenty) && !is_bool($zalaczoneDokumenty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zalaczoneDokumenty, true), gettype($zalaczoneDokumenty)), __LINE__);
        }
        $this->zalaczoneDokumenty = $zalaczoneDokumenty;

        return $this;
    }

    /**
     * Get numerPrzesylkiKlienta value
     * @return string|null
     */
    public function getNumerPrzesylkiKlienta(): ?string
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * Set numerPrzesylkiKlienta value
     * @param string $numerPrzesylkiKlienta
     * @return \PocztaPolska\StructType\EMSType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;

        return $this;
    }
}
