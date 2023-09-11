<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for przyczynaZwrotuEnum EnumType
 * @subpackage Enumerations
 */
class PrzyczynaZwrotuEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ODMOWA'
     * @return string 'ODMOWA'
     */
    public const VALUE_ODMOWA = 'ODMOWA';
    /**
     * Constant for value 'ADRESAT_ZMARL'
     * @return string 'ADRESAT_ZMARL'
     */
    public const VALUE_ADRESAT_ZMARL = 'ADRESAT_ZMARL';
    /**
     * Constant for value 'ADRESAT_NIEZNANY'
     * @return string 'ADRESAT_NIEZNANY'
     */
    public const VALUE_ADRESAT_NIEZNANY = 'ADRESAT_NIEZNANY';
    /**
     * Constant for value 'ADRESAT_WYPROWADZIL_SIE'
     * @return string 'ADRESAT_WYPROWADZIL_SIE'
     */
    public const VALUE_ADRESAT_WYPROWADZIL_SIE = 'ADRESAT_WYPROWADZIL_SIE';
    /**
     * Constant for value 'ADRESAT_NIE_PODJAL'
     * @return string 'ADRESAT_NIE_PODJAL'
     */
    public const VALUE_ADRESAT_NIE_PODJAL = 'ADRESAT_NIE_PODJAL';
    /**
     * Constant for value 'INNA'
     * @return string 'INNA'
     */
    public const VALUE_INNA = 'INNA';
    /**
     * Constant for value 'ADRES_NIEPELNY'
     * @return string 'ADRES_NIEPELNY'
     */
    public const VALUE_ADRES_NIEPELNY = 'ADRES_NIEPELNY';
    /**
     * Constant for value 'ADRES_BLEDNY'
     * @return string 'ADRES_BLEDNY'
     */
    public const VALUE_ADRES_BLEDNY = 'ADRES_BLEDNY';
    /**
     * Constant for value 'ADRES_NIEZGODNY'
     * @return string 'ADRES_NIEZGODNY'
     */
    public const VALUE_ADRES_NIEZGODNY = 'ADRES_NIEZGODNY';
    /**
     * Constant for value 'ADRES_NIEZNALEZIONY'
     * @return string 'ADRES_NIEZNALEZIONY'
     */
    public const VALUE_ADRES_NIEZNALEZIONY = 'ADRES_NIEZNALEZIONY';
    /**
     * Constant for value 'ADRESAT_NIE_ZASTANO'
     * @return string 'ADRESAT_NIE_ZASTANO'
     */
    public const VALUE_ADRESAT_NIE_ZASTANO = 'ADRESAT_NIE_ZASTANO';
    /**
     * Constant for value 'ADRESAT_NIE_ZGLASZA_SIE'
     * @return string 'ADRESAT_NIE_ZGLASZA_SIE'
     */
    public const VALUE_ADRESAT_NIE_ZGLASZA_SIE = 'ADRESAT_NIE_ZGLASZA_SIE';
    /**
     * Constant for value 'ADRESAT_NIEOBECNY'
     * @return string 'ADRESAT_NIEOBECNY'
     */
    public const VALUE_ADRESAT_NIEOBECNY = 'ADRESAT_NIEOBECNY';
    /**
     * Constant for value 'ADRESAT_NIEODNALEZIONY'
     * @return string 'ADRESAT_NIEODNALEZIONY'
     */
    public const VALUE_ADRESAT_NIEODNALEZIONY = 'ADRESAT_NIEODNALEZIONY';
    /**
     * Constant for value 'ADRESAT_STRAJKUJE'
     * @return string 'ADRESAT_STRAJKUJE'
     */
    public const VALUE_ADRESAT_STRAJKUJE = 'ADRESAT_STRAJKUJE';
    /**
     * Constant for value 'DO_NADAWCY_NA_POZNIEJ'
     * @return string 'DO_NADAWCY_NA_POZNIEJ'
     */
    public const VALUE_DO_NADAWCY_NA_POZNIEJ = 'DO_NADAWCY_NA_POZNIEJ';
    /**
     * Constant for value 'MYLNE_SKIEROWANIE'
     * @return string 'MYLNE_SKIEROWANIE'
     */
    public const VALUE_MYLNE_SKIEROWANIE = 'MYLNE_SKIEROWANIE';
    /**
     * Constant for value 'NADAWCA_ODMOWIL'
     * @return string 'NADAWCA_ODMOWIL'
     */
    public const VALUE_NADAWCA_ODMOWIL = 'NADAWCA_ODMOWIL';
    /**
     * Constant for value 'NIE_PODJETO'
     * @return string 'NIE_PODJETO'
     */
    public const VALUE_NIE_PODJETO = 'NIE_PODJETO';
    /**
     * Constant for value 'NIEZGODNE_WYMAGANIA'
     * @return string 'NIEZGODNE_WYMAGANIA'
     */
    public const VALUE_NIEZGODNE_WYMAGANIA = 'NIEZGODNE_WYMAGANIA';
    /**
     * Constant for value 'ODMOWA_USZKODZENIA'
     * @return string 'ODMOWA_USZKODZENIA'
     */
    public const VALUE_ODMOWA_USZKODZENIA = 'ODMOWA_USZKODZENIA';
    /**
     * Constant for value 'POBRANIE_NIEZGODNE'
     * @return string 'POBRANIE_NIEZGODNE'
     */
    public const VALUE_POBRANIE_NIEZGODNE = 'POBRANIE_NIEZGODNE';
    /**
     * Constant for value 'USZKODZONA'
     * @return string 'USZKODZONA'
     */
    public const VALUE_USZKODZONA = 'USZKODZONA';
    /**
     * Constant for value 'ZAMKNIETA_SIEDZIBA'
     * @return string 'ZAMKNIETA_SIEDZIBA'
     */
    public const VALUE_ZAMKNIETA_SIEDZIBA = 'ZAMKNIETA_SIEDZIBA';

    /**
     * Return allowed values
     * @uses self::VALUE_ODMOWA
     * @uses self::VALUE_ADRESAT_ZMARL
     * @uses self::VALUE_ADRESAT_NIEZNANY
     * @uses self::VALUE_ADRESAT_WYPROWADZIL_SIE
     * @uses self::VALUE_ADRESAT_NIE_PODJAL
     * @uses self::VALUE_INNA
     * @uses self::VALUE_ADRES_NIEPELNY
     * @uses self::VALUE_ADRES_BLEDNY
     * @uses self::VALUE_ADRES_NIEZGODNY
     * @uses self::VALUE_ADRES_NIEZNALEZIONY
     * @uses self::VALUE_ADRESAT_NIE_ZASTANO
     * @uses self::VALUE_ADRESAT_NIE_ZGLASZA_SIE
     * @uses self::VALUE_ADRESAT_NIEOBECNY
     * @uses self::VALUE_ADRESAT_NIEODNALEZIONY
     * @uses self::VALUE_ADRESAT_STRAJKUJE
     * @uses self::VALUE_DO_NADAWCY_NA_POZNIEJ
     * @uses self::VALUE_MYLNE_SKIEROWANIE
     * @uses self::VALUE_NADAWCA_ODMOWIL
     * @uses self::VALUE_NIE_PODJETO
     * @uses self::VALUE_NIEZGODNE_WYMAGANIA
     * @uses self::VALUE_ODMOWA_USZKODZENIA
     * @uses self::VALUE_POBRANIE_NIEZGODNE
     * @uses self::VALUE_USZKODZONA
     * @uses self::VALUE_ZAMKNIETA_SIEDZIBA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ODMOWA,
            self::VALUE_ADRESAT_ZMARL,
            self::VALUE_ADRESAT_NIEZNANY,
            self::VALUE_ADRESAT_WYPROWADZIL_SIE,
            self::VALUE_ADRESAT_NIE_PODJAL,
            self::VALUE_INNA,
            self::VALUE_ADRES_NIEPELNY,
            self::VALUE_ADRES_BLEDNY,
            self::VALUE_ADRES_NIEZGODNY,
            self::VALUE_ADRES_NIEZNALEZIONY,
            self::VALUE_ADRESAT_NIE_ZASTANO,
            self::VALUE_ADRESAT_NIE_ZGLASZA_SIE,
            self::VALUE_ADRESAT_NIEOBECNY,
            self::VALUE_ADRESAT_NIEODNALEZIONY,
            self::VALUE_ADRESAT_STRAJKUJE,
            self::VALUE_DO_NADAWCY_NA_POZNIEJ,
            self::VALUE_MYLNE_SKIEROWANIE,
            self::VALUE_NADAWCA_ODMOWIL,
            self::VALUE_NIE_PODJETO,
            self::VALUE_NIEZGODNE_WYMAGANIA,
            self::VALUE_ODMOWA_USZKODZENIA,
            self::VALUE_POBRANIE_NIEZGODNE,
            self::VALUE_USZKODZONA,
            self::VALUE_ZAMKNIETA_SIEDZIBA,
        ];
    }
}
