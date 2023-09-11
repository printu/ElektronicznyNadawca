<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for rodzajPaletyType EnumType
 * @subpackage Enumerations
 */
class RodzajPaletyType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EUR'
     * @return string 'EUR'
     */
    public const VALUE_EUR = 'EUR';
    /**
     * Constant for value 'POLPALETA'
     * @return string 'POLPALETA'
     */
    public const VALUE_POLPALETA = 'POLPALETA';
    /**
     * Constant for value 'INNA'
     * @return string 'INNA'
     */
    public const VALUE_INNA = 'INNA';
    /**
     * Constant for value 'PRZEMYSLOWA'
     * @return string 'PRZEMYSLOWA'
     */
    public const VALUE_PRZEMYSLOWA = 'PRZEMYSLOWA';

    /**
     * Return allowed values
     * @uses self::VALUE_EUR
     * @uses self::VALUE_POLPALETA
     * @uses self::VALUE_INNA
     * @uses self::VALUE_PRZEMYSLOWA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EUR,
            self::VALUE_POLPALETA,
            self::VALUE_INNA,
            self::VALUE_PRZEMYSLOWA,
        ];
    }
}
