<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typPlacowkiPocztowejEnum EnumType
 * @subpackage Enumerations
 */
class TypPlacowkiPocztowejEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PUNKT'
     * @return string 'PUNKT'
     */
    public const VALUE_PUNKT = 'PUNKT';
    /**
     * Constant for value 'AUTOMAT'
     * @return string 'AUTOMAT'
     */
    public const VALUE_AUTOMAT = 'AUTOMAT';

    /**
     * Return allowed values
     * @uses self::VALUE_PUNKT
     * @uses self::VALUE_AUTOMAT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PUNKT,
            self::VALUE_AUTOMAT,
        ];
    }
}
