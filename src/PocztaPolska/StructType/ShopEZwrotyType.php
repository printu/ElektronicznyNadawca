<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shopEZwrotyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShopEZwrotyType extends AbstractStructBase
{
    /**
     * The eZwrotPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 1
     * @var string[]
     */
    protected array $eZwrotPrzesylki;
    /**
     * The nazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $nazwa;
    /**
     * The przyjaznaNazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $przyjaznaNazwa;
    /**
     * The ulica
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $ulica;
    /**
     * The numerDomu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $numerDomu;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 63
     * - minLength: 1
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $miejscowosc;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $kodPocztowy;
    /**
     * The mobile
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - use: required
     * @var string
     */
    protected string $mobile;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 6
     * - use: required
     * @var string
     */
    protected string $email;
    /**
     * The eZwrotKarta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\EZwrotKartaType|null
     */
    protected ?\PocztaPolska\StructType\EZwrotKartaType $eZwrotKarta = null;
    /**
     * The idShop
     * @var int|null
     */
    protected ?int $idShop = null;
    /**
     * The nazwa2
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $nazwa2 = null;
    /**
     * The numerLokalu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $numerLokalu = null;
    /**
     * The nip
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $nip = null;
    /**
     * The regon
     * @var string|null
     */
    protected ?string $regon = null;
    /**
     * The krs
     * @var string|null
     */
    protected ?string $krs = null;
    /**
     * The eZwrotTyp
     * @var string|null
     */
    protected ?string $eZwrotTyp = null;
    /**
     * The wymagalnoscNumeruIdentyfikujacegoPrzesylke
     * @var string|null
     */
    protected ?string $wymagalnoscNumeruIdentyfikujacegoPrzesylke = null;
    /**
     * The availableOnWebsite
     * @var bool|null
     */
    protected ?bool $availableOnWebsite = null;
    /**
     * The emailForEZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 6
     * @var string|null
     */
    protected ?string $emailForEZwrot = null;
    /**
     * The paid
     * @var bool|null
     */
    protected ?bool $paid = null;
    /**
     * The consentValidFor
     * @var int|null
     */
    protected ?int $consentValidFor = null;
    /**
     * The contractorCost
     * @var int|null
     */
    protected ?int $contractorCost = null;
    /**
     * The infoForClient
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 300
     * @var string|null
     */
    protected ?string $infoForClient = null;

    /**
     * Constructor method for shopEZwrotyType
     * @uses ShopEZwrotyType::setEZwrotPrzesylki()
     * @uses ShopEZwrotyType::setNazwa()
     * @uses ShopEZwrotyType::setPrzyjaznaNazwa()
     * @uses ShopEZwrotyType::setUlica()
     * @uses ShopEZwrotyType::setNumerDomu()
     * @uses ShopEZwrotyType::setMiejscowosc()
     * @uses ShopEZwrotyType::setKodPocztowy()
     * @uses ShopEZwrotyType::setMobile()
     * @uses ShopEZwrotyType::setEmail()
     * @uses ShopEZwrotyType::setEZwrotKarta()
     * @uses ShopEZwrotyType::setIdShop()
     * @uses ShopEZwrotyType::setNazwa2()
     * @uses ShopEZwrotyType::setNumerLokalu()
     * @uses ShopEZwrotyType::setNip()
     * @uses ShopEZwrotyType::setRegon()
     * @uses ShopEZwrotyType::setKrs()
     * @uses ShopEZwrotyType::setEZwrotTyp()
     * @uses ShopEZwrotyType::setWymagalnoscNumeruIdentyfikujacegoPrzesylke()
     * @uses ShopEZwrotyType::setAvailableOnWebsite()
     * @uses ShopEZwrotyType::setEmailForEZwrot()
     * @uses ShopEZwrotyType::setPaid()
     * @uses ShopEZwrotyType::setConsentValidFor()
     * @uses ShopEZwrotyType::setContractorCost()
     * @uses ShopEZwrotyType::setInfoForClient()
     * @param string[] $eZwrotPrzesylki
     * @param string $nazwa
     * @param string $przyjaznaNazwa
     * @param string $ulica
     * @param string $numerDomu
     * @param string $miejscowosc
     * @param string $kodPocztowy
     * @param string $mobile
     * @param string $email
     * @param \PocztaPolska\StructType\EZwrotKartaType $eZwrotKarta
     * @param int $idShop
     * @param string $nazwa2
     * @param string $numerLokalu
     * @param string $nip
     * @param string $regon
     * @param string $krs
     * @param string $eZwrotTyp
     * @param string $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     * @param bool $availableOnWebsite
     * @param string $emailForEZwrot
     * @param bool $paid
     * @param int $consentValidFor
     * @param int $contractorCost
     * @param string $infoForClient
     */
    public function __construct(array $eZwrotPrzesylki, string $nazwa, string $przyjaznaNazwa, string $ulica, string $numerDomu, string $miejscowosc, string $kodPocztowy, string $mobile, string $email, ?\PocztaPolska\StructType\EZwrotKartaType $eZwrotKarta = null, ?int $idShop = null, ?string $nazwa2 = null, ?string $numerLokalu = null, ?string $nip = null, ?string $regon = null, ?string $krs = null, ?string $eZwrotTyp = null, ?string $wymagalnoscNumeruIdentyfikujacegoPrzesylke = null, ?bool $availableOnWebsite = null, ?string $emailForEZwrot = null, ?bool $paid = null, ?int $consentValidFor = null, ?int $contractorCost = null, ?string $infoForClient = null)
    {
        $this
            ->setEZwrotPrzesylki($eZwrotPrzesylki)
            ->setNazwa($nazwa)
            ->setPrzyjaznaNazwa($przyjaznaNazwa)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu)
            ->setMiejscowosc($miejscowosc)
            ->setKodPocztowy($kodPocztowy)
            ->setMobile($mobile)
            ->setEmail($email)
            ->setEZwrotKarta($eZwrotKarta)
            ->setIdShop($idShop)
            ->setNazwa2($nazwa2)
            ->setNumerLokalu($numerLokalu)
            ->setNip($nip)
            ->setRegon($regon)
            ->setKrs($krs)
            ->setEZwrotTyp($eZwrotTyp)
            ->setWymagalnoscNumeruIdentyfikujacegoPrzesylke($wymagalnoscNumeruIdentyfikujacegoPrzesylke)
            ->setAvailableOnWebsite($availableOnWebsite)
            ->setEmailForEZwrot($emailForEZwrot)
            ->setPaid($paid)
            ->setConsentValidFor($consentValidFor)
            ->setContractorCost($contractorCost)
            ->setInfoForClient($infoForClient);
    }

    /**
     * Get eZwrotPrzesylki value
     * @return string[]
     */
    public function getEZwrotPrzesylki(): array
    {
        return $this->eZwrotPrzesylki;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setEZwrotPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEZwrotPrzesylki method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEZwrotPrzesylkiForArrayConstraintFromSetEZwrotPrzesylki(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shopEZwrotyTypeEZwrotPrzesylkiItem) {
            // validation for constraint: enumeration
            if (!\PocztaPolska\EnumType\EZwrotPrzesylkiType::valueIsValid($shopEZwrotyTypeEZwrotPrzesylkiItem)) {
                $invalidValues[] = is_object($shopEZwrotyTypeEZwrotPrzesylkiItem) ? get_class($shopEZwrotyTypeEZwrotPrzesylkiItem) : sprintf('%s(%s)', gettype($shopEZwrotyTypeEZwrotPrzesylkiItem), var_export($shopEZwrotyTypeEZwrotPrzesylkiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\EZwrotPrzesylkiType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \PocztaPolska\EnumType\EZwrotPrzesylkiType::getValidValues()));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set eZwrotPrzesylki value
     * @uses \PocztaPolska\EnumType\EZwrotPrzesylkiType::valueIsValid()
     * @uses \PocztaPolska\EnumType\EZwrotPrzesylkiType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $eZwrotPrzesylki
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setEZwrotPrzesylki(array $eZwrotPrzesylki): self
    {
        // validation for constraint: array
        if ('' !== ($eZwrotPrzesylkiArrayErrorMessage = self::validateEZwrotPrzesylkiForArrayConstraintFromSetEZwrotPrzesylki($eZwrotPrzesylki))) {
            throw new InvalidArgumentException($eZwrotPrzesylkiArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($eZwrotPrzesylki) && count($eZwrotPrzesylki) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($eZwrotPrzesylki)), __LINE__);
        }
        $this->eZwrotPrzesylki = $eZwrotPrzesylki;

        return $this;
    }

    /**
     * Add item to eZwrotPrzesylki value
     * @uses \PocztaPolska\EnumType\EZwrotPrzesylkiType::valueIsValid()
     * @uses \PocztaPolska\EnumType\EZwrotPrzesylkiType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function addToEZwrotPrzesylki(string $item): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\EZwrotPrzesylkiType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\EZwrotPrzesylkiType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \PocztaPolska\EnumType\EZwrotPrzesylkiType::getValidValues())), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->eZwrotPrzesylki) && count($this->eZwrotPrzesylki) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->eZwrotPrzesylki)), __LINE__);
        }
        $this->eZwrotPrzesylki[] = $item;

        return $this;
    }

    /**
     * Get nazwa value
     * @return string
     */
    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    /**
     * Set nazwa value
     * @param string $nazwa
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setNazwa(string $nazwa): self
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
     * Get przyjaznaNazwa value
     * @return string
     */
    public function getPrzyjaznaNazwa(): string
    {
        return $this->przyjaznaNazwa;
    }

    /**
     * Set przyjaznaNazwa value
     * @param string $przyjaznaNazwa
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setPrzyjaznaNazwa(string $przyjaznaNazwa): self
    {
        // validation for constraint: string
        if (!is_null($przyjaznaNazwa) && !is_string($przyjaznaNazwa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($przyjaznaNazwa, true), gettype($przyjaznaNazwa)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($przyjaznaNazwa) && mb_strlen((string) $przyjaznaNazwa) > 60) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen((string) $przyjaznaNazwa)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($przyjaznaNazwa) && mb_strlen((string) $przyjaznaNazwa) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $przyjaznaNazwa)), __LINE__);
        }
        $this->przyjaznaNazwa = $przyjaznaNazwa;

        return $this;
    }

    /**
     * Get ulica value
     * @return string
     */
    public function getUlica(): string
    {
        return $this->ulica;
    }

    /**
     * Set ulica value
     * @param string $ulica
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setUlica(string $ulica): self
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
     * @return string
     */
    public function getNumerDomu(): string
    {
        return $this->numerDomu;
    }

    /**
     * Set numerDomu value
     * @param string $numerDomu
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setNumerDomu(string $numerDomu): self
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
     * Get miejscowosc value
     * @return string
     */
    public function getMiejscowosc(): string
    {
        return $this->miejscowosc;
    }

    /**
     * Set miejscowosc value
     * @param string $miejscowosc
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setMiejscowosc(string $miejscowosc): self
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
     * @return string
     */
    public function getKodPocztowy(): string
    {
        return $this->kodPocztowy;
    }

    /**
     * Set kodPocztowy value
     * @param string $kodPocztowy
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setKodPocztowy(string $kodPocztowy): self
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
     * Get mobile value
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * Set mobile value
     * @param string $mobile
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setMobile(string $mobile): self
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile, true), gettype($mobile)), __LINE__);
        }
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get email value
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set email value
     * @param string $email
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setEmail(string $email): self
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
     * Get eZwrotKarta value
     * @return \PocztaPolska\StructType\EZwrotKartaType|null
     */
    public function getEZwrotKarta(): ?\PocztaPolska\StructType\EZwrotKartaType
    {
        return $this->eZwrotKarta;
    }

    /**
     * Set eZwrotKarta value
     * @param \PocztaPolska\StructType\EZwrotKartaType $eZwrotKarta
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setEZwrotKarta(?\PocztaPolska\StructType\EZwrotKartaType $eZwrotKarta = null): self
    {
        $this->eZwrotKarta = $eZwrotKarta;

        return $this;
    }

    /**
     * Get idShop value
     * @return int|null
     */
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    /**
     * Set idShop value
     * @param int $idShop
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setIdShop(?int $idShop = null): self
    {
        // validation for constraint: int
        if (!is_null($idShop) && !(is_int($idShop) || ctype_digit($idShop))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idShop, true), gettype($idShop)), __LINE__);
        }
        $this->idShop = $idShop;

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
     * @return \PocztaPolska\StructType\ShopEZwrotyType
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
        // validation for constraint: minLength(1)
        if (!is_null($nazwa2) && mb_strlen((string) $nazwa2) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $nazwa2)), __LINE__);
        }
        $this->nazwa2 = $nazwa2;

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
     * @return \PocztaPolska\StructType\ShopEZwrotyType
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
     * @return \PocztaPolska\StructType\ShopEZwrotyType
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

    /**
     * Get regon value
     * @return string|null
     */
    public function getRegon(): ?string
    {
        return $this->regon;
    }

    /**
     * Set regon value
     * @param string $regon
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setRegon(?string $regon = null): self
    {
        // validation for constraint: string
        if (!is_null($regon) && !is_string($regon)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regon, true), gettype($regon)), __LINE__);
        }
        $this->regon = $regon;

        return $this;
    }

    /**
     * Get krs value
     * @return string|null
     */
    public function getKrs(): ?string
    {
        return $this->krs;
    }

    /**
     * Set krs value
     * @param string $krs
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setKrs(?string $krs = null): self
    {
        // validation for constraint: string
        if (!is_null($krs) && !is_string($krs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($krs, true), gettype($krs)), __LINE__);
        }
        $this->krs = $krs;

        return $this;
    }

    /**
     * Get eZwrotTyp value
     * @return string|null
     */
    public function getEZwrotTyp(): ?string
    {
        return $this->eZwrotTyp;
    }

    /**
     * Set eZwrotTyp value
     * @uses \PocztaPolska\EnumType\EZwrotTypZgodyType::valueIsValid()
     * @uses \PocztaPolska\EnumType\EZwrotTypZgodyType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eZwrotTyp
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setEZwrotTyp(?string $eZwrotTyp = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\EZwrotTypZgodyType::valueIsValid($eZwrotTyp)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\EZwrotTypZgodyType', is_array($eZwrotTyp) ? implode(', ', $eZwrotTyp) : var_export($eZwrotTyp, true), implode(', ', \PocztaPolska\EnumType\EZwrotTypZgodyType::getValidValues())), __LINE__);
        }
        $this->eZwrotTyp = $eZwrotTyp;

        return $this;
    }

    /**
     * Get wymagalnoscNumeruIdentyfikujacegoPrzesylke value
     * @return string|null
     */
    public function getWymagalnoscNumeruIdentyfikujacegoPrzesylke(): ?string
    {
        return $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke;
    }

    /**
     * Set wymagalnoscNumeruIdentyfikujacegoPrzesylke value
     * @uses \PocztaPolska\EnumType\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $wymagalnoscNumeruIdentyfikujacegoPrzesylke
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setWymagalnoscNumeruIdentyfikujacegoPrzesylke(?string $wymagalnoscNumeruIdentyfikujacegoPrzesylke = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum::valueIsValid($wymagalnoscNumeruIdentyfikujacegoPrzesylke)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum', is_array($wymagalnoscNumeruIdentyfikujacegoPrzesylke) ? implode(', ', $wymagalnoscNumeruIdentyfikujacegoPrzesylke) : var_export($wymagalnoscNumeruIdentyfikujacegoPrzesylke, true), implode(', ', \PocztaPolska\EnumType\WymagalnoscNumeruIdentyfikujacegoPrzesylkeEnum::getValidValues())), __LINE__);
        }
        $this->wymagalnoscNumeruIdentyfikujacegoPrzesylke = $wymagalnoscNumeruIdentyfikujacegoPrzesylke;

        return $this;
    }

    /**
     * Get availableOnWebsite value
     * @return bool|null
     */
    public function getAvailableOnWebsite(): ?bool
    {
        return $this->availableOnWebsite;
    }

    /**
     * Set availableOnWebsite value
     * @param bool $availableOnWebsite
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setAvailableOnWebsite(?bool $availableOnWebsite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($availableOnWebsite) && !is_bool($availableOnWebsite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($availableOnWebsite, true), gettype($availableOnWebsite)), __LINE__);
        }
        $this->availableOnWebsite = $availableOnWebsite;

        return $this;
    }

    /**
     * Get emailForEZwrot value
     * @return string|null
     */
    public function getEmailForEZwrot(): ?string
    {
        return $this->emailForEZwrot;
    }

    /**
     * Set emailForEZwrot value
     * @param string $emailForEZwrot
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setEmailForEZwrot(?string $emailForEZwrot = null): self
    {
        // validation for constraint: string
        if (!is_null($emailForEZwrot) && !is_string($emailForEZwrot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailForEZwrot, true), gettype($emailForEZwrot)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($emailForEZwrot) && mb_strlen((string) $emailForEZwrot) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $emailForEZwrot)), __LINE__);
        }
        // validation for constraint: minLength(6)
        if (!is_null($emailForEZwrot) && mb_strlen((string) $emailForEZwrot) < 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 6', mb_strlen((string) $emailForEZwrot)), __LINE__);
        }
        $this->emailForEZwrot = $emailForEZwrot;

        return $this;
    }

    /**
     * Get paid value
     * @return bool|null
     */
    public function getPaid(): ?bool
    {
        return $this->paid;
    }

    /**
     * Set paid value
     * @param bool $paid
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setPaid(?bool $paid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($paid) && !is_bool($paid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paid, true), gettype($paid)), __LINE__);
        }
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get consentValidFor value
     * @return int|null
     */
    public function getConsentValidFor(): ?int
    {
        return $this->consentValidFor;
    }

    /**
     * Set consentValidFor value
     * @param int $consentValidFor
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setConsentValidFor(?int $consentValidFor = null): self
    {
        // validation for constraint: int
        if (!is_null($consentValidFor) && !(is_int($consentValidFor) || ctype_digit($consentValidFor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($consentValidFor, true), gettype($consentValidFor)), __LINE__);
        }
        $this->consentValidFor = $consentValidFor;

        return $this;
    }

    /**
     * Get contractorCost value
     * @return int|null
     */
    public function getContractorCost(): ?int
    {
        return $this->contractorCost;
    }

    /**
     * Set contractorCost value
     * @param int $contractorCost
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setContractorCost(?int $contractorCost = null): self
    {
        // validation for constraint: int
        if (!is_null($contractorCost) && !(is_int($contractorCost) || ctype_digit($contractorCost))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contractorCost, true), gettype($contractorCost)), __LINE__);
        }
        $this->contractorCost = $contractorCost;

        return $this;
    }

    /**
     * Get infoForClient value
     * @return string|null
     */
    public function getInfoForClient(): ?string
    {
        return $this->infoForClient;
    }

    /**
     * Set infoForClient value
     * @param string $infoForClient
     * @return \PocztaPolska\StructType\ShopEZwrotyType
     */
    public function setInfoForClient(?string $infoForClient = null): self
    {
        // validation for constraint: string
        if (!is_null($infoForClient) && !is_string($infoForClient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoForClient, true), gettype($infoForClient)), __LINE__);
        }
        // validation for constraint: maxLength(300)
        if (!is_null($infoForClient) && mb_strlen((string) $infoForClient) > 300) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 300', mb_strlen((string) $infoForClient)), __LINE__);
        }
        $this->infoForClient = $infoForClient;

        return $this;
    }
}
