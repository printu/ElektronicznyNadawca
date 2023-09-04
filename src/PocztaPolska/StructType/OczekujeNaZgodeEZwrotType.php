<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for oczekujeNaZgodeEZwrotType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OczekujeNaZgodeEZwrotType extends AbstractStructBase
{
    /**
     * The sklepEZwrot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ShopEZwrotyType|null
     */
    protected ?\PocztaPolska\StructType\ShopEZwrotyType $sklepEZwrot = null;
    /**
     * The idZgody
     * @var int|null
     */
    protected ?int $idZgody = null;
    /**
     * The nazwaProduktu
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 60
     * @var string|null
     */
    protected ?string $nazwaProduktu = null;
    /**
     * The numerZamowienia
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 150
     * @var string|null
     */
    protected ?string $numerZamowienia = null;
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
     * The email
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 50
     * - minLength: 6
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The dataNadania
     * @var string|null
     */
    protected ?string $dataNadania = null;
    /**
     * The guidZgodaEZwrot
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - length: 32
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $guidZgodaEZwrot = null;

    /**
     * Constructor method for oczekujeNaZgodeEZwrotType
     * @uses OczekujeNaZgodeEZwrotType::setSklepEZwrot()
     * @uses OczekujeNaZgodeEZwrotType::setIdZgody()
     * @uses OczekujeNaZgodeEZwrotType::setNazwaProduktu()
     * @uses OczekujeNaZgodeEZwrotType::setNumerZamowienia()
     * @uses OczekujeNaZgodeEZwrotType::setNumerNadania()
     * @uses OczekujeNaZgodeEZwrotType::setEmail()
     * @uses OczekujeNaZgodeEZwrotType::setDataNadania()
     * @uses OczekujeNaZgodeEZwrotType::setGuidZgodaEZwrot()
     * @param \PocztaPolska\StructType\ShopEZwrotyType $sklepEZwrot
     * @param int $idZgody
     * @param string $nazwaProduktu
     * @param string $numerZamowienia
     * @param string $numerNadania
     * @param string $email
     * @param string $dataNadania
     * @param string $guidZgodaEZwrot
     */
    public function __construct(?\PocztaPolska\StructType\ShopEZwrotyType $sklepEZwrot = null, ?int $idZgody = null, ?string $nazwaProduktu = null, ?string $numerZamowienia = null, ?string $numerNadania = null, ?string $email = null, ?string $dataNadania = null, ?string $guidZgodaEZwrot = null)
    {
        $this
            ->setSklepEZwrot($sklepEZwrot)
            ->setIdZgody($idZgody)
            ->setNazwaProduktu($nazwaProduktu)
            ->setNumerZamowienia($numerZamowienia)
            ->setNumerNadania($numerNadania)
            ->setEmail($email)
            ->setDataNadania($dataNadania)
            ->setGuidZgodaEZwrot($guidZgodaEZwrot);
    }

    /**
     * Get sklepEZwrot value
     * @return \PocztaPolska\StructType\ShopEZwrotyType|null
     */
    public function getSklepEZwrot(): ?\PocztaPolska\StructType\ShopEZwrotyType
    {
        return $this->sklepEZwrot;
    }

    /**
     * Set sklepEZwrot value
     * @param \PocztaPolska\StructType\ShopEZwrotyType $sklepEZwrot
     * @return \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setSklepEZwrot(?\PocztaPolska\StructType\ShopEZwrotyType $sklepEZwrot = null): self
    {
        $this->sklepEZwrot = $sklepEZwrot;

        return $this;
    }

    /**
     * Get idZgody value
     * @return int|null
     */
    public function getIdZgody(): ?int
    {
        return $this->idZgody;
    }

    /**
     * Set idZgody value
     * @param int $idZgody
     * @return \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setIdZgody(?int $idZgody = null): self
    {
        // validation for constraint: int
        if (!is_null($idZgody) && !(is_int($idZgody) || ctype_digit($idZgody))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idZgody, true), gettype($idZgody)), __LINE__);
        }
        $this->idZgody = $idZgody;

        return $this;
    }

    /**
     * Get nazwaProduktu value
     * @return string|null
     */
    public function getNazwaProduktu(): ?string
    {
        return $this->nazwaProduktu;
    }

    /**
     * Set nazwaProduktu value
     * @param string $nazwaProduktu
     * @return \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setNazwaProduktu(?string $nazwaProduktu = null): self
    {
        // validation for constraint: string
        if (!is_null($nazwaProduktu) && !is_string($nazwaProduktu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nazwaProduktu, true), gettype($nazwaProduktu)), __LINE__);
        }
        // validation for constraint: length(60)
        if (!is_null($nazwaProduktu) && mb_strlen((string) $nazwaProduktu) !== 60) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 60', mb_strlen((string) $nazwaProduktu)), __LINE__);
        }
        $this->nazwaProduktu = $nazwaProduktu;

        return $this;
    }

    /**
     * Get numerZamowienia value
     * @return string|null
     */
    public function getNumerZamowienia(): ?string
    {
        return $this->numerZamowienia;
    }

    /**
     * Set numerZamowienia value
     * @param string $numerZamowienia
     * @return \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setNumerZamowienia(?string $numerZamowienia = null): self
    {
        // validation for constraint: string
        if (!is_null($numerZamowienia) && !is_string($numerZamowienia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numerZamowienia, true), gettype($numerZamowienia)), __LINE__);
        }
        // validation for constraint: length(150)
        if (!is_null($numerZamowienia) && mb_strlen((string) $numerZamowienia) !== 150) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 150', mb_strlen((string) $numerZamowienia)), __LINE__);
        }
        $this->numerZamowienia = $numerZamowienia;

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
     * @return \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType
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
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set email value
     * @param string $email
     * @return \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($email) && mb_strlen((string) $email) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $email)), __LINE__);
        }
        // validation for constraint: minLength(6)
        if (!is_null($email) && mb_strlen((string) $email) < 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 6', mb_strlen((string) $email)), __LINE__);
        }
        $this->email = $email;

        return $this;
    }

    /**
     * Get dataNadania value
     * @return string|null
     */
    public function getDataNadania(): ?string
    {
        return $this->dataNadania;
    }

    /**
     * Set dataNadania value
     * @param string $dataNadania
     * @return \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setDataNadania(?string $dataNadania = null): self
    {
        // validation for constraint: string
        if (!is_null($dataNadania) && !is_string($dataNadania)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataNadania, true), gettype($dataNadania)), __LINE__);
        }
        $this->dataNadania = $dataNadania;

        return $this;
    }

    /**
     * Get guidZgodaEZwrot value
     * @return string|null
     */
    public function getGuidZgodaEZwrot(): ?string
    {
        return $this->guidZgodaEZwrot;
    }

    /**
     * Set guidZgodaEZwrot value
     * @param string $guidZgodaEZwrot
     * @return \PocztaPolska\StructType\OczekujeNaZgodeEZwrotType
     */
    public function setGuidZgodaEZwrot(?string $guidZgodaEZwrot = null): self
    {
        // validation for constraint: string
        if (!is_null($guidZgodaEZwrot) && !is_string($guidZgodaEZwrot)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($guidZgodaEZwrot, true), gettype($guidZgodaEZwrot)), __LINE__);
        }
        // validation for constraint: length(32)
        if (!is_null($guidZgodaEZwrot) && mb_strlen((string) $guidZgodaEZwrot) !== 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 32', mb_strlen((string) $guidZgodaEZwrot)), __LINE__);
        }
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;

        return $this;
    }
}
