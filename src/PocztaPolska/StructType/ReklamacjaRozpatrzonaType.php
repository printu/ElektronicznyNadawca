<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for reklamacjaRozpatrzonaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReklamacjaRozpatrzonaType extends AbstractStructBase
{
    /**
     * The guid
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $guid = null;
    /**
     * The numerNadania
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 20
     * - minLength: 10
     * @var string|null
     */
    protected ?string $numerNadania = null;
    /**
     * The rozstrzygniecie
     * @var string|null
     */
    protected ?string $rozstrzygniecie = null;
    /**
     * The przyznaneOdszkodowanie
     * @var int|null
     */
    protected ?int $przyznaneOdszkodowanie = null;
    /**
     * The uzasadnienie
     * @var string|null
     */
    protected ?string $uzasadnienie = null;
    /**
     * The dataRozpatrzenia
     * @var string|null
     */
    protected ?string $dataRozpatrzenia = null;
    /**
     * The nazwaJednostkiRozpatrujacej
     * @var string|null
     */
    protected ?string $nazwaJednostkiRozpatrujacej = null;
    /**
     * The osobaRozpatrujaca
     * @var string|null
     */
    protected ?string $osobaRozpatrujaca = null;
    /**
     * The idReklamacja
     * @var string|null
     */
    protected ?string $idReklamacja = null;

    /**
     * Constructor method for reklamacjaRozpatrzonaType
     * @uses ReklamacjaRozpatrzonaType::setGuid()
     * @uses ReklamacjaRozpatrzonaType::setNumerNadania()
     * @uses ReklamacjaRozpatrzonaType::setRozstrzygniecie()
     * @uses ReklamacjaRozpatrzonaType::setPrzyznaneOdszkodowanie()
     * @uses ReklamacjaRozpatrzonaType::setUzasadnienie()
     * @uses ReklamacjaRozpatrzonaType::setDataRozpatrzenia()
     * @uses ReklamacjaRozpatrzonaType::setNazwaJednostkiRozpatrujacej()
     * @uses ReklamacjaRozpatrzonaType::setOsobaRozpatrujaca()
     * @uses ReklamacjaRozpatrzonaType::setIdReklamacja()
     * @param string $guid
     * @param string $numerNadania
     * @param string $rozstrzygniecie
     * @param int $przyznaneOdszkodowanie
     * @param string $uzasadnienie
     * @param string $dataRozpatrzenia
     * @param string $nazwaJednostkiRozpatrujacej
     * @param string $osobaRozpatrujaca
     * @param string $idReklamacja
     */
    public function __construct(?string $guid = null, ?string $numerNadania = null, ?string $rozstrzygniecie = null, ?int $przyznaneOdszkodowanie = null, ?string $uzasadnienie = null, ?string $dataRozpatrzenia = null, ?string $nazwaJednostkiRozpatrujacej = null, ?string $osobaRozpatrujaca = null, ?string $idReklamacja = null)
    {
        $this
            ->setGuid($guid)
            ->setNumerNadania($numerNadania)
            ->setRozstrzygniecie($rozstrzygniecie)
            ->setPrzyznaneOdszkodowanie($przyznaneOdszkodowanie)
            ->setUzasadnienie($uzasadnienie)
            ->setDataRozpatrzenia($dataRozpatrzenia)
            ->setNazwaJednostkiRozpatrujacej($nazwaJednostkiRozpatrujacej)
            ->setOsobaRozpatrujaca($osobaRozpatrujaca)
            ->setIdReklamacja($idReklamacja);
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
     * @return \PocztaPolska\StructType\ReklamacjaRozpatrzonaType
     */
    public function setGuid(?string $guid = null): self
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
     * Get numerNadania value
     * @return string|null
     */
    public function getNumerNadania(): ?string
    {
        return $this->numerNadania;
    }

    /**
     * Set numerNadania value
     * @param string $numerNadania
     * @return \PocztaPolska\StructType\ReklamacjaRozpatrzonaType
     */
    public function setNumerNadania(?string $numerNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($numerNadania) && !is_string($numerNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerNadania, true), gettype($numerNadania)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $numerNadania)), __LINE__);
        }
        // validation for constraint: minLength(10)
        if (!is_null($numerNadania) && mb_strlen((string) $numerNadania) < 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 10', mb_strlen((string) $numerNadania)), __LINE__);
        }
        $this->numerNadania = $numerNadania;

        return $this;
    }

    /**
     * Get rozstrzygniecie value
     * @return string|null
     */
    public function getRozstrzygniecie(): ?string
    {
        return $this->rozstrzygniecie;
    }

    /**
     * Set rozstrzygniecie value
     * @uses \PocztaPolska\EnumType\RozstrzygniecieType::valueIsValid()
     * @uses \PocztaPolska\EnumType\RozstrzygniecieType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rozstrzygniecie
     * @return \PocztaPolska\StructType\ReklamacjaRozpatrzonaType
     */
    public function setRozstrzygniecie(?string $rozstrzygniecie = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\RozstrzygniecieType::valueIsValid($rozstrzygniecie)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\RozstrzygniecieType', is_array($rozstrzygniecie) ? implode(', ', $rozstrzygniecie) : var_export($rozstrzygniecie, true), implode(', ', \PocztaPolska\EnumType\RozstrzygniecieType::getValidValues())), __LINE__);
        }
        $this->rozstrzygniecie = $rozstrzygniecie;

        return $this;
    }

    /**
     * Get przyznaneOdszkodowanie value
     * @return int|null
     */
    public function getPrzyznaneOdszkodowanie(): ?int
    {
        return $this->przyznaneOdszkodowanie;
    }

    /**
     * Set przyznaneOdszkodowanie value
     * @param int $przyznaneOdszkodowanie
     * @return \PocztaPolska\StructType\ReklamacjaRozpatrzonaType
     */
    public function setPrzyznaneOdszkodowanie(?int $przyznaneOdszkodowanie = null): self
    {
        // validation for constraint: int
        if (!is_null($przyznaneOdszkodowanie) && !(is_int($przyznaneOdszkodowanie) || ctype_digit($przyznaneOdszkodowanie))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($przyznaneOdszkodowanie, true), gettype($przyznaneOdszkodowanie)), __LINE__);
        }
        $this->przyznaneOdszkodowanie = $przyznaneOdszkodowanie;

        return $this;
    }

    /**
     * Get uzasadnienie value
     * @return string|null
     */
    public function getUzasadnienie(): ?string
    {
        return $this->uzasadnienie;
    }

    /**
     * Set uzasadnienie value
     * @param string $uzasadnienie
     * @return \PocztaPolska\StructType\ReklamacjaRozpatrzonaType
     */
    public function setUzasadnienie(?string $uzasadnienie = null): self
    {
        // validation for constraint: string
        if (!is_null($uzasadnienie) && !is_string($uzasadnienie)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uzasadnienie, true), gettype($uzasadnienie)), __LINE__);
        }
        $this->uzasadnienie = $uzasadnienie;

        return $this;
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
     * @return \PocztaPolska\StructType\ReklamacjaRozpatrzonaType
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
     * Get nazwaJednostkiRozpatrujacej value
     * @return string|null
     */
    public function getNazwaJednostkiRozpatrujacej(): ?string
    {
        return $this->nazwaJednostkiRozpatrujacej;
    }

    /**
     * Set nazwaJednostkiRozpatrujacej value
     * @param string $nazwaJednostkiRozpatrujacej
     * @return \PocztaPolska\StructType\ReklamacjaRozpatrzonaType
     */
    public function setNazwaJednostkiRozpatrujacej(?string $nazwaJednostkiRozpatrujacej = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwaJednostkiRozpatrujacej) && !is_string($nazwaJednostkiRozpatrujacej)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaJednostkiRozpatrujacej, true), gettype($nazwaJednostkiRozpatrujacej)), __LINE__);
        }
        $this->nazwaJednostkiRozpatrujacej = $nazwaJednostkiRozpatrujacej;

        return $this;
    }

    /**
     * Get osobaRozpatrujaca value
     * @return string|null
     */
    public function getOsobaRozpatrujaca(): ?string
    {
        return $this->osobaRozpatrujaca;
    }

    /**
     * Set osobaRozpatrujaca value
     * @param string $osobaRozpatrujaca
     * @return \PocztaPolska\StructType\ReklamacjaRozpatrzonaType
     */
    public function setOsobaRozpatrujaca(?string $osobaRozpatrujaca = null): self
    {
        // validation for constraint: string
        if (!is_null($osobaRozpatrujaca) && !is_string($osobaRozpatrujaca)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($osobaRozpatrujaca, true), gettype($osobaRozpatrujaca)), __LINE__);
        }
        $this->osobaRozpatrujaca = $osobaRozpatrujaca;

        return $this;
    }

    /**
     * Get idReklamacja value
     * @return string|null
     */
    public function getIdReklamacja(): ?string
    {
        return $this->idReklamacja;
    }

    /**
     * Set idReklamacja value
     * @param string $idReklamacja
     * @return \PocztaPolska\StructType\ReklamacjaRozpatrzonaType
     */
    public function setIdReklamacja(?string $idReklamacja = null): self
    {
        // validation for constraint: string
        if (!is_null($idReklamacja) && !is_string($idReklamacja)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idReklamacja, true), gettype($idReklamacja)), __LINE__);
        }
        $this->idReklamacja = $idReklamacja;

        return $this;
    }
}
