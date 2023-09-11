<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for pocztex2021KurierType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Pocztex2021KurierType extends Pocztex2021Type
{
    /**
     * The subPrzesylka
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\SubPocztex2021KurierType[]
     */
    protected ?array $subPrzesylka = null;
    /**
     * The punktOdbioru
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PunktOdbioruType|null
     */
    protected ?\PocztaPolska\StructType\PunktOdbioruType $punktOdbioru = null;
    /**
     * The punktNadania
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PunktNadaniaType|null
     */
    protected ?\PocztaPolska\StructType\PunktNadaniaType $punktNadania = null;
    /**
     * The kopertaPocztex
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $kopertaPocztex = null;
    /**
     * The godzinaDoreczenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $godzinaDoreczenia = null;
    /**
     * The doreczenieWeWskazanymDniu
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $doreczenieWeWskazanymDniu = null;

    /**
     * Constructor method for pocztex2021KurierType
     * @uses Pocztex2021KurierType::setSubPrzesylka()
     * @uses Pocztex2021KurierType::setPunktOdbioru()
     * @uses Pocztex2021KurierType::setPunktNadania()
     * @uses Pocztex2021KurierType::setKopertaPocztex()
     * @uses Pocztex2021KurierType::setGodzinaDoreczenia()
     * @uses Pocztex2021KurierType::setDoreczenieWeWskazanymDniu()
     * @param \PocztaPolska\StructType\SubPocztex2021KurierType[] $subPrzesylka
     * @param \PocztaPolska\StructType\PunktOdbioruType $punktOdbioru
     * @param \PocztaPolska\StructType\PunktNadaniaType $punktNadania
     * @param bool $kopertaPocztex
     * @param string $godzinaDoreczenia
     * @param string $doreczenieWeWskazanymDniu
     */
    public function __construct(?array $subPrzesylka = null, ?\PocztaPolska\StructType\PunktOdbioruType $punktOdbioru = null, ?\PocztaPolska\StructType\PunktNadaniaType $punktNadania = null, ?bool $kopertaPocztex = null, ?string $godzinaDoreczenia = null, ?string $doreczenieWeWskazanymDniu = null)
    {
        $this
            ->setSubPrzesylka($subPrzesylka)
            ->setPunktOdbioru($punktOdbioru)
            ->setPunktNadania($punktNadania)
            ->setKopertaPocztex($kopertaPocztex)
            ->setGodzinaDoreczenia($godzinaDoreczenia)
            ->setDoreczenieWeWskazanymDniu($doreczenieWeWskazanymDniu);
    }

    /**
     * Get subPrzesylka value
     * @return \PocztaPolska\StructType\SubPocztex2021KurierType[]
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
        foreach ($values as $pocztex2021KurierTypeSubPrzesylkaItem) {
            // validation for constraint: itemType
            if (!$pocztex2021KurierTypeSubPrzesylkaItem instanceof \PocztaPolska\StructType\SubPocztex2021KurierType) {
                $invalidValues[] = is_object($pocztex2021KurierTypeSubPrzesylkaItem) ? get_class($pocztex2021KurierTypeSubPrzesylkaItem) : sprintf('%s(%s)', gettype($pocztex2021KurierTypeSubPrzesylkaItem), var_export($pocztex2021KurierTypeSubPrzesylkaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The subPrzesylka property can only contain items of type \PocztaPolska\StructType\SubPocztex2021KurierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set subPrzesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SubPocztex2021KurierType[] $subPrzesylka
     * @return \PocztaPolska\StructType\Pocztex2021KurierType
     */
    public function setSubPrzesylka(?array $subPrzesylka = null): self
    {
        // validation for constraint: array
        if ('' !== ($subPrzesylkaArrayErrorMessage = self::validateSubPrzesylkaForArrayConstraintFromSetSubPrzesylka($subPrzesylka))) {
            throw new InvalidArgumentException($subPrzesylkaArrayErrorMessage, __LINE__);
        }
        $this->subPrzesylka = $subPrzesylka;

        return $this;
    }

    /**
     * Add item to subPrzesylka value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\SubPocztex2021KurierType $item
     * @return \PocztaPolska\StructType\Pocztex2021KurierType
     */
    public function addToSubPrzesylka(\PocztaPolska\StructType\SubPocztex2021KurierType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\SubPocztex2021KurierType) {
            throw new InvalidArgumentException(sprintf('The subPrzesylka property can only contain items of type \PocztaPolska\StructType\SubPocztex2021KurierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->subPrzesylka[] = $item;

        return $this;
    }

    /**
     * Get punktOdbioru value
     * @return \PocztaPolska\StructType\PunktOdbioruType|null
     */
    public function getPunktOdbioru(): ?\PocztaPolska\StructType\PunktOdbioruType
    {
        return $this->punktOdbioru;
    }

    /**
     * Set punktOdbioru value
     * @param \PocztaPolska\StructType\PunktOdbioruType $punktOdbioru
     * @return \PocztaPolska\StructType\Pocztex2021KurierType
     */
    public function setPunktOdbioru(?\PocztaPolska\StructType\PunktOdbioruType $punktOdbioru = null): self
    {
        $this->punktOdbioru = $punktOdbioru;

        return $this;
    }

    /**
     * Get punktNadania value
     * @return \PocztaPolska\StructType\PunktNadaniaType|null
     */
    public function getPunktNadania(): ?\PocztaPolska\StructType\PunktNadaniaType
    {
        return $this->punktNadania;
    }

    /**
     * Set punktNadania value
     * @param \PocztaPolska\StructType\PunktNadaniaType $punktNadania
     * @return \PocztaPolska\StructType\Pocztex2021KurierType
     */
    public function setPunktNadania(?\PocztaPolska\StructType\PunktNadaniaType $punktNadania = null): self
    {
        $this->punktNadania = $punktNadania;

        return $this;
    }

    /**
     * Get kopertaPocztex value
     * @return bool|null
     */
    public function getKopertaPocztex(): ?bool
    {
        return $this->kopertaPocztex;
    }

    /**
     * Set kopertaPocztex value
     * @param bool $kopertaPocztex
     * @return \PocztaPolska\StructType\Pocztex2021KurierType
     */
    public function setKopertaPocztex(?bool $kopertaPocztex = null): self
    {
        // validation for constraint: boolean
        if (!is_null($kopertaPocztex) && !is_bool($kopertaPocztex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($kopertaPocztex, true), gettype($kopertaPocztex)), __LINE__);
        }
        $this->kopertaPocztex = $kopertaPocztex;

        return $this;
    }

    /**
     * Get godzinaDoreczenia value
     * @return string|null
     */
    public function getGodzinaDoreczenia(): ?string
    {
        return $this->godzinaDoreczenia;
    }

    /**
     * Set godzinaDoreczenia value
     * @uses \PocztaPolska\EnumType\GodzinaDoreczeniaPocztex2021Enum::valueIsValid()
     * @uses \PocztaPolska\EnumType\GodzinaDoreczeniaPocztex2021Enum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $godzinaDoreczenia
     * @return \PocztaPolska\StructType\Pocztex2021KurierType
     */
    public function setGodzinaDoreczenia(?string $godzinaDoreczenia = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\GodzinaDoreczeniaPocztex2021Enum::valueIsValid($godzinaDoreczenia)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\GodzinaDoreczeniaPocztex2021Enum', is_array($godzinaDoreczenia) ? implode(', ', $godzinaDoreczenia) : var_export($godzinaDoreczenia, true), implode(', ', \PocztaPolska\EnumType\GodzinaDoreczeniaPocztex2021Enum::getValidValues())), __LINE__);
        }
        $this->godzinaDoreczenia = $godzinaDoreczenia;

        return $this;
    }

    /**
     * Get doreczenieWeWskazanymDniu value
     * @return string|null
     */
    public function getDoreczenieWeWskazanymDniu(): ?string
    {
        return $this->doreczenieWeWskazanymDniu;
    }

    /**
     * Set doreczenieWeWskazanymDniu value
     * @param string $doreczenieWeWskazanymDniu
     * @return \PocztaPolska\StructType\Pocztex2021KurierType
     */
    public function setDoreczenieWeWskazanymDniu(?string $doreczenieWeWskazanymDniu = null): self
    {
        // validation for constraint: string
        if (!is_null($doreczenieWeWskazanymDniu) && !is_string($doreczenieWeWskazanymDniu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($doreczenieWeWskazanymDniu, true), gettype($doreczenieWeWskazanymDniu)), __LINE__);
        }
        $this->doreczenieWeWskazanymDniu = $doreczenieWeWskazanymDniu;

        return $this;
    }
}
