<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shopEZwrotyInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ShopEZwrotyInfoType extends AbstractStructBase
{
    /**
     * The idShop
     * @var int|null
     */
    protected ?int $idShop = null;
    /**
     * The przyjaznaNazwa
     * Meta information extracted from the WSDL
     * - base: xsd:string
     * - maxLength: 60
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $przyjaznaNazwa = null;
    /**
     * The availableOnWebsite
     * @var bool|null
     */
    protected ?bool $availableOnWebsite = null;
    /**
     * The nip
     * @var string|null
     */
    protected ?string $nip = null;

    /**
     * Constructor method for shopEZwrotyInfoType
     * @uses ShopEZwrotyInfoType::setIdShop()
     * @uses ShopEZwrotyInfoType::setPrzyjaznaNazwa()
     * @uses ShopEZwrotyInfoType::setAvailableOnWebsite()
     * @uses ShopEZwrotyInfoType::setNip()
     * @param int $idShop
     * @param string $przyjaznaNazwa
     * @param bool $availableOnWebsite
     * @param string $nip
     */
    public function __construct(?int $idShop = null, ?string $przyjaznaNazwa = null, ?bool $availableOnWebsite = null, ?string $nip = null)
    {
        $this
            ->setIdShop($idShop)
            ->setPrzyjaznaNazwa($przyjaznaNazwa)
            ->setAvailableOnWebsite($availableOnWebsite)
            ->setNip($nip);
    }

    /**
     * Get idShop value
     * @return int|null
     */
    public function getIdShop(): ?int
    {
        return $this->idShop;
    }

    /**
     * Set idShop value
     * @param int $idShop
     * @return \PocztaPolska\StructType\ShopEZwrotyInfoType
     */
    public function setIdShop(?int $idShop = null): self
    {
        // validation for constraint: int
        if (!is_null($idShop) && !(is_int($idShop) || ctype_digit($idShop))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idShop, true), gettype($idShop)), __LINE__);
        }
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get przyjaznaNazwa value
     * @return string|null
     */
    public function getPrzyjaznaNazwa(): ?string
    {
        return $this->przyjaznaNazwa;
    }

    /**
     * Set przyjaznaNazwa value
     * @param string $przyjaznaNazwa
     * @return \PocztaPolska\StructType\ShopEZwrotyInfoType
     */
    public function setPrzyjaznaNazwa(?string $przyjaznaNazwa = null): self
    {
        // validation for constraint: string
        if (!is_null($przyjaznaNazwa) && !is_string($przyjaznaNazwa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($przyjaznaNazwa, true), gettype($przyjaznaNazwa)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($przyjaznaNazwa) && mb_strlen((string) $przyjaznaNazwa) > 60) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen((string) $przyjaznaNazwa)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($przyjaznaNazwa) && mb_strlen((string) $przyjaznaNazwa) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $przyjaznaNazwa)), __LINE__);
        }
        $this->przyjaznaNazwa = $przyjaznaNazwa;

        return $this;
    }

    /**
     * Get availableOnWebsite value
     * @return bool|null
     */
    public function getAvailableOnWebsite(): ?bool
    {
        return $this->availableOnWebsite;
    }

    /**
     * Set availableOnWebsite value
     * @param bool $availableOnWebsite
     * @return \PocztaPolska\StructType\ShopEZwrotyInfoType
     */
    public function setAvailableOnWebsite(?bool $availableOnWebsite = null): self
    {
        // validation for constraint: boolean
        if (!is_null($availableOnWebsite) && !is_bool($availableOnWebsite)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($availableOnWebsite, true), gettype($availableOnWebsite)), __LINE__);
        }
        $this->availableOnWebsite = $availableOnWebsite;

        return $this;
    }

    /**
     * Get nip value
     * @return string|null
     */
    public function getNip(): ?string
    {
        return $this->nip;
    }

    /**
     * Set nip value
     * @param string $nip
     * @return \PocztaPolska\StructType\ShopEZwrotyInfoType
     */
    public function setNip(?string $nip = null): self
    {
        // validation for constraint: string
        if (!is_null($nip) && !is_string($nip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nip, true), gettype($nip)), __LINE__);
        }
        $this->nip = $nip;

        return $this;
    }
}
