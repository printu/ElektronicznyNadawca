<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for buforType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BuforType extends AbstractStructBase
{
    /**
     * The profil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ProfilType|null
     */
    protected ?\PocztaPolska\StructType\ProfilType $profil = null;
    /**
     * The idKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idKarta = null;
    /**
     * The idBufor
     * @var int|null
     */
    protected ?int $idBufor = null;
    /**
     * The dataNadania
     * @var string|null
     */
    protected ?string $dataNadania = null;
    /**
     * The urzadNadania
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * @var int|null
     */
    protected ?int $urzadNadania = null;
    /**
     * The active
     * @var bool|null
     */
    protected ?bool $active = null;
    /**
     * The opis
     * @var string|null
     */
    protected ?string $opis = null;
    /**
     * The aktualizujPlanowanaDateNadaniaPrzesylek
     * Meta information extracted from the WSDL
     * - documentation: W przypadku ustawienia TRUE zostaną zmodyfikowane planowane daty nadania dla przesyłek znajdujących się w aktualizowanym buforze. Dla przesyłek dla których wcześniej pobrano etykietę adresową zostaną wygenerowane nowe
     * przesyłki z identycznymi parametrami jednak z NOWYM numerem nadania i GUID. Przesyłki pierwotne (tzn. te dla których pobrano wcześniej etykiety adresowe) nie będą już dostępne. W przypadku ustawienia FALSE lub nie przekazania tego atrybutu,
     * planowane daty nadania przesyłek nie będą modyfikowane.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $aktualizujPlanowanaDateNadaniaPrzesylek = null;

    /**
     * Constructor method for buforType
     * @uses BuforType::setProfil()
     * @uses BuforType::setIdKarta()
     * @uses BuforType::setIdBufor()
     * @uses BuforType::setDataNadania()
     * @uses BuforType::setUrzadNadania()
     * @uses BuforType::setActive()
     * @uses BuforType::setOpis()
     * @uses BuforType::setAktualizujPlanowanaDateNadaniaPrzesylek()
     * @param \PocztaPolska\StructType\ProfilType $profil
     * @param int $idKarta
     * @param int $idBufor
     * @param string $dataNadania
     * @param int $urzadNadania
     * @param bool $active
     * @param string $opis
     * @param bool $aktualizujPlanowanaDateNadaniaPrzesylek
     */
    public function __construct(?\PocztaPolska\StructType\ProfilType $profil = null, ?int $idKarta = null, ?int $idBufor = null, ?string $dataNadania = null, ?int $urzadNadania = null, ?bool $active = null, ?string $opis = null, ?bool $aktualizujPlanowanaDateNadaniaPrzesylek = null)
    {
        $this
            ->setProfil($profil)
            ->setIdKarta($idKarta)
            ->setIdBufor($idBufor)
            ->setDataNadania($dataNadania)
            ->setUrzadNadania($urzadNadania)
            ->setActive($active)
            ->setOpis($opis)
            ->setAktualizujPlanowanaDateNadaniaPrzesylek($aktualizujPlanowanaDateNadaniaPrzesylek);
    }

    /**
     * Get profil value
     * @return \PocztaPolska\StructType\ProfilType|null
     */
    public function getProfil(): ?\PocztaPolska\StructType\ProfilType
    {
        return $this->profil;
    }

    /**
     * Set profil value
     * @param \PocztaPolska\StructType\ProfilType $profil
     * @return \PocztaPolska\StructType\BuforType
     */
    public function setProfil(?\PocztaPolska\StructType\ProfilType $profil = null): self
    {
        $this->profil = $profil;

        return $this;
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
     * @return \PocztaPolska\StructType\BuforType
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
     * Get idBufor value
     * @return int|null
     */
    public function getIdBufor(): ?int
    {
        return $this->idBufor;
    }

    /**
     * Set idBufor value
     * @param int $idBufor
     * @return \PocztaPolska\StructType\BuforType
     */
    public function setIdBufor(?int $idBufor = null): self
    {
        // validation for constraint: int
        if (!is_null($idBufor) && !(is_int($idBufor) || ctype_digit($idBufor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idBufor, true), gettype($idBufor)), __LINE__);
        }
        $this->idBufor = $idBufor;

        return $this;
    }

    /**
     * Get dataNadania value
     * @return string|null
     */
    public function getDataNadania(): ?string
    {
        return $this->dataNadania;
    }

    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \PocztaPolska\StructType\BuforType
     */
    public function setDataNadania(?string $dataNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;

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
     * @return \PocztaPolska\StructType\BuforType
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
     * Get active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Set active value
     * @param bool $active
     * @return \PocztaPolska\StructType\BuforType
     */
    public function setActive(?bool $active = null): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->active = $active;

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
     * @return \PocztaPolska\StructType\BuforType
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
     * Get aktualizujPlanowanaDateNadaniaPrzesylek value
     * @return bool|null
     */
    public function getAktualizujPlanowanaDateNadaniaPrzesylek(): ?bool
    {
        return $this->aktualizujPlanowanaDateNadaniaPrzesylek;
    }

    /**
     * Set aktualizujPlanowanaDateNadaniaPrzesylek value
     * @param bool $aktualizujPlanowanaDateNadaniaPrzesylek
     * @return \PocztaPolska\StructType\BuforType
     */
    public function setAktualizujPlanowanaDateNadaniaPrzesylek(?bool $aktualizujPlanowanaDateNadaniaPrzesylek = null): self
    {
        // validation for constraint: boolean
        if (!is_null($aktualizujPlanowanaDateNadaniaPrzesylek) && !is_bool($aktualizujPlanowanaDateNadaniaPrzesylek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aktualizujPlanowanaDateNadaniaPrzesylek, true), gettype($aktualizujPlanowanaDateNadaniaPrzesylek)), __LINE__);
        }
        $this->aktualizujPlanowanaDateNadaniaPrzesylek = $aktualizujPlanowanaDateNadaniaPrzesylek;

        return $this;
    }
}
