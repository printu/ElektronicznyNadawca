<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for obszarAdresowyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ObszarAdresowyType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $guid;
    /**
     * The kodPocztowy
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 10
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $kodPocztowy = null;
    /**
     * The miejscowosc
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 63
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $miejscowosc = null;
    /**
     * The ulica
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 255
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $ulica = null;
    /**
     * The numerDomu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 11
     * - minLength: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $numerDomu = null;

    /**
     * Constructor method for obszarAdresowyType
     * @uses ObszarAdresowyType::setGuid()
     * @uses ObszarAdresowyType::setKodPocztowy()
     * @uses ObszarAdresowyType::setMiejscowosc()
     * @uses ObszarAdresowyType::setUlica()
     * @uses ObszarAdresowyType::setNumerDomu()
     * @param string $guid
     * @param string $kodPocztowy
     * @param string $miejscowosc
     * @param string $ulica
     * @param string $numerDomu
     */
    public function __construct(string $guid, ?string $kodPocztowy = null, ?string $miejscowosc = null, ?string $ulica = null, ?string $numerDomu = null)
    {
        $this
            ->setGuid($guid)
            ->setKodPocztowy($kodPocztowy)
            ->setMiejscowosc($miejscowosc)
            ->setUlica($ulica)
            ->setNumerDomu($numerDomu);
    }

    /**
     * Get guid value
     * @return string
     */
    public function getGuid(): string
    {
        return $this->guid;
    }

    /**
     * Set guid value
     * @param string $guid
     * @return \PocztaPolska\StructType\ObszarAdresowyType
     */
    public function setGuid(string $guid): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guid) && mb_strlen((string) $guid) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $guid)), __LINE__);
        }
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get kodPocztowy value
     * @return string|null
     */
    public function getKodPocztowy(): ?string
    {
        return $this->kodPocztowy;
    }

    /**
     * Set kodPocztowy value
     * @param string $kodPocztowy
     * @return \PocztaPolska\StructType\ObszarAdresowyType
     */
    public function setKodPocztowy(?string $kodPocztowy = null): self
    {
        // validation for constraint: string
        if (!is_null($kodPocztowy) && !is_string($kodPocztowy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kodPocztowy, true), gettype($kodPocztowy)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($kodPocztowy) && mb_strlen((string) $kodPocztowy) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $kodPocztowy)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($kodPocztowy) && mb_strlen((string) $kodPocztowy) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $kodPocztowy)), __LINE__);
        }
        $this->kodPocztowy = $kodPocztowy;

        return $this;
    }

    /**
     * Get miejscowosc value
     * @return string|null
     */
    public function getMiejscowosc(): ?string
    {
        return $this->miejscowosc;
    }

    /**
     * Set miejscowosc value
     * @param string $miejscowosc
     * @return \PocztaPolska\StructType\ObszarAdresowyType
     */
    public function setMiejscowosc(?string $miejscowosc = null): self
    {
        // validation for constraint: string
        if (!is_null($miejscowosc) && !is_string($miejscowosc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miejscowosc, true), gettype($miejscowosc)), __LINE__);
        }
        // validation for constraint: maxLength(63)
        if (!is_null($miejscowosc) && mb_strlen((string) $miejscowosc) > 63) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 63', mb_strlen((string) $miejscowosc)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($miejscowosc) && mb_strlen((string) $miejscowosc) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $miejscowosc)), __LINE__);
        }
        $this->miejscowosc = $miejscowosc;

        return $this;
    }

    /**
     * Get ulica value
     * @return string|null
     */
    public function getUlica(): ?string
    {
        return $this->ulica;
    }

    /**
     * Set ulica value
     * @param string $ulica
     * @return \PocztaPolska\StructType\ObszarAdresowyType
     */
    public function setUlica(?string $ulica = null): self
    {
        // validation for constraint: string
        if (!is_null($ulica) && !is_string($ulica)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ulica, true), gettype($ulica)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($ulica) && mb_strlen((string) $ulica) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $ulica)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ulica) && mb_strlen((string) $ulica) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $ulica)), __LINE__);
        }
        $this->ulica = $ulica;

        return $this;
    }

    /**
     * Get numerDomu value
     * @return string|null
     */
    public function getNumerDomu(): ?string
    {
        return $this->numerDomu;
    }

    /**
     * Set numerDomu value
     * @param string $numerDomu
     * @return \PocztaPolska\StructType\ObszarAdresowyType
     */
    public function setNumerDomu(?string $numerDomu = null): self
    {
        // validation for constraint: string
        if (!is_null($numerDomu) && !is_string($numerDomu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerDomu, true), gettype($numerDomu)), __LINE__);
        }
        // validation for constraint: maxLength(11)
        if (!is_null($numerDomu) && mb_strlen((string) $numerDomu) > 11) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 11', mb_strlen((string) $numerDomu)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($numerDomu) && mb_strlen((string) $numerDomu) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $numerDomu)), __LINE__);
        }
        $this->numerDomu = $numerDomu;

        return $this;
    }
}
