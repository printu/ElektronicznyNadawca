<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zamowKuriera StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ZamowKuriera extends AbstractStructBase
{
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\AdresType
     */
    protected \PocztaPolska\StructType\AdresType $miejsceOdbioru;
    /**
     * The oczekiwanaDataOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $oczekiwanaDataOdbioru;
    /**
     * The oczekiwanaGodzinaOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $oczekiwanaGodzinaOdbioru;
    /**
     * The szacowanaIloscPrzeslek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $szacowanaIloscPrzeslek;
    /**
     * The szacowanaLacznaMasaPrzesylek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $szacowanaLacznaMasaPrzesylek;
    /**
     * The nadawca
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\AdresType|null
     */
    protected ?\PocztaPolska\StructType\AdresType $nadawca = null;
    /**
     * The potwierdzenieZamowieniaEmail
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minLength: 6
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $potwierdzenieZamowieniaEmail = null;

    /**
     * Constructor method for zamowKuriera
     * @uses ZamowKuriera::setMiejsceOdbioru()
     * @uses ZamowKuriera::setOczekiwanaDataOdbioru()
     * @uses ZamowKuriera::setOczekiwanaGodzinaOdbioru()
     * @uses ZamowKuriera::setSzacowanaIloscPrzeslek()
     * @uses ZamowKuriera::setSzacowanaLacznaMasaPrzesylek()
     * @uses ZamowKuriera::setNadawca()
     * @uses ZamowKuriera::setPotwierdzenieZamowieniaEmail()
     * @param \PocztaPolska\StructType\AdresType $miejsceOdbioru
     * @param string $oczekiwanaDataOdbioru
     * @param string $oczekiwanaGodzinaOdbioru
     * @param string $szacowanaIloscPrzeslek
     * @param string $szacowanaLacznaMasaPrzesylek
     * @param \PocztaPolska\StructType\AdresType $nadawca
     * @param string $potwierdzenieZamowieniaEmail
     */
    public function __construct(\PocztaPolska\StructType\AdresType $miejsceOdbioru, string $oczekiwanaDataOdbioru, string $oczekiwanaGodzinaOdbioru, string $szacowanaIloscPrzeslek, string $szacowanaLacznaMasaPrzesylek, ?\PocztaPolska\StructType\AdresType $nadawca = null, ?string $potwierdzenieZamowieniaEmail = null)
    {
        $this
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setOczekiwanaDataOdbioru($oczekiwanaDataOdbioru)
            ->setOczekiwanaGodzinaOdbioru($oczekiwanaGodzinaOdbioru)
            ->setSzacowanaIloscPrzeslek($szacowanaIloscPrzeslek)
            ->setSzacowanaLacznaMasaPrzesylek($szacowanaLacznaMasaPrzesylek)
            ->setNadawca($nadawca)
            ->setPotwierdzenieZamowieniaEmail($potwierdzenieZamowieniaEmail);
    }

    /**
     * Get miejsceOdbioru value
     * @return \PocztaPolska\StructType\AdresType
     */
    public function getMiejsceOdbioru(): \PocztaPolska\StructType\AdresType
    {
        return $this->miejsceOdbioru;
    }

    /**
     * Set miejsceOdbioru value
     * @param \PocztaPolska\StructType\AdresType $miejsceOdbioru
     * @return \PocztaPolska\StructType\ZamowKuriera
     */
    public function setMiejsceOdbioru(\PocztaPolska\StructType\AdresType $miejsceOdbioru): self
    {
        $this->miejsceOdbioru = $miejsceOdbioru;

        return $this;
    }

    /**
     * Get oczekiwanaDataOdbioru value
     * @return string
     */
    public function getOczekiwanaDataOdbioru(): string
    {
        return $this->oczekiwanaDataOdbioru;
    }

    /**
     * Set oczekiwanaDataOdbioru value
     * @param string $oczekiwanaDataOdbioru
     * @return \PocztaPolska\StructType\ZamowKuriera
     */
    public function setOczekiwanaDataOdbioru(string $oczekiwanaDataOdbioru): self
    {
        // validation for constraint: string
        if (!is_null($oczekiwanaDataOdbioru) && !is_string($oczekiwanaDataOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanaDataOdbioru, true), gettype($oczekiwanaDataOdbioru)), __LINE__);
        }
        $this->oczekiwanaDataOdbioru = $oczekiwanaDataOdbioru;

        return $this;
    }

    /**
     * Get oczekiwanaGodzinaOdbioru value
     * @return string
     */
    public function getOczekiwanaGodzinaOdbioru(): string
    {
        return $this->oczekiwanaGodzinaOdbioru;
    }

    /**
     * Set oczekiwanaGodzinaOdbioru value
     * @param string $oczekiwanaGodzinaOdbioru
     * @return \PocztaPolska\StructType\ZamowKuriera
     */
    public function setOczekiwanaGodzinaOdbioru(string $oczekiwanaGodzinaOdbioru): self
    {
        // validation for constraint: string
        if (!is_null($oczekiwanaGodzinaOdbioru) && !is_string($oczekiwanaGodzinaOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanaGodzinaOdbioru, true), gettype($oczekiwanaGodzinaOdbioru)), __LINE__);
        }
        $this->oczekiwanaGodzinaOdbioru = $oczekiwanaGodzinaOdbioru;

        return $this;
    }

    /**
     * Get szacowanaIloscPrzeslek value
     * @return string
     */
    public function getSzacowanaIloscPrzeslek(): string
    {
        return $this->szacowanaIloscPrzeslek;
    }

    /**
     * Set szacowanaIloscPrzeslek value
     * @param string $szacowanaIloscPrzeslek
     * @return \PocztaPolska\StructType\ZamowKuriera
     */
    public function setSzacowanaIloscPrzeslek(string $szacowanaIloscPrzeslek): self
    {
        // validation for constraint: string
        if (!is_null($szacowanaIloscPrzeslek) && !is_string($szacowanaIloscPrzeslek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($szacowanaIloscPrzeslek, true), gettype($szacowanaIloscPrzeslek)), __LINE__);
        }
        $this->szacowanaIloscPrzeslek = $szacowanaIloscPrzeslek;

        return $this;
    }

    /**
     * Get szacowanaLacznaMasaPrzesylek value
     * @return string
     */
    public function getSzacowanaLacznaMasaPrzesylek(): string
    {
        return $this->szacowanaLacznaMasaPrzesylek;
    }

    /**
     * Set szacowanaLacznaMasaPrzesylek value
     * @param string $szacowanaLacznaMasaPrzesylek
     * @return \PocztaPolska\StructType\ZamowKuriera
     */
    public function setSzacowanaLacznaMasaPrzesylek(string $szacowanaLacznaMasaPrzesylek): self
    {
        // validation for constraint: string
        if (!is_null($szacowanaLacznaMasaPrzesylek) && !is_string($szacowanaLacznaMasaPrzesylek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($szacowanaLacznaMasaPrzesylek, true), gettype($szacowanaLacznaMasaPrzesylek)), __LINE__);
        }
        $this->szacowanaLacznaMasaPrzesylek = $szacowanaLacznaMasaPrzesylek;

        return $this;
    }

    /**
     * Get nadawca value
     * @return \PocztaPolska\StructType\AdresType|null
     */
    public function getNadawca(): ?\PocztaPolska\StructType\AdresType
    {
        return $this->nadawca;
    }

    /**
     * Set nadawca value
     * @param \PocztaPolska\StructType\AdresType $nadawca
     * @return \PocztaPolska\StructType\ZamowKuriera
     */
    public function setNadawca(?\PocztaPolska\StructType\AdresType $nadawca = null): self
    {
        $this->nadawca = $nadawca;

        return $this;
    }

    /**
     * Get potwierdzenieZamowieniaEmail value
     * @return string|null
     */
    public function getPotwierdzenieZamowieniaEmail(): ?string
    {
        return $this->potwierdzenieZamowieniaEmail;
    }

    /**
     * Set potwierdzenieZamowieniaEmail value
     * @param string $potwierdzenieZamowieniaEmail
     * @return \PocztaPolska\StructType\ZamowKuriera
     */
    public function setPotwierdzenieZamowieniaEmail(?string $potwierdzenieZamowieniaEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($potwierdzenieZamowieniaEmail) && !is_string($potwierdzenieZamowieniaEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($potwierdzenieZamowieniaEmail, true), gettype($potwierdzenieZamowieniaEmail)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($potwierdzenieZamowieniaEmail) && mb_strlen((string) $potwierdzenieZamowieniaEmail) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $potwierdzenieZamowieniaEmail)), __LINE__);
        }
        // validation for constraint: minLength(6)
        if (!is_null($potwierdzenieZamowieniaEmail) && mb_strlen((string) $potwierdzenieZamowieniaEmail) < 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 6', mb_strlen((string) $potwierdzenieZamowieniaEmail)), __LINE__);
        }
        $this->potwierdzenieZamowieniaEmail = $potwierdzenieZamowieniaEmail;

        return $this;
    }
}
