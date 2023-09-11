<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for profilType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProfilType extends AdresType
{
    /**
     * The idProfil
     * @var int|null
     */
    protected ?int $idProfil = null;
    /**
     * The nazwaSkrocona
     * @var string|null
     */
    protected ?string $nazwaSkrocona = null;
    /**
     * The fax
     * @var string|null
     */
    protected ?string $fax = null;

    /**
     * Constructor method for profilType
     * @uses ProfilType::setIdProfil()
     * @uses ProfilType::setNazwaSkrocona()
     * @uses ProfilType::setFax()
     * @param int $idProfil
     * @param string $nazwaSkrocona
     * @param string $fax
     */
    public function __construct(?int $idProfil = null, ?string $nazwaSkrocona = null, ?string $fax = null)
    {
        $this
            ->setIdProfil($idProfil)
            ->setNazwaSkrocona($nazwaSkrocona)
            ->setFax($fax);
    }

    /**
     * Get idProfil value
     * @return int|null
     */
    public function getIdProfil(): ?int
    {
        return $this->idProfil;
    }

    /**
     * Set idProfil value
     * @param int $idProfil
     * @return \PocztaPolska\StructType\ProfilType
     */
    public function setIdProfil(?int $idProfil = null): self
    {
        // validation for constraint: int
        if (!is_null($idProfil) && !(is_int($idProfil) || ctype_digit($idProfil))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idProfil, true), gettype($idProfil)), __LINE__);
        }
        $this->idProfil = $idProfil;

        return $this;
    }

    /**
     * Get nazwaSkrocona value
     * @return string|null
     */
    public function getNazwaSkrocona(): ?string
    {
        return $this->nazwaSkrocona;
    }

    /**
     * Set nazwaSkrocona value
     * @param string $nazwaSkrocona
     * @return \PocztaPolska\StructType\ProfilType
     */
    public function setNazwaSkrocona(?string $nazwaSkrocona = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwaSkrocona) && !is_string($nazwaSkrocona)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaSkrocona, true), gettype($nazwaSkrocona)), __LINE__);
        }
        $this->nazwaSkrocona = $nazwaSkrocona;

        return $this;
    }

    /**
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * Set fax value
     * @param string $fax
     * @return \PocztaPolska\StructType\ProfilType
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;

        return $this;
    }
}
