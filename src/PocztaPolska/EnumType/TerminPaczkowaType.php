<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for terminPaczkowaType EnumType
 * @subpackage Enumerations
 */
class TerminPaczkowaType extends AbstractStructEnumBase
{
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
     * Constant for value 'PACZKA_EKSTRA_24'
     * @return string 'PACZKA_EKSTRA_24'
     */
    public const VALUE_PACZKA_EKSTRA_24 = 'PACZKA_EKSTRA_24';

    /**
     * Return allowed values
     * @uses self::VALUE_PACZKA_24
     * @uses self::VALUE_PACZKA_48
     * @uses self::VALUE_PACZKA_EKSTRA_24
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PACZKA_24,
            self::VALUE_PACZKA_48,
            self::VALUE_PACZKA_EKSTRA_24,
        ];
    }
}
