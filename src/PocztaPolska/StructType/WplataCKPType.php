<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wplataCKPType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WplataCKPType extends AbstractStructBase
{
    /**
     * The unikalnyIdentyfikatorWplaty
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $unikalnyIdentyfikatorWplaty;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * - use: required
     * @var string
     */
    protected string $numerNadania;
    /**
     * The kwota
     * Meta information extracted from the WSDL
     * - documentation: Kwota w groszach
     * - use: required
     * @var int
     */
    protected int $kwota;
    /**
     * The dataPobrania
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $dataPobrania;
    /**
     * The idUmowy
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $idUmowy;
    /**
     * The tytulPrzelewuZbiorczego
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $tytulPrzelewuZbiorczego;
    /**
     * The tytulPobrania
     * @var string|null
     */
    protected ?string $tytulPobrania = null;
    /**
     * The dataPrzelewu
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $dataPrzelewu = null;
    /**
     * Constructor method for wplataCKPType
     * @uses WplataCKPType::setUnikalnyIdentyfikatorWplaty()
     * @uses WplataCKPType::setNumerNadania()
     * @uses WplataCKPType::setKwota()
     * @uses WplataCKPType::setDataPobrania()
     * @uses WplataCKPType::setIdUmowy()
     * @uses WplataCKPType::setTytulPrzelewuZbiorczego()
     * @uses WplataCKPType::setTytulPobrania()
     * @uses WplataCKPType::setDataPrzelewu()
     * @param string $unikalnyIdentyfikatorWplaty
     * @param string $numerNadania
     * @param int $kwota
     * @param string $dataPobrania
     * @param int $idUmowy
     * @param string $tytulPrzelewuZbiorczego
     * @param string $tytulPobrania
     * @param string $dataPrzelewu
     */
    public function __construct(string $unikalnyIdentyfikatorWplaty, string $numerNadania, int $kwota, string $dataPobrania, int $idUmowy, string $tytulPrzelewuZbiorczego, ?string $tytulPobrania = null, ?string $dataPrzelewu = null)
    {
        $this
            ->setUnikalnyIdentyfikatorWplaty($unikalnyIdentyfikatorWplaty)
            ->setNumerNadania($numerNadania)
            ->setKwota($kwota)
            ->setDataPobrania($dataPobrania)
            ->setIdUmowy($idUmowy)
            ->setTytulPrzelewuZbiorczego($tytulPrzelewuZbiorczego)
            ->setTytulPobrania($tytulPobrania)
            ->setDataPrzelewu($dataPrzelewu);
    }
    /**
     * Get unikalnyIdentyfikatorWplaty value
     * @return string
     */
    public function getUnikalnyIdentyfikatorWplaty(): string
    {
        return $this->unikalnyIdentyfikatorWplaty;
    }
    /**
     * Set unikalnyIdentyfikatorWplaty value
     * @param string $unikalnyIdentyfikatorWplaty
     * @return \PocztaPolska\StructType\WplataCKPType
     */
    public function setUnikalnyIdentyfikatorWplaty(string $unikalnyIdentyfikatorWplaty): self
    {
        // validation for constraint: string
        if (!is_null($unikalnyIdentyfikatorWplaty) && !is_string($unikalnyIdentyfikatorWplaty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unikalnyIdentyfikatorWplaty, true), gettype($unikalnyIdentyfikatorWplaty)), __LINE__);
        }
        $this->unikalnyIdentyfikatorWplaty = $unikalnyIdentyfikatorWplaty;
        
        return $this;
    }
    /**
     * Get numerNadania value
     * @return string
     */
    public function getNumerNadania(): string
    {
        return $this->numerNadania;
    }
    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \PocztaPolska\StructType\WplataCKPType
     */
    public function setNumerNadania(string $numerNadania): self
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;
        
        return $this;
    }
    /**
     * Get kwota value
     * @return int
     */
    public function getKwota(): int
    {
        return $this->kwota;
    }
    /**
     * Set kwota value
     * @param int $kwota
     * @return \PocztaPolska\StructType\WplataCKPType
     */
    public function setKwota(int $kwota): self
    {
        // validation for constraint: int
        if (!is_null($kwota) && !(is_int($kwota) || ctype_digit($kwota))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kwota, true), gettype($kwota)), __LINE__);
        }
        $this->kwota = $kwota;
        
        return $this;
    }
    /**
     * Get dataPobrania value
     * @return string
     */
    public function getDataPobrania(): string
    {
        return $this->dataPobrania;
    }
    /**
     * Set dataPobrania value
     * @param string $dataPobrania
     * @return \PocztaPolska\StructType\WplataCKPType
     */
    public function setDataPobrania(string $dataPobrania): self
    {
        // validation for constraint: string
        if (!is_null($dataPobrania) && !is_string($dataPobrania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataPobrania, true), gettype($dataPobrania)), __LINE__);
        }
        $this->dataPobrania = $dataPobrania;
        
        return $this;
    }
    /**
     * Get idUmowy value
     * @return int
     */
    public function getIdUmowy(): int
    {
        return $this->idUmowy;
    }
    /**
     * Set idUmowy value
     * @param int $idUmowy
     * @return \PocztaPolska\StructType\WplataCKPType
     */
    public function setIdUmowy(int $idUmowy): self
    {
        // validation for constraint: int
        if (!is_null($idUmowy) && !(is_int($idUmowy) || ctype_digit($idUmowy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idUmowy, true), gettype($idUmowy)), __LINE__);
        }
        $this->idUmowy = $idUmowy;
        
        return $this;
    }
    /**
     * Get tytulPrzelewuZbiorczego value
     * @return string
     */
    public function getTytulPrzelewuZbiorczego(): string
    {
        return $this->tytulPrzelewuZbiorczego;
    }
    /**
     * Set tytulPrzelewuZbiorczego value
     * @param string $tytulPrzelewuZbiorczego
     * @return \PocztaPolska\StructType\WplataCKPType
     */
    public function setTytulPrzelewuZbiorczego(string $tytulPrzelewuZbiorczego): self
    {
        // validation for constraint: string
        if (!is_null($tytulPrzelewuZbiorczego) && !is_string($tytulPrzelewuZbiorczego)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tytulPrzelewuZbiorczego, true), gettype($tytulPrzelewuZbiorczego)), __LINE__);
        }
        $this->tytulPrzelewuZbiorczego = $tytulPrzelewuZbiorczego;
        
        return $this;
    }
    /**
     * Get tytulPobrania value
     * @return string|null
     */
    public function getTytulPobrania(): ?string
    {
        return $this->tytulPobrania;
    }
    /**
     * Set tytulPobrania value
     * @param string $tytulPobrania
     * @return \PocztaPolska\StructType\WplataCKPType
     */
    public function setTytulPobrania(?string $tytulPobrania = null): self
    {
        // validation for constraint: string
        if (!is_null($tytulPobrania) && !is_string($tytulPobrania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tytulPobrania, true), gettype($tytulPobrania)), __LINE__);
        }
        $this->tytulPobrania = $tytulPobrania;
        
        return $this;
    }
    /**
     * Get dataPrzelewu value
     * @return string|null
     */
    public function getDataPrzelewu(): ?string
    {
        return $this->dataPrzelewu;
    }
    /**
     * Set dataPrzelewu value
     * @param string $dataPrzelewu
     * @return \PocztaPolska\StructType\WplataCKPType
     */
    public function setDataPrzelewu(?string $dataPrzelewu = null): self
    {
        // validation for constraint: string
        if (!is_null($dataPrzelewu) && !is_string($dataPrzelewu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataPrzelewu, true), gettype($dataPrzelewu)), __LINE__);
        }
        $this->dataPrzelewu = $dataPrzelewu;
        
        return $this;
    }
}
