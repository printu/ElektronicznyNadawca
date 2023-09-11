<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReklamacje StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetReklamacje extends AbstractStructBase
{
    /**
     * The dataRozpatrzenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $dataRozpatrzenia = null;
    /**
     * The guidPrzesylki
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - maxOccurs: 1
     * - minOccurs: 0
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $guidPrzesylki = null;
    /**
     * The dataZlozenia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\DataZlozeniaType|null
     */
    protected ?\PocztaPolska\StructType\DataZlozeniaType $dataZlozenia = null;

    /**
     * Constructor method for getReklamacje
     * @uses GetReklamacje::setDataRozpatrzenia()
     * @uses GetReklamacje::setGuidPrzesylki()
     * @uses GetReklamacje::setDataZlozenia()
     * @param string $dataRozpatrzenia
     * @param string $guidPrzesylki
     * @param \PocztaPolska\StructType\DataZlozeniaType $dataZlozenia
     */
    public function __construct(?string $dataRozpatrzenia = null, ?string $guidPrzesylki = null, ?\PocztaPolska\StructType\DataZlozeniaType $dataZlozenia = null)
    {
        $this
            ->setDataRozpatrzenia($dataRozpatrzenia)
            ->setGuidPrzesylki($guidPrzesylki)
            ->setDataZlozenia($dataZlozenia);
    }

    /**
     * Get dataRozpatrzenia value
     * @return string|null
     */
    public function getDataRozpatrzenia(): ?string
    {
        return $this->dataRozpatrzenia;
    }

    /**
     * Set dataRozpatrzenia value
     * @param string $dataRozpatrzenia
     * @return \PocztaPolska\StructType\GetReklamacje
     */
    public function setDataRozpatrzenia(?string $dataRozpatrzenia = null): self
    {
        // validation for constraint: string
        if (!is_null($dataRozpatrzenia) && !is_string($dataRozpatrzenia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataRozpatrzenia, true), gettype($dataRozpatrzenia)), __LINE__);
        }
        $this->dataRozpatrzenia = $dataRozpatrzenia;

        return $this;
    }

    /**
     * Get guidPrzesylki value
     * @return string|null
     */
    public function getGuidPrzesylki(): ?string
    {
        return $this->guidPrzesylki;
    }

    /**
     * Set guidPrzesylki value
     * @param string $guidPrzesylki
     * @return \PocztaPolska\StructType\GetReklamacje
     */
    public function setGuidPrzesylki(?string $guidPrzesylki = null): self
    {
        // validation for constraint: string
        if (!is_null($guidPrzesylki) && !is_string($guidPrzesylki)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guidPrzesylki, true), gettype($guidPrzesylki)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guidPrzesylki) && mb_strlen((string) $guidPrzesylki) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $guidPrzesylki)), __LINE__);
        }
        $this->guidPrzesylki = $guidPrzesylki;

        return $this;
    }

    /**
     * Get dataZlozenia value
     * @return \PocztaPolska\StructType\DataZlozeniaType|null
     */
    public function getDataZlozenia(): ?\PocztaPolska\StructType\DataZlozeniaType
    {
        return $this->dataZlozenia;
    }

    /**
     * Set dataZlozenia value
     * @param \PocztaPolska\StructType\DataZlozeniaType $dataZlozenia
     * @return \PocztaPolska\StructType\GetReklamacje
     */
    public function setDataZlozenia(?\PocztaPolska\StructType\DataZlozeniaType $dataZlozenia = null): self
    {
        $this->dataZlozenia = $dataZlozenia;

        return $this;
    }
}
