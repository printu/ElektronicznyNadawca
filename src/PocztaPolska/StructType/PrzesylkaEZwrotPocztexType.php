<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;

/**
 * This class stands for przesylkaEZwrotPocztexType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrzesylkaEZwrotPocztexType extends PrzesylkaRejestrowanaType
{
    /**
     * The idSklepEZwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idSklepEZwrot = null;
    /**
     * The numerNadaniaZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    protected ?string $numerNadaniaZwrot = null;

    /**
     * Constructor method for przesylkaEZwrotPocztexType
     * @uses PrzesylkaEZwrotPocztexType::setIdSklepEZwrot()
     * @uses PrzesylkaEZwrotPocztexType::setNumerNadaniaZwrot()
     * @param int $idSklepEZwrot
     * @param string $numerNadaniaZwrot
     */
    public function __construct(?int $idSklepEZwrot = null, ?string $numerNadaniaZwrot = null)
    {
        $this
            ->setIdSklepEZwrot($idSklepEZwrot)
            ->setNumerNadaniaZwrot($numerNadaniaZwrot);
    }

    /**
     * Get idSklepEZwrot value
     * @return int|null
     */
    public function getIdSklepEZwrot(): ?int
    {
        return $this->idSklepEZwrot;
    }

    /**
     * Set idSklepEZwrot value
     * @param int $idSklepEZwrot
     * @return \PocztaPolska\StructType\PrzesylkaEZwrotPocztexType
     */
    public function setIdSklepEZwrot(?int $idSklepEZwrot = null): self
    {
        // validation for constraint: int
        if (!is_null($idSklepEZwrot) && !(is_int($idSklepEZwrot) || ctype_digit($idSklepEZwrot))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idSklepEZwrot, true), gettype($idSklepEZwrot)), __LINE__);
        }
        $this->idSklepEZwrot = $idSklepEZwrot;

        return $this;
    }

    /**
     * Get numerNadaniaZwrot value
     * @return string|null
     */
    public function getNumerNadaniaZwrot(): ?string
    {
        return $this->numerNadaniaZwrot;
    }

    /**
     * Set numerNadaniaZwrot value
     * @param string $numerNadaniaZwrot
     * @return \PocztaPolska\StructType\PrzesylkaEZwrotPocztexType
     */
    public function setNumerNadaniaZwrot(?string $numerNadaniaZwrot = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadaniaZwrot) && !is_string($numerNadaniaZwrot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadaniaZwrot, true), gettype($numerNadaniaZwrot)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadaniaZwrot) && mb_strlen((string) $numerNadaniaZwrot) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numerNadaniaZwrot)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($numerNadaniaZwrot) && mb_strlen((string) $numerNadaniaZwrot) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $numerNadaniaZwrot)), __LINE__);
        }
        $this->numerNadaniaZwrot = $numerNadaniaZwrot;

        return $this;
    }
}
