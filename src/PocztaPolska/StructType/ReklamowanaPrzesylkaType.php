<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reklamowanaPrzesylkaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReklamowanaPrzesylkaType extends AbstractStructBase
{
    /**
     * The przesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\PrzesylkaType
     */
    protected \PocztaPolska\StructType\PrzesylkaType $przesylka;
    /**
     * The powodReklamacji
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\PowodReklamacjiType
     */
    protected \PocztaPolska\StructType\PowodReklamacjiType $powodReklamacji;
    /**
     * The dataNadania
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $dataNadania;
    /**
     * The nrb
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 26
     * - maxOccurs: 1
     * - minLength: 0
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nrb = null;
    /**
     * The numerFaktury
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 100
     * - maxOccurs: 1
     * - minLength: 0
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerFaktury = null;
    /**
     * The ezgoda
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ezgoda = null;
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * @var int|null
     */
    protected ?int $urzadNadania = null;
    /**
     * The powodReklamacjiOpis
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $powodReklamacjiOpis = null;
    /**
     * The odszkodowanie
     * @var int|null
     */
    protected ?int $odszkodowanie = null;
    /**
     * The oplata
     * @var int|null
     */
    protected ?int $oplata = null;
    /**
     * The oczekiwaneOdszkodowanie
     * @var int|null
     */
    protected ?int $oczekiwaneOdszkodowanie = null;
    /**
     * Constructor method for reklamowanaPrzesylkaType
     * @uses ReklamowanaPrzesylkaType::setPrzesylka()
     * @uses ReklamowanaPrzesylkaType::setPowodReklamacji()
     * @uses ReklamowanaPrzesylkaType::setDataNadania()
     * @uses ReklamowanaPrzesylkaType::setNrb()
     * @uses ReklamowanaPrzesylkaType::setNumerFaktury()
     * @uses ReklamowanaPrzesylkaType::setEzgoda()
     * @uses ReklamowanaPrzesylkaType::setUrzadNadania()
     * @uses ReklamowanaPrzesylkaType::setPowodReklamacjiOpis()
     * @uses ReklamowanaPrzesylkaType::setOdszkodowanie()
     * @uses ReklamowanaPrzesylkaType::setOplata()
     * @uses ReklamowanaPrzesylkaType::setOczekiwaneOdszkodowanie()
     * @param \PocztaPolska\StructType\PrzesylkaType $przesylka
     * @param \PocztaPolska\StructType\PowodReklamacjiType $powodReklamacji
     * @param string $dataNadania
     * @param string $nrb
     * @param string $numerFaktury
     * @param bool $ezgoda
     * @param int $urzadNadania
     * @param string $powodReklamacjiOpis
     * @param int $odszkodowanie
     * @param int $oplata
     * @param int $oczekiwaneOdszkodowanie
     */
    public function __construct(\PocztaPolska\StructType\PrzesylkaType $przesylka, \PocztaPolska\StructType\PowodReklamacjiType $powodReklamacji, string $dataNadania, ?string $nrb = null, ?string $numerFaktury = null, ?bool $ezgoda = null, ?int $urzadNadania = null, ?string $powodReklamacjiOpis = null, ?int $odszkodowanie = null, ?int $oplata = null, ?int $oczekiwaneOdszkodowanie = null)
    {
        $this
            ->setPrzesylka($przesylka)
            ->setPowodReklamacji($powodReklamacji)
            ->setDataNadania($dataNadania)
            ->setNrb($nrb)
            ->setNumerFaktury($numerFaktury)
            ->setEzgoda($ezgoda)
            ->setUrzadNadania($urzadNadania)
            ->setPowodReklamacjiOpis($powodReklamacjiOpis)
            ->setOdszkodowanie($odszkodowanie)
            ->setOplata($oplata)
            ->setOczekiwaneOdszkodowanie($oczekiwaneOdszkodowanie);
    }
    /**
     * Get przesylka value
     * @return \PocztaPolska\StructType\PrzesylkaType
     */
    public function getPrzesylka(): \PocztaPolska\StructType\PrzesylkaType
    {
        return $this->przesylka;
    }
    /**
     * Set przesylka value
     * @param \PocztaPolska\StructType\PrzesylkaType $przesylka
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setPrzesylka(\PocztaPolska\StructType\PrzesylkaType $przesylka): self
    {
        $this->przesylka = $przesylka;
        
        return $this;
    }
    /**
     * Get powodReklamacji value
     * @return \PocztaPolska\StructType\PowodReklamacjiType
     */
    public function getPowodReklamacji(): \PocztaPolska\StructType\PowodReklamacjiType
    {
        return $this->powodReklamacji;
    }
    /**
     * Set powodReklamacji value
     * @param \PocztaPolska\StructType\PowodReklamacjiType $powodReklamacji
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setPowodReklamacji(\PocztaPolska\StructType\PowodReklamacjiType $powodReklamacji): self
    {
        $this->powodReklamacji = $powodReklamacji;
        
        return $this;
    }
    /**
     * Get dataNadania value
     * @return string
     */
    public function getDataNadania(): string
    {
        return $this->dataNadania;
    }
    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setDataNadania(string $dataNadania): self
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;
        
        return $this;
    }
    /**
     * Get nrb value
     * @return string|null
     */
    public function getNrb(): ?string
    {
        return $this->nrb;
    }
    /**
     * Set nrb value
     * @param string $nrb
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setNrb(?string $nrb = null): self
    {
        // validation for constraint: string
        if (!is_null($nrb) && !is_string($nrb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nrb, true), gettype($nrb)), __LINE__);
        }
        // validation for constraint: maxLength(26)
        if (!is_null($nrb) && mb_strlen((string) $nrb) > 26) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 26', mb_strlen((string) $nrb)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($nrb) && mb_strlen((string) $nrb) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $nrb)), __LINE__);
        }
        $this->nrb = $nrb;
        
        return $this;
    }
    /**
     * Get numerFaktury value
     * @return string|null
     */
    public function getNumerFaktury(): ?string
    {
        return $this->numerFaktury;
    }
    /**
     * Set numerFaktury value
     * @param string $numerFaktury
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setNumerFaktury(?string $numerFaktury = null): self
    {
        // validation for constraint: string
        if (!is_null($numerFaktury) && !is_string($numerFaktury)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerFaktury, true), gettype($numerFaktury)), __LINE__);
        }
        // validation for constraint: maxLength(100)
        if (!is_null($numerFaktury) && mb_strlen((string) $numerFaktury) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 100', mb_strlen((string) $numerFaktury)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($numerFaktury) && mb_strlen((string) $numerFaktury) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $numerFaktury)), __LINE__);
        }
        $this->numerFaktury = $numerFaktury;
        
        return $this;
    }
    /**
     * Get ezgoda value
     * @return bool|null
     */
    public function getEzgoda(): ?bool
    {
        return $this->ezgoda;
    }
    /**
     * Set ezgoda value
     * @param bool $ezgoda
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setEzgoda(?bool $ezgoda = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ezgoda) && !is_bool($ezgoda)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ezgoda, true), gettype($ezgoda)), __LINE__);
        }
        $this->ezgoda = $ezgoda;
        
        return $this;
    }
    /**
     * Get urzadNadania value
     * @return int|null
     */
    public function getUrzadNadania(): ?int
    {
        return $this->urzadNadania;
    }
    /**
     * Set urzadNadania value
     * @param int $urzadNadania
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setUrzadNadania(?int $urzadNadania = null): self
    {
        // validation for constraint: int
        if (!is_null($urzadNadania) && !(is_int($urzadNadania) || ctype_digit($urzadNadania))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($urzadNadania, true), gettype($urzadNadania)), __LINE__);
        }
        $this->urzadNadania = $urzadNadania;
        
        return $this;
    }
    /**
     * Get powodReklamacjiOpis value
     * @return string|null
     */
    public function getPowodReklamacjiOpis(): ?string
    {
        return $this->powodReklamacjiOpis;
    }
    /**
     * Set powodReklamacjiOpis value
     * @param string $powodReklamacjiOpis
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setPowodReklamacjiOpis(?string $powodReklamacjiOpis = null): self
    {
        // validation for constraint: string
        if (!is_null($powodReklamacjiOpis) && !is_string($powodReklamacjiOpis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powodReklamacjiOpis, true), gettype($powodReklamacjiOpis)), __LINE__);
        }
        $this->powodReklamacjiOpis = $powodReklamacjiOpis;
        
        return $this;
    }
    /**
     * Get odszkodowanie value
     * @return int|null
     */
    public function getOdszkodowanie(): ?int
    {
        return $this->odszkodowanie;
    }
    /**
     * Set odszkodowanie value
     * @param int $odszkodowanie
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setOdszkodowanie(?int $odszkodowanie = null): self
    {
        // validation for constraint: int
        if (!is_null($odszkodowanie) && !(is_int($odszkodowanie) || ctype_digit($odszkodowanie))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($odszkodowanie, true), gettype($odszkodowanie)), __LINE__);
        }
        $this->odszkodowanie = $odszkodowanie;
        
        return $this;
    }
    /**
     * Get oplata value
     * @return int|null
     */
    public function getOplata(): ?int
    {
        return $this->oplata;
    }
    /**
     * Set oplata value
     * @param int $oplata
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setOplata(?int $oplata = null): self
    {
        // validation for constraint: int
        if (!is_null($oplata) && !(is_int($oplata) || ctype_digit($oplata))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($oplata, true), gettype($oplata)), __LINE__);
        }
        $this->oplata = $oplata;
        
        return $this;
    }
    /**
     * Get oczekiwaneOdszkodowanie value
     * @return int|null
     */
    public function getOczekiwaneOdszkodowanie(): ?int
    {
        return $this->oczekiwaneOdszkodowanie;
    }
    /**
     * Set oczekiwaneOdszkodowanie value
     * @param int $oczekiwaneOdszkodowanie
     * @return \PocztaPolska\StructType\ReklamowanaPrzesylkaType
     */
    public function setOczekiwaneOdszkodowanie(?int $oczekiwaneOdszkodowanie = null): self
    {
        // validation for constraint: int
        if (!is_null($oczekiwaneOdszkodowanie) && !(is_int($oczekiwaneOdszkodowanie) || ctype_digit($oczekiwaneOdszkodowanie))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($oczekiwaneOdszkodowanie, true), gettype($oczekiwaneOdszkodowanie)), __LINE__);
        }
        $this->oczekiwaneOdszkodowanie = $oczekiwaneOdszkodowanie;
        
        return $this;
    }
}
