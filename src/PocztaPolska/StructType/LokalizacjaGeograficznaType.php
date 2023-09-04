<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for lokalizacjaGeograficznaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LokalizacjaGeograficznaType extends AbstractStructBase
{
    /**
     * The dlugosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\WspolrzednaGeograficznaType
     */
    protected \PocztaPolska\StructType\WspolrzednaGeograficznaType $dlugosc;
    /**
     * The szerokosc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\WspolrzednaGeograficznaType
     */
    protected \PocztaPolska\StructType\WspolrzednaGeograficznaType $szerokosc;

    /**
     * Constructor method for lokalizacjaGeograficznaType
     * @uses LokalizacjaGeograficznaType::setDlugosc()
     * @uses LokalizacjaGeograficznaType::setSzerokosc()
     * @param \PocztaPolska\StructType\WspolrzednaGeograficznaType $dlugosc
     * @param \PocztaPolska\StructType\WspolrzednaGeograficznaType $szerokosc
     */
    public function __construct(\PocztaPolska\StructType\WspolrzednaGeograficznaType $dlugosc, \PocztaPolska\StructType\WspolrzednaGeograficznaType $szerokosc)
    {
        $this
            ->setDlugosc($dlugosc)
            ->setSzerokosc($szerokosc);
    }

    /**
     * Get dlugosc value
     * @return \PocztaPolska\StructType\WspolrzednaGeograficznaType
     */
    public function getDlugosc(): \PocztaPolska\StructType\WspolrzednaGeograficznaType
    {
        return $this->dlugosc;
    }

    /**
     * Set dlugosc value
     * @param \PocztaPolska\StructType\WspolrzednaGeograficznaType $dlugosc
     * @return \PocztaPolska\StructType\LokalizacjaGeograficznaType
     */
    public function setDlugosc(\PocztaPolska\StructType\WspolrzednaGeograficznaType $dlugosc): self
    {
        $this->dlugosc = $dlugosc;

        return $this;
    }

    /**
     * Get szerokosc value
     * @return \PocztaPolska\StructType\WspolrzednaGeograficznaType
     */
    public function getSzerokosc(): \PocztaPolska\StructType\WspolrzednaGeograficznaType
    {
        return $this->szerokosc;
    }

    /**
     * Set szerokosc value
     * @param \PocztaPolska\StructType\WspolrzednaGeograficznaType $szerokosc
     * @return \PocztaPolska\StructType\LokalizacjaGeograficznaType
     */
    public function setSzerokosc(\PocztaPolska\StructType\WspolrzednaGeograficznaType $szerokosc): self
    {
        $this->szerokosc = $szerokosc;

        return $this;
    }
}
