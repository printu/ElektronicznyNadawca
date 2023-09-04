<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaBiznesowaPlusType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaBiznesowaPlusType extends PrzesylkaRejestrowanaType
{
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PobranieType|null
     */
    protected ?\PocztaPolska\StructType\PobranieType $pobranie = null;
    /**
     * The urzadWydaniaPrzesylki
     * Meta information extracted from the WSDL
     * - documentation: Wystarczy przesłac obiekt z ustawionym id reszta pól moż ezostać pominięta (aby zmniejszyć ilośc danych do tansmisji)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PlacowkaPocztowaType|null
     */
    protected ?\PocztaPolska\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki = null;
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\SubPrzesylkaBiznesowaPlusType[]
     */
    protected ?array $subPrzesylka = null;
    /**
     * The dataDrugiejProbyDoreczenia
     * Meta information extracted from the WSDL
     * - choice: dataDrugiejProbyDoreczenia | drugaProbaDoreczeniaPoLiczbieDni
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var string|null
     */
    protected ?string $dataDrugiejProbyDoreczenia = null;
    /**
     * The drugaProbaDoreczeniaPoLiczbieDni
     * Meta information extracted from the WSDL
     * - choice: dataDrugiejProbyDoreczenia | drugaProbaDoreczeniaPoLiczbieDni
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var int|null
     */
    protected ?int $drugaProbaDoreczeniaPoLiczbieDni = null;
    /**
     * The sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;
    /**
     * The potwierdzenieOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PotwierdzenieOdbioruBiznesowaType|null
     */
    protected ?\PocztaPolska\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null;
    /**
     * The doreczenie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DoreczenieBiznesowaType|null
     */
    protected ?\PocztaPolska\StructType\DoreczenieBiznesowaType $doreczenie = null;
    /**
     * The zwrotDokumentow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ZwrotDokumentowBiznesowaType|null
     */
    protected ?\PocztaPolska\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null;
    /**
     * The posteRestante
     * @var bool|null
     */
    protected ?bool $posteRestante = null;
    /**
     * The masa
     * Meta information extracted from the WSDL
     * - documentation: masa przesyłki podana w gramach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $masa = null;
    /**
     * The gabaryt
     * @var string|null
     */
    protected ?string $gabaryt = null;
    /**
     * The wartosc
     * Meta information extracted from the WSDL
     * - documentation: zadeklarowana wartość przesyłki w groszach
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $wartosc = null;
    /**
     * The kwotaTranzakcji
     * Meta information extracted from the WSDL
     * - base: xsd:int
     * - maxInclusive: 9999999
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $kwotaTranzakcji = null;
    /**
     * The ostroznie
     * @var bool|null
     */
    protected ?bool $ostroznie = null;
    /**
     * The kategoria
     * @var string|null
     */
    protected ?string $kategoria = null;
    /**
     * The iloscPotwierdzenOdbioru
     * Meta information extracted from the WSDL
     * - documentation: atrybut nieużywany, użyj potwierdzenieOdbioru
     * - base: xsd:int
     * - maxInclusive: 9
     * - minInclusive: 0
     * @var int|null
     */
    protected ?int $iloscPotwierdzenOdbioru = null;
    /**
     * The eKontaktAdresata
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 0
     * @var string|null
     */
    protected ?string $eKontaktAdresata = null;
    /**
     * The eSposobPowiadomieniaAdresata
     * @var string|null
     */
    protected ?string $eSposobPowiadomieniaAdresata = null;
    /**
     * The numerPrzesylkiKlienta
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 25
     * @var string|null
     */
    protected ?string $numerPrzesylkiKlienta = null;
    /**
     * The iloscDniOczekiwaniaNaWydanie
     * @var int|null
     */
    protected ?int $iloscDniOczekiwaniaNaWydanie = null;
    /**
     * The oczekiwanyTerminDoreczenia
     * @var string|null
     */
    protected ?string $oczekiwanyTerminDoreczenia = null;
    /**
     * The terminRodzajPlus
     * @var string|null
     */
    protected ?string $terminRodzajPlus = null;
    /**
     * The numerTransakcjiOdbioru
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * @var string|null
     */
    protected ?string $numerTransakcjiOdbioru = null;
    /**
     * Constructor method for przesylkaBiznesowaPlusType
     * @uses PrzesylkaBiznesowaPlusType::setPobranie()
     * @uses PrzesylkaBiznesowaPlusType::setUrzadWydaniaPrzesylki()
     * @uses PrzesylkaBiznesowaPlusType::setSubPrzesylka()
     * @uses PrzesylkaBiznesowaPlusType::setDataDrugiejProbyDoreczenia()
     * @uses PrzesylkaBiznesowaPlusType::setDrugaProbaDoreczeniaPoLiczbieDni()
     * @uses PrzesylkaBiznesowaPlusType::setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
     * @uses PrzesylkaBiznesowaPlusType::setPotwierdzenieOdbioru()
     * @uses PrzesylkaBiznesowaPlusType::setDoreczenie()
     * @uses PrzesylkaBiznesowaPlusType::setZwrotDokumentow()
     * @uses PrzesylkaBiznesowaPlusType::setPosteRestante()
     * @uses PrzesylkaBiznesowaPlusType::setMasa()
     * @uses PrzesylkaBiznesowaPlusType::setGabaryt()
     * @uses PrzesylkaBiznesowaPlusType::setWartosc()
     * @uses PrzesylkaBiznesowaPlusType::setKwotaTranzakcji()
     * @uses PrzesylkaBiznesowaPlusType::setOstroznie()
     * @uses PrzesylkaBiznesowaPlusType::setKategoria()
     * @uses PrzesylkaBiznesowaPlusType::setIloscPotwierdzenOdbioru()
     * @uses PrzesylkaBiznesowaPlusType::setEKontaktAdresata()
     * @uses PrzesylkaBiznesowaPlusType::setESposobPowiadomieniaAdresata()
     * @uses PrzesylkaBiznesowaPlusType::setNumerPrzesylkiKlienta()
     * @uses PrzesylkaBiznesowaPlusType::setIloscDniOczekiwaniaNaWydanie()
     * @uses PrzesylkaBiznesowaPlusType::setOczekiwanyTerminDoreczenia()
     * @uses PrzesylkaBiznesowaPlusType::setTerminRodzajPlus()
     * @uses PrzesylkaBiznesowaPlusType::setNumerTransakcjiOdbioru()
     * @param \PocztaPolska\StructType\PobranieType $pobranie
     * @param \PocztaPolska\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki
     * @param \PocztaPolska\StructType\SubPrzesylkaBiznesowaPlusType[] $subPrzesylka
     * @param string $dataDrugiejProbyDoreczenia
     * @param int $drugaProbaDoreczeniaPoLiczbieDni
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @param \PocztaPolska\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     * @param \PocztaPolska\StructType\DoreczenieBiznesowaType $doreczenie
     * @param \PocztaPolska\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     * @param bool $posteRestante
     * @param int $masa
     * @param string $gabaryt
     * @param int $wartosc
     * @param int $kwotaTranzakcji
     * @param bool $ostroznie
     * @param string $kategoria
     * @param int $iloscPotwierdzenOdbioru
     * @param string $eKontaktAdresata
     * @param string $eSposobPowiadomieniaAdresata
     * @param string $numerPrzesylkiKlienta
     * @param int $iloscDniOczekiwaniaNaWydanie
     * @param string $oczekiwanyTerminDoreczenia
     * @param string $terminRodzajPlus
     * @param string $numerTransakcjiOdbioru
     */
    public function __construct(?\PocztaPolska\StructType\PobranieType $pobranie = null, ?\PocztaPolska\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki = null, ?array $subPrzesylka = null, ?string $dataDrugiejProbyDoreczenia = null, ?int $drugaProbaDoreczeniaPoLiczbieDni = null, ?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null, ?\PocztaPolska\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null, ?\PocztaPolska\StructType\DoreczenieBiznesowaType $doreczenie = null, ?\PocztaPolska\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null, ?bool $posteRestante = null, ?int $masa = null, ?string $gabaryt = null, ?int $wartosc = null, ?int $kwotaTranzakcji = null, ?bool $ostroznie = null, ?string $kategoria = null, ?int $iloscPotwierdzenOdbioru = null, ?string $eKontaktAdresata = null, ?string $eSposobPowiadomieniaAdresata = null, ?string $numerPrzesylkiKlienta = null, ?int $iloscDniOczekiwaniaNaWydanie = null, ?string $oczekiwanyTerminDoreczenia = null, ?string $terminRodzajPlus = null, ?string $numerTransakcjiOdbioru = null)
    {
        $this
            ->setPobranie($pobranie)
            ->setUrzadWydaniaPrzesylki($urzadWydaniaPrzesylki)
            ->setSubPrzesylka($subPrzesylka)
            ->setDataDrugiejProbyDoreczenia($dataDrugiejProbyDoreczenia)
            ->setDrugaProbaDoreczeniaPoLiczbieDni($drugaProbaDoreczeniaPoLiczbieDni)
            ->setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
            ->setPotwierdzenieOdbioru($potwierdzenieOdbioru)
            ->setDoreczenie($doreczenie)
            ->setZwrotDokumentow($zwrotDokumentow)
            ->setPosteRestante($posteRestante)
            ->setMasa($masa)
            ->setGabaryt($gabaryt)
            ->setWartosc($wartosc)
            ->setKwotaTranzakcji($kwotaTranzakcji)
            ->setOstroznie($ostroznie)
            ->setKategoria($kategoria)
            ->setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
            ->setEKontaktAdresata($eKontaktAdresata)
            ->setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata)
            ->setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
            ->setIloscDniOczekiwaniaNaWydanie($iloscDniOczekiwaniaNaWydanie)
            ->setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia)
            ->setTerminRodzajPlus($terminRodzajPlus)
            ->setNumerTransakcjiOdbioru($numerTransakcjiOdbioru);
    }
    /**
     * Get pobranie value
     * @return \PocztaPolska\StructType\PobranieType|null
     */
    public function getPobranie(): ?\PocztaPolska\StructType\PobranieType
    {
        return $this->pobranie;
    }
    /**
     * Set pobranie value
     * @param \PocztaPolska\StructType\PobranieType $pobranie
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setPobranie(?\PocztaPolska\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get urzadWydaniaPrzesylki value
     * @return \PocztaPolska\StructType\PlacowkaPocztowaType|null
     */
    public function getUrzadWydaniaPrzesylki(): ?\PocztaPolska\StructType\PlacowkaPocztowaType
    {
        return $this->urzadWydaniaPrzesylki;
    }
    /**
     * Set urzadWydaniaPrzesylki value
     * @param \PocztaPolska\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setUrzadWydaniaPrzesylki(?\PocztaPolska\StructType\PlacowkaPocztowaType $urzadWydaniaPrzesylki = null): self
    {
        $this->urzadWydaniaPrzesylki = $urzadWydaniaPrzesylki;
        
        return $this;
    }
    /**
     * Get subPrzesylka value
     * @return \PocztaPolska\StructType\SubPrzesylkaBiznesowaPlusType[]
     */
    public function getSubPrzesylka(): ?array
    {
        return $this->subPrzesylka;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSubPrzesylka method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPrzesylka method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubPrzesylkaForArrayConstraintFromSetSubPrzesylka(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $przesylkaBiznesowaPlusTypeSubPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$przesylkaBiznesowaPlusTypeSubPrzesylkaItem instanceof \PocztaPolska\StructType\SubPrzesylkaBiznesowaPlusType) {
                $invalidValues[] = is_object($przesylkaBiznesowaPlusTypeSubPrzesylkaItem) ? get_class($przesylkaBiznesowaPlusTypeSubPrzesylkaItem) : sprintf('%s(%s)', gettype($przesylkaBiznesowaPlusTypeSubPrzesylkaItem), var_export($przesylkaBiznesowaPlusTypeSubPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPrzesylka property can only contain items of type \PocztaPolska\StructType\SubPrzesylkaBiznesowaPlusType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set subPrzesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SubPrzesylkaBiznesowaPlusType[] $subPrzesylka
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setSubPrzesylka(?array $subPrzesylka = null): self
    {
        // validation for constraint: array
        if ('' !== ($subPrzesylkaArrayErrorMessage = self::validateSubPrzesylkaForArrayConstraintFromSetSubPrzesylka($subPrzesylka))) {
            throw new InvalidArgumentException($subPrzesylkaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($subPrzesylka) && count($subPrzesylka) > 100) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($subPrzesylka)), __LINE__);
        }
        $this->subPrzesylka = $subPrzesylka;
        
        return $this;
    }
    /**
     * Add item to subPrzesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SubPrzesylkaBiznesowaPlusType $item
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function addToSubPrzesylka(\PocztaPolska\StructType\SubPrzesylkaBiznesowaPlusType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\SubPrzesylkaBiznesowaPlusType) {
            throw new InvalidArgumentException(sprintf('The subPrzesylka property can only contain items of type \PocztaPolska\StructType\SubPrzesylkaBiznesowaPlusType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->subPrzesylka) && count($this->subPrzesylka) >= 100) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->subPrzesylka)), __LINE__);
        }
        $this->subPrzesylka[] = $item;
        
        return $this;
    }
    /**
     * Get dataDrugiejProbyDoreczenia value
     * @return string|null
     */
    public function getDataDrugiejProbyDoreczenia(): ?string
    {
        return $this->dataDrugiejProbyDoreczenia ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDataDrugiejProbyDoreczenia method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDataDrugiejProbyDoreczenia method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDataDrugiejProbyDoreczeniaForChoiceConstraintFromSetDataDrugiejProbyDoreczenia($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'drugaProbaDoreczeniaPoLiczbieDni',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property dataDrugiejProbyDoreczenia can\'t be set as the property %s is already set. Only one property must be set among these properties: dataDrugiejProbyDoreczenia, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set dataDrugiejProbyDoreczenia value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $dataDrugiejProbyDoreczenia
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setDataDrugiejProbyDoreczenia(?string $dataDrugiejProbyDoreczenia = null): self
    {
        // validation for constraint: string
        if (!is_null($dataDrugiejProbyDoreczenia) && !is_string($dataDrugiejProbyDoreczenia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataDrugiejProbyDoreczenia, true), gettype($dataDrugiejProbyDoreczenia)), __LINE__);
        }
        // validation for constraint: choice(dataDrugiejProbyDoreczenia, drugaProbaDoreczeniaPoLiczbieDni)
        if ('' !== ($dataDrugiejProbyDoreczeniaChoiceErrorMessage = self::validateDataDrugiejProbyDoreczeniaForChoiceConstraintFromSetDataDrugiejProbyDoreczenia($dataDrugiejProbyDoreczenia))) {
            throw new InvalidArgumentException($dataDrugiejProbyDoreczeniaChoiceErrorMessage, __LINE__);
        }
        if (is_null($dataDrugiejProbyDoreczenia) || (is_array($dataDrugiejProbyDoreczenia) && empty($dataDrugiejProbyDoreczenia))) {
            unset($this->dataDrugiejProbyDoreczenia);
        } else {
            $this->dataDrugiejProbyDoreczenia = $dataDrugiejProbyDoreczenia;
        }
        
        return $this;
    }
    /**
     * Get drugaProbaDoreczeniaPoLiczbieDni value
     * @return int|null
     */
    public function getDrugaProbaDoreczeniaPoLiczbieDni(): ?int
    {
        return $this->drugaProbaDoreczeniaPoLiczbieDni ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDrugaProbaDoreczeniaPoLiczbieDni method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDrugaProbaDoreczeniaPoLiczbieDni method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDrugaProbaDoreczeniaPoLiczbieDniForChoiceConstraintFromSetDrugaProbaDoreczeniaPoLiczbieDni($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'dataDrugiejProbyDoreczenia',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property drugaProbaDoreczeniaPoLiczbieDni can\'t be set as the property %s is already set. Only one property must be set among these properties: drugaProbaDoreczeniaPoLiczbieDni, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set drugaProbaDoreczeniaPoLiczbieDni value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param int $drugaProbaDoreczeniaPoLiczbieDni
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setDrugaProbaDoreczeniaPoLiczbieDni(?int $drugaProbaDoreczeniaPoLiczbieDni = null): self
    {
        // validation for constraint: int
        if (!is_null($drugaProbaDoreczeniaPoLiczbieDni) && !(is_int($drugaProbaDoreczeniaPoLiczbieDni) || ctype_digit($drugaProbaDoreczeniaPoLiczbieDni))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($drugaProbaDoreczeniaPoLiczbieDni, true), gettype($drugaProbaDoreczeniaPoLiczbieDni)), __LINE__);
        }
        // validation for constraint: choice(dataDrugiejProbyDoreczenia, drugaProbaDoreczeniaPoLiczbieDni)
        if ('' !== ($drugaProbaDoreczeniaPoLiczbieDniChoiceErrorMessage = self::validateDrugaProbaDoreczeniaPoLiczbieDniForChoiceConstraintFromSetDrugaProbaDoreczeniaPoLiczbieDni($drugaProbaDoreczeniaPoLiczbieDni))) {
            throw new InvalidArgumentException($drugaProbaDoreczeniaPoLiczbieDniChoiceErrorMessage, __LINE__);
        }
        if (is_null($drugaProbaDoreczeniaPoLiczbieDni) || (is_array($drugaProbaDoreczeniaPoLiczbieDni) && empty($drugaProbaDoreczeniaPoLiczbieDni))) {
            unset($this->drugaProbaDoreczeniaPoLiczbieDni);
        } else {
            $this->drugaProbaDoreczeniaPoLiczbieDni = $drugaProbaDoreczeniaPoLiczbieDni;
        }
        
        return $this;
    }
    /**
     * Get sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @return bool|null
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(): ?bool
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }
    /**
     * Set sprawdzenieZawartosciPrzesylkiPrzezOdbiorce value
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce(?bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce) && !is_bool($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce, true), gettype($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)), __LINE__);
        }
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
        
        return $this;
    }
    /**
     * Get potwierdzenieOdbioru value
     * @return \PocztaPolska\StructType\PotwierdzenieOdbioruBiznesowaType|null
     */
    public function getPotwierdzenieOdbioru(): ?\PocztaPolska\StructType\PotwierdzenieOdbioruBiznesowaType
    {
        return $this->potwierdzenieOdbioru;
    }
    /**
     * Set potwierdzenieOdbioru value
     * @param \PocztaPolska\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setPotwierdzenieOdbioru(?\PocztaPolska\StructType\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null): self
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
        
        return $this;
    }
    /**
     * Get doreczenie value
     * @return \PocztaPolska\StructType\DoreczenieBiznesowaType|null
     */
    public function getDoreczenie(): ?\PocztaPolska\StructType\DoreczenieBiznesowaType
    {
        return $this->doreczenie;
    }
    /**
     * Set doreczenie value
     * @param \PocztaPolska\StructType\DoreczenieBiznesowaType $doreczenie
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setDoreczenie(?\PocztaPolska\StructType\DoreczenieBiznesowaType $doreczenie = null): self
    {
        $this->doreczenie = $doreczenie;
        
        return $this;
    }
    /**
     * Get zwrotDokumentow value
     * @return \PocztaPolska\StructType\ZwrotDokumentowBiznesowaType|null
     */
    public function getZwrotDokumentow(): ?\PocztaPolska\StructType\ZwrotDokumentowBiznesowaType
    {
        return $this->zwrotDokumentow;
    }
    /**
     * Set zwrotDokumentow value
     * @param \PocztaPolska\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setZwrotDokumentow(?\PocztaPolska\StructType\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null): self
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        
        return $this;
    }
    /**
     * Get posteRestante value
     * @return bool|null
     */
    public function getPosteRestante(): ?bool
    {
        return $this->posteRestante;
    }
    /**
     * Set posteRestante value
     * @param bool $posteRestante
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setPosteRestante(?bool $posteRestante = null): self
    {
        // validation for constraint: boolean
        if (!is_null($posteRestante) && !is_bool($posteRestante)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($posteRestante, true), gettype($posteRestante)), __LINE__);
        }
        $this->posteRestante = $posteRestante;
        
        return $this;
    }
    /**
     * Get masa value
     * @return int|null
     */
    public function getMasa(): ?int
    {
        return $this->masa;
    }
    /**
     * Set masa value
     * @param int $masa
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setMasa(?int $masa = null): self
    {
        // validation for constraint: int
        if (!is_null($masa) && !(is_int($masa) || ctype_digit($masa))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($masa, true), gettype($masa)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($masa) && $masa > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($masa, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($masa) && $masa < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($masa, true)), __LINE__);
        }
        $this->masa = $masa;
        
        return $this;
    }
    /**
     * Get gabaryt value
     * @return string|null
     */
    public function getGabaryt(): ?string
    {
        return $this->gabaryt;
    }
    /**
     * Set gabaryt value
     * @uses \PocztaPolska\EnumType\GabarytBiznesowaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\GabarytBiznesowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $gabaryt
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setGabaryt(?string $gabaryt = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\GabarytBiznesowaType::valueIsValid($gabaryt)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\GabarytBiznesowaType', is_array($gabaryt) ? implode(', ', $gabaryt) : var_export($gabaryt, true), implode(', ', \PocztaPolska\EnumType\GabarytBiznesowaType::getValidValues())), __LINE__);
        }
        $this->gabaryt = $gabaryt;
        
        return $this;
    }
    /**
     * Get wartosc value
     * @return int|null
     */
    public function getWartosc(): ?int
    {
        return $this->wartosc;
    }
    /**
     * Set wartosc value
     * @param int $wartosc
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setWartosc(?int $wartosc = null): self
    {
        // validation for constraint: int
        if (!is_null($wartosc) && !(is_int($wartosc) || ctype_digit($wartosc))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wartosc, true), gettype($wartosc)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($wartosc) && $wartosc > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($wartosc, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($wartosc) && $wartosc < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($wartosc, true)), __LINE__);
        }
        $this->wartosc = $wartosc;
        
        return $this;
    }
    /**
     * Get kwotaTranzakcji value
     * @return int|null
     */
    public function getKwotaTranzakcji(): ?int
    {
        return $this->kwotaTranzakcji;
    }
    /**
     * Set kwotaTranzakcji value
     * @param int $kwotaTranzakcji
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setKwotaTranzakcji(?int $kwotaTranzakcji = null): self
    {
        // validation for constraint: int
        if (!is_null($kwotaTranzakcji) && !(is_int($kwotaTranzakcji) || ctype_digit($kwotaTranzakcji))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($kwotaTranzakcji, true), gettype($kwotaTranzakcji)), __LINE__);
        }
        // validation for constraint: maxInclusive(9999999)
        if (!is_null($kwotaTranzakcji) && $kwotaTranzakcji > 9999999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999999', var_export($kwotaTranzakcji, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($kwotaTranzakcji) && $kwotaTranzakcji < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($kwotaTranzakcji, true)), __LINE__);
        }
        $this->kwotaTranzakcji = $kwotaTranzakcji;
        
        return $this;
    }
    /**
     * Get ostroznie value
     * @return bool|null
     */
    public function getOstroznie(): ?bool
    {
        return $this->ostroznie;
    }
    /**
     * Set ostroznie value
     * @param bool $ostroznie
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setOstroznie(?bool $ostroznie = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ostroznie) && !is_bool($ostroznie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ostroznie, true), gettype($ostroznie)), __LINE__);
        }
        $this->ostroznie = $ostroznie;
        
        return $this;
    }
    /**
     * Get kategoria value
     * @return string|null
     */
    public function getKategoria(): ?string
    {
        return $this->kategoria;
    }
    /**
     * Set kategoria value
     * @uses \PocztaPolska\EnumType\KategoriaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\KategoriaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $kategoria
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setKategoria(?string $kategoria = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\KategoriaType::valueIsValid($kategoria)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\KategoriaType', is_array($kategoria) ? implode(', ', $kategoria) : var_export($kategoria, true), implode(', ', \PocztaPolska\EnumType\KategoriaType::getValidValues())), __LINE__);
        }
        $this->kategoria = $kategoria;
        
        return $this;
    }
    /**
     * Get iloscPotwierdzenOdbioru value
     * @return int|null
     */
    public function getIloscPotwierdzenOdbioru(): ?int
    {
        return $this->iloscPotwierdzenOdbioru;
    }
    /**
     * Set iloscPotwierdzenOdbioru value
     * @param int $iloscPotwierdzenOdbioru
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setIloscPotwierdzenOdbioru(?int $iloscPotwierdzenOdbioru = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscPotwierdzenOdbioru) && !(is_int($iloscPotwierdzenOdbioru) || ctype_digit($iloscPotwierdzenOdbioru))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscPotwierdzenOdbioru, true), gettype($iloscPotwierdzenOdbioru)), __LINE__);
        }
        // validation for constraint: maxInclusive(9)
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru > 9) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($iloscPotwierdzenOdbioru) && $iloscPotwierdzenOdbioru < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($iloscPotwierdzenOdbioru, true)), __LINE__);
        }
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        
        return $this;
    }
    /**
     * Get eKontaktAdresata value
     * @return string|null
     */
    public function getEKontaktAdresata(): ?string
    {
        return $this->eKontaktAdresata;
    }
    /**
     * Set eKontaktAdresata value
     * @param string $eKontaktAdresata
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setEKontaktAdresata(?string $eKontaktAdresata = null): self
    {
        // validation for constraint: string
        if (!is_null($eKontaktAdresata) && !is_string($eKontaktAdresata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eKontaktAdresata, true), gettype($eKontaktAdresata)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($eKontaktAdresata) && mb_strlen((string) $eKontaktAdresata) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $eKontaktAdresata)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($eKontaktAdresata) && mb_strlen((string) $eKontaktAdresata) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $eKontaktAdresata)), __LINE__);
        }
        $this->eKontaktAdresata = $eKontaktAdresata;
        
        return $this;
    }
    /**
     * Get eSposobPowiadomieniaAdresata value
     * @return string|null
     */
    public function getESposobPowiadomieniaAdresata(): ?string
    {
        return $this->eSposobPowiadomieniaAdresata;
    }
    /**
     * Set eSposobPowiadomieniaAdresata value
     * @uses \PocztaPolska\EnumType\ESposobPowiadomieniaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\ESposobPowiadomieniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eSposobPowiadomieniaAdresata
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setESposobPowiadomieniaAdresata(?string $eSposobPowiadomieniaAdresata = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\ESposobPowiadomieniaType::valueIsValid($eSposobPowiadomieniaAdresata)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\ESposobPowiadomieniaType', is_array($eSposobPowiadomieniaAdresata) ? implode(', ', $eSposobPowiadomieniaAdresata) : var_export($eSposobPowiadomieniaAdresata, true), implode(', ', \PocztaPolska\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;
        
        return $this;
    }
    /**
     * Get numerPrzesylkiKlienta value
     * @return string|null
     */
    public function getNumerPrzesylkiKlienta(): ?string
    {
        return $this->numerPrzesylkiKlienta;
    }
    /**
     * Set numerPrzesylkiKlienta value
     * @param string $numerPrzesylkiKlienta
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setNumerPrzesylkiKlienta(?string $numerPrzesylkiKlienta = null): self
    {
        // validation for constraint: string
        if (!is_null($numerPrzesylkiKlienta) && !is_string($numerPrzesylkiKlienta)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerPrzesylkiKlienta, true), gettype($numerPrzesylkiKlienta)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($numerPrzesylkiKlienta) && mb_strlen((string) $numerPrzesylkiKlienta) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $numerPrzesylkiKlienta)), __LINE__);
        }
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        
        return $this;
    }
    /**
     * Get iloscDniOczekiwaniaNaWydanie value
     * @return int|null
     */
    public function getIloscDniOczekiwaniaNaWydanie(): ?int
    {
        return $this->iloscDniOczekiwaniaNaWydanie;
    }
    /**
     * Set iloscDniOczekiwaniaNaWydanie value
     * @param int $iloscDniOczekiwaniaNaWydanie
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setIloscDniOczekiwaniaNaWydanie(?int $iloscDniOczekiwaniaNaWydanie = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscDniOczekiwaniaNaWydanie) && !(is_int($iloscDniOczekiwaniaNaWydanie) || ctype_digit($iloscDniOczekiwaniaNaWydanie))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscDniOczekiwaniaNaWydanie, true), gettype($iloscDniOczekiwaniaNaWydanie)), __LINE__);
        }
        $this->iloscDniOczekiwaniaNaWydanie = $iloscDniOczekiwaniaNaWydanie;
        
        return $this;
    }
    /**
     * Get oczekiwanyTerminDoreczenia value
     * @return string|null
     */
    public function getOczekiwanyTerminDoreczenia(): ?string
    {
        return $this->oczekiwanyTerminDoreczenia;
    }
    /**
     * Set oczekiwanyTerminDoreczenia value
     * @param string $oczekiwanyTerminDoreczenia
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setOczekiwanyTerminDoreczenia(?string $oczekiwanyTerminDoreczenia = null): self
    {
        // validation for constraint: string
        if (!is_null($oczekiwanyTerminDoreczenia) && !is_string($oczekiwanyTerminDoreczenia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oczekiwanyTerminDoreczenia, true), gettype($oczekiwanyTerminDoreczenia)), __LINE__);
        }
        $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;
        
        return $this;
    }
    /**
     * Get terminRodzajPlus value
     * @return string|null
     */
    public function getTerminRodzajPlus(): ?string
    {
        return $this->terminRodzajPlus;
    }
    /**
     * Set terminRodzajPlus value
     * @uses \PocztaPolska\EnumType\TerminRodzajPlusType::valueIsValid()
     * @uses \PocztaPolska\EnumType\TerminRodzajPlusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $terminRodzajPlus
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setTerminRodzajPlus(?string $terminRodzajPlus = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\TerminRodzajPlusType::valueIsValid($terminRodzajPlus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\TerminRodzajPlusType', is_array($terminRodzajPlus) ? implode(', ', $terminRodzajPlus) : var_export($terminRodzajPlus, true), implode(', ', \PocztaPolska\EnumType\TerminRodzajPlusType::getValidValues())), __LINE__);
        }
        $this->terminRodzajPlus = $terminRodzajPlus;
        
        return $this;
    }
    /**
     * Get numerTransakcjiOdbioru value
     * @return string|null
     */
    public function getNumerTransakcjiOdbioru(): ?string
    {
        return $this->numerTransakcjiOdbioru;
    }
    /**
     * Set numerTransakcjiOdbioru value
     * @param string $numerTransakcjiOdbioru
     * @return \PocztaPolska\StructType\PrzesylkaBiznesowaPlusType
     */
    public function setNumerTransakcjiOdbioru(?string $numerTransakcjiOdbioru = null): self
    {
        // validation for constraint: string
        if (!is_null($numerTransakcjiOdbioru) && !is_string($numerTransakcjiOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerTransakcjiOdbioru, true), gettype($numerTransakcjiOdbioru)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($numerTransakcjiOdbioru) && mb_strlen((string) $numerTransakcjiOdbioru) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $numerTransakcjiOdbioru)), __LINE__);
        }
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
        
        return $this;
    }
}
