<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SzczegolyZawartosciPrzesylkiZagranicznejType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SzczegolyZawartosciPrzesylkiZagranicznejType extends AbstractStructBase
{
    /**
     * The okreslenieZawartosci
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $okreslenieZawartosci;
    /**
     * The ilosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ilosc;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $wartosc;
    /**
     * The masaNetto
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $masaNetto = null;
    /**
     * The numerTaryfyHs
     * Meta information extracted from the WSDL
     * - documentation: Numer taryfy Zharmonizowanego Systemu (HS)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerTaryfyHs = null;
    /**
     * The krajPochodzeniaKodAlfa2
     * Meta information extracted from the WSDL
     * - documentation: Kod ISO (alfa-2) kraju pochodzenia opisywanej zawartości
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $krajPochodzeniaKodAlfa2 = null;

    /**
     * Constructor method for SzczegolyZawartosciPrzesylkiZagranicznejType
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setOkreslenieZawartosci()
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setIlosc()
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setWartosc()
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setMasaNetto()
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setNumerTaryfyHs()
     * @uses SzczegolyZawartosciPrzesylkiZagranicznejType::setKrajPochodzeniaKodAlfa2()
     * @param string $okreslenieZawartosci
     * @param int $ilosc
     * @param float $wartosc
     * @param int $masaNetto
     * @param string $numerTaryfyHs
     * @param string $krajPochodzeniaKodAlfa2
     */
    public function __construct(string $okreslenieZawartosci, int $ilosc, float $wartosc, ?int $masaNetto = null, ?string $numerTaryfyHs = null, ?string $krajPochodzeniaKodAlfa2 = null)
    {
        $this
            ->setOkreslenieZawartosci($okreslenieZawartosci)
            ->setIlosc($ilosc)
            ->setWartosc($wartosc)
            ->setMasaNetto($masaNetto)
            ->setNumerTaryfyHs($numerTaryfyHs)
            ->setKrajPochodzeniaKodAlfa2($krajPochodzeniaKodAlfa2);
    }

    /**
     * Get okreslenieZawartosci value
     * @return string
     */
    public function getOkreslenieZawartosci(): string
    {
        return $this->okreslenieZawartosci;
    }

    /**
     * Set okreslenieZawartosci value
     * @param string $okreslenieZawartosci
     * @return \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setOkreslenieZawartosci(string $okreslenieZawartosci): self
    {
        // validation for constraint: string
        if (!is_null($okreslenieZawartosci) && !is_string($okreslenieZawartosci)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($okreslenieZawartosci, true), gettype($okreslenieZawartosci)), __LINE__);
        }
        $this->okreslenieZawartosci = $okreslenieZawartosci;

        return $this;
    }

    /**
     * Get ilosc value
     * @return int
     */
    public function getIlosc(): int
    {
        return $this->ilosc;
    }

    /**
     * Set ilosc value
     * @param int $ilosc
     * @return \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setIlosc(int $ilosc): self
    {
        // validation for constraint: int
        if (!is_null($ilosc) && !(is_int($ilosc) || ctype_digit($ilosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ilosc, true), gettype($ilosc)), __LINE__);
        }
        $this->ilosc = $ilosc;

        return $this;
    }

    /**
     * Get wartosc value
     * @return float
     */
    public function getWartosc(): float
    {
        return $this->wartosc;
    }

    /**
     * Set wartosc value
     * @param float $wartosc
     * @return \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setWartosc(float $wartosc): self
    {
        // validation for constraint: float
        if (!is_null($wartosc) && !(is_float($wartosc) || is_numeric($wartosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($wartosc, true), gettype($wartosc)), __LINE__);
        }
        $this->wartosc = $wartosc;

        return $this;
    }

    /**
     * Get masaNetto value
     * @return int|null
     */
    public function getMasaNetto(): ?int
    {
        return $this->masaNetto;
    }

    /**
     * Set masaNetto value
     * @param int $masaNetto
     * @return \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setMasaNetto(?int $masaNetto = null): self
    {
        // validation for constraint: int
        if (!is_null($masaNetto) && !(is_int($masaNetto) || ctype_digit($masaNetto))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masaNetto, true), gettype($masaNetto)), __LINE__);
        }
        $this->masaNetto = $masaNetto;

        return $this;
    }

    /**
     * Get numerTaryfyHs value
     * @return string|null
     */
    public function getNumerTaryfyHs(): ?string
    {
        return $this->numerTaryfyHs;
    }

    /**
     * Set numerTaryfyHs value
     * @param string $numerTaryfyHs
     * @return \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setNumerTaryfyHs(?string $numerTaryfyHs = null): self
    {
        // validation for constraint: string
        if (!is_null($numerTaryfyHs) && !is_string($numerTaryfyHs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerTaryfyHs, true), gettype($numerTaryfyHs)), __LINE__);
        }
        $this->numerTaryfyHs = $numerTaryfyHs;

        return $this;
    }

    /**
     * Get krajPochodzeniaKodAlfa2 value
     * @return string|null
     */
    public function getKrajPochodzeniaKodAlfa2(): ?string
    {
        return $this->krajPochodzeniaKodAlfa2;
    }

    /**
     * Set krajPochodzeniaKodAlfa2 value
     * @param string $krajPochodzeniaKodAlfa2
     * @return \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType
     */
    public function setKrajPochodzeniaKodAlfa2(?string $krajPochodzeniaKodAlfa2 = null): self
    {
        // validation for constraint: string
        if (!is_null($krajPochodzeniaKodAlfa2) && !is_string($krajPochodzeniaKodAlfa2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($krajPochodzeniaKodAlfa2, true), gettype($krajPochodzeniaKodAlfa2)), __LINE__);
        }
        $this->krajPochodzeniaKodAlfa2 = $krajPochodzeniaKodAlfa2;

        return $this;
    }
}
