<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eZwrotKartaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EZwrotKartaType extends AbstractStructBase
{
    /**
     * The idKarta
     * @var int|null
     */
    protected ?int $idKarta = null;
    /**
     * The idAdresKorespondencyjny
     * @var int|null
     */
    protected ?int $idAdresKorespondencyjny = null;
    /**
     * Constructor method for eZwrotKartaType
     * @uses EZwrotKartaType::setIdKarta()
     * @uses EZwrotKartaType::setIdAdresKorespondencyjny()
     * @param int $idKarta
     * @param int $idAdresKorespondencyjny
     */
    public function __construct(?int $idKarta = null, ?int $idAdresKorespondencyjny = null)
    {
        $this
            ->setIdKarta($idKarta)
            ->setIdAdresKorespondencyjny($idAdresKorespondencyjny);
    }
    /**
     * Get idKarta value
     * @return int|null
     */
    public function getIdKarta(): ?int
    {
        return $this->idKarta;
    }
    /**
     * Set idKarta value
     * @param int $idKarta
     * @return \PocztaPolska\StructType\EZwrotKartaType
     */
    public function setIdKarta(?int $idKarta = null): self
    {
        // validation for constraint: int
        if (!is_null($idKarta) && !(is_int($idKarta) || ctype_digit($idKarta))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idKarta, true), gettype($idKarta)), __LINE__);
        }
        $this->idKarta = $idKarta;
        
        return $this;
    }
    /**
     * Get idAdresKorespondencyjny value
     * @return int|null
     */
    public function getIdAdresKorespondencyjny(): ?int
    {
        return $this->idAdresKorespondencyjny;
    }
    /**
     * Set idAdresKorespondencyjny value
     * @param int $idAdresKorespondencyjny
     * @return \PocztaPolska\StructType\EZwrotKartaType
     */
    public function setIdAdresKorespondencyjny(?int $idAdresKorespondencyjny = null): self
    {
        // validation for constraint: int
        if (!is_null($idAdresKorespondencyjny) && !(is_int($idAdresKorespondencyjny) || ctype_digit($idAdresKorespondencyjny))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idAdresKorespondencyjny, true), gettype($idAdresKorespondencyjny)), __LINE__);
        }
        $this->idAdresKorespondencyjny = $idAdresKorespondencyjny;
        
        return $this;
    }
}
