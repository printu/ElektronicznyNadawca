<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for zwrotDokumentowPaczkowaType EnumType
 * @subpackage Enumerations
 */
class ZwrotDokumentowPaczkowaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EKSPRES24'
     * @return string 'EKSPRES24'
     */
    const VALUE_EKSPRES_24 = 'EKSPRES24';
    /**
     * Constant for value 'PACZKA_EKSTRA_24'
     * @return string 'PACZKA_EKSTRA_24'
     */
    const VALUE_PACZKA_EKSTRA_24 = 'PACZKA_EKSTRA_24';
    /**
     * Constant for value 'PACZKA_24'
     * @return string 'PACZKA_24'
     */
    const VALUE_PACZKA_24 = 'PACZKA_24';
    /**
     * Constant for value 'PACZKA_48'
     * @return string 'PACZKA_48'
     */
    const VALUE_PACZKA_48 = 'PACZKA_48';
    /**
     * Constant for value 'LIST_ZWYKLY_PRIORYTETOWY'
     * @return string 'LIST_ZWYKLY_PRIORYTETOWY'
     */
    const VALUE_LIST_ZWYKLY_PRIORYTETOWY = 'LIST_ZWYKLY_PRIORYTETOWY';
    /**
     * Constant for value 'LIST_ZWYKLY_EKONOMICZNY'
     * @return string 'LIST_ZWYKLY_EKONOMICZNY'
     */
    const VALUE_LIST_ZWYKLY_EKONOMICZNY = 'LIST_ZWYKLY_EKONOMICZNY';
    /**
     * Constant for value 'LIST_POLECONY_PRIORYTETOWY'
     * @return string 'LIST_POLECONY_PRIORYTETOWY'
     */
    const VALUE_LIST_POLECONY_PRIORYTETOWY = 'LIST_POLECONY_PRIORYTETOWY';
    /**
     * Constant for value 'LIST_POLECONY_EKONOMICZNY'
     * @return string 'LIST_POLECONY_EKONOMICZNY'
     */
    const VALUE_LIST_POLECONY_EKONOMICZNY = 'LIST_POLECONY_EKONOMICZNY';
    /**
     * Return allowed values
     * @uses self::VALUE_EKSPRES_24
     * @uses self::VALUE_PACZKA_EKSTRA_24
     * @uses self::VALUE_PACZKA_24
     * @uses self::VALUE_PACZKA_48
     * @uses self::VALUE_LIST_ZWYKLY_PRIORYTETOWY
     * @uses self::VALUE_LIST_ZWYKLY_EKONOMICZNY
     * @uses self::VALUE_LIST_POLECONY_PRIORYTETOWY
     * @uses self::VALUE_LIST_POLECONY_EKONOMICZNY
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
            self::VALUE_LIST_ZWYKLY_EKONOMICZNY,
            self::VALUE_LIST_POLECONY_PRIORYTETOWY,
            self::VALUE_LIST_POLECONY_EKONOMICZNY,
        ];
    }
}
