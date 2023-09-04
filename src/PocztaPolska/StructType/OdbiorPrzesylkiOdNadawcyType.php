<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for odbiorPrzesylkiOdNadawcyType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OdbiorPrzesylkiOdNadawcyType extends AbstractStructBase
{
    /**
     * The wSobote
     * @var bool|null
     */
    protected ?bool $wSobote = null;
    /**
     * The wNiedzieleLubSwieto
     * @var bool|null
     */
    protected ?bool $wNiedzieleLubSwieto = null;
    /**
     * The wGodzinachOd20Do7
     * @var bool|null
     */
    protected ?bool $wGodzinachOd20Do7 = null;
    /**
     * Constructor method for odbiorPrzesylkiOdNadawcyType
     * @uses OdbiorPrzesylkiOdNadawcyType::setWSobote()
     * @uses OdbiorPrzesylkiOdNadawcyType::setWNiedzieleLubSwieto()
     * @uses OdbiorPrzesylkiOdNadawcyType::setWGodzinachOd20Do7()
     * @param bool $wSobote
     * @param bool $wNiedzieleLubSwieto
     * @param bool $wGodzinachOd20Do7
     */
    public function __construct(?bool $wSobote = null, ?bool $wNiedzieleLubSwieto = null, ?bool $wGodzinachOd20Do7 = null)
    {
        $this
            ->setWSobote($wSobote)
            ->setWNiedzieleLubSwieto($wNiedzieleLubSwieto)
            ->setWGodzinachOd20Do7($wGodzinachOd20Do7);
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
     * @return \PocztaPolska\StructType\OdbiorPrzesylkiOdNadawcyType
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
     * @return \PocztaPolska\StructType\OdbiorPrzesylkiOdNadawcyType
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
     * @return \PocztaPolska\StructType\OdbiorPrzesylkiOdNadawcyType
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
