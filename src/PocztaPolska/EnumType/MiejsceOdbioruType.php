<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for miejsceOdbioruType EnumType
 * @subpackage Enumerations
 */
class MiejsceOdbioruType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NADAWCA'
     * @return string 'NADAWCA'
     */
    public const VALUE_NADAWCA = 'NADAWCA';
    /**
     * Constant for value 'URZAD_NADANIA'
     * @return string 'URZAD_NADANIA'
     */
    public const VALUE_URZAD_NADANIA = 'URZAD_NADANIA';

    /**
     * Return allowed values
     * @uses self::VALUE_NADAWCA
     * @uses self::VALUE_URZAD_NADANIA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NADAWCA,
            self::VALUE_URZAD_NADANIA,
        ];
    }
}
