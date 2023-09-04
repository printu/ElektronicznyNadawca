<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for awizoPrzesylkiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AwizoPrzesylkiType extends AbstractStructBase
{
    /**
     * The dataPierwszegoAwizowania
     * @var string|null
     */
    protected ?string $dataPierwszegoAwizowania = null;
    /**
     * The dataDrugiegoAwizowania
     * @var string|null
     */
    protected ?string $dataDrugiegoAwizowania = null;
    /**
     * The miejscePozostawienia
     * @var string|null
     */
    protected ?string $miejscePozostawienia = null;
    /**
     * The idPlacowkaPocztowaWydajaca
     * @var int|null
     */
    protected ?int $idPlacowkaPocztowaWydajaca = null;
    /**
     * Constructor method for awizoPrzesylkiType
     * @uses AwizoPrzesylkiType::setDataPierwszegoAwizowania()
     * @uses AwizoPrzesylkiType::setDataDrugiegoAwizowania()
     * @uses AwizoPrzesylkiType::setMiejscePozostawienia()
     * @uses AwizoPrzesylkiType::setIdPlacowkaPocztowaWydajaca()
     * @param string $dataPierwszegoAwizowania
     * @param string $dataDrugiegoAwizowania
     * @param string $miejscePozostawienia
     * @param int $idPlacowkaPocztowaWydajaca
     */
    public function __construct(?string $dataPierwszegoAwizowania = null, ?string $dataDrugiegoAwizowania = null, ?string $miejscePozostawienia = null, ?int $idPlacowkaPocztowaWydajaca = null)
    {
        $this
            ->setDataPierwszegoAwizowania($dataPierwszegoAwizowania)
            ->setDataDrugiegoAwizowania($dataDrugiegoAwizowania)
            ->setMiejscePozostawienia($miejscePozostawienia)
            ->setIdPlacowkaPocztowaWydajaca($idPlacowkaPocztowaWydajaca);
    }
    /**
     * Get dataPierwszegoAwizowania value
     * @return string|null
     */
    public function getDataPierwszegoAwizowania(): ?string
    {
        return $this->dataPierwszegoAwizowania;
    }
    /**
     * Set dataPierwszegoAwizowania value
     * @param string $dataPierwszegoAwizowania
     * @return \PocztaPolska\StructType\AwizoPrzesylkiType
     */
    public function setDataPierwszegoAwizowania(?string $dataPierwszegoAwizowania = null): self
    {
        // validation for constraint: string
        if (!is_null($dataPierwszegoAwizowania) && !is_string($dataPierwszegoAwizowania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataPierwszegoAwizowania, true), gettype($dataPierwszegoAwizowania)), __LINE__);
        }
        $this->dataPierwszegoAwizowania = $dataPierwszegoAwizowania;
        
        return $this;
    }
    /**
     * Get dataDrugiegoAwizowania value
     * @return string|null
     */
    public function getDataDrugiegoAwizowania(): ?string
    {
        return $this->dataDrugiegoAwizowania;
    }
    /**
     * Set dataDrugiegoAwizowania value
     * @param string $dataDrugiegoAwizowania
     * @return \PocztaPolska\StructType\AwizoPrzesylkiType
     */
    public function setDataDrugiegoAwizowania(?string $dataDrugiegoAwizowania = null): self
    {
        // validation for constraint: string
        if (!is_null($dataDrugiegoAwizowania) && !is_string($dataDrugiegoAwizowania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataDrugiegoAwizowania, true), gettype($dataDrugiegoAwizowania)), __LINE__);
        }
        $this->dataDrugiegoAwizowania = $dataDrugiegoAwizowania;
        
        return $this;
    }
    /**
     * Get miejscePozostawienia value
     * @return string|null
     */
    public function getMiejscePozostawienia(): ?string
    {
        return $this->miejscePozostawienia;
    }
    /**
     * Set miejscePozostawienia value
     * @uses \PocztaPolska\EnumType\MiejscaPozostawieniaAwizoEnum::valueIsValid()
     * @uses \PocztaPolska\EnumType\MiejscaPozostawieniaAwizoEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $miejscePozostawienia
     * @return \PocztaPolska\StructType\AwizoPrzesylkiType
     */
    public function setMiejscePozostawienia(?string $miejscePozostawienia = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\MiejscaPozostawieniaAwizoEnum::valueIsValid($miejscePozostawienia)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\MiejscaPozostawieniaAwizoEnum', is_array($miejscePozostawienia) ? implode(', ', $miejscePozostawienia) : var_export($miejscePozostawienia, true), implode(', ', \PocztaPolska\EnumType\MiejscaPozostawieniaAwizoEnum::getValidValues())), __LINE__);
        }
        $this->miejscePozostawienia = $miejscePozostawienia;
        
        return $this;
    }
    /**
     * Get idPlacowkaPocztowaWydajaca value
     * @return int|null
     */
    public function getIdPlacowkaPocztowaWydajaca(): ?int
    {
        return $this->idPlacowkaPocztowaWydajaca;
    }
    /**
     * Set idPlacowkaPocztowaWydajaca value
     * @param int $idPlacowkaPocztowaWydajaca
     * @return \PocztaPolska\StructType\AwizoPrzesylkiType
     */
    public function setIdPlacowkaPocztowaWydajaca(?int $idPlacowkaPocztowaWydajaca = null): self
    {
        // validation for constraint: int
        if (!is_null($idPlacowkaPocztowaWydajaca) && !(is_int($idPlacowkaPocztowaWydajaca) || ctype_digit($idPlacowkaPocztowaWydajaca))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPlacowkaPocztowaWydajaca, true), gettype($idPlacowkaPocztowaWydajaca)), __LINE__);
        }
        $this->idPlacowkaPocztowaWydajaca = $idPlacowkaPocztowaWydajaca;
        
        return $this;
    }
}
