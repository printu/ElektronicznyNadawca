<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deklaracjaCelnaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeklaracjaCelnaType extends AbstractStructBase
{
    /**
     * The szczegoly
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\SzczegolyDeklaracjiCelnejType[]
     */
    protected array $szczegoly;
    /**
     * The podarunek
     * @var bool|null
     */
    protected ?bool $podarunek = null;
    /**
     * The dokument
     * @var bool|null
     */
    protected ?bool $dokument = null;
    /**
     * The probkaHandlowa
     * @var bool|null
     */
    protected ?bool $probkaHandlowa = null;
    /**
     * The zwrotTowaru
     * @var bool|null
     */
    protected ?bool $zwrotTowaru = null;
    /**
     * The towary
     * @var bool|null
     */
    protected ?bool $towary = null;
    /**
     * The inny
     * @var bool|null
     */
    protected ?bool $inny = null;
    /**
     * The wyjasnienie
     * @var string|null
     */
    protected ?string $wyjasnienie = null;
    /**
     * The oplatyPocztowe
     * @var string|null
     */
    protected ?string $oplatyPocztowe = null;
    /**
     * The uwagi
     * @var string|null
     */
    protected ?string $uwagi = null;
    /**
     * The licencja
     * @var string|null
     */
    protected ?string $licencja = null;
    /**
     * The swiadectwo
     * @var string|null
     */
    protected ?string $swiadectwo = null;
    /**
     * The faktura
     * @var string|null
     */
    protected ?string $faktura = null;
    /**
     * The numerReferencyjnyImportera
     * @var string|null
     */
    protected ?string $numerReferencyjnyImportera = null;
    /**
     * The numerTelefonuImportera
     * @var string|null
     */
    protected ?string $numerTelefonuImportera = null;
    /**
     * The waluta
     * @var string|null
     */
    protected ?string $waluta = null;
    /**
     * Constructor method for deklaracjaCelnaType
     * @uses DeklaracjaCelnaType::setSzczegoly()
     * @uses DeklaracjaCelnaType::setPodarunek()
     * @uses DeklaracjaCelnaType::setDokument()
     * @uses DeklaracjaCelnaType::setProbkaHandlowa()
     * @uses DeklaracjaCelnaType::setZwrotTowaru()
     * @uses DeklaracjaCelnaType::setTowary()
     * @uses DeklaracjaCelnaType::setInny()
     * @uses DeklaracjaCelnaType::setWyjasnienie()
     * @uses DeklaracjaCelnaType::setOplatyPocztowe()
     * @uses DeklaracjaCelnaType::setUwagi()
     * @uses DeklaracjaCelnaType::setLicencja()
     * @uses DeklaracjaCelnaType::setSwiadectwo()
     * @uses DeklaracjaCelnaType::setFaktura()
     * @uses DeklaracjaCelnaType::setNumerReferencyjnyImportera()
     * @uses DeklaracjaCelnaType::setNumerTelefonuImportera()
     * @uses DeklaracjaCelnaType::setWaluta()
     * @param \PocztaPolska\StructType\SzczegolyDeklaracjiCelnejType[] $szczegoly
     * @param bool $podarunek
     * @param bool $dokument
     * @param bool $probkaHandlowa
     * @param bool $zwrotTowaru
     * @param bool $towary
     * @param bool $inny
     * @param string $wyjasnienie
     * @param string $oplatyPocztowe
     * @param string $uwagi
     * @param string $licencja
     * @param string $swiadectwo
     * @param string $faktura
     * @param string $numerReferencyjnyImportera
     * @param string $numerTelefonuImportera
     * @param string $waluta
     */
    public function __construct(array $szczegoly, ?bool $podarunek = null, ?bool $dokument = null, ?bool $probkaHandlowa = null, ?bool $zwrotTowaru = null, ?bool $towary = null, ?bool $inny = null, ?string $wyjasnienie = null, ?string $oplatyPocztowe = null, ?string $uwagi = null, ?string $licencja = null, ?string $swiadectwo = null, ?string $faktura = null, ?string $numerReferencyjnyImportera = null, ?string $numerTelefonuImportera = null, ?string $waluta = null)
    {
        $this
            ->setSzczegoly($szczegoly)
            ->setPodarunek($podarunek)
            ->setDokument($dokument)
            ->setProbkaHandlowa($probkaHandlowa)
            ->setZwrotTowaru($zwrotTowaru)
            ->setTowary($towary)
            ->setInny($inny)
            ->setWyjasnienie($wyjasnienie)
            ->setOplatyPocztowe($oplatyPocztowe)
            ->setUwagi($uwagi)
            ->setLicencja($licencja)
            ->setSwiadectwo($swiadectwo)
            ->setFaktura($faktura)
            ->setNumerReferencyjnyImportera($numerReferencyjnyImportera)
            ->setNumerTelefonuImportera($numerTelefonuImportera)
            ->setWaluta($waluta);
    }
    /**
     * Get szczegoly value
     * @return \PocztaPolska\StructType\SzczegolyDeklaracjiCelnejType[]
     */
    public function getSzczegoly(): array
    {
        return $this->szczegoly;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSzczegoly method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSzczegoly method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSzczegolyForArrayConstraintFromSetSzczegoly(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deklaracjaCelnaTypeSzczegolyItem) {
            // validation for constraint: itemType
            if (!$deklaracjaCelnaTypeSzczegolyItem instanceof \PocztaPolska\StructType\SzczegolyDeklaracjiCelnejType) {
                $invalidValues[] = is_object($deklaracjaCelnaTypeSzczegolyItem) ? get_class($deklaracjaCelnaTypeSzczegolyItem) : sprintf('%s(%s)', gettype($deklaracjaCelnaTypeSzczegolyItem), var_export($deklaracjaCelnaTypeSzczegolyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The szczegoly property can only contain items of type \PocztaPolska\StructType\SzczegolyDeklaracjiCelnejType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set szczegoly value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SzczegolyDeklaracjiCelnejType[] $szczegoly
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setSzczegoly(array $szczegoly): self
    {
        // validation for constraint: array
        if ('' !== ($szczegolyArrayErrorMessage = self::validateSzczegolyForArrayConstraintFromSetSzczegoly($szczegoly))) {
            throw new InvalidArgumentException($szczegolyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($szczegoly) && count($szczegoly) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($szczegoly)), __LINE__);
        }
        $this->szczegoly = $szczegoly;
        
        return $this;
    }
    /**
     * Add item to szczegoly value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SzczegolyDeklaracjiCelnejType $item
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function addToSzczegoly(\PocztaPolska\StructType\SzczegolyDeklaracjiCelnejType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\SzczegolyDeklaracjiCelnejType) {
            throw new InvalidArgumentException(sprintf('The szczegoly property can only contain items of type \PocztaPolska\StructType\SzczegolyDeklaracjiCelnejType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->szczegoly) && count($this->szczegoly) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->szczegoly)), __LINE__);
        }
        $this->szczegoly[] = $item;
        
        return $this;
    }
    /**
     * Get podarunek value
     * @return bool|null
     */
    public function getPodarunek(): ?bool
    {
        return $this->podarunek;
    }
    /**
     * Set podarunek value
     * @param bool $podarunek
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setPodarunek(?bool $podarunek = null): self
    {
        // validation for constraint: boolean
        if (!is_null($podarunek) && !is_bool($podarunek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($podarunek, true), gettype($podarunek)), __LINE__);
        }
        $this->podarunek = $podarunek;
        
        return $this;
    }
    /**
     * Get dokument value
     * @return bool|null
     */
    public function getDokument(): ?bool
    {
        return $this->dokument;
    }
    /**
     * Set dokument value
     * @param bool $dokument
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setDokument(?bool $dokument = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dokument) && !is_bool($dokument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dokument, true), gettype($dokument)), __LINE__);
        }
        $this->dokument = $dokument;
        
        return $this;
    }
    /**
     * Get probkaHandlowa value
     * @return bool|null
     */
    public function getProbkaHandlowa(): ?bool
    {
        return $this->probkaHandlowa;
    }
    /**
     * Set probkaHandlowa value
     * @param bool $probkaHandlowa
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setProbkaHandlowa(?bool $probkaHandlowa = null): self
    {
        // validation for constraint: boolean
        if (!is_null($probkaHandlowa) && !is_bool($probkaHandlowa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($probkaHandlowa, true), gettype($probkaHandlowa)), __LINE__);
        }
        $this->probkaHandlowa = $probkaHandlowa;
        
        return $this;
    }
    /**
     * Get zwrotTowaru value
     * @return bool|null
     */
    public function getZwrotTowaru(): ?bool
    {
        return $this->zwrotTowaru;
    }
    /**
     * Set zwrotTowaru value
     * @param bool $zwrotTowaru
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setZwrotTowaru(?bool $zwrotTowaru = null): self
    {
        // validation for constraint: boolean
        if (!is_null($zwrotTowaru) && !is_bool($zwrotTowaru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zwrotTowaru, true), gettype($zwrotTowaru)), __LINE__);
        }
        $this->zwrotTowaru = $zwrotTowaru;
        
        return $this;
    }
    /**
     * Get towary value
     * @return bool|null
     */
    public function getTowary(): ?bool
    {
        return $this->towary;
    }
    /**
     * Set towary value
     * @param bool $towary
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setTowary(?bool $towary = null): self
    {
        // validation for constraint: boolean
        if (!is_null($towary) && !is_bool($towary)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($towary, true), gettype($towary)), __LINE__);
        }
        $this->towary = $towary;
        
        return $this;
    }
    /**
     * Get inny value
     * @return bool|null
     */
    public function getInny(): ?bool
    {
        return $this->inny;
    }
    /**
     * Set inny value
     * @param bool $inny
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setInny(?bool $inny = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inny) && !is_bool($inny)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inny, true), gettype($inny)), __LINE__);
        }
        $this->inny = $inny;
        
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
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
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
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
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
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
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
     * Get licencja value
     * @return string|null
     */
    public function getLicencja(): ?string
    {
        return $this->licencja;
    }
    /**
     * Set licencja value
     * @param string $licencja
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setLicencja(?string $licencja = null): self
    {
        // validation for constraint: string
        if (!is_null($licencja) && !is_string($licencja)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($licencja, true), gettype($licencja)), __LINE__);
        }
        $this->licencja = $licencja;
        
        return $this;
    }
    /**
     * Get swiadectwo value
     * @return string|null
     */
    public function getSwiadectwo(): ?string
    {
        return $this->swiadectwo;
    }
    /**
     * Set swiadectwo value
     * @param string $swiadectwo
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setSwiadectwo(?string $swiadectwo = null): self
    {
        // validation for constraint: string
        if (!is_null($swiadectwo) && !is_string($swiadectwo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swiadectwo, true), gettype($swiadectwo)), __LINE__);
        }
        $this->swiadectwo = $swiadectwo;
        
        return $this;
    }
    /**
     * Get faktura value
     * @return string|null
     */
    public function getFaktura(): ?string
    {
        return $this->faktura;
    }
    /**
     * Set faktura value
     * @param string $faktura
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setFaktura(?string $faktura = null): self
    {
        // validation for constraint: string
        if (!is_null($faktura) && !is_string($faktura)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faktura, true), gettype($faktura)), __LINE__);
        }
        $this->faktura = $faktura;
        
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
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
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
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
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
     * Get waluta value
     * @return string|null
     */
    public function getWaluta(): ?string
    {
        return $this->waluta;
    }
    /**
     * Set waluta value
     * @param string $waluta
     * @return \PocztaPolska\StructType\DeklaracjaCelnaType
     */
    public function setWaluta(?string $waluta = null): self
    {
        // validation for constraint: string
        if (!is_null($waluta) && !is_string($waluta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($waluta, true), gettype($waluta)), __LINE__);
        }
        $this->waluta = $waluta;
        
        return $this;
    }
}
