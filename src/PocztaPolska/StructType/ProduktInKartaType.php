<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for produktInKartaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProduktInKartaType extends AbstractStructBase
{
    /**
     * The symbolIWD
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 3
     * @var string|null
     */
    protected ?string $symbolIWD = null;
    /**
     * The nazwaWyswietlana
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 100
     * @var string|null
     */
    protected ?string $nazwaWyswietlana = null;
    /**
     * The nazwaProduktu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 60
     * @var string|null
     */
    protected ?string $nazwaProduktu = null;
    /**
     * Constructor method for produktInKartaType
     * @uses ProduktInKartaType::setSymbolIWD()
     * @uses ProduktInKartaType::setNazwaWyswietlana()
     * @uses ProduktInKartaType::setNazwaProduktu()
     * @param string $symbolIWD
     * @param string $nazwaWyswietlana
     * @param string $nazwaProduktu
     */
    public function __construct(?string $symbolIWD = null, ?string $nazwaWyswietlana = null, ?string $nazwaProduktu = null)
    {
        $this
            ->setSymbolIWD($symbolIWD)
            ->setNazwaWyswietlana($nazwaWyswietlana)
            ->setNazwaProduktu($nazwaProduktu);
    }
    /**
     * Get symbolIWD value
     * @return string|null
     */
    public function getSymbolIWD(): ?string
    {
        return $this->symbolIWD;
    }
    /**
     * Set symbolIWD value
     * @param string $symbolIWD
     * @return \PocztaPolska\StructType\ProduktInKartaType
     */
    public function setSymbolIWD(?string $symbolIWD = null): self
    {
        // validation for constraint: string
        if (!is_null($symbolIWD) && !is_string($symbolIWD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($symbolIWD, true), gettype($symbolIWD)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($symbolIWD) && mb_strlen((string) $symbolIWD) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $symbolIWD)), __LINE__);
        }
        $this->symbolIWD = $symbolIWD;
        
        return $this;
    }
    /**
     * Get nazwaWyswietlana value
     * @return string|null
     */
    public function getNazwaWyswietlana(): ?string
    {
        return $this->nazwaWyswietlana;
    }
    /**
     * Set nazwaWyswietlana value
     * @param string $nazwaWyswietlana
     * @return \PocztaPolska\StructType\ProduktInKartaType
     */
    public function setNazwaWyswietlana(?string $nazwaWyswietlana = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwaWyswietlana) && !is_string($nazwaWyswietlana)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaWyswietlana, true), gettype($nazwaWyswietlana)), __LINE__);
        }
        // validation for constraint: length(100)
        if (!is_null($nazwaWyswietlana) && mb_strlen((string) $nazwaWyswietlana) !== 100) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 100', mb_strlen((string) $nazwaWyswietlana)), __LINE__);
        }
        $this->nazwaWyswietlana = $nazwaWyswietlana;
        
        return $this;
    }
    /**
     * Get nazwaProduktu value
     * @return string|null
     */
    public function getNazwaProduktu(): ?string
    {
        return $this->nazwaProduktu;
    }
    /**
     * Set nazwaProduktu value
     * @param string $nazwaProduktu
     * @return \PocztaPolska\StructType\ProduktInKartaType
     */
    public function setNazwaProduktu(?string $nazwaProduktu = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwaProduktu) && !is_string($nazwaProduktu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaProduktu, true), gettype($nazwaProduktu)), __LINE__);
        }
        // validation for constraint: length(60)
        if (!is_null($nazwaProduktu) && mb_strlen((string) $nazwaProduktu) !== 60) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 60', mb_strlen((string) $nazwaProduktu)), __LINE__);
        }
        $this->nazwaProduktu = $nazwaProduktu;
        
        return $this;
    }
}
