<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for przesylkaPaletowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaPaletowaType extends PrzesylkaRejestrowanaType
{
    /**
     * The paleta
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\PaletaType
     */
    protected \PocztaPolska\StructType\PaletaType $paleta;
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\AdresType|null
     */
    protected ?\PocztaPolska\StructType\AdresType $miejsceOdbioru = null;
    /**
     * The miejsceDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\AdresType|null
     */
    protected ?\PocztaPolska\StructType\AdresType $miejsceDoreczenia = null;
    /**
     * The platnik
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PlatnikType|null
     */
    protected ?\PocztaPolska\StructType\PlatnikType $platnik = null;
    /**
     * The pobranie
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PobranieType|null
     */
    protected ?\PocztaPolska\StructType\PobranieType $pobranie = null;
    /**
     * The subPaleta
     * Meta information extracted from the WSDL
     * - maxOccurs: 32
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\SubPrzesylkaPaletowaType[]
     */
    protected ?array $subPaleta = null;
    /**
     * The daneSent
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DaneSentType[]
     */
    protected ?array $daneSent = null;
    /**
     * The awizacja
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\AwizacjaType|null
     */
    protected ?\PocztaPolska\StructType\AwizacjaType $awizacja = null;
    /**
     * The zawartosc
     * @var string|null
     */
    protected ?string $zawartosc = null;
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
     * The dataZaladunku
     * @var string|null
     */
    protected ?string $dataZaladunku = null;
    /**
     * The dataDostawy
     * @var string|null
     */
    protected ?string $dataDostawy = null;
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
     * The iloscZwracanychPaletEUR
     * @var int|null
     */
    protected ?int $iloscZwracanychPaletEUR = null;
    /**
     * The zalaczonaFV
     * @var string|null
     */
    protected ?string $zalaczonaFV = null;
    /**
     * The zalaczonyWZ
     * @var string|null
     */
    protected ?string $zalaczonyWZ = null;
    /**
     * The zalaczoneInne
     * @var string|null
     */
    protected ?string $zalaczoneInne = null;
    /**
     * The zwracanaFV
     * @var string|null
     */
    protected ?string $zwracanaFV = null;
    /**
     * The zwracanyWZ
     * @var string|null
     */
    protected ?string $zwracanyWZ = null;
    /**
     * The zwracaneInne
     * @var string|null
     */
    protected ?string $zwracaneInne = null;
    /**
     * The powiadomienieNadawcy
     * @var string|null
     */
    protected ?string $powiadomienieNadawcy = null;
    /**
     * The powiadomienieOdbiorcy
     * @var string|null
     */
    protected ?string $powiadomienieOdbiorcy = null;
    /**
     * The dostawaWSobote
     * @var bool|null
     */
    protected ?bool $dostawaWSobote = null;
    /**
     * The przygotowanieDokumentowPrzewozowych
     * @var bool|null
     */
    protected ?bool $przygotowanieDokumentowPrzewozowych = null;
    /**
     * The dostawaSamochodemDedykowanym
     * @var bool|null
     */
    protected ?bool $dostawaSamochodemDedykowanym = null;
    /**
     * The zmianaDanychAdresowych
     * @var bool|null
     */
    protected ?bool $zmianaDanychAdresowych = null;
    /**
     * The ustalenieTerminuDostawy
     * @var bool|null
     */
    protected ?bool $ustalenieTerminuDostawy = null;
    /**
     * The samochodZWinda
     * @var bool|null
     */
    protected ?bool $samochodZWinda = null;
    /**
     * The zabranieOpakowania
     * @var bool|null
     */
    protected ?bool $zabranieOpakowania = null;
    /**
     * The wniesienie
     * @var bool|null
     */
    protected ?bool $wniesienie = null;
    /**
     * The awizoSMS
     * @var bool|null
     */
    protected ?bool $awizoSMS = null;
    /**
     * Constructor method for przesylkaPaletowaType
     * @uses PrzesylkaPaletowaType::setPaleta()
     * @uses PrzesylkaPaletowaType::setMiejsceOdbioru()
     * @uses PrzesylkaPaletowaType::setMiejsceDoreczenia()
     * @uses PrzesylkaPaletowaType::setPlatnik()
     * @uses PrzesylkaPaletowaType::setPobranie()
     * @uses PrzesylkaPaletowaType::setSubPaleta()
     * @uses PrzesylkaPaletowaType::setDaneSent()
     * @uses PrzesylkaPaletowaType::setAwizacja()
     * @uses PrzesylkaPaletowaType::setZawartosc()
     * @uses PrzesylkaPaletowaType::setMasa()
     * @uses PrzesylkaPaletowaType::setDataZaladunku()
     * @uses PrzesylkaPaletowaType::setDataDostawy()
     * @uses PrzesylkaPaletowaType::setWartosc()
     * @uses PrzesylkaPaletowaType::setIloscZwracanychPaletEUR()
     * @uses PrzesylkaPaletowaType::setZalaczonaFV()
     * @uses PrzesylkaPaletowaType::setZalaczonyWZ()
     * @uses PrzesylkaPaletowaType::setZalaczoneInne()
     * @uses PrzesylkaPaletowaType::setZwracanaFV()
     * @uses PrzesylkaPaletowaType::setZwracanyWZ()
     * @uses PrzesylkaPaletowaType::setZwracaneInne()
     * @uses PrzesylkaPaletowaType::setPowiadomienieNadawcy()
     * @uses PrzesylkaPaletowaType::setPowiadomienieOdbiorcy()
     * @uses PrzesylkaPaletowaType::setDostawaWSobote()
     * @uses PrzesylkaPaletowaType::setPrzygotowanieDokumentowPrzewozowych()
     * @uses PrzesylkaPaletowaType::setDostawaSamochodemDedykowanym()
     * @uses PrzesylkaPaletowaType::setZmianaDanychAdresowych()
     * @uses PrzesylkaPaletowaType::setUstalenieTerminuDostawy()
     * @uses PrzesylkaPaletowaType::setSamochodZWinda()
     * @uses PrzesylkaPaletowaType::setZabranieOpakowania()
     * @uses PrzesylkaPaletowaType::setWniesienie()
     * @uses PrzesylkaPaletowaType::setAwizoSMS()
     * @param \PocztaPolska\StructType\PaletaType $paleta
     * @param \PocztaPolska\StructType\AdresType $miejsceOdbioru
     * @param \PocztaPolska\StructType\AdresType $miejsceDoreczenia
     * @param \PocztaPolska\StructType\PlatnikType $platnik
     * @param \PocztaPolska\StructType\PobranieType $pobranie
     * @param \PocztaPolska\StructType\SubPrzesylkaPaletowaType[] $subPaleta
     * @param \PocztaPolska\StructType\DaneSentType[] $daneSent
     * @param \PocztaPolska\StructType\AwizacjaType $awizacja
     * @param string $zawartosc
     * @param int $masa
     * @param string $dataZaladunku
     * @param string $dataDostawy
     * @param int $wartosc
     * @param int $iloscZwracanychPaletEUR
     * @param string $zalaczonaFV
     * @param string $zalaczonyWZ
     * @param string $zalaczoneInne
     * @param string $zwracanaFV
     * @param string $zwracanyWZ
     * @param string $zwracaneInne
     * @param string $powiadomienieNadawcy
     * @param string $powiadomienieOdbiorcy
     * @param bool $dostawaWSobote
     * @param bool $przygotowanieDokumentowPrzewozowych
     * @param bool $dostawaSamochodemDedykowanym
     * @param bool $zmianaDanychAdresowych
     * @param bool $ustalenieTerminuDostawy
     * @param bool $samochodZWinda
     * @param bool $zabranieOpakowania
     * @param bool $wniesienie
     * @param bool $awizoSMS
     */
    public function __construct(\PocztaPolska\StructType\PaletaType $paleta, ?\PocztaPolska\StructType\AdresType $miejsceOdbioru = null, ?\PocztaPolska\StructType\AdresType $miejsceDoreczenia = null, ?\PocztaPolska\StructType\PlatnikType $platnik = null, ?\PocztaPolska\StructType\PobranieType $pobranie = null, ?array $subPaleta = null, ?array $daneSent = null, ?\PocztaPolska\StructType\AwizacjaType $awizacja = null, ?string $zawartosc = null, ?int $masa = null, ?string $dataZaladunku = null, ?string $dataDostawy = null, ?int $wartosc = null, ?int $iloscZwracanychPaletEUR = null, ?string $zalaczonaFV = null, ?string $zalaczonyWZ = null, ?string $zalaczoneInne = null, ?string $zwracanaFV = null, ?string $zwracanyWZ = null, ?string $zwracaneInne = null, ?string $powiadomienieNadawcy = null, ?string $powiadomienieOdbiorcy = null, ?bool $dostawaWSobote = null, ?bool $przygotowanieDokumentowPrzewozowych = null, ?bool $dostawaSamochodemDedykowanym = null, ?bool $zmianaDanychAdresowych = null, ?bool $ustalenieTerminuDostawy = null, ?bool $samochodZWinda = null, ?bool $zabranieOpakowania = null, ?bool $wniesienie = null, ?bool $awizoSMS = null)
    {
        $this
            ->setPaleta($paleta)
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setMiejsceDoreczenia($miejsceDoreczenia)
            ->setPlatnik($platnik)
            ->setPobranie($pobranie)
            ->setSubPaleta($subPaleta)
            ->setDaneSent($daneSent)
            ->setAwizacja($awizacja)
            ->setZawartosc($zawartosc)
            ->setMasa($masa)
            ->setDataZaladunku($dataZaladunku)
            ->setDataDostawy($dataDostawy)
            ->setWartosc($wartosc)
            ->setIloscZwracanychPaletEUR($iloscZwracanychPaletEUR)
            ->setZalaczonaFV($zalaczonaFV)
            ->setZalaczonyWZ($zalaczonyWZ)
            ->setZalaczoneInne($zalaczoneInne)
            ->setZwracanaFV($zwracanaFV)
            ->setZwracanyWZ($zwracanyWZ)
            ->setZwracaneInne($zwracaneInne)
            ->setPowiadomienieNadawcy($powiadomienieNadawcy)
            ->setPowiadomienieOdbiorcy($powiadomienieOdbiorcy)
            ->setDostawaWSobote($dostawaWSobote)
            ->setPrzygotowanieDokumentowPrzewozowych($przygotowanieDokumentowPrzewozowych)
            ->setDostawaSamochodemDedykowanym($dostawaSamochodemDedykowanym)
            ->setZmianaDanychAdresowych($zmianaDanychAdresowych)
            ->setUstalenieTerminuDostawy($ustalenieTerminuDostawy)
            ->setSamochodZWinda($samochodZWinda)
            ->setZabranieOpakowania($zabranieOpakowania)
            ->setWniesienie($wniesienie)
            ->setAwizoSMS($awizoSMS);
    }
    /**
     * Get paleta value
     * @return \PocztaPolska\StructType\PaletaType
     */
    public function getPaleta(): \PocztaPolska\StructType\PaletaType
    {
        return $this->paleta;
    }
    /**
     * Set paleta value
     * @param \PocztaPolska\StructType\PaletaType $paleta
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setPaleta(\PocztaPolska\StructType\PaletaType $paleta): self
    {
        $this->paleta = $paleta;
        
        return $this;
    }
    /**
     * Get miejsceOdbioru value
     * @return \PocztaPolska\StructType\AdresType|null
     */
    public function getMiejsceOdbioru(): ?\PocztaPolska\StructType\AdresType
    {
        return $this->miejsceOdbioru;
    }
    /**
     * Set miejsceOdbioru value
     * @param \PocztaPolska\StructType\AdresType $miejsceOdbioru
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setMiejsceOdbioru(?\PocztaPolska\StructType\AdresType $miejsceOdbioru = null): self
    {
        $this->miejsceOdbioru = $miejsceOdbioru;
        
        return $this;
    }
    /**
     * Get miejsceDoreczenia value
     * @return \PocztaPolska\StructType\AdresType|null
     */
    public function getMiejsceDoreczenia(): ?\PocztaPolska\StructType\AdresType
    {
        return $this->miejsceDoreczenia;
    }
    /**
     * Set miejsceDoreczenia value
     * @param \PocztaPolska\StructType\AdresType $miejsceDoreczenia
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setMiejsceDoreczenia(?\PocztaPolska\StructType\AdresType $miejsceDoreczenia = null): self
    {
        $this->miejsceDoreczenia = $miejsceDoreczenia;
        
        return $this;
    }
    /**
     * Get platnik value
     * @return \PocztaPolska\StructType\PlatnikType|null
     */
    public function getPlatnik(): ?\PocztaPolska\StructType\PlatnikType
    {
        return $this->platnik;
    }
    /**
     * Set platnik value
     * @param \PocztaPolska\StructType\PlatnikType $platnik
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setPlatnik(?\PocztaPolska\StructType\PlatnikType $platnik = null): self
    {
        $this->platnik = $platnik;
        
        return $this;
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
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setPobranie(?\PocztaPolska\StructType\PobranieType $pobranie = null): self
    {
        $this->pobranie = $pobranie;
        
        return $this;
    }
    /**
     * Get subPaleta value
     * @return \PocztaPolska\StructType\SubPrzesylkaPaletowaType[]
     */
    public function getSubPaleta(): ?array
    {
        return $this->subPaleta;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSubPaleta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubPaleta method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubPaletaForArrayConstraintFromSetSubPaleta(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $przesylkaPaletowaTypeSubPaletaItem) {
            // validation for constraint: itemType
            if (!$przesylkaPaletowaTypeSubPaletaItem instanceof \PocztaPolska\StructType\SubPrzesylkaPaletowaType) {
                $invalidValues[] = is_object($przesylkaPaletowaTypeSubPaletaItem) ? get_class($przesylkaPaletowaTypeSubPaletaItem) : sprintf('%s(%s)', gettype($przesylkaPaletowaTypeSubPaletaItem), var_export($przesylkaPaletowaTypeSubPaletaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPaleta property can only contain items of type \PocztaPolska\StructType\SubPrzesylkaPaletowaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set subPaleta value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SubPrzesylkaPaletowaType[] $subPaleta
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setSubPaleta(?array $subPaleta = null): self
    {
        // validation for constraint: array
        if ('' !== ($subPaletaArrayErrorMessage = self::validateSubPaletaForArrayConstraintFromSetSubPaleta($subPaleta))) {
            throw new InvalidArgumentException($subPaletaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(32)
        if (is_array($subPaleta) && count($subPaleta) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 32', count($subPaleta)), __LINE__);
        }
        $this->subPaleta = $subPaleta;
        
        return $this;
    }
    /**
     * Add item to subPaleta value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SubPrzesylkaPaletowaType $item
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function addToSubPaleta(\PocztaPolska\StructType\SubPrzesylkaPaletowaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\SubPrzesylkaPaletowaType) {
            throw new InvalidArgumentException(sprintf('The subPaleta property can only contain items of type \PocztaPolska\StructType\SubPrzesylkaPaletowaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(32)
        if (is_array($this->subPaleta) && count($this->subPaleta) >= 32) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 32', count($this->subPaleta)), __LINE__);
        }
        $this->subPaleta[] = $item;
        
        return $this;
    }
    /**
     * Get daneSent value
     * @return \PocztaPolska\StructType\DaneSentType[]
     */
    public function getDaneSent(): ?array
    {
        return $this->daneSent;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDaneSent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDaneSent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDaneSentForArrayConstraintFromSetDaneSent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $przesylkaPaletowaTypeDaneSentItem) {
            // validation for constraint: itemType
            if (!$przesylkaPaletowaTypeDaneSentItem instanceof \PocztaPolska\StructType\DaneSentType) {
                $invalidValues[] = is_object($przesylkaPaletowaTypeDaneSentItem) ? get_class($przesylkaPaletowaTypeDaneSentItem) : sprintf('%s(%s)', gettype($przesylkaPaletowaTypeDaneSentItem), var_export($przesylkaPaletowaTypeDaneSentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The daneSent property can only contain items of type \PocztaPolska\StructType\DaneSentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set daneSent value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\DaneSentType[] $daneSent
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setDaneSent(?array $daneSent = null): self
    {
        // validation for constraint: array
        if ('' !== ($daneSentArrayErrorMessage = self::validateDaneSentForArrayConstraintFromSetDaneSent($daneSent))) {
            throw new InvalidArgumentException($daneSentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($daneSent) && count($daneSent) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($daneSent)), __LINE__);
        }
        $this->daneSent = $daneSent;
        
        return $this;
    }
    /**
     * Add item to daneSent value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\DaneSentType $item
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function addToDaneSent(\PocztaPolska\StructType\DaneSentType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\DaneSentType) {
            throw new InvalidArgumentException(sprintf('The daneSent property can only contain items of type \PocztaPolska\StructType\DaneSentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->daneSent) && count($this->daneSent) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->daneSent)), __LINE__);
        }
        $this->daneSent[] = $item;
        
        return $this;
    }
    /**
     * Get awizacja value
     * @return \PocztaPolska\StructType\AwizacjaType|null
     */
    public function getAwizacja(): ?\PocztaPolska\StructType\AwizacjaType
    {
        return $this->awizacja;
    }
    /**
     * Set awizacja value
     * @param \PocztaPolska\StructType\AwizacjaType $awizacja
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setAwizacja(?\PocztaPolska\StructType\AwizacjaType $awizacja = null): self
    {
        $this->awizacja = $awizacja;
        
        return $this;
    }
    /**
     * Get zawartosc value
     * @return string|null
     */
    public function getZawartosc(): ?string
    {
        return $this->zawartosc;
    }
    /**
     * Set zawartosc value
     * @param string $zawartosc
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setZawartosc(?string $zawartosc = null): self
    {
        // validation for constraint: string
        if (!is_null($zawartosc) && !is_string($zawartosc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zawartosc, true), gettype($zawartosc)), __LINE__);
        }
        $this->zawartosc = $zawartosc;
        
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
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
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
     * Get dataZaladunku value
     * @return string|null
     */
    public function getDataZaladunku(): ?string
    {
        return $this->dataZaladunku;
    }
    /**
     * Set dataZaladunku value
     * @param string $dataZaladunku
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setDataZaladunku(?string $dataZaladunku = null): self
    {
        // validation for constraint: string
        if (!is_null($dataZaladunku) && !is_string($dataZaladunku)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataZaladunku, true), gettype($dataZaladunku)), __LINE__);
        }
        $this->dataZaladunku = $dataZaladunku;
        
        return $this;
    }
    /**
     * Get dataDostawy value
     * @return string|null
     */
    public function getDataDostawy(): ?string
    {
        return $this->dataDostawy;
    }
    /**
     * Set dataDostawy value
     * @param string $dataDostawy
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setDataDostawy(?string $dataDostawy = null): self
    {
        // validation for constraint: string
        if (!is_null($dataDostawy) && !is_string($dataDostawy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataDostawy, true), gettype($dataDostawy)), __LINE__);
        }
        $this->dataDostawy = $dataDostawy;
        
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
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
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
     * Get iloscZwracanychPaletEUR value
     * @return int|null
     */
    public function getIloscZwracanychPaletEUR(): ?int
    {
        return $this->iloscZwracanychPaletEUR;
    }
    /**
     * Set iloscZwracanychPaletEUR value
     * @param int $iloscZwracanychPaletEUR
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setIloscZwracanychPaletEUR(?int $iloscZwracanychPaletEUR = null): self
    {
        // validation for constraint: int
        if (!is_null($iloscZwracanychPaletEUR) && !(is_int($iloscZwracanychPaletEUR) || ctype_digit($iloscZwracanychPaletEUR))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iloscZwracanychPaletEUR, true), gettype($iloscZwracanychPaletEUR)), __LINE__);
        }
        $this->iloscZwracanychPaletEUR = $iloscZwracanychPaletEUR;
        
        return $this;
    }
    /**
     * Get zalaczonaFV value
     * @return string|null
     */
    public function getZalaczonaFV(): ?string
    {
        return $this->zalaczonaFV;
    }
    /**
     * Set zalaczonaFV value
     * @param string $zalaczonaFV
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczonaFV(?string $zalaczonaFV = null): self
    {
        // validation for constraint: string
        if (!is_null($zalaczonaFV) && !is_string($zalaczonaFV)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zalaczonaFV, true), gettype($zalaczonaFV)), __LINE__);
        }
        $this->zalaczonaFV = $zalaczonaFV;
        
        return $this;
    }
    /**
     * Get zalaczonyWZ value
     * @return string|null
     */
    public function getZalaczonyWZ(): ?string
    {
        return $this->zalaczonyWZ;
    }
    /**
     * Set zalaczonyWZ value
     * @param string $zalaczonyWZ
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczonyWZ(?string $zalaczonyWZ = null): self
    {
        // validation for constraint: string
        if (!is_null($zalaczonyWZ) && !is_string($zalaczonyWZ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zalaczonyWZ, true), gettype($zalaczonyWZ)), __LINE__);
        }
        $this->zalaczonyWZ = $zalaczonyWZ;
        
        return $this;
    }
    /**
     * Get zalaczoneInne value
     * @return string|null
     */
    public function getZalaczoneInne(): ?string
    {
        return $this->zalaczoneInne;
    }
    /**
     * Set zalaczoneInne value
     * @param string $zalaczoneInne
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setZalaczoneInne(?string $zalaczoneInne = null): self
    {
        // validation for constraint: string
        if (!is_null($zalaczoneInne) && !is_string($zalaczoneInne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zalaczoneInne, true), gettype($zalaczoneInne)), __LINE__);
        }
        $this->zalaczoneInne = $zalaczoneInne;
        
        return $this;
    }
    /**
     * Get zwracanaFV value
     * @return string|null
     */
    public function getZwracanaFV(): ?string
    {
        return $this->zwracanaFV;
    }
    /**
     * Set zwracanaFV value
     * @param string $zwracanaFV
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setZwracanaFV(?string $zwracanaFV = null): self
    {
        // validation for constraint: string
        if (!is_null($zwracanaFV) && !is_string($zwracanaFV)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwracanaFV, true), gettype($zwracanaFV)), __LINE__);
        }
        $this->zwracanaFV = $zwracanaFV;
        
        return $this;
    }
    /**
     * Get zwracanyWZ value
     * @return string|null
     */
    public function getZwracanyWZ(): ?string
    {
        return $this->zwracanyWZ;
    }
    /**
     * Set zwracanyWZ value
     * @param string $zwracanyWZ
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setZwracanyWZ(?string $zwracanyWZ = null): self
    {
        // validation for constraint: string
        if (!is_null($zwracanyWZ) && !is_string($zwracanyWZ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwracanyWZ, true), gettype($zwracanyWZ)), __LINE__);
        }
        $this->zwracanyWZ = $zwracanyWZ;
        
        return $this;
    }
    /**
     * Get zwracaneInne value
     * @return string|null
     */
    public function getZwracaneInne(): ?string
    {
        return $this->zwracaneInne;
    }
    /**
     * Set zwracaneInne value
     * @param string $zwracaneInne
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setZwracaneInne(?string $zwracaneInne = null): self
    {
        // validation for constraint: string
        if (!is_null($zwracaneInne) && !is_string($zwracaneInne)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zwracaneInne, true), gettype($zwracaneInne)), __LINE__);
        }
        $this->zwracaneInne = $zwracaneInne;
        
        return $this;
    }
    /**
     * Get powiadomienieNadawcy value
     * @return string|null
     */
    public function getPowiadomienieNadawcy(): ?string
    {
        return $this->powiadomienieNadawcy;
    }
    /**
     * Set powiadomienieNadawcy value
     * @param string $powiadomienieNadawcy
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setPowiadomienieNadawcy(?string $powiadomienieNadawcy = null): self
    {
        // validation for constraint: string
        if (!is_null($powiadomienieNadawcy) && !is_string($powiadomienieNadawcy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powiadomienieNadawcy, true), gettype($powiadomienieNadawcy)), __LINE__);
        }
        $this->powiadomienieNadawcy = $powiadomienieNadawcy;
        
        return $this;
    }
    /**
     * Get powiadomienieOdbiorcy value
     * @return string|null
     */
    public function getPowiadomienieOdbiorcy(): ?string
    {
        return $this->powiadomienieOdbiorcy;
    }
    /**
     * Set powiadomienieOdbiorcy value
     * @uses \PocztaPolska\EnumType\ESposobPowiadomieniaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\ESposobPowiadomieniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $powiadomienieOdbiorcy
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setPowiadomienieOdbiorcy(?string $powiadomienieOdbiorcy = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\ESposobPowiadomieniaType::valueIsValid($powiadomienieOdbiorcy)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\ESposobPowiadomieniaType', is_array($powiadomienieOdbiorcy) ? implode(', ', $powiadomienieOdbiorcy) : var_export($powiadomienieOdbiorcy, true), implode(', ', \PocztaPolska\EnumType\ESposobPowiadomieniaType::getValidValues())), __LINE__);
        }
        $this->powiadomienieOdbiorcy = $powiadomienieOdbiorcy;
        
        return $this;
    }
    /**
     * Get dostawaWSobote value
     * @return bool|null
     */
    public function getDostawaWSobote(): ?bool
    {
        return $this->dostawaWSobote;
    }
    /**
     * Set dostawaWSobote value
     * @param bool $dostawaWSobote
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setDostawaWSobote(?bool $dostawaWSobote = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dostawaWSobote) && !is_bool($dostawaWSobote)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dostawaWSobote, true), gettype($dostawaWSobote)), __LINE__);
        }
        $this->dostawaWSobote = $dostawaWSobote;
        
        return $this;
    }
    /**
     * Get przygotowanieDokumentowPrzewozowych value
     * @return bool|null
     */
    public function getPrzygotowanieDokumentowPrzewozowych(): ?bool
    {
        return $this->przygotowanieDokumentowPrzewozowych;
    }
    /**
     * Set przygotowanieDokumentowPrzewozowych value
     * @param bool $przygotowanieDokumentowPrzewozowych
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setPrzygotowanieDokumentowPrzewozowych(?bool $przygotowanieDokumentowPrzewozowych = null): self
    {
        // validation for constraint: boolean
        if (!is_null($przygotowanieDokumentowPrzewozowych) && !is_bool($przygotowanieDokumentowPrzewozowych)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($przygotowanieDokumentowPrzewozowych, true), gettype($przygotowanieDokumentowPrzewozowych)), __LINE__);
        }
        $this->przygotowanieDokumentowPrzewozowych = $przygotowanieDokumentowPrzewozowych;
        
        return $this;
    }
    /**
     * Get dostawaSamochodemDedykowanym value
     * @return bool|null
     */
    public function getDostawaSamochodemDedykowanym(): ?bool
    {
        return $this->dostawaSamochodemDedykowanym;
    }
    /**
     * Set dostawaSamochodemDedykowanym value
     * @param bool $dostawaSamochodemDedykowanym
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setDostawaSamochodemDedykowanym(?bool $dostawaSamochodemDedykowanym = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dostawaSamochodemDedykowanym) && !is_bool($dostawaSamochodemDedykowanym)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dostawaSamochodemDedykowanym, true), gettype($dostawaSamochodemDedykowanym)), __LINE__);
        }
        $this->dostawaSamochodemDedykowanym = $dostawaSamochodemDedykowanym;
        
        return $this;
    }
    /**
     * Get zmianaDanychAdresowych value
     * @return bool|null
     */
    public function getZmianaDanychAdresowych(): ?bool
    {
        return $this->zmianaDanychAdresowych;
    }
    /**
     * Set zmianaDanychAdresowych value
     * @param bool $zmianaDanychAdresowych
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setZmianaDanychAdresowych(?bool $zmianaDanychAdresowych = null): self
    {
        // validation for constraint: boolean
        if (!is_null($zmianaDanychAdresowych) && !is_bool($zmianaDanychAdresowych)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zmianaDanychAdresowych, true), gettype($zmianaDanychAdresowych)), __LINE__);
        }
        $this->zmianaDanychAdresowych = $zmianaDanychAdresowych;
        
        return $this;
    }
    /**
     * Get ustalenieTerminuDostawy value
     * @return bool|null
     */
    public function getUstalenieTerminuDostawy(): ?bool
    {
        return $this->ustalenieTerminuDostawy;
    }
    /**
     * Set ustalenieTerminuDostawy value
     * @param bool $ustalenieTerminuDostawy
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setUstalenieTerminuDostawy(?bool $ustalenieTerminuDostawy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ustalenieTerminuDostawy) && !is_bool($ustalenieTerminuDostawy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ustalenieTerminuDostawy, true), gettype($ustalenieTerminuDostawy)), __LINE__);
        }
        $this->ustalenieTerminuDostawy = $ustalenieTerminuDostawy;
        
        return $this;
    }
    /**
     * Get samochodZWinda value
     * @return bool|null
     */
    public function getSamochodZWinda(): ?bool
    {
        return $this->samochodZWinda;
    }
    /**
     * Set samochodZWinda value
     * @param bool $samochodZWinda
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setSamochodZWinda(?bool $samochodZWinda = null): self
    {
        // validation for constraint: boolean
        if (!is_null($samochodZWinda) && !is_bool($samochodZWinda)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($samochodZWinda, true), gettype($samochodZWinda)), __LINE__);
        }
        $this->samochodZWinda = $samochodZWinda;
        
        return $this;
    }
    /**
     * Get zabranieOpakowania value
     * @return bool|null
     */
    public function getZabranieOpakowania(): ?bool
    {
        return $this->zabranieOpakowania;
    }
    /**
     * Set zabranieOpakowania value
     * @param bool $zabranieOpakowania
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setZabranieOpakowania(?bool $zabranieOpakowania = null): self
    {
        // validation for constraint: boolean
        if (!is_null($zabranieOpakowania) && !is_bool($zabranieOpakowania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zabranieOpakowania, true), gettype($zabranieOpakowania)), __LINE__);
        }
        $this->zabranieOpakowania = $zabranieOpakowania;
        
        return $this;
    }
    /**
     * Get wniesienie value
     * @return bool|null
     */
    public function getWniesienie(): ?bool
    {
        return $this->wniesienie;
    }
    /**
     * Set wniesienie value
     * @param bool $wniesienie
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setWniesienie(?bool $wniesienie = null): self
    {
        // validation for constraint: boolean
        if (!is_null($wniesienie) && !is_bool($wniesienie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wniesienie, true), gettype($wniesienie)), __LINE__);
        }
        $this->wniesienie = $wniesienie;
        
        return $this;
    }
    /**
     * Get awizoSMS value
     * @return bool|null
     */
    public function getAwizoSMS(): ?bool
    {
        return $this->awizoSMS;
    }
    /**
     * Set awizoSMS value
     * @param bool $awizoSMS
     * @return \PocztaPolska\StructType\PrzesylkaPaletowaType
     */
    public function setAwizoSMS(?bool $awizoSMS = null): self
    {
        // validation for constraint: boolean
        if (!is_null($awizoSMS) && !is_bool($awizoSMS)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($awizoSMS, true), gettype($awizoSMS)), __LINE__);
        }
        $this->awizoSMS = $awizoSMS;
        
        return $this;
    }
}
