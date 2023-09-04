<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for addressLabelContent StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressLabelContent extends AbstractStructBase
{
    /**
     * The pdfContent
     * @var string|null
     */
    protected ?string $pdfContent = null;
    /**
     * The nrNadania
     * @var string|null
     */
    protected ?string $nrNadania = null;
    /**
     * The guid
     * @var string|null
     */
    protected ?string $guid = null;

    /**
     * Constructor method for addressLabelContent
     * @uses AddressLabelContent::setPdfContent()
     * @uses AddressLabelContent::setNrNadania()
     * @uses AddressLabelContent::setGuid()
     * @param string $pdfContent
     * @param string $nrNadania
     * @param string $guid
     */
    public function __construct(?string $pdfContent = null, ?string $nrNadania = null, ?string $guid = null)
    {
        $this
            ->setPdfContent($pdfContent)
            ->setNrNadania($nrNadania)
            ->setGuid($guid);
    }

    /**
     * Get pdfContent value
     * @return string|null
     */
    public function getPdfContent(): ?string
    {
        return $this->pdfContent;
    }

    /**
     * Set pdfContent value
     * @param string $pdfContent
     * @return \PocztaPolska\StructType\AddressLabelContent
     */
    public function setPdfContent(?string $pdfContent = null): self
    {
        // validation for constraint: string
        if (!is_null($pdfContent) && !is_string($pdfContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfContent, true), gettype($pdfContent)), __LINE__);
        }
        $this->pdfContent = $pdfContent;

        return $this;
    }

    /**
     * Get nrNadania value
     * @return string|null
     */
    public function getNrNadania(): ?string
    {
        return $this->nrNadania;
    }

    /**
     * Set nrNadania value
     * @param string $nrNadania
     * @return \PocztaPolska\StructType\AddressLabelContent
     */
    public function setNrNadania(?string $nrNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($nrNadania) && !is_string($nrNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nrNadania, true), gettype($nrNadania)), __LINE__);
        }
        $this->nrNadania = $nrNadania;

        return $this;
    }

    /**
     * Get guid value
     * @return string|null
     */
    public function getGuid(): ?string
    {
        return $this->guid;
    }

    /**
     * Set guid value
     * @param string $guid
     * @return \PocztaPolska\StructType\AddressLabelContent
     */
    public function setGuid(?string $guid = null): self
    {
        // validation for constraint: string
        if (!is_null($guid) && !is_string($guid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guid, true), gettype($guid)), __LINE__);
        }
        $this->guid = $guid;

        return $this;
    }
}
