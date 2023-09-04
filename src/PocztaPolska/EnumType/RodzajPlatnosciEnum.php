<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for rodzajPlatnosciEnum EnumType
 * @subpackage Enumerations
 */
class RodzajPlatnosciEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BLIK'
     * @return string 'BLIK'
     */
    const VALUE_BLIK = 'BLIK';
    /**
     * Constant for value 'CARD'
     * @return string 'CARD'
     */
    const VALUE_CARD = 'CARD';
    /**
     * Constant for value 'ONLINE'
     * @return string 'ONLINE'
     */
    const VALUE_ONLINE = 'ONLINE';
    /**
     * Return allowed values
     * @uses self::VALUE_BLIK
     * @uses self::VALUE_CARD
     * @uses self::VALUE_ONLINE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BLIK,
            self::VALUE_CARD,
            self::VALUE_ONLINE,
        ];
    }
}
