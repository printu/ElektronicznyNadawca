<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for wspolrzednaGeograficznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WspolrzednaGeograficznaType extends AbstractStructBase
{
    /**
     * The dec
     * @var float|null
     */
    protected ?float $dec = null;
    /**
     * The stopien
     * @var int|null
     */
    protected ?int $stopien = null;
    /**
     * The minuta
     * @var int|null
     */
    protected ?int $minuta = null;
    /**
     * The sekunda
     * @var float|null
     */
    protected ?float $sekunda = null;
    /**
     * Constructor method for wspolrzednaGeograficznaType
     * @uses WspolrzednaGeograficznaType::setDec()
     * @uses WspolrzednaGeograficznaType::setStopien()
     * @uses WspolrzednaGeograficznaType::setMinuta()
     * @uses WspolrzednaGeograficznaType::setSekunda()
     * @param float $dec
     * @param int $stopien
     * @param int $minuta
     * @param float $sekunda
     */
    public function __construct(?float $dec = null, ?int $stopien = null, ?int $minuta = null, ?float $sekunda = null)
    {
        $this
            ->setDec($dec)
            ->setStopien($stopien)
            ->setMinuta($minuta)
            ->setSekunda($sekunda);
    }
    /**
     * Get dec value
     * @return float|null
     */
    public function getDec(): ?float
    {
        return $this->dec;
    }
    /**
     * Set dec value
     * @param float $dec
     * @return \PocztaPolska\StructType\WspolrzednaGeograficznaType
     */
    public function setDec(?float $dec = null): self
    {
        // validation for constraint: float
        if (!is_null($dec) && !(is_float($dec) || is_numeric($dec))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($dec, true), gettype($dec)), __LINE__);
        }
        $this->dec = $dec;
        
        return $this;
    }
    /**
     * Get stopien value
     * @return int|null
     */
    public function getStopien(): ?int
    {
        return $this->stopien;
    }
    /**
     * Set stopien value
     * @param int $stopien
     * @return \PocztaPolska\StructType\WspolrzednaGeograficznaType
     */
    public function setStopien(?int $stopien = null): self
    {
        // validation for constraint: int
        if (!is_null($stopien) && !(is_int($stopien) || ctype_digit($stopien))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stopien, true), gettype($stopien)), __LINE__);
        }
        $this->stopien = $stopien;
        
        return $this;
    }
    /**
     * Get minuta value
     * @return int|null
     */
    public function getMinuta(): ?int
    {
        return $this->minuta;
    }
    /**
     * Set minuta value
     * @param int $minuta
     * @return \PocztaPolska\StructType\WspolrzednaGeograficznaType
     */
    public function setMinuta(?int $minuta = null): self
    {
        // validation for constraint: int
        if (!is_null($minuta) && !(is_int($minuta) || ctype_digit($minuta))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minuta, true), gettype($minuta)), __LINE__);
        }
        $this->minuta = $minuta;
        
        return $this;
    }
    /**
     * Get sekunda value
     * @return float|null
     */
    public function getSekunda(): ?float
    {
        return $this->sekunda;
    }
    /**
     * Set sekunda value
     * @param float $sekunda
     * @return \PocztaPolska\StructType\WspolrzednaGeograficznaType
     */
    public function setSekunda(?float $sekunda = null): self
    {
        // validation for constraint: float
        if (!is_null($sekunda) && !(is_float($sekunda) || is_numeric($sekunda))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sekunda, true), gettype($sekunda)), __LINE__);
        }
        $this->sekunda = $sekunda;
        
        return $this;
    }
}
