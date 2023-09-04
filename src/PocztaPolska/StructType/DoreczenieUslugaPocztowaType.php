<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doreczenieUslugaPocztowaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoreczenieUslugaPocztowaType extends AbstractStructBase
{
    /**
     * The oczekiwanyTerminDoreczenia
     * @var string|null
     */
    protected ?string $oczekiwanyTerminDoreczenia = null;
    /**
     * The oczekiwanaGodzinaDoreczenia
     * @var string|null
     */
    protected ?string $oczekiwanaGodzinaDoreczenia = null;
    /**
     * The wSobote
     * @var bool|null
     */
    protected ?bool $wSobote = null;
    /**
     * The doRakWlasnych
     * @var bool|null
     */
    protected ?bool $doRakWlasnych = null;

    /**
     * Constructor method for doreczenieUslugaPocztowaType
     * @uses DoreczenieUslugaPocztowaType::setOczekiwanyTerminDoreczenia()
     * @uses DoreczenieUslugaPocztowaType::setOczekiwanaGodzinaDoreczenia()
     * @uses DoreczenieUslugaPocztowaType::setWSobote()
     * @uses DoreczenieUslugaPocztowaType::setDoRakWlasnych()
     * @param string $oczekiwanyTerminDoreczenia
     * @param string $oczekiwanaGodzinaDoreczenia
     * @param bool $wSobote
     * @param bool $doRakWlasnych
     */
    public function __construct(?string $oczekiwanyTerminDoreczenia = null, ?string $oczekiwanaGodzinaDoreczenia = null, ?bool $wSobote = null, ?bool $doRakWlasnych = null)
    {
        $this
            ->setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia)
            ->setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia)
            ->setWSobote($wSobote)
            ->setDoRakWlasnych($doRakWlasnych);
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
     * @return \PocztaPolska\StructType\DoreczenieUslugaPocztowaType
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
     * Get oczekiwanaGodzinaDoreczenia value
     * @return string|null
     */
    public function getOczekiwanaGodzinaDoreczenia(): ?string
    {
        return $this->oczekiwanaGodzinaDoreczenia;
    }

    /**
     * Set oczekiwanaGodzinaDoreczenia value
     * @uses \PocztaPolska\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::valueIsValid()
     * @uses \PocztaPolska\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $oczekiwanaGodzinaDoreczenia
     * @return \PocztaPolska\StructType\DoreczenieUslugaPocztowaType
     */
    public function setOczekiwanaGodzinaDoreczenia(?string $oczekiwanaGodzinaDoreczenia = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::valueIsValid($oczekiwanaGodzinaDoreczenia)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType', is_array($oczekiwanaGodzinaDoreczenia) ? implode(', ', $oczekiwanaGodzinaDoreczenia) : var_export($oczekiwanaGodzinaDoreczenia, true), implode(', ', \PocztaPolska\EnumType\OczekiwanaGodzinaDoreczeniaUslugiType::getValidValues())), __LINE__);
        }
        $this->oczekiwanaGodzinaDoreczenia = $oczekiwanaGodzinaDoreczenia;

        return $this;
    }

    /**
     * Get wSobote value
     * @return bool|null
     */
    public function getWSobote(): ?bool
    {
        return $this->wSobote;
    }

    /**
     * Set wSobote value
     * @param bool $wSobote
     * @return \PocztaPolska\StructType\DoreczenieUslugaPocztowaType
     */
    public function setWSobote(?bool $wSobote = null): self
    {
        // validation for constraint: boolean
        if (!is_null($wSobote) && !is_bool($wSobote)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wSobote, true), gettype($wSobote)), __LINE__);
        }
        $this->wSobote = $wSobote;

        return $this;
    }

    /**
     * Get doRakWlasnych value
     * @return bool|null
     */
    public function getDoRakWlasnych(): ?bool
    {
        return $this->doRakWlasnych;
    }

    /**
     * Set doRakWlasnych value
     * @param bool $doRakWlasnych
     * @return \PocztaPolska\StructType\DoreczenieUslugaPocztowaType
     */
    public function setDoRakWlasnych(?bool $doRakWlasnych = null): self
    {
        // validation for constraint: boolean
        if (!is_null($doRakWlasnych) && !is_bool($doRakWlasnych)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doRakWlasnych, true), gettype($doRakWlasnych)), __LINE__);
        }
        $this->doRakWlasnych = $doRakWlasnych;

        return $this;
    }
}
