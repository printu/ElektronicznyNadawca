<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ZawartoscPrzesylkiZagranicznejEnum EnumType
 * @subpackage Enumerations
 */
class ZawartoscPrzesylkiZagranicznejEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SPRZEDAZ_TOWARU'
     * @return string 'SPRZEDAZ_TOWARU'
     */
    public const VALUE_SPRZEDAZ_TOWARU = 'SPRZEDAZ_TOWARU';
    /**
     * Constant for value 'ZWROT_TOWARU'
     * @return string 'ZWROT_TOWARU'
     */
    public const VALUE_ZWROT_TOWARU = 'ZWROT_TOWARU';
    /**
     * Constant for value 'PREZENT'
     * @return string 'PREZENT'
     */
    public const VALUE_PREZENT = 'PREZENT';
    /**
     * Constant for value 'PROBKA_HANDLOWA'
     * @return string 'PROBKA_HANDLOWA'
     */
    public const VALUE_PROBKA_HANDLOWA = 'PROBKA_HANDLOWA';
    /**
     * Constant for value 'DOKUMENT'
     * @return string 'DOKUMENT'
     */
    public const VALUE_DOKUMENT = 'DOKUMENT';
    /**
     * Constant for value 'INNE'
     * @return string 'INNE'
     */
    public const VALUE_INNE = 'INNE';

    /**
     * Return allowed values
     * @uses self::VALUE_SPRZEDAZ_TOWARU
     * @uses self::VALUE_ZWROT_TOWARU
     * @uses self::VALUE_PREZENT
     * @uses self::VALUE_PROBKA_HANDLOWA
     * @uses self::VALUE_DOKUMENT
     * @uses self::VALUE_INNE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SPRZEDAZ_TOWARU,
            self::VALUE_ZWROT_TOWARU,
            self::VALUE_PREZENT,
            self::VALUE_PROBKA_HANDLOWA,
            self::VALUE_DOKUMENT,
            self::VALUE_INNE,
        ];
    }
}
