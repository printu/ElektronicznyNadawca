<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for urzadNadaniaFullType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UrzadNadaniaFullType extends AbstractStructBase
{
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * @var int|null
     */
    protected ?int $urzadNadania = null;
    /**
     * The opis
     * @var string|null
     */
    protected ?string $opis = null;
    /**
     * The nazwaWydruk
     * @var string|null
     */
    protected ?string $nazwaWydruk = null;
    /**
     * Constructor method for urzadNadaniaFullType
     * @uses UrzadNadaniaFullType::setUrzadNadania()
     * @uses UrzadNadaniaFullType::setOpis()
     * @uses UrzadNadaniaFullType::setNazwaWydruk()
     * @param int $urzadNadania
     * @param string $opis
     * @param string $nazwaWydruk
     */
    public function __construct(?int $urzadNadania = null, ?string $opis = null, ?string $nazwaWydruk = null)
    {
        $this
            ->setUrzadNadania($urzadNadania)
            ->setOpis($opis)
            ->setNazwaWydruk($nazwaWydruk);
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
     * @return \PocztaPolska\StructType\UrzadNadaniaFullType
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
     * Get opis value
     * @return string|null
     */
    public function getOpis(): ?string
    {
        return $this->opis;
    }
    /**
     * Set opis value
     * @param string $opis
     * @return \PocztaPolska\StructType\UrzadNadaniaFullType
     */
    public function setOpis(?string $opis = null): self
    {
        // validation for constraint: string
        if (!is_null($opis) && !is_string($opis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($opis, true), gettype($opis)), __LINE__);
        }
        $this->opis = $opis;
        
        return $this;
    }
    /**
     * Get nazwaWydruk value
     * @return string|null
     */
    public function getNazwaWydruk(): ?string
    {
        return $this->nazwaWydruk;
    }
    /**
     * Set nazwaWydruk value
     * @param string $nazwaWydruk
     * @return \PocztaPolska\StructType\UrzadNadaniaFullType
     */
    public function setNazwaWydruk(?string $nazwaWydruk = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwaWydruk) && !is_string($nazwaWydruk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaWydruk, true), gettype($nazwaWydruk)), __LINE__);
        }
        $this->nazwaWydruk = $nazwaWydruk;
        
        return $this;
    }
}
