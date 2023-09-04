<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for statusType EnumType
 * @subpackage Enumerations
 */
class StatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NIEPOTWIERDZONA'
     * @return string 'NIEPOTWIERDZONA'
     */
    const VALUE_NIEPOTWIERDZONA = 'NIEPOTWIERDZONA';
    /**
     * Constant for value 'POTWIERDZONA'
     * @return string 'POTWIERDZONA'
     */
    const VALUE_POTWIERDZONA = 'POTWIERDZONA';
    /**
     * Constant for value 'NOWA'
     * @return string 'NOWA'
     */
    const VALUE_NOWA = 'NOWA';
    /**
     * Constant for value 'BRAK'
     * @return string 'BRAK'
     */
    const VALUE_BRAK = 'BRAK';
    /**
     * Return allowed values
     * @uses self::VALUE_NIEPOTWIERDZONA
     * @uses self::VALUE_POTWIERDZONA
     * @uses self::VALUE_NOWA
     * @uses self::VALUE_BRAK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NIEPOTWIERDZONA,
            self::VALUE_POTWIERDZONA,
            self::VALUE_NOWA,
            self::VALUE_BRAK,
        ];
    }
}
