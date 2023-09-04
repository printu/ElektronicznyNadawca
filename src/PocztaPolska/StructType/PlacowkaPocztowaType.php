<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for placowkaPocztowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PlacowkaPocztowaType extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $id;
    /**
     * The lokalizacjaGeograficzna
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\LokalizacjaGeograficznaType|null
     */
    protected ?\PocztaPolska\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null;
    /**
     * The godzinyPracy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\GodzinyPracyType|null
     */
    protected ?\PocztaPolska\StructType\GodzinyPracyType $godzinyPracy = null;
    /**
     * The opis
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $opis = null;
    /**
     * The deliveryPath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DeliveryPathType|null
     */
    protected ?\PocztaPolska\StructType\DeliveryPathType $deliveryPath = null;
    /**
     * The typ
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typ = null;
    /**
     * The rodzajPlatnosci
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $rodzajPlatnosci = null;
    /**
     * The funkcja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $funkcja = null;
    /**
     * The maksymalnaKwotaPobrania
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maksymalnaKwotaPobrania = null;
    /**
     * The prefixNazwy
     * @var string|null
     */
    protected ?string $prefixNazwy = null;
    /**
     * The nazwa
     * @var string|null
     */
    protected ?string $nazwa = null;
    /**
     * The wojewodztwo
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $wojewodztwo = null;
    /**
     * The powiat
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $powiat = null;
    /**
     * The miejsce
     * @var string|null
     */
    protected ?string $miejsce = null;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 5
     * @var string|null
     */
    protected ?string $kodPocztowy = null;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 30
     * - minLength: 0
     * @var string|null
     */
    protected ?string $miejscowosc = null;
    /**
     * The ulica
     * @var string|null
     */
    protected ?string $ulica = null;
    /**
     * The numerDomu
     * @var string|null
     */
    protected ?string $numerDomu = null;
    /**
     * The numerLokalu
     * @var string|null
     */
    protected ?string $numerLokalu = null;
    /**
     * The nazwaWydruk
     * Meta information extracted from the WSDL
     * - documentation: Pole dedykowane do wykorzystania na nalepkach adresowych przy określaniu punktu odbioru
     * @var string|null
     */
    protected ?string $nazwaWydruk = null;
    /**
     * The punktWydaniaEPrzesylki
     * @var bool|null
     */
    protected ?bool $punktWydaniaEPrzesylki = null;
    /**
     * The powiadomienieSMS
     * @var bool|null
     */
    protected ?bool $powiadomienieSMS = null;
    /**
     * The punktWydaniaPrzesylkiBiznesowejPlus
     * @var bool|null
     */
    protected ?bool $punktWydaniaPrzesylkiBiznesowejPlus = null;
    /**
     * The punktWydaniaPrzesylkiBiznesowej
     * @var bool|null
     */
    protected ?bool $punktWydaniaPrzesylkiBiznesowej = null;
    /**
     * The siecPlacowek
     * Meta information extracted from the WSDL
     * - documentation: Określa do jakiej sieci należy placówka pocztowa. Zastrzegamy prawo do zmiany w/w listy placówek w każdym momencie. Na dzień 2019-09-13 dostępne wartości to: POCZTAPOLSKA, ORLEN, RUCH, ZABKA, FRESHMARKET, AUTOMAT BIEDRONKA,
     * AUTOMAT CARREFOUR, AUTOMAT PLACOWKA, AUTOMAT POCZTOWY, AUTOMAT SPOLEM, AUTOMAT LEWIATAN
     * - base: xsd:string
     * @var string|null
     */
    protected ?string $siecPlacowek = null;
    /**
     * The idZPO
     * @var string|null
     */
    protected ?string $idZPO = null;
    /**
     * Constructor method for placowkaPocztowaType
     * @uses PlacowkaPocztowaType::setId()
     * @uses PlacowkaPocztowaType::setLokalizacjaGeograficzna()
     * @uses PlacowkaPocztowaType::setGodzinyPracy()
     * @uses PlacowkaPocztowaType::setOpis()
     * @uses PlacowkaPocztowaType::setDeliveryPath()
     * @uses PlacowkaPocztowaType::setTyp()
     * @uses PlacowkaPocztowaType::setRodzajPlatnosci()
     * @uses PlacowkaPocztowaType::setFunkcja()
     * @uses PlacowkaPocztowaType::setMaksymalnaKwotaPobrania()
     * @uses PlacowkaPocztowaType::setPrefixNazwy()
     * @uses PlacowkaPocztowaType::setNazwa()
     * @uses PlacowkaPocztowaType::setWojewodztwo()
     * @uses PlacowkaPocztowaType::setPowiat()
     * @uses PlacowkaPocztowaType::setMiejsce()
     * @uses PlacowkaPocztowaType::setKodPocztowy()
     * @uses PlacowkaPocztowaType::setMiejscowosc()
     * @uses PlacowkaPocztowaType::setUlica()
     * @uses PlacowkaPocztowaType::setNumerDomu()
     * @uses PlacowkaPocztowaType::setNumerLokalu()
     * @uses PlacowkaPocztowaType::setNazwaWydruk()
     * @uses PlacowkaPocztowaType::setPunktWydaniaEPrzesylki()
     * @uses PlacowkaPocztowaType::setPowiadomienieSMS()
     * @uses PlacowkaPocztowaType::setPunktWydaniaPrzesylkiBiznesowejPlus()
     * @uses PlacowkaPocztowaType::setPunktWydaniaPrzesylkiBiznesowej()
     * @uses PlacowkaPocztowaType::setSiecPlacowek()
     * @uses PlacowkaPocztowaType::setIdZPO()
     * @param int $id
     * @param \PocztaPolska\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @param \PocztaPolska\StructType\GodzinyPracyType $godzinyPracy
     * @param string $opis
     * @param \PocztaPolska\StructType\DeliveryPathType $deliveryPath
     * @param string $typ
     * @param string[] $rodzajPlatnosci
     * @param string $funkcja
     * @param int $maksymalnaKwotaPobrania
     * @param string $prefixNazwy
     * @param string $nazwa
     * @param string $wojewodztwo
     * @param string $powiat
     * @param string $miejsce
     * @param string $kodPocztowy
     * @param string $miejscowosc
     * @param string $ulica
     * @param string $numerDomu
     * @param string $numerLokalu
     * @param string $nazwaWydruk
     * @param bool $punktWydaniaEPrzesylki
     * @param bool $powiadomienieSMS
     * @param bool $punktWydaniaPrzesylkiBiznesowejPlus
     * @param bool $punktWydaniaPrzesylkiBiznesowej
     * @param string $siecPlacowek
     * @param string $idZPO
     */
    public function __construct(int $id, ?\PocztaPolska\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null, ?\PocztaPolska\StructType\GodzinyPracyType $godzinyPracy = null, ?string $opis = null, ?\PocztaPolska\StructType\DeliveryPathType $deliveryPath = null, ?string $typ = null, ?array $rodzajPlatnosci = null, ?string $funkcja = null, ?int $maksymalnaKwotaPobrania = null, ?string $prefixNazwy = null, ?string $nazwa = null, ?string $wojewodztwo = null, ?string $powiat = null, ?string $miejsce = null, ?string $kodPocztowy = null, ?string $miejscowosc = null, ?string $ulica = null, ?string $numerDomu = null, ?string $numerLokalu = null, ?string $nazwaWydruk = null, ?bool $punktWydaniaEPrzesylki = null, ?bool $powiadomienieSMS = null, ?bool $punktWydaniaPrzesylkiBiznesowejPlus = null, ?bool $punktWydaniaPrzesylkiBiznesowej = null, ?string $siecPlacowek = null, ?string $idZPO = null)
    {
        $this
            ->setId($id)
            ->setLokalizacjaGeograficzna($lokalizacjaGeograficzna)
            ->setGodzinyPracy($godzinyPracy)
            ->setOpis($opis)
            ->setDeliveryPath($deliveryPath)
            ->setTyp($typ)
            ->setRodzajPlatnosci($rodzajPlatnosci)
            ->setFunkcja($funkcja)
            ->setMaksymalnaKwotaPobrania($maksymalnaKwotaPobrania)
            ->setPrefixNazwy($prefixNazwy)
            ->setNazwa($nazwa)
            ->setWojewodztwo($wojewodztwo)
            ->setPowiat($powiat)
            ->setMiejsce($miejsce)
            ->setKodPocztowy($kodPocztowy)
            ->setMiejscowosc($miejscowosc)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu)
            ->setNumerLokalu($numerLokalu)
            ->setNazwaWydruk($nazwaWydruk)
            ->setPunktWydaniaEPrzesylki($punktWydaniaEPrzesylki)
            ->setPowiadomienieSMS($powiadomienieSMS)
            ->setPunktWydaniaPrzesylkiBiznesowejPlus($punktWydaniaPrzesylkiBiznesowejPlus)
            ->setPunktWydaniaPrzesylkiBiznesowej($punktWydaniaPrzesylkiBiznesowej)
            ->setSiecPlacowek($siecPlacowek)
            ->setIdZPO($idZPO);
    }
    /**
     * Get id value
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get lokalizacjaGeograficzna value
     * @return \PocztaPolska\StructType\LokalizacjaGeograficznaType|null
     */
    public function getLokalizacjaGeograficzna(): ?\PocztaPolska\StructType\LokalizacjaGeograficznaType
    {
        return $this->lokalizacjaGeograficzna;
    }
    /**
     * Set lokalizacjaGeograficzna value
     * @param \PocztaPolska\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setLokalizacjaGeograficzna(?\PocztaPolska\StructType\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null): self
    {
        $this->lokalizacjaGeograficzna = $lokalizacjaGeograficzna;
        
        return $this;
    }
    /**
     * Get godzinyPracy value
     * @return \PocztaPolska\StructType\GodzinyPracyType|null
     */
    public function getGodzinyPracy(): ?\PocztaPolska\StructType\GodzinyPracyType
    {
        return $this->godzinyPracy;
    }
    /**
     * Set godzinyPracy value
     * @param \PocztaPolska\StructType\GodzinyPracyType $godzinyPracy
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setGodzinyPracy(?\PocztaPolska\StructType\GodzinyPracyType $godzinyPracy = null): self
    {
        $this->godzinyPracy = $godzinyPracy;
        
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
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
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
     * Get deliveryPath value
     * @return \PocztaPolska\StructType\DeliveryPathType|null
     */
    public function getDeliveryPath(): ?\PocztaPolska\StructType\DeliveryPathType
    {
        return $this->deliveryPath;
    }
    /**
     * Set deliveryPath value
     * @param \PocztaPolska\StructType\DeliveryPathType $deliveryPath
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setDeliveryPath(?\PocztaPolska\StructType\DeliveryPathType $deliveryPath = null): self
    {
        $this->deliveryPath = $deliveryPath;
        
        return $this;
    }
    /**
     * Get typ value
     * @return string|null
     */
    public function getTyp(): ?string
    {
        return $this->typ;
    }
    /**
     * Set typ value
     * @uses \PocztaPolska\EnumType\TypPlacowkiPocztowejEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\TypPlacowkiPocztowejEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $typ
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setTyp(?string $typ = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\TypPlacowkiPocztowejEnum::valueIsValid($typ)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\TypPlacowkiPocztowejEnum', is_array($typ) ? implode(', ', $typ) : var_export($typ, true), implode(', ', \PocztaPolska\EnumType\TypPlacowkiPocztowejEnum::getValidValues())), __LINE__);
        }
        $this->typ = $typ;
        
        return $this;
    }
    /**
     * Get rodzajPlatnosci value
     * @return string[]
     */
    public function getRodzajPlatnosci(): ?array
    {
        return $this->rodzajPlatnosci;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRodzajPlatnosci method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRodzajPlatnosci method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRodzajPlatnosciForArrayConstraintFromSetRodzajPlatnosci(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $placowkaPocztowaTypeRodzajPlatnosciItem) {
            // validation for constraint: enumeration
            if (!\PocztaPolska\EnumType\RodzajPlatnosciEnum::valueIsValid($placowkaPocztowaTypeRodzajPlatnosciItem)) {
                $invalidValues[] = is_object($placowkaPocztowaTypeRodzajPlatnosciItem) ? get_class($placowkaPocztowaTypeRodzajPlatnosciItem) : sprintf('%s(%s)', gettype($placowkaPocztowaTypeRodzajPlatnosciItem), var_export($placowkaPocztowaTypeRodzajPlatnosciItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\RodzajPlatnosciEnum', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \PocztaPolska\EnumType\RodzajPlatnosciEnum::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set rodzajPlatnosci value
     * @uses \PocztaPolska\EnumType\RodzajPlatnosciEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\RodzajPlatnosciEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $rodzajPlatnosci
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setRodzajPlatnosci(?array $rodzajPlatnosci = null): self
    {
        // validation for constraint: array
        if ('' !== ($rodzajPlatnosciArrayErrorMessage = self::validateRodzajPlatnosciForArrayConstraintFromSetRodzajPlatnosci($rodzajPlatnosci))) {
            throw new InvalidArgumentException($rodzajPlatnosciArrayErrorMessage, __LINE__);
        }
        $this->rodzajPlatnosci = $rodzajPlatnosci;
        
        return $this;
    }
    /**
     * Add item to rodzajPlatnosci value
     * @uses \PocztaPolska\EnumType\RodzajPlatnosciEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\RodzajPlatnosciEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function addToRodzajPlatnosci(string $item): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\RodzajPlatnosciEnum::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\RodzajPlatnosciEnum', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \PocztaPolska\EnumType\RodzajPlatnosciEnum::getValidValues())), __LINE__);
        }
        $this->rodzajPlatnosci[] = $item;
        
        return $this;
    }
    /**
     * Get funkcja value
     * @return string|null
     */
    public function getFunkcja(): ?string
    {
        return $this->funkcja;
    }
    /**
     * Set funkcja value
     * @uses \PocztaPolska\EnumType\FunkcjaPlacowkiPocztowejType::valueIsValid()
     * @uses \PocztaPolska\EnumType\FunkcjaPlacowkiPocztowejType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $funkcja
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setFunkcja(?string $funkcja = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\FunkcjaPlacowkiPocztowejType::valueIsValid($funkcja)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\FunkcjaPlacowkiPocztowejType', is_array($funkcja) ? implode(', ', $funkcja) : var_export($funkcja, true), implode(', ', \PocztaPolska\EnumType\FunkcjaPlacowkiPocztowejType::getValidValues())), __LINE__);
        }
        $this->funkcja = $funkcja;
        
        return $this;
    }
    /**
     * Get maksymalnaKwotaPobrania value
     * @return int|null
     */
    public function getMaksymalnaKwotaPobrania(): ?int
    {
        return $this->maksymalnaKwotaPobrania;
    }
    /**
     * Set maksymalnaKwotaPobrania value
     * @param int $maksymalnaKwotaPobrania
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setMaksymalnaKwotaPobrania(?int $maksymalnaKwotaPobrania = null): self
    {
        // validation for constraint: int
        if (!is_null($maksymalnaKwotaPobrania) && !(is_int($maksymalnaKwotaPobrania) || ctype_digit($maksymalnaKwotaPobrania))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maksymalnaKwotaPobrania, true), gettype($maksymalnaKwotaPobrania)), __LINE__);
        }
        $this->maksymalnaKwotaPobrania = $maksymalnaKwotaPobrania;
        
        return $this;
    }
    /**
     * Get prefixNazwy value
     * @return string|null
     */
    public function getPrefixNazwy(): ?string
    {
        return $this->prefixNazwy;
    }
    /**
     * Set prefixNazwy value
     * @param string $prefixNazwy
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setPrefixNazwy(?string $prefixNazwy = null): self
    {
        // validation for constraint: string
        if (!is_null($prefixNazwy) && !is_string($prefixNazwy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefixNazwy, true), gettype($prefixNazwy)), __LINE__);
        }
        $this->prefixNazwy = $prefixNazwy;
        
        return $this;
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
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setNazwa(?string $nazwa = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwa) && !is_string($nazwa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwa, true), gettype($nazwa)), __LINE__);
        }
        $this->nazwa = $nazwa;
        
        return $this;
    }
    /**
     * Get wojewodztwo value
     * @return string|null
     */
    public function getWojewodztwo(): ?string
    {
        return $this->wojewodztwo;
    }
    /**
     * Set wojewodztwo value
     * @param string $wojewodztwo
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setWojewodztwo(?string $wojewodztwo = null): self
    {
        // validation for constraint: string
        if (!is_null($wojewodztwo) && !is_string($wojewodztwo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wojewodztwo, true), gettype($wojewodztwo)), __LINE__);
        }
        $this->wojewodztwo = $wojewodztwo;
        
        return $this;
    }
    /**
     * Get powiat value
     * @return string|null
     */
    public function getPowiat(): ?string
    {
        return $this->powiat;
    }
    /**
     * Set powiat value
     * @param string $powiat
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setPowiat(?string $powiat = null): self
    {
        // validation for constraint: string
        if (!is_null($powiat) && !is_string($powiat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powiat, true), gettype($powiat)), __LINE__);
        }
        $this->powiat = $powiat;
        
        return $this;
    }
    /**
     * Get miejsce value
     * @return string|null
     */
    public function getMiejsce(): ?string
    {
        return $this->miejsce;
    }
    /**
     * Set miejsce value
     * @param string $miejsce
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setMiejsce(?string $miejsce = null): self
    {
        // validation for constraint: string
        if (!is_null($miejsce) && !is_string($miejsce)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miejsce, true), gettype($miejsce)), __LINE__);
        }
        $this->miejsce = $miejsce;
        
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
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setKodPocztowy(?string $kodPocztowy = null): self
    {
        // validation for constraint: string
        if (!is_null($kodPocztowy) && !is_string($kodPocztowy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodPocztowy, true), gettype($kodPocztowy)), __LINE__);
        }
        // validation for constraint: length(5)
        if (!is_null($kodPocztowy) && mb_strlen((string) $kodPocztowy) !== 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 5', mb_strlen((string) $kodPocztowy)), __LINE__);
        }
        $this->kodPocztowy = $kodPocztowy;
        
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
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setMiejscowosc(?string $miejscowosc = null): self
    {
        // validation for constraint: string
        if (!is_null($miejscowosc) && !is_string($miejscowosc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miejscowosc, true), gettype($miejscowosc)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($miejscowosc) && mb_strlen((string) $miejscowosc) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $miejscowosc)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($miejscowosc) && mb_strlen((string) $miejscowosc) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $miejscowosc)), __LINE__);
        }
        $this->miejscowosc = $miejscowosc;
        
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
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setUlica(?string $ulica = null): self
    {
        // validation for constraint: string
        if (!is_null($ulica) && !is_string($ulica)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ulica, true), gettype($ulica)), __LINE__);
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
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setNumerDomu(?string $numerDomu = null): self
    {
        // validation for constraint: string
        if (!is_null($numerDomu) && !is_string($numerDomu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerDomu, true), gettype($numerDomu)), __LINE__);
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
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setNumerLokalu(?string $numerLokalu = null): self
    {
        // validation for constraint: string
        if (!is_null($numerLokalu) && !is_string($numerLokalu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerLokalu, true), gettype($numerLokalu)), __LINE__);
        }
        $this->numerLokalu = $numerLokalu;
        
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
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
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
    /**
     * Get punktWydaniaEPrzesylki value
     * @return bool|null
     */
    public function getPunktWydaniaEPrzesylki(): ?bool
    {
        return $this->punktWydaniaEPrzesylki;
    }
    /**
     * Set punktWydaniaEPrzesylki value
     * @param bool $punktWydaniaEPrzesylki
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaEPrzesylki(?bool $punktWydaniaEPrzesylki = null): self
    {
        // validation for constraint: boolean
        if (!is_null($punktWydaniaEPrzesylki) && !is_bool($punktWydaniaEPrzesylki)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($punktWydaniaEPrzesylki, true), gettype($punktWydaniaEPrzesylki)), __LINE__);
        }
        $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;
        
        return $this;
    }
    /**
     * Get powiadomienieSMS value
     * @return bool|null
     */
    public function getPowiadomienieSMS(): ?bool
    {
        return $this->powiadomienieSMS;
    }
    /**
     * Set powiadomienieSMS value
     * @param bool $powiadomienieSMS
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setPowiadomienieSMS(?bool $powiadomienieSMS = null): self
    {
        // validation for constraint: boolean
        if (!is_null($powiadomienieSMS) && !is_bool($powiadomienieSMS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($powiadomienieSMS, true), gettype($powiadomienieSMS)), __LINE__);
        }
        $this->powiadomienieSMS = $powiadomienieSMS;
        
        return $this;
    }
    /**
     * Get punktWydaniaPrzesylkiBiznesowejPlus value
     * @return bool|null
     */
    public function getPunktWydaniaPrzesylkiBiznesowejPlus(): ?bool
    {
        return $this->punktWydaniaPrzesylkiBiznesowejPlus;
    }
    /**
     * Set punktWydaniaPrzesylkiBiznesowejPlus value
     * @param bool $punktWydaniaPrzesylkiBiznesowejPlus
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowejPlus(?bool $punktWydaniaPrzesylkiBiznesowejPlus = null): self
    {
        // validation for constraint: boolean
        if (!is_null($punktWydaniaPrzesylkiBiznesowejPlus) && !is_bool($punktWydaniaPrzesylkiBiznesowejPlus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($punktWydaniaPrzesylkiBiznesowejPlus, true), gettype($punktWydaniaPrzesylkiBiznesowejPlus)), __LINE__);
        }
        $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;
        
        return $this;
    }
    /**
     * Get punktWydaniaPrzesylkiBiznesowej value
     * @return bool|null
     */
    public function getPunktWydaniaPrzesylkiBiznesowej(): ?bool
    {
        return $this->punktWydaniaPrzesylkiBiznesowej;
    }
    /**
     * Set punktWydaniaPrzesylkiBiznesowej value
     * @param bool $punktWydaniaPrzesylkiBiznesowej
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setPunktWydaniaPrzesylkiBiznesowej(?bool $punktWydaniaPrzesylkiBiznesowej = null): self
    {
        // validation for constraint: boolean
        if (!is_null($punktWydaniaPrzesylkiBiznesowej) && !is_bool($punktWydaniaPrzesylkiBiznesowej)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($punktWydaniaPrzesylkiBiznesowej, true), gettype($punktWydaniaPrzesylkiBiznesowej)), __LINE__);
        }
        $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;
        
        return $this;
    }
    /**
     * Get siecPlacowek value
     * @return string|null
     */
    public function getSiecPlacowek(): ?string
    {
        return $this->siecPlacowek;
    }
    /**
     * Set siecPlacowek value
     * @param string $siecPlacowek
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setSiecPlacowek(?string $siecPlacowek = null): self
    {
        // validation for constraint: string
        if (!is_null($siecPlacowek) && !is_string($siecPlacowek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($siecPlacowek, true), gettype($siecPlacowek)), __LINE__);
        }
        $this->siecPlacowek = $siecPlacowek;
        
        return $this;
    }
    /**
     * Get idZPO value
     * @return string|null
     */
    public function getIdZPO(): ?string
    {
        return $this->idZPO;
    }
    /**
     * Set idZPO value
     * @param string $idZPO
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType
     */
    public function setIdZPO(?string $idZPO = null): self
    {
        // validation for constraint: string
        if (!is_null($idZPO) && !is_string($idZPO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idZPO, true), gettype($idZPO)), __LINE__);
        }
        $this->idZPO = $idZPO;
        
        return $this;
    }
}
