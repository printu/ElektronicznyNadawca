<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for oplacaOdbiorcaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OplacaOdbiorcaType extends AbstractStructBase
{
    /**
     * The typ
     * Meta information extracted from the WSDL
     * - documentation: Typ odbiorcy/adresata opłacającego przesyłkę. Dopuszczalne wartości: ADRESAT_INDYWIDUALNY, ADRESAT_UMOWNY, ODDZIAL.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typ = null;
    /**
     * The karta
     * Meta information extracted from the WSDL
     * - documentation: Wymagalny dla typ=ADRESAT_UMOWNY i typ=ODDZIAL.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\OplacaOdbiorcaKartaType|null
     */
    protected ?\PocztaPolska\StructType\OplacaOdbiorcaKartaType $karta = null;
    /**
     * Constructor method for oplacaOdbiorcaType
     * @uses OplacaOdbiorcaType::setTyp()
     * @uses OplacaOdbiorcaType::setKarta()
     * @param string $typ
     * @param \PocztaPolska\StructType\OplacaOdbiorcaKartaType $karta
     */
    public function __construct(?string $typ = null, ?\PocztaPolska\StructType\OplacaOdbiorcaKartaType $karta = null)
    {
        $this
            ->setTyp($typ)
            ->setKarta($karta);
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
     * @uses \PocztaPolska\EnumType\TypOplacaOdbiorcaEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\TypOplacaOdbiorcaEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $typ
     * @return \PocztaPolska\StructType\OplacaOdbiorcaType
     */
    public function setTyp(?string $typ = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\TypOplacaOdbiorcaEnum::valueIsValid($typ)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\TypOplacaOdbiorcaEnum', is_array($typ) ? implode(', ', $typ) : var_export($typ, true), implode(', ', \PocztaPolska\EnumType\TypOplacaOdbiorcaEnum::getValidValues())), __LINE__);
        }
        $this->typ = $typ;
        
        return $this;
    }
    /**
     * Get karta value
     * @return \PocztaPolska\StructType\OplacaOdbiorcaKartaType|null
     */
    public function getKarta(): ?\PocztaPolska\StructType\OplacaOdbiorcaKartaType
    {
        return $this->karta;
    }
    /**
     * Set karta value
     * @param \PocztaPolska\StructType\OplacaOdbiorcaKartaType $karta
     * @return \PocztaPolska\StructType\OplacaOdbiorcaType
     */
    public function setKarta(?\PocztaPolska\StructType\OplacaOdbiorcaKartaType $karta = null): self
    {
        $this->karta = $karta;
        
        return $this;
    }
}
