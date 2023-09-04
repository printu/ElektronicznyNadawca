<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPlacowkiPocztowe StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPlacowkiPocztowe extends AbstractStructBase
{
    /**
     * The idWojewodztwo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $idWojewodztwo;

    /**
     * Constructor method for getPlacowkiPocztowe
     * @uses GetPlacowkiPocztowe::setIdWojewodztwo()
     * @param string $idWojewodztwo
     */
    public function __construct(string $idWojewodztwo)
    {
        $this
            ->setIdWojewodztwo($idWojewodztwo);
    }

    /**
     * Get idWojewodztwo value
     * @return string
     */
    public function getIdWojewodztwo(): string
    {
        return $this->idWojewodztwo;
    }

    /**
     * Set idWojewodztwo value
     * @uses \PocztaPolska\EnumType\IdWojewodztwoType::valueIsValid()
     * @uses \PocztaPolska\EnumType\IdWojewodztwoType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $idWojewodztwo
     * @return \PocztaPolska\StructType\GetPlacowkiPocztowe
     */
    public function setIdWojewodztwo(string $idWojewodztwo): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\IdWojewodztwoType::valueIsValid($idWojewodztwo)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\IdWojewodztwoType', is_array($idWojewodztwo) ? implode(', ', $idWojewodztwo) : var_export($idWojewodztwo, true), implode(', ', \PocztaPolska\EnumType\IdWojewodztwoType::getValidValues())), __LINE__);
        }
        $this->idWojewodztwo = $idWojewodztwo;

        return $this;
    }
}
