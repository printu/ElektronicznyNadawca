<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for statusZgodyEZwrotNameType EnumType
 * @subpackage Enumerations
 */
class StatusZgodyEZwrotNameType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NOWY'
     * @return string 'NOWY'
     */
    public const VALUE_NOWY = 'NOWY';
    /**
     * Constant for value 'ZAAKCEPTOWANY'
     * @return string 'ZAAKCEPTOWANY'
     */
    public const VALUE_ZAAKCEPTOWANY = 'ZAAKCEPTOWANY';
    /**
     * Constant for value 'ODRZUCONY'
     * @return string 'ODRZUCONY'
     */
    public const VALUE_ODRZUCONY = 'ODRZUCONY';

    /**
     * Return allowed values
     * @uses self::VALUE_NOWY
     * @uses self::VALUE_ZAAKCEPTOWANY
     * @uses self::VALUE_ODRZUCONY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOWY,
            self::VALUE_ZAAKCEPTOWANY,
            self::VALUE_ODRZUCONY,
        ];
    }
}
