<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eZwrotPrzesylkiType EnumType
 * @subpackage Enumerations
 */
class EZwrotPrzesylkiType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ZWROTPACZKA48'
     * @return string 'ZWROTPACZKA48'
     */
    const VALUE_ZWROTPACZKA_48 = 'ZWROTPACZKA48';
    /**
     * Constant for value 'ZWROTKURIEREKSPRES24'
     * @return string 'ZWROTKURIEREKSPRES24'
     */
    const VALUE_ZWROTKURIEREKSPRES_24 = 'ZWROTKURIEREKSPRES24';
    /**
     * Constant for value 'ZWROTPOCZTEX2021'
     * @return string 'ZWROTPOCZTEX2021'
     */
    const VALUE_ZWROTPOCZTEX_2021 = 'ZWROTPOCZTEX2021';
    /**
     * Return allowed values
     * @uses self::VALUE_ZWROTPACZKA_48
     * @uses self::VALUE_ZWROTKURIEREKSPRES_24
     * @uses self::VALUE_ZWROTPOCZTEX_2021
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ZWROTPACZKA_48,
            self::VALUE_ZWROTKURIEREKSPRES_24,
            self::VALUE_ZWROTPOCZTEX_2021,
        ];
    }
}
