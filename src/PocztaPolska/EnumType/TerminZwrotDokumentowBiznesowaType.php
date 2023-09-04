<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for terminZwrotDokumentowBiznesowaType EnumType
 * @subpackage Enumerations
 */
class TerminZwrotDokumentowBiznesowaType extends AbstractStructEnumBase
{
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
     * Constant for value 'EKSPRES24'
     * @return string 'EKSPRES24'
     */
    const VALUE_EKSPRES_24 = 'EKSPRES24';
    /**
     * Return allowed values
     * @uses self::VALUE_LIST_ZWYKLY_PRIORYTETOWY
     * @uses self::VALUE_LIST_ZWYKLY_EKONOMICZNY
     * @uses self::VALUE_LIST_POLECONY_PRIORYTETOWY
     * @uses self::VALUE_LIST_POLECONY_EKONOMICZNY
     * @uses self::VALUE_EKSPRES_24
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LIST_ZWYKLY_PRIORYTETOWY,
            self::VALUE_LIST_ZWYKLY_EKONOMICZNY,
            self::VALUE_LIST_POLECONY_PRIORYTETOWY,
            self::VALUE_LIST_POLECONY_EKONOMICZNY,
            self::VALUE_EKSPRES_24,
        ];
    }
}
