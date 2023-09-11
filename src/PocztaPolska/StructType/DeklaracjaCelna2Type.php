<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deklaracjaCelna2Type StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeklaracjaCelna2Type extends AbstractStructBase
{
    /**
     * The rodzaj
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $rodzaj;
    /**
     * The zawartoscPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $zawartoscPrzesylki;
    /**
     * The walutaKodISO
     * Meta information extracted from the WSDL
     * - documentation: Kod ISO waluty w której wyrażone są wartości pozycji podanych w elemencie szczegolyZawartosciPrzesylki
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $walutaKodISO;
    /**
     * The szczegolyZawartosciPrzesylki
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[]
     */
    protected array $szczegolyZawartosciPrzesylki;
    /**
     * The dokumentyTowarzyszace
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DokumentyTowarzyszaceType[]
     */
    protected ?array $dokumentyTowarzyszace = null;
    /**
     * The wyjasnienie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $wyjasnienie = null;
    /**
     * The oplatyPocztowe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $oplatyPocztowe = null;
    /**
     * The uwagi
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $uwagi = null;
    /**
     * The numerReferencyjnyImportera
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerReferencyjnyImportera = null;
    /**
     * The numerTelefonuImportera
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerTelefonuImportera = null;
    /**
     * The numerReferencyjnyCelny
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $numerReferencyjnyCelny = null;

    /**
     * Constructor method for deklaracjaCelna2Type
     * @uses DeklaracjaCelna2Type::setRodzaj()
     * @uses DeklaracjaCelna2Type::setZawartoscPrzesylki()
     * @uses DeklaracjaCelna2Type::setWalutaKodISO()
     * @uses DeklaracjaCelna2Type::setSzczegolyZawartosciPrzesylki()
     * @uses DeklaracjaCelna2Type::setDokumentyTowarzyszace()
     * @uses DeklaracjaCelna2Type::setWyjasnienie()
     * @uses DeklaracjaCelna2Type::setOplatyPocztowe()
     * @uses DeklaracjaCelna2Type::setUwagi()
     * @uses DeklaracjaCelna2Type::setNumerReferencyjnyImportera()
     * @uses DeklaracjaCelna2Type::setNumerTelefonuImportera()
     * @uses DeklaracjaCelna2Type::setNumerReferencyjnyCelny()
     * @param string $rodzaj
     * @param string $zawartoscPrzesylki
     * @param string $walutaKodISO
     * @param \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     * @param \PocztaPolska\StructType\DokumentyTowarzyszaceType[] $dokumentyTowarzyszace
     * @param string $wyjasnienie
     * @param string $oplatyPocztowe
     * @param string $uwagi
     * @param string $numerReferencyjnyImportera
     * @param string $numerTelefonuImportera
     * @param string $numerReferencyjnyCelny
     */
    public function __construct(string $rodzaj, string $zawartoscPrzesylki, string $walutaKodISO, array $szczegolyZawartosciPrzesylki, ?array $dokumentyTowarzyszace = null, ?string $wyjasnienie = null, ?string $oplatyPocztowe = null, ?string $uwagi = null, ?string $numerReferencyjnyImportera = null, ?string $numerTelefonuImportera = null, ?string $numerReferencyjnyCelny = null)
    {
        $this
            ->setRodzaj($rodzaj)
            ->setZawartoscPrzesylki($zawartoscPrzesylki)
            ->setWalutaKodISO($walutaKodISO)
            ->setSzczegolyZawartosciPrzesylki($szczegolyZawartosciPrzesylki)
            ->setDokumentyTowarzyszace($dokumentyTowarzyszace)
            ->setWyjasnienie($wyjasnienie)
            ->setOplatyPocztowe($oplatyPocztowe)
            ->setUwagi($uwagi)
            ->setNumerReferencyjnyImportera($numerReferencyjnyImportera)
            ->setNumerTelefonuImportera($numerTelefonuImportera)
            ->setNumerReferencyjnyCelny($numerReferencyjnyCelny);
    }

    /**
     * Get rodzaj value
     * @return string
     */
    public function getRodzaj(): string
    {
        return $this->rodzaj;
    }

    /**
     * Set rodzaj value
     * @uses \PocztaPolska\EnumType\DeklaracaCelnaRodzajEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\DeklaracaCelnaRodzajEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rodzaj
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setRodzaj(string $rodzaj): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\DeklaracaCelnaRodzajEnum::valueIsValid($rodzaj)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\DeklaracaCelnaRodzajEnum', is_array($rodzaj) ? implode(', ', $rodzaj) : var_export($rodzaj, true), implode(', ', \PocztaPolska\EnumType\DeklaracaCelnaRodzajEnum::getValidValues())), __LINE__);
        }
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Get zawartoscPrzesylki value
     * @return string
     */
    public function getZawartoscPrzesylki(): string
    {
        return $this->zawartoscPrzesylki;
    }

    /**
     * Set zawartoscPrzesylki value
     * @uses \PocztaPolska\EnumType\ZawartoscPrzesylkiZagranicznejEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\ZawartoscPrzesylkiZagranicznejEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $zawartoscPrzesylki
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setZawartoscPrzesylki(string $zawartoscPrzesylki): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\ZawartoscPrzesylkiZagranicznejEnum::valueIsValid($zawartoscPrzesylki)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\ZawartoscPrzesylkiZagranicznejEnum', is_array($zawartoscPrzesylki) ? implode(', ', $zawartoscPrzesylki) : var_export($zawartoscPrzesylki, true), implode(', ', \PocztaPolska\EnumType\ZawartoscPrzesylkiZagranicznejEnum::getValidValues())), __LINE__);
        }
        $this->zawartoscPrzesylki = $zawartoscPrzesylki;

        return $this;
    }

    /**
     * Get walutaKodISO value
     * @return string
     */
    public function getWalutaKodISO(): string
    {
        return $this->walutaKodISO;
    }

    /**
     * Set walutaKodISO value
     * @param string $walutaKodISO
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setWalutaKodISO(string $walutaKodISO): self
    {
        // validation for constraint: string
        if (!is_null($walutaKodISO) && !is_string($walutaKodISO)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($walutaKodISO, true), gettype($walutaKodISO)), __LINE__);
        }
        $this->walutaKodISO = $walutaKodISO;

        return $this;
    }

    /**
     * Get szczegolyZawartosciPrzesylki value
     * @return \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[]
     */
    public function getSzczegolyZawartosciPrzesylki(): array
    {
        return $this->szczegolyZawartosciPrzesylki;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setSzczegolyZawartosciPrzesylki method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSzczegolyZawartosciPrzesylki method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSzczegolyZawartosciPrzesylkiForArrayConstraintFromSetSzczegolyZawartosciPrzesylki(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem) {
            // validation for constraint: itemType
            if (!$deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem instanceof \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType) {
                $invalidValues[] = is_object($deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem) ? get_class($deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem) : sprintf('%s(%s)', gettype($deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem), var_export($deklaracjaCelna2TypeSzczegolyZawartosciPrzesylkiItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The szczegolyZawartosciPrzesylki property can only contain items of type \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set szczegolyZawartosciPrzesylki value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType[] $szczegolyZawartosciPrzesylki
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setSzczegolyZawartosciPrzesylki(array $szczegolyZawartosciPrzesylki): self
    {
        // validation for constraint: array
        if ('' !== ($szczegolyZawartosciPrzesylkiArrayErrorMessage = self::validateSzczegolyZawartosciPrzesylkiForArrayConstraintFromSetSzczegolyZawartosciPrzesylki($szczegolyZawartosciPrzesylki))) {
            throw new InvalidArgumentException($szczegolyZawartosciPrzesylkiArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($szczegolyZawartosciPrzesylki) && count($szczegolyZawartosciPrzesylki) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($szczegolyZawartosciPrzesylki)), __LINE__);
        }
        $this->szczegolyZawartosciPrzesylki = $szczegolyZawartosciPrzesylki;

        return $this;
    }

    /**
     * Add item to szczegolyZawartosciPrzesylki value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType $item
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function addToSzczegolyZawartosciPrzesylki(\PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType) {
            throw new InvalidArgumentException(sprintf('The szczegolyZawartosciPrzesylki property can only contain items of type \PocztaPolska\StructType\SzczegolyZawartosciPrzesylkiZagranicznejType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->szczegolyZawartosciPrzesylki) && count($this->szczegolyZawartosciPrzesylki) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->szczegolyZawartosciPrzesylki)), __LINE__);
        }
        $this->szczegolyZawartosciPrzesylki[] = $item;

        return $this;
    }

    /**
     * Get dokumentyTowarzyszace value
     * @return \PocztaPolska\StructType\DokumentyTowarzyszaceType[]
     */
    public function getDokumentyTowarzyszace(): ?array
    {
        return $this->dokumentyTowarzyszace;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setDokumentyTowarzyszace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDokumentyTowarzyszace method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDokumentyTowarzyszaceForArrayConstraintFromSetDokumentyTowarzyszace(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deklaracjaCelna2TypeDokumentyTowarzyszaceItem) {
            // validation for constraint: itemType
            if (!$deklaracjaCelna2TypeDokumentyTowarzyszaceItem instanceof \PocztaPolska\StructType\DokumentyTowarzyszaceType) {
                $invalidValues[] = is_object($deklaracjaCelna2TypeDokumentyTowarzyszaceItem) ? get_class($deklaracjaCelna2TypeDokumentyTowarzyszaceItem) : sprintf('%s(%s)', gettype($deklaracjaCelna2TypeDokumentyTowarzyszaceItem), var_export($deklaracjaCelna2TypeDokumentyTowarzyszaceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dokumentyTowarzyszace property can only contain items of type \PocztaPolska\StructType\DokumentyTowarzyszaceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set dokumentyTowarzyszace value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\DokumentyTowarzyszaceType[] $dokumentyTowarzyszace
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setDokumentyTowarzyszace(?array $dokumentyTowarzyszace = null): self
    {
        // validation for constraint: array
        if ('' !== ($dokumentyTowarzyszaceArrayErrorMessage = self::validateDokumentyTowarzyszaceForArrayConstraintFromSetDokumentyTowarzyszace($dokumentyTowarzyszace))) {
            throw new InvalidArgumentException($dokumentyTowarzyszaceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($dokumentyTowarzyszace) && count($dokumentyTowarzyszace) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($dokumentyTowarzyszace)), __LINE__);
        }
        $this->dokumentyTowarzyszace = $dokumentyTowarzyszace;

        return $this;
    }

    /**
     * Add item to dokumentyTowarzyszace value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\DokumentyTowarzyszaceType $item
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function addToDokumentyTowarzyszace(\PocztaPolska\StructType\DokumentyTowarzyszaceType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\DokumentyTowarzyszaceType) {
            throw new InvalidArgumentException(sprintf('The dokumentyTowarzyszace property can only contain items of type \PocztaPolska\StructType\DokumentyTowarzyszaceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->dokumentyTowarzyszace) && count($this->dokumentyTowarzyszace) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->dokumentyTowarzyszace)), __LINE__);
        }
        $this->dokumentyTowarzyszace[] = $item;

        return $this;
    }

    /**
     * Get wyjasnienie value
     * @return string|null
     */
    public function getWyjasnienie(): ?string
    {
        return $this->wyjasnienie;
    }

    /**
     * Set wyjasnienie value
     * @param string $wyjasnienie
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setWyjasnienie(?string $wyjasnienie = null): self
    {
        // validation for constraint: string
        if (!is_null($wyjasnienie) && !is_string($wyjasnienie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wyjasnienie, true), gettype($wyjasnienie)), __LINE__);
        }
        $this->wyjasnienie = $wyjasnienie;

        return $this;
    }

    /**
     * Get oplatyPocztowe value
     * @return string|null
     */
    public function getOplatyPocztowe(): ?string
    {
        return $this->oplatyPocztowe;
    }

    /**
     * Set oplatyPocztowe value
     * @param string $oplatyPocztowe
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setOplatyPocztowe(?string $oplatyPocztowe = null): self
    {
        // validation for constraint: string
        if (!is_null($oplatyPocztowe) && !is_string($oplatyPocztowe)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oplatyPocztowe, true), gettype($oplatyPocztowe)), __LINE__);
        }
        $this->oplatyPocztowe = $oplatyPocztowe;

        return $this;
    }

    /**
     * Get uwagi value
     * @return string|null
     */
    public function getUwagi(): ?string
    {
        return $this->uwagi;
    }

    /**
     * Set uwagi value
     * @param string $uwagi
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setUwagi(?string $uwagi = null): self
    {
        // validation for constraint: string
        if (!is_null($uwagi) && !is_string($uwagi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uwagi, true), gettype($uwagi)), __LINE__);
        }
        $this->uwagi = $uwagi;

        return $this;
    }

    /**
     * Get numerReferencyjnyImportera value
     * @return string|null
     */
    public function getNumerReferencyjnyImportera(): ?string
    {
        return $this->numerReferencyjnyImportera;
    }

    /**
     * Set numerReferencyjnyImportera value
     * @param string $numerReferencyjnyImportera
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setNumerReferencyjnyImportera(?string $numerReferencyjnyImportera = null): self
    {
        // validation for constraint: string
        if (!is_null($numerReferencyjnyImportera) && !is_string($numerReferencyjnyImportera)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerReferencyjnyImportera, true), gettype($numerReferencyjnyImportera)), __LINE__);
        }
        $this->numerReferencyjnyImportera = $numerReferencyjnyImportera;

        return $this;
    }

    /**
     * Get numerTelefonuImportera value
     * @return string|null
     */
    public function getNumerTelefonuImportera(): ?string
    {
        return $this->numerTelefonuImportera;
    }

    /**
     * Set numerTelefonuImportera value
     * @param string $numerTelefonuImportera
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setNumerTelefonuImportera(?string $numerTelefonuImportera = null): self
    {
        // validation for constraint: string
        if (!is_null($numerTelefonuImportera) && !is_string($numerTelefonuImportera)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerTelefonuImportera, true), gettype($numerTelefonuImportera)), __LINE__);
        }
        $this->numerTelefonuImportera = $numerTelefonuImportera;

        return $this;
    }

    /**
     * Get numerReferencyjnyCelny value
     * @return string|null
     */
    public function getNumerReferencyjnyCelny(): ?string
    {
        return $this->numerReferencyjnyCelny;
    }

    /**
     * Set numerReferencyjnyCelny value
     * @param string $numerReferencyjnyCelny
     * @return \PocztaPolska\StructType\DeklaracjaCelna2Type
     */
    public function setNumerReferencyjnyCelny(?string $numerReferencyjnyCelny = null): self
    {
        // validation for constraint: string
        if (!is_null($numerReferencyjnyCelny) && !is_string($numerReferencyjnyCelny)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerReferencyjnyCelny, true), gettype($numerReferencyjnyCelny)), __LINE__);
        }
        $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;

        return $this;
    }
}
