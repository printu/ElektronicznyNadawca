<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for serwisNierejestrowanaZNumeremType EnumType
 * @subpackage Enumerations
 */
class SerwisNierejestrowanaZNumeremType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NIEREJESTROWANA'
     * @return string 'NIEREJESTROWANA'
     */
    const VALUE_NIEREJESTROWANA = 'NIEREJESTROWANA';
    /**
     * Constant for value 'HANDLOWA'
     * @return string 'HANDLOWA'
     */
    const VALUE_HANDLOWA = 'HANDLOWA';
    /**
     * Constant for value 'LIST_BIZNESOWY'
     * @return string 'LIST_BIZNESOWY'
     */
    const VALUE_LIST_BIZNESOWY = 'LIST_BIZNESOWY';
    /**
     * Constant for value 'MARKETINGOWA'
     * @return string 'MARKETINGOWA'
     */
    const VALUE_MARKETINGOWA = 'MARKETINGOWA';
    /**
     * Return allowed values
     * @uses self::VALUE_NIEREJESTROWANA
     * @uses self::VALUE_HANDLOWA
     * @uses self::VALUE_LIST_BIZNESOWY
     * @uses self::VALUE_MARKETINGOWA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NIEREJESTROWANA,
            self::VALUE_HANDLOWA,
            self::VALUE_LIST_BIZNESOWY,
            self::VALUE_MARKETINGOWA,
        ];
    }
}
