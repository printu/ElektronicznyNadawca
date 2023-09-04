<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for zwrotDokumentowPocztex2021Enum EnumType
 * @subpackage Enumerations
 */
class ZwrotDokumentowPocztex2021Enum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'POCZTEX_KURIER'
     * @return string 'POCZTEX_KURIER'
     */
    public const VALUE_POCZTEX_KURIER = 'POCZTEX_KURIER';
    /**
     * Constant for value 'LIST_POLECONY_PRIORYTETOWY'
     * @return string 'LIST_POLECONY_PRIORYTETOWY'
     */
    public const VALUE_LIST_POLECONY_PRIORYTETOWY = 'LIST_POLECONY_PRIORYTETOWY';
    /**
     * Constant for value 'LIST_POLECONY_EKONOMICZNY'
     * @return string 'LIST_POLECONY_EKONOMICZNY'
     */
    public const VALUE_LIST_POLECONY_EKONOMICZNY = 'LIST_POLECONY_EKONOMICZNY';

    /**
     * Return allowed values
     * @uses self::VALUE_POCZTEX_KURIER
     * @uses self::VALUE_LIST_POLECONY_PRIORYTETOWY
     * @uses self::VALUE_LIST_POLECONY_EKONOMICZNY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POCZTEX_KURIER,
            self::VALUE_LIST_POLECONY_PRIORYTETOWY,
            self::VALUE_LIST_POLECONY_EKONOMICZNY,
        ];
    }
}
