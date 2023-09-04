<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdresType extends AbstractStructBase
{
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $nazwa = null;
    /**
     * The nazwa2
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $nazwa2 = null;
    /**
     * The ulica
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ulica = null;
    /**
     * The numerDomu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $numerDomu = null;
    /**
     * The numerLokalu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $numerLokalu = null;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 63
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $miejscowosc = null;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $kodPocztowy = null;
    /**
     * The kraj
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - default: Polska
     * - maxLength: 40
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $kraj = null;
    /**
     * The telefon
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 0
     * @var string|null
     */
    protected ?string $telefon = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 6
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * @var string|null
     */
    protected ?string $mobile = null;
    /**
     * The osobaKontaktowa
     * @var string|null
     */
    protected ?string $osobaKontaktowa = null;
    /**
     * The nip
     * @var string|null
     */
    protected ?string $nip = null;
    /**
     * Constructor method for adresType
     * @uses AdresType::setNazwa()
     * @uses AdresType::setNazwa2()
     * @uses AdresType::setUlica()
     * @uses AdresType::setNumerDomu()
     * @uses AdresType::setNumerLokalu()
     * @uses AdresType::setMiejscowosc()
     * @uses AdresType::setKodPocztowy()
     * @uses AdresType::setKraj()
     * @uses AdresType::setTelefon()
     * @uses AdresType::setEmail()
     * @uses AdresType::setMobile()
     * @uses AdresType::setOsobaKontaktowa()
     * @uses AdresType::setNip()
     * @param string $nazwa
     * @param string $nazwa2
     * @param string $ulica
     * @param string $numerDomu
     * @param string $numerLokalu
     * @param string $miejscowosc
     * @param string $kodPocztowy
     * @param string $kraj
     * @param string $telefon
     * @param string $email
     * @param string $mobile
     * @param string $osobaKontaktowa
     * @param string $nip
     */
    public function __construct(?string $nazwa = null, ?string $nazwa2 = null, ?string $ulica = null, ?string $numerDomu = null, ?string $numerLokalu = null, ?string $miejscowosc = null, ?string $kodPocztowy = null, ?string $kraj = 'Polska', ?string $telefon = null, ?string $email = null, ?string $mobile = null, ?string $osobaKontaktowa = null, ?string $nip = null)
    {
        $this
            ->setNazwa($nazwa)
            ->setNazwa2($nazwa2)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu)
            ->setNumerLokalu($numerLokalu)
            ->setMiejscowosc($miejscowosc)
            ->setKodPocztowy($kodPocztowy)
            ->setKraj($kraj)
            ->setTelefon($telefon)
            ->setEmail($email)
            ->setMobile($mobile)
            ->setOsobaKontaktowa($osobaKontaktowa)
            ->setNip($nip);
    }
    /**
     * Get nazwa value
     * @return string|null
     */
    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }
    /**
     * Set nazwa value
     * @param string $nazwa
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setNazwa(?string $nazwa = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwa) && !is_string($nazwa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa, true), gettype($nazwa)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($nazwa) && mb_strlen((string) $nazwa) > 60) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen((string) $nazwa)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($nazwa) && mb_strlen((string) $nazwa) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $nazwa)), __LINE__);
        }
        $this->nazwa = $nazwa;
        
        return $this;
    }
    /**
     * Get nazwa2 value
     * @return string|null
     */
    public function getNazwa2(): ?string
    {
        return $this->nazwa2;
    }
    /**
     * Set nazwa2 value
     * @param string $nazwa2
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setNazwa2(?string $nazwa2 = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwa2) && !is_string($nazwa2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa2, true), gettype($nazwa2)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($nazwa2) && mb_strlen((string) $nazwa2) > 60) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen((string) $nazwa2)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($nazwa2) && mb_strlen((string) $nazwa2) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $nazwa2)), __LINE__);
        }
        $this->nazwa2 = $nazwa2;
        
        return $this;
    }
    /**
     * Get ulica value
     * @return string|null
     */
    public function getUlica(): ?string
    {
        return $this->ulica;
    }
    /**
     * Set ulica value
     * @param string $ulica
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setUlica(?string $ulica = null): self
    {
        // validation for constraint: string
        if (!is_null($ulica) && !is_string($ulica)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ulica, true), gettype($ulica)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($ulica) && mb_strlen((string) $ulica) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $ulica)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ulica) && mb_strlen((string) $ulica) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $ulica)), __LINE__);
        }
        $this->ulica = $ulica;
        
        return $this;
    }
    /**
     * Get numerDomu value
     * @return string|null
     */
    public function getNumerDomu(): ?string
    {
        return $this->numerDomu;
    }
    /**
     * Set numerDomu value
     * @param string $numerDomu
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setNumerDomu(?string $numerDomu = null): self
    {
        // validation for constraint: string
        if (!is_null($numerDomu) && !is_string($numerDomu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerDomu, true), gettype($numerDomu)), __LINE__);
        }
        // validation for constraint: maxLength(11)
        if (!is_null($numerDomu) && mb_strlen((string) $numerDomu) > 11) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 11', mb_strlen((string) $numerDomu)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($numerDomu) && mb_strlen((string) $numerDomu) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $numerDomu)), __LINE__);
        }
        $this->numerDomu = $numerDomu;
        
        return $this;
    }
    /**
     * Get numerLokalu value
     * @return string|null
     */
    public function getNumerLokalu(): ?string
    {
        return $this->numerLokalu;
    }
    /**
     * Set numerLokalu value
     * @param string $numerLokalu
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setNumerLokalu(?string $numerLokalu = null): self
    {
        // validation for constraint: string
        if (!is_null($numerLokalu) && !is_string($numerLokalu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerLokalu, true), gettype($numerLokalu)), __LINE__);
        }
        // validation for constraint: maxLength(11)
        if (!is_null($numerLokalu) && mb_strlen((string) $numerLokalu) > 11) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 11', mb_strlen((string) $numerLokalu)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($numerLokalu) && mb_strlen((string) $numerLokalu) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $numerLokalu)), __LINE__);
        }
        $this->numerLokalu = $numerLokalu;
        
        return $this;
    }
    /**
     * Get miejscowosc value
     * @return string|null
     */
    public function getMiejscowosc(): ?string
    {
        return $this->miejscowosc;
    }
    /**
     * Set miejscowosc value
     * @param string $miejscowosc
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setMiejscowosc(?string $miejscowosc = null): self
    {
        // validation for constraint: string
        if (!is_null($miejscowosc) && !is_string($miejscowosc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miejscowosc, true), gettype($miejscowosc)), __LINE__);
        }
        // validation for constraint: maxLength(63)
        if (!is_null($miejscowosc) && mb_strlen((string) $miejscowosc) > 63) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 63', mb_strlen((string) $miejscowosc)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($miejscowosc) && mb_strlen((string) $miejscowosc) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $miejscowosc)), __LINE__);
        }
        $this->miejscowosc = $miejscowosc;
        
        return $this;
    }
    /**
     * Get kodPocztowy value
     * @return string|null
     */
    public function getKodPocztowy(): ?string
    {
        return $this->kodPocztowy;
    }
    /**
     * Set kodPocztowy value
     * @param string $kodPocztowy
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setKodPocztowy(?string $kodPocztowy = null): self
    {
        // validation for constraint: string
        if (!is_null($kodPocztowy) && !is_string($kodPocztowy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodPocztowy, true), gettype($kodPocztowy)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($kodPocztowy) && mb_strlen((string) $kodPocztowy) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $kodPocztowy)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($kodPocztowy) && mb_strlen((string) $kodPocztowy) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $kodPocztowy)), __LINE__);
        }
        $this->kodPocztowy = $kodPocztowy;
        
        return $this;
    }
    /**
     * Get kraj value
     * @return string|null
     */
    public function getKraj(): ?string
    {
        return $this->kraj;
    }
    /**
     * Set kraj value
     * @param string $kraj
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setKraj(?string $kraj = 'Polska'): self
    {
        // validation for constraint: string
        if (!is_null($kraj) && !is_string($kraj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kraj, true), gettype($kraj)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($kraj) && mb_strlen((string) $kraj) > 40) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen((string) $kraj)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($kraj) && mb_strlen((string) $kraj) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $kraj)), __LINE__);
        }
        $this->kraj = $kraj;
        
        return $this;
    }
    /**
     * Get telefon value
     * @return string|null
     */
    public function getTelefon(): ?string
    {
        return $this->telefon;
    }
    /**
     * Set telefon value
     * @param string $telefon
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setTelefon(?string $telefon = null): self
    {
        // validation for constraint: string
        if (!is_null($telefon) && !is_string($telefon)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telefon, true), gettype($telefon)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($telefon) && mb_strlen((string) $telefon) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $telefon)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($telefon) && mb_strlen((string) $telefon) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $telefon)), __LINE__);
        }
        $this->telefon = $telefon;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($email) && mb_strlen((string) $email) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $email)), __LINE__);
        }
        // validation for constraint: minLength(6)
        if (!is_null($email) && mb_strlen((string) $email) < 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 6', mb_strlen((string) $email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get mobile value
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setMobile(?string $mobile = null): self
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile, true), gettype($mobile)), __LINE__);
        }
        $this->mobile = $mobile;
        
        return $this;
    }
    /**
     * Get osobaKontaktowa value
     * @return string|null
     */
    public function getOsobaKontaktowa(): ?string
    {
        return $this->osobaKontaktowa;
    }
    /**
     * Set osobaKontaktowa value
     * @param string $osobaKontaktowa
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setOsobaKontaktowa(?string $osobaKontaktowa = null): self
    {
        // validation for constraint: string
        if (!is_null($osobaKontaktowa) && !is_string($osobaKontaktowa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($osobaKontaktowa, true), gettype($osobaKontaktowa)), __LINE__);
        }
        $this->osobaKontaktowa = $osobaKontaktowa;
        
        return $this;
    }
    /**
     * Get nip value
     * @return string|null
     */
    public function getNip(): ?string
    {
        return $this->nip;
    }
    /**
     * Set nip value
     * @param string $nip
     * @return \PocztaPolska\StructType\AdresType
     */
    public function setNip(?string $nip = null): self
    {
        // validation for constraint: string
        if (!is_null($nip) && !is_string($nip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nip, true), gettype($nip)), __LINE__);
        }
        $this->nip = $nip;
        
        return $this;
    }
}
