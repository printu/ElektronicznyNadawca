<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for powodSzczegolowyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PowodSzczegolowyType extends AbstractStructBase
{
    /**
     * The idPowodSzczegolowy
     * @var int|null
     */
    protected ?int $idPowodSzczegolowy = null;
    /**
     * The powodSzczegolowyOpis
     * @var string|null
     */
    protected ?string $powodSzczegolowyOpis = null;
    /**
     * Constructor method for powodSzczegolowyType
     * @uses PowodSzczegolowyType::setIdPowodSzczegolowy()
     * @uses PowodSzczegolowyType::setPowodSzczegolowyOpis()
     * @param int $idPowodSzczegolowy
     * @param string $powodSzczegolowyOpis
     */
    public function __construct(?int $idPowodSzczegolowy = null, ?string $powodSzczegolowyOpis = null)
    {
        $this
            ->setIdPowodSzczegolowy($idPowodSzczegolowy)
            ->setPowodSzczegolowyOpis($powodSzczegolowyOpis);
    }
    /**
     * Get idPowodSzczegolowy value
     * @return int|null
     */
    public function getIdPowodSzczegolowy(): ?int
    {
        return $this->idPowodSzczegolowy;
    }
    /**
     * Set idPowodSzczegolowy value
     * @param int $idPowodSzczegolowy
     * @return \PocztaPolska\StructType\PowodSzczegolowyType
     */
    public function setIdPowodSzczegolowy(?int $idPowodSzczegolowy = null): self
    {
        // validation for constraint: int
        if (!is_null($idPowodSzczegolowy) && !(is_int($idPowodSzczegolowy) || ctype_digit($idPowodSzczegolowy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPowodSzczegolowy, true), gettype($idPowodSzczegolowy)), __LINE__);
        }
        $this->idPowodSzczegolowy = $idPowodSzczegolowy;
        
        return $this;
    }
    /**
     * Get powodSzczegolowyOpis value
     * @return string|null
     */
    public function getPowodSzczegolowyOpis(): ?string
    {
        return $this->powodSzczegolowyOpis;
    }
    /**
     * Set powodSzczegolowyOpis value
     * @param string $powodSzczegolowyOpis
     * @return \PocztaPolska\StructType\PowodSzczegolowyType
     */
    public function setPowodSzczegolowyOpis(?string $powodSzczegolowyOpis = null): self
    {
        // validation for constraint: string
        if (!is_null($powodSzczegolowyOpis) && !is_string($powodSzczegolowyOpis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powodSzczegolowyOpis, true), gettype($powodSzczegolowyOpis)), __LINE__);
        }
        $this->powodSzczegolowyOpis = $powodSzczegolowyOpis;
        
        return $this;
    }
}
