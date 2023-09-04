<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for zawartoscSpecjalnaEnum EnumType
 * @subpackage Enumerations
 */
class ZawartoscSpecjalnaEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OWADY'
     * @return string 'OWADY'
     */
    public const VALUE_OWADY = 'OWADY';
    /**
     * Constant for value 'PLYNY_LUB_GAZY'
     * @return string 'PLYNY_LUB_GAZY'
     */
    public const VALUE_PLYNY_LUB_GAZY = 'PLYNY_LUB_GAZY';
    /**
     * Constant for value 'PRZEDMIOTY_LATWO_TLUKACE_SIE_I_SZKLO'
     * @return string 'PRZEDMIOTY_LATWO_TLUKACE_SIE_I_SZKLO'
     */
    public const VALUE_PRZEDMIOTY_LATWO_TLUKACE_SIE_I_SZKLO = 'PRZEDMIOTY_LATWO_TLUKACE_SIE_I_SZKLO';
    /**
     * Constant for value 'RZECZY_LAMLIWE_I_KRUCHE'
     * @return string 'RZECZY_LAMLIWE_I_KRUCHE'
     */
    public const VALUE_RZECZY_LAMLIWE_I_KRUCHE = 'RZECZY_LAMLIWE_I_KRUCHE';
    /**
     * Constant for value 'ZYWE_PTAKI'
     * @return string 'ZYWE_PTAKI'
     */
    public const VALUE_ZYWE_PTAKI = 'ZYWE_PTAKI';
    /**
     * Constant for value 'ZYWE_ROSLINY'
     * @return string 'ZYWE_ROSLINY'
     */
    public const VALUE_ZYWE_ROSLINY = 'ZYWE_ROSLINY';

    /**
     * Return allowed values
     * @uses self::VALUE_OWADY
     * @uses self::VALUE_PLYNY_LUB_GAZY
     * @uses self::VALUE_PRZEDMIOTY_LATWO_TLUKACE_SIE_I_SZKLO
     * @uses self::VALUE_RZECZY_LAMLIWE_I_KRUCHE
     * @uses self::VALUE_ZYWE_PTAKI
     * @uses self::VALUE_ZYWE_ROSLINY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OWADY,
            self::VALUE_PLYNY_LUB_GAZY,
            self::VALUE_PRZEDMIOTY_LATWO_TLUKACE_SIE_I_SZKLO,
            self::VALUE_RZECZY_LAMLIWE_I_KRUCHE,
            self::VALUE_ZYWE_PTAKI,
            self::VALUE_ZYWE_ROSLINY,
        ];
    }
}
