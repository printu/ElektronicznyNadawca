<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for obszarType EnumType
 * @subpackage Enumerations
 */
class ObszarType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MIASTO'
     * @return string 'MIASTO'
     */
    public const VALUE_MIASTO = 'MIASTO';
    /**
     * Constant for value 'KRAJ'
     * @return string 'KRAJ'
     */
    public const VALUE_KRAJ = 'KRAJ';

    /**
     * Return allowed values
     * @uses self::VALUE_MIASTO
     * @uses self::VALUE_KRAJ
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MIASTO,
            self::VALUE_KRAJ,
        ];
    }
}
