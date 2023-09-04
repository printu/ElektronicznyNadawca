<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for paczkaZagranicznaPremiumType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PaczkaZagranicznaPremiumType extends PrzesylkaRejestrowanaType
{
    /**
     * The zwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ZwrotType|null
     */
    protected ?\PocztaPolska\StructType\ZwrotType $zwrot = null;
    /**
     * The posteRestante
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - maxOccurs: 1
     * - minInclusive: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $masa = null;
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
     * The potwierdzenieDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PotwierdzenieDoreczeniaType|null
     */
    protected ?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null;
    /**
     * The ubezpieczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\UbezpieczenieType|null
     */
    protected ?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null;
    /**
     * The numerPrzesylkiKlienta
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 25
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * The sposobDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\SposobDoreczeniaType|null
     */
    protected ?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null;
    /**
     * Constructor method for paczkaZagranicznaPremiumType
     * @uses PaczkaZagranicznaPremiumType::setZwrot()
     * @uses PaczkaZagranicznaPremiumType::setPosteRestante()
     * @uses PaczkaZagranicznaPremiumType::setMasa()
     * @uses PaczkaZagranicznaPremiumType::setDeklaracjaCelna2()
     * @uses PaczkaZagranicznaPremiumType::setSposobNadaniaInterconnect()
     * @uses PaczkaZagranicznaPremiumType::setPotwierdzenieDoreczenia()
     * @uses PaczkaZagranicznaPremiumType::setUbezpieczenie()
     * @uses PaczkaZagranicznaPremiumType::setNumerPrzesylkiKlienta()
     * @uses PaczkaZagranicznaPremiumType::setSposobDoreczenia()
     * @param \PocztaPolska\StructType\ZwrotType $zwrot
     * @param bool $posteRestante
     * @param int $masa
     * @param \PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2
     * @param string $sposobNadaniaInterconnect
     * @param \PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @param \PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie
     * @param string $numerPrzesylkiKlienta
     * @param \PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia
     */
    public function __construct(?\PocztaPolska\StructType\ZwrotType $zwrot = null, ?bool $posteRestante = null, ?int $masa = null, ?\PocztaPolska\StructType\DeklaracjaCelna2Type $deklaracjaCelna2 = null, ?string $sposobNadaniaInterconnect = null, ?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null, ?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null, ?string $numerPrzesylkiKlienta = null, ?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null)
    {
        $this
            ->setZwrot($zwrot)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setDeklaracjaCelna2($deklaracjaCelna2)
            ->setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
            ->setPotwierdzenieDoreczenia($potwierdzenieDoreczenia)
            ->setUbezpieczenie($ubezpieczenie)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setSposobDoreczenia($sposobDoreczenia);
    }
    /**
     * Get zwrot value
     * @return \PocztaPolska\StructType\ZwrotType|null
     */
    public function getZwrot(): ?\PocztaPolska\StructType\ZwrotType
    {
        return $this->zwrot;
    }
    /**
     * Set zwrot value
     * @param \PocztaPolska\StructType\ZwrotType $zwrot
     * @return \PocztaPolska\StructType\PaczkaZagranicznaPremiumType
     */
    public function setZwrot(?\PocztaPolska\StructType\ZwrotType $zwrot = null): self
    {
        $this->zwrot = $zwrot;
        
        return $this;
    }
    /**
     * Get posteRestante value
     * @return bool|null
     */
    public function getPosteRestante(): ?bool
    {
        return $this->posteRestante;
    }
    /**
     * Set posteRestante value
     * @param bool $posteRestante
     * @return \PocztaPolska\StructType\PaczkaZagranicznaPremiumType
     */
    public function setPosteRestante(?bool $posteRestante = null): self
    {
        // validation for constraint: boolean
        if (!is_null($posteRestante) && !is_bool($posteRestante)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($posteRestante, true), gettype($posteRestante)), __LINE__);
        }
        $this->posteRestante = $posteRestante;
        
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaPremiumType
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaPremiumType
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaPremiumType
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaPremiumType
     */
    public function setPotwierdzenieDoreczenia(?\PocztaPolska\StructType\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null): self
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
        
        return $this;
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaPremiumType
     */
    public function setUbezpieczenie(?\PocztaPolska\StructType\UbezpieczenieType $ubezpieczenie = null): self
    {
        $this->ubezpieczenie = $ubezpieczenie;
        
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaPremiumType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($numerPrzesylkiKlienta) && mb_strlen((string) $numerPrzesylkiKlienta) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
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
     * @return \PocztaPolska\StructType\PaczkaZagranicznaPremiumType
     */
    public function setSposobDoreczenia(?\PocztaPolska\StructType\SposobDoreczeniaType $sposobDoreczenia = null): self
    {
        $this->sposobDoreczenia = $sposobDoreczenia;
        
        return $this;
    }
}
