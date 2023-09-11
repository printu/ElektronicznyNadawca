<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for serwisPrzesylkaProceduralnaType EnumType
 * @subpackage Enumerations
 */
class SerwisPrzesylkaProceduralnaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PROCEDURALNA_STANDARD_DWA_STOPNIE'
     * @return string 'PROCEDURALNA_STANDARD_DWA_STOPNIE'
     */
    public const VALUE_PROCEDURALNA_STANDARD_DWA_STOPNIE = 'PROCEDURALNA_STANDARD_DWA_STOPNIE';
    /**
     * Constant for value 'PROCEDURALNA_VIP_DWA_STOPNIE'
     * @return string 'PROCEDURALNA_VIP_DWA_STOPNIE'
     */
    public const VALUE_PROCEDURALNA_VIP_DWA_STOPNIE = 'PROCEDURALNA_VIP_DWA_STOPNIE';
    /**
     * Constant for value 'PROCEDURALNA_STANDARD_TRZY_STOPNIE'
     * @return string 'PROCEDURALNA_STANDARD_TRZY_STOPNIE'
     */
    public const VALUE_PROCEDURALNA_STANDARD_TRZY_STOPNIE = 'PROCEDURALNA_STANDARD_TRZY_STOPNIE';
    /**
     * Constant for value 'PROCEDURALNA_VIP_TRZY_STOPNIE'
     * @return string 'PROCEDURALNA_VIP_TRZY_STOPNIE'
     */
    public const VALUE_PROCEDURALNA_VIP_TRZY_STOPNIE = 'PROCEDURALNA_VIP_TRZY_STOPNIE';

    /**
     * Return allowed values
     * @uses self::VALUE_PROCEDURALNA_STANDARD_DWA_STOPNIE
     * @uses self::VALUE_PROCEDURALNA_VIP_DWA_STOPNIE
     * @uses self::VALUE_PROCEDURALNA_STANDARD_TRZY_STOPNIE
     * @uses self::VALUE_PROCEDURALNA_VIP_TRZY_STOPNIE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PROCEDURALNA_STANDARD_DWA_STOPNIE,
            self::VALUE_PROCEDURALNA_VIP_DWA_STOPNIE,
            self::VALUE_PROCEDURALNA_STANDARD_TRZY_STOPNIE,
            self::VALUE_PROCEDURALNA_VIP_TRZY_STOPNIE,
        ];
    }
}
