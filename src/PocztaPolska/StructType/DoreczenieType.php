<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for doreczenieType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoreczenieType extends AbstractStructBase
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
     * The w90Minut
     * @var bool|null
     */
    protected ?bool $w90Minut = null;
    /**
     * The wNiedzieleLubSwieto
     * @var bool|null
     */
    protected ?bool $wNiedzieleLubSwieto = null;
    /**
     * The doRakWlasnych
     * @var bool|null
     */
    protected ?bool $doRakWlasnych = null;
    /**
     * The wGodzinachOd20Do7
     * @var bool|null
     */
    protected ?bool $wGodzinachOd20Do7 = null;

    /**
     * Constructor method for doreczenieType
     * @uses DoreczenieType::setOczekiwanyTerminDoreczenia()
     * @uses DoreczenieType::setOczekiwanaGodzinaDoreczenia()
     * @uses DoreczenieType::setWSobote()
     * @uses DoreczenieType::setW90Minut()
     * @uses DoreczenieType::setWNiedzieleLubSwieto()
     * @uses DoreczenieType::setDoRakWlasnych()
     * @uses DoreczenieType::setWGodzinachOd20Do7()
     * @param string $oczekiwanyTerminDoreczenia
     * @param string $oczekiwanaGodzinaDoreczenia
     * @param bool $wSobote
     * @param bool $w90Minut
     * @param bool $wNiedzieleLubSwieto
     * @param bool $doRakWlasnych
     * @param bool $wGodzinachOd20Do7
     */
    public function __construct(?string $oczekiwanyTerminDoreczenia = null, ?string $oczekiwanaGodzinaDoreczenia = null, ?bool $wSobote = null, ?bool $w90Minut = null, ?bool $wNiedzieleLubSwieto = null, ?bool $doRakWlasnych = null, ?bool $wGodzinachOd20Do7 = null)
    {
        $this
            ->setOczekiwanyTerminDoreczenia($oczekiwanyTerminDoreczenia)
            ->setOczekiwanaGodzinaDoreczenia($oczekiwanaGodzinaDoreczenia)
            ->setWSobote($wSobote)
            ->setW90Minut($w90Minut)
            ->setWNiedzieleLubSwieto($wNiedzieleLubSwieto)
            ->setDoRakWlasnych($doRakWlasnych)
            ->setWGodzinachOd20Do7($wGodzinachOd20Do7);
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
     * @return \PocztaPolska\StructType\DoreczenieType
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
     * @uses \PocztaPolska\EnumType\OczekiwanaGodzinaDoreczeniaType::valueIsValid()
     * @uses \PocztaPolska\EnumType\OczekiwanaGodzinaDoreczeniaType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $oczekiwanaGodzinaDoreczenia
     * @return \PocztaPolska\StructType\DoreczenieType
     */
    public function setOczekiwanaGodzinaDoreczenia(?string $oczekiwanaGodzinaDoreczenia = null): self
    {
        // validation for constraint: enumeration
        if (!\PocztaPolska\EnumType\OczekiwanaGodzinaDoreczeniaType::valueIsValid($oczekiwanaGodzinaDoreczenia)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PocztaPolska\EnumType\OczekiwanaGodzinaDoreczeniaType', is_array($oczekiwanaGodzinaDoreczenia) ? implode(', ', $oczekiwanaGodzinaDoreczenia) : var_export($oczekiwanaGodzinaDoreczenia, true), implode(', ', \PocztaPolska\EnumType\OczekiwanaGodzinaDoreczeniaType::getValidValues())), __LINE__);
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
     * @return \PocztaPolska\StructType\DoreczenieType
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
     * Get w90Minut value
     * @return bool|null
     */
    public function getW90Minut(): ?bool
    {
        return $this->w90Minut;
    }

    /**
     * Set w90Minut value
     * @param bool $w90Minut
     * @return \PocztaPolska\StructType\DoreczenieType
     */
    public function setW90Minut(?bool $w90Minut = null): self
    {
        // validation for constraint: boolean
        if (!is_null($w90Minut) && !is_bool($w90Minut)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($w90Minut, true), gettype($w90Minut)), __LINE__);
        }
        $this->w90Minut = $w90Minut;

        return $this;
    }

    /**
     * Get wNiedzieleLubSwieto value
     * @return bool|null
     */
    public function getWNiedzieleLubSwieto(): ?bool
    {
        return $this->wNiedzieleLubSwieto;
    }

    /**
     * Set wNiedzieleLubSwieto value
     * @param bool $wNiedzieleLubSwieto
     * @return \PocztaPolska\StructType\DoreczenieType
     */
    public function setWNiedzieleLubSwieto(?bool $wNiedzieleLubSwieto = null): self
    {
        // validation for constraint: boolean
        if (!is_null($wNiedzieleLubSwieto) && !is_bool($wNiedzieleLubSwieto)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wNiedzieleLubSwieto, true), gettype($wNiedzieleLubSwieto)), __LINE__);
        }
        $this->wNiedzieleLubSwieto = $wNiedzieleLubSwieto;

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
     * @return \PocztaPolska\StructType\DoreczenieType
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

    /**
     * Get wGodzinachOd20Do7 value
     * @return bool|null
     */
    public function getWGodzinachOd20Do7(): ?bool
    {
        return $this->wGodzinachOd20Do7;
    }

    /**
     * Set wGodzinachOd20Do7 value
     * @param bool $wGodzinachOd20Do7
     * @return \PocztaPolska\StructType\DoreczenieType
     */
    public function setWGodzinachOd20Do7(?bool $wGodzinachOd20Do7 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($wGodzinachOd20Do7) && !is_bool($wGodzinachOd20Do7)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wGodzinachOd20Do7, true), gettype($wGodzinachOd20Do7)), __LINE__);
        }
        $this->wGodzinachOd20Do7 = $wGodzinachOd20Do7;

        return $this;
    }
}
