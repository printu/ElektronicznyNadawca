<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pakietType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PakietType extends AbstractStructBase
{
    /**
     * The kierunek
     * Meta information extracted from the WSDL
     * - documentation: Uwaga w tym miejscu wystarczy jak obiekt kierunke będzie miał ustawioną tylko własność id (nie jest potrzebne przesyłanie pełnego obiektu kierunekType pobranego z metody getKierunki)
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\KierunekType|null
     */
    protected ?\PocztaPolska\StructType\KierunekType $kierunek = null;
    /**
     * The opakowanie
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\OpakowanieType[]
     */
    protected ?array $opakowanie = null;
    /**
     * The czynnoscUpustowa
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $czynnoscUpustowa = null;
    /**
     * The pakietGuid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $pakietGuid = null;
    /**
     * The miejsceOdbioru
     * Meta information extracted from the WSDL
     * - default: URZAD_NADANIA
     * - use: optional
     * @var string|null
     */
    protected ?string $miejsceOdbioru = null;
    /**
     * The sposobNadania
     * @var string|null
     */
    protected ?string $sposobNadania = null;
    /**
     * Constructor method for pakietType
     * @uses PakietType::setKierunek()
     * @uses PakietType::setOpakowanie()
     * @uses PakietType::setCzynnoscUpustowa()
     * @uses PakietType::setPakietGuid()
     * @uses PakietType::setMiejsceOdbioru()
     * @uses PakietType::setSposobNadania()
     * @param \PocztaPolska\StructType\KierunekType $kierunek
     * @param \PocztaPolska\StructType\OpakowanieType[] $opakowanie
     * @param string[] $czynnoscUpustowa
     * @param string $pakietGuid
     * @param string $miejsceOdbioru
     * @param string $sposobNadania
     */
    public function __construct(?\PocztaPolska\StructType\KierunekType $kierunek = null, ?array $opakowanie = null, ?array $czynnoscUpustowa = null, ?string $pakietGuid = null, ?string $miejsceOdbioru = null, ?string $sposobNadania = null)
    {
        $this
            ->setKierunek($kierunek)
            ->setOpakowanie($opakowanie)
            ->setCzynnoscUpustowa($czynnoscUpustowa)
            ->setPakietGuid($pakietGuid)
            ->setMiejsceOdbioru($miejsceOdbioru)
            ->setSposobNadania($sposobNadania);
    }
    /**
     * Get kierunek value
     * @return \PocztaPolska\StructType\KierunekType|null
     */
    public function getKierunek(): ?\PocztaPolska\StructType\KierunekType
    {
        return $this->kierunek;
    }
    /**
     * Set kierunek value
     * @param \PocztaPolska\StructType\KierunekType $kierunek
     * @return \PocztaPolska\StructType\PakietType
     */
    public function setKierunek(?\PocztaPolska\StructType\KierunekType $kierunek = null): self
    {
        $this->kierunek = $kierunek;
        
        return $this;
    }
    /**
     * Get opakowanie value
     * @return \PocztaPolska\StructType\OpakowanieType[]
     */
    public function getOpakowanie(): ?array
    {
        return $this->opakowanie;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOpakowanie method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOpakowanie method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOpakowanieForArrayConstraintFromSetOpakowanie(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pakietTypeOpakowanieItem) {
            // validation for constraint: itemType
            if (!$pakietTypeOpakowanieItem instanceof \PocztaPolska\StructType\OpakowanieType) {
                $invalidValues[] = is_object($pakietTypeOpakowanieItem) ? get_class($pakietTypeOpakowanieItem) : sprintf('%s(%s)', gettype($pakietTypeOpakowanieItem), var_export($pakietTypeOpakowanieItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The opakowanie property can only contain items of type \PocztaPolska\StructType\OpakowanieType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set opakowanie value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\OpakowanieType[] $opakowanie
     * @return \PocztaPolska\StructType\PakietType
     */
    public function setOpakowanie(?array $opakowanie = null): self
    {
        // validation for constraint: array
        if ('' !== ($opakowanieArrayErrorMessage = self::validateOpakowanieForArrayConstraintFromSetOpakowanie($opakowanie))) {
            throw new InvalidArgumentException($opakowanieArrayErrorMessage, __LINE__);
        }
        $this->opakowanie = $opakowanie;
        
        return $this;
    }
    /**
     * Add item to opakowanie value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\OpakowanieType $item
     * @return \PocztaPolska\StructType\PakietType
     */
    public function addToOpakowanie(\PocztaPolska\StructType\OpakowanieType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\OpakowanieType) {
            throw new InvalidArgumentException(sprintf('The opakowanie property can only contain items of type \PocztaPolska\StructType\OpakowanieType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->opakowanie[] = $item;
        
        return $this;
    }
    /**
     * Get czynnoscUpustowa value
     * @return string[]
     */
    public function getCzynnoscUpustowa(): ?array
    {
        return $this->czynnoscUpustowa;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCzynnoscUpustowa method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCzynnoscUpustowa method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCzynnoscUpustowaForArrayConstraintFromSetCzynnoscUpustowa(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pakietTypeCzynnoscUpustowaItem) {
            // validation for constraint: enumeration
            if (!\PocztaPolska\EnumType\CzynnoscUpustowaType::valueIsValid($pakietTypeCzynnoscUpustowaItem)) {
                $invalidValues[] = is_object($pakietTypeCzynnoscUpustowaItem) ? get_class($pakietTypeCzynnoscUpustowaItem) : sprintf('%s(%s)', gettype($pakietTypeCzynnoscUpustowaItem), var_export($pakietTypeCzynnoscUpustowaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\CzynnoscUpustowaType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \PocztaPolska\EnumType\CzynnoscUpustowaType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set czynnoscUpustowa value
     * @uses \PocztaPolska\EnumType\CzynnoscUpustowaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\CzynnoscUpustowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $czynnoscUpustowa
     * @return \PocztaPolska\StructType\PakietType
     */
    public function setCzynnoscUpustowa(?array $czynnoscUpustowa = null): self
    {
        // validation for constraint: array
        if ('' !== ($czynnoscUpustowaArrayErrorMessage = self::validateCzynnoscUpustowaForArrayConstraintFromSetCzynnoscUpustowa($czynnoscUpustowa))) {
            throw new InvalidArgumentException($czynnoscUpustowaArrayErrorMessage, __LINE__);
        }
        $this->czynnoscUpustowa = $czynnoscUpustowa;
        
        return $this;
    }
    /**
     * Add item to czynnoscUpustowa value
     * @uses \PocztaPolska\EnumType\CzynnoscUpustowaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\CzynnoscUpustowaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \PocztaPolska\StructType\PakietType
     */
    public function addToCzynnoscUpustowa(string $item): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\CzynnoscUpustowaType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\CzynnoscUpustowaType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \PocztaPolska\EnumType\CzynnoscUpustowaType::getValidValues())), __LINE__);
        }
        $this->czynnoscUpustowa[] = $item;
        
        return $this;
    }
    /**
     * Get pakietGuid value
     * @return string|null
     */
    public function getPakietGuid(): ?string
    {
        return $this->pakietGuid;
    }
    /**
     * Set pakietGuid value
     * @param string $pakietGuid
     * @return \PocztaPolska\StructType\PakietType
     */
    public function setPakietGuid(?string $pakietGuid = null): self
    {
        // validation for constraint: string
        if (!is_null($pakietGuid) && !is_string($pakietGuid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pakietGuid, true), gettype($pakietGuid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($pakietGuid) && mb_strlen((string) $pakietGuid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $pakietGuid)), __LINE__);
        }
        $this->pakietGuid = $pakietGuid;
        
        return $this;
    }
    /**
     * Get miejsceOdbioru value
     * @return string|null
     */
    public function getMiejsceOdbioru(): ?string
    {
        return $this->miejsceOdbioru;
    }
    /**
     * Set miejsceOdbioru value
     * @uses \PocztaPolska\EnumType\MiejsceOdbioruType::valueIsValid()
     * @uses \PocztaPolska\EnumType\MiejsceOdbioruType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $miejsceOdbioru
     * @return \PocztaPolska\StructType\PakietType
     */
    public function setMiejsceOdbioru(?string $miejsceOdbioru = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\MiejsceOdbioruType::valueIsValid($miejsceOdbioru)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\MiejsceOdbioruType', is_array($miejsceOdbioru) ? implode(', ', $miejsceOdbioru) : var_export($miejsceOdbioru, true), implode(', ', \PocztaPolska\EnumType\MiejsceOdbioruType::getValidValues())), __LINE__);
        }
        $this->miejsceOdbioru = $miejsceOdbioru;
        
        return $this;
    }
    /**
     * Get sposobNadania value
     * @return string|null
     */
    public function getSposobNadania(): ?string
    {
        return $this->sposobNadania;
    }
    /**
     * Set sposobNadania value
     * @uses \PocztaPolska\EnumType\SposobNadaniaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\SposobNadaniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sposobNadania
     * @return \PocztaPolska\StructType\PakietType
     */
    public function setSposobNadania(?string $sposobNadania = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\SposobNadaniaType::valueIsValid($sposobNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\SposobNadaniaType', is_array($sposobNadania) ? implode(', ', $sposobNadania) : var_export($sposobNadania, true), implode(', ', \PocztaPolska\EnumType\SposobNadaniaType::getValidValues())), __LINE__);
        }
        $this->sposobNadania = $sposobNadania;
        
        return $this;
    }
}
