<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for sposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType EnumType
 * @subpackage Enumerations
 */
class SposobPrzekazaniaPotwierdzeniaOdbioruPocztowaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EKSPRES24'
     * @return string 'EKSPRES24'
     */
    public const VALUE_EKSPRES_24 = 'EKSPRES24';
    /**
     * Constant for value 'PACZKA_EKSTRA_24'
     * @return string 'PACZKA_EKSTRA_24'
     */
    public const VALUE_PACZKA_EKSTRA_24 = 'PACZKA_EKSTRA_24';
    /**
     * Constant for value 'PACZKA_24'
     * @return string 'PACZKA_24'
     */
    public const VALUE_PACZKA_24 = 'PACZKA_24';
    /**
     * Constant for value 'PACZKA_48'
     * @return string 'PACZKA_48'
     */
    public const VALUE_PACZKA_48 = 'PACZKA_48';
    /**
     * Constant for value 'LIST_ZWYKLY_PRIORYTETOWY'
     * @return string 'LIST_ZWYKLY_PRIORYTETOWY'
     */
    public const VALUE_LIST_ZWYKLY_PRIORYTETOWY = 'LIST_ZWYKLY_PRIORYTETOWY';

    /**
     * Return allowed values
     * @uses self::VALUE_EKSPRES_24
     * @uses self::VALUE_PACZKA_EKSTRA_24
     * @uses self::VALUE_PACZKA_24
     * @uses self::VALUE_PACZKA_48
     * @uses self::VALUE_LIST_ZWYKLY_PRIORYTETOWY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EKSPRES_24,
            self::VALUE_PACZKA_EKSTRA_24,
            self::VALUE_PACZKA_24,
            self::VALUE_PACZKA_48,
            self::VALUE_LIST_ZWYKLY_PRIORYTETOWY,
        ];
    }
}
