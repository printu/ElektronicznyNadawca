<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for powodReklamacjiType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PowodReklamacjiType extends AbstractStructBase
{
    /**
     * The powodSzczegolowy
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\PowodSzczegolowyType[]
     */
    protected array $powodSzczegolowy;
    /**
     * The idPowodGlowny
     * @var int|null
     */
    protected ?int $idPowodGlowny = null;
    /**
     * The powodGlownyOpis
     * @var string|null
     */
    protected ?string $powodGlownyOpis = null;

    /**
     * Constructor method for powodReklamacjiType
     * @uses PowodReklamacjiType::setPowodSzczegolowy()
     * @uses PowodReklamacjiType::setIdPowodGlowny()
     * @uses PowodReklamacjiType::setPowodGlownyOpis()
     * @param \PocztaPolska\StructType\PowodSzczegolowyType[] $powodSzczegolowy
     * @param int $idPowodGlowny
     * @param string $powodGlownyOpis
     */
    public function __construct(array $powodSzczegolowy, ?int $idPowodGlowny = null, ?string $powodGlownyOpis = null)
    {
        $this
            ->setPowodSzczegolowy($powodSzczegolowy)
            ->setIdPowodGlowny($idPowodGlowny)
            ->setPowodGlownyOpis($powodGlownyOpis);
    }

    /**
     * Get powodSzczegolowy value
     * @return \PocztaPolska\StructType\PowodSzczegolowyType[]
     */
    public function getPowodSzczegolowy(): array
    {
        return $this->powodSzczegolowy;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPowodSzczegolowy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPowodSzczegolowy method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePowodSzczegolowyForArrayConstraintFromSetPowodSzczegolowy(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $powodReklamacjiTypePowodSzczegolowyItem) {
            // validation for constraint: itemType
            if (!$powodReklamacjiTypePowodSzczegolowyItem instanceof \PocztaPolska\StructType\PowodSzczegolowyType) {
                $invalidValues[] = is_object($powodReklamacjiTypePowodSzczegolowyItem) ? get_class($powodReklamacjiTypePowodSzczegolowyItem) : sprintf('%s(%s)', gettype($powodReklamacjiTypePowodSzczegolowyItem), var_export($powodReklamacjiTypePowodSzczegolowyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The powodSzczegolowy property can only contain items of type \PocztaPolska\StructType\PowodSzczegolowyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set powodSzczegolowy value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\PowodSzczegolowyType[] $powodSzczegolowy
     * @return \PocztaPolska\StructType\PowodReklamacjiType
     */
    public function setPowodSzczegolowy(array $powodSzczegolowy): self
    {
        // validation for constraint: array
        if ('' !== ($powodSzczegolowyArrayErrorMessage = self::validatePowodSzczegolowyForArrayConstraintFromSetPowodSzczegolowy($powodSzczegolowy))) {
            throw new InvalidArgumentException($powodSzczegolowyArrayErrorMessage, __LINE__);
        }
        $this->powodSzczegolowy = $powodSzczegolowy;

        return $this;
    }

    /**
     * Add item to powodSzczegolowy value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\PowodSzczegolowyType $item
     * @return \PocztaPolska\StructType\PowodReklamacjiType
     */
    public function addToPowodSzczegolowy(\PocztaPolska\StructType\PowodSzczegolowyType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\PowodSzczegolowyType) {
            throw new InvalidArgumentException(sprintf('The powodSzczegolowy property can only contain items of type \PocztaPolska\StructType\PowodSzczegolowyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->powodSzczegolowy[] = $item;

        return $this;
    }

    /**
     * Get idPowodGlowny value
     * @return int|null
     */
    public function getIdPowodGlowny(): ?int
    {
        return $this->idPowodGlowny;
    }

    /**
     * Set idPowodGlowny value
     * @param int $idPowodGlowny
     * @return \PocztaPolska\StructType\PowodReklamacjiType
     */
    public function setIdPowodGlowny(?int $idPowodGlowny = null): self
    {
        // validation for constraint: int
        if (!is_null($idPowodGlowny) && !(is_int($idPowodGlowny) || ctype_digit($idPowodGlowny))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPowodGlowny, true), gettype($idPowodGlowny)), __LINE__);
        }
        $this->idPowodGlowny = $idPowodGlowny;

        return $this;
    }

    /**
     * Get powodGlownyOpis value
     * @return string|null
     */
    public function getPowodGlownyOpis(): ?string
    {
        return $this->powodGlownyOpis;
    }

    /**
     * Set powodGlownyOpis value
     * @param string $powodGlownyOpis
     * @return \PocztaPolska\StructType\PowodReklamacjiType
     */
    public function setPowodGlownyOpis(?string $powodGlownyOpis = null): self
    {
        // validation for constraint: string
        if (!is_null($powodGlownyOpis) && !is_string($powodGlownyOpis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($powodGlownyOpis, true), gettype($powodGlownyOpis)), __LINE__);
        }
        $this->powodGlownyOpis = $powodGlownyOpis;

        return $this;
    }
}
