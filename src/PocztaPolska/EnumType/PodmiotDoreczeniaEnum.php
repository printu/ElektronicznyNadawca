<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for podmiotDoreczeniaEnum EnumType
 * @subpackage Enumerations
 */
class PodmiotDoreczeniaEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ADRESAT'
     * @return string 'ADRESAT'
     */
    const VALUE_ADRESAT = 'ADRESAT';
    /**
     * Constant for value 'PELNOLETNI_DOMOWNIK'
     * @return string 'PELNOLETNI_DOMOWNIK'
     */
    const VALUE_PELNOLETNI_DOMOWNIK = 'PELNOLETNI_DOMOWNIK';
    /**
     * Constant for value 'SASIAD'
     * @return string 'SASIAD'
     */
    const VALUE_SASIAD = 'SASIAD';
    /**
     * Constant for value 'DOZORCA_DOMU'
     * @return string 'DOZORCA_DOMU'
     */
    const VALUE_DOZORCA_DOMU = 'DOZORCA_DOMU';
    /**
     * Constant for value 'SOLTYS'
     * @return string 'SOLTYS'
     */
    const VALUE_SOLTYS = 'SOLTYS';
    /**
     * Constant for value 'ADMINISTRACJA_DOMU'
     * @return string 'ADMINISTRACJA_DOMU'
     */
    const VALUE_ADMINISTRACJA_DOMU = 'ADMINISTRACJA_DOMU';
    /**
     * Constant for value 'UPOWAZNIONY_PRACOWNIK'
     * @return string 'UPOWAZNIONY_PRACOWNIK'
     */
    const VALUE_UPOWAZNIONY_PRACOWNIK = 'UPOWAZNIONY_PRACOWNIK';
    /**
     * Constant for value 'PELNOMOCNIK_POCZTOWY'
     * @return string 'PELNOMOCNIK_POCZTOWY'
     */
    const VALUE_PELNOMOCNIK_POCZTOWY = 'PELNOMOCNIK_POCZTOWY';
    /**
     * Constant for value 'PRZEDSTAWICIEL_USTAWOWY'
     * @return string 'PRZEDSTAWICIEL_USTAWOWY'
     */
    const VALUE_PRZEDSTAWICIEL_USTAWOWY = 'PRZEDSTAWICIEL_USTAWOWY';
    /**
     * Constant for value 'PELNOMOCNIK_ADRESATA'
     * @return string 'PELNOMOCNIK_ADRESATA'
     */
    const VALUE_PELNOMOCNIK_ADRESATA = 'PELNOMOCNIK_ADRESATA';
    /**
     * Constant for value 'OSOBA_UPRAWNIONA_DO_REPREZENTACJI'
     * @return string 'OSOBA_UPRAWNIONA_DO_REPREZENTACJI'
     */
    const VALUE_OSOBA_UPRAWNIONA_DO_REPREZENTACJI = 'OSOBA_UPRAWNIONA_DO_REPREZENTACJI';
    /**
     * Constant for value 'SKRZYNKA_ODDAWCZA'
     * @return string 'SKRZYNKA_ODDAWCZA'
     */
    const VALUE_SKRZYNKA_ODDAWCZA = 'SKRZYNKA_ODDAWCZA';
    /**
     * Constant for value 'ADRESAT_KTORY_NIE_MOGL'
     * @return string 'ADRESAT_KTORY_NIE_MOGL'
     */
    const VALUE_ADRESAT_KTORY_NIE_MOGL = 'ADRESAT_KTORY_NIE_MOGL';
    /**
     * Constant for value 'OSOBA_UPRAWNIONA_DO_ODBIORU'
     * @return string 'OSOBA_UPRAWNIONA_DO_ODBIORU'
     */
    const VALUE_OSOBA_UPRAWNIONA_DO_ODBIORU = 'OSOBA_UPRAWNIONA_DO_ODBIORU';
    /**
     * Constant for value 'DOROSLY_DOMOWNIK'
     * @return string 'DOROSLY_DOMOWNIK'
     */
    const VALUE_DOROSLY_DOMOWNIK = 'DOROSLY_DOMOWNIK';
    /**
     * Constant for value 'OSOBA_UPOWAZNIONA_DO_ODB_KORESP'
     * @return string 'OSOBA_UPOWAZNIONA_DO_ODB_KORESP'
     */
    const VALUE_OSOBA_UPOWAZNIONA_DO_ODB_KORESP = 'OSOBA_UPOWAZNIONA_DO_ODB_KORESP';
    /**
     * Constant for value 'KIEROWNIK_JEDNOSTKI_LUB_UPOWAZNIONY'
     * @return string 'KIEROWNIK_JEDNOSTKI_LUB_UPOWAZNIONY'
     */
    const VALUE_KIEROWNIK_JEDNOSTKI_LUB_UPOWAZNIONY = 'KIEROWNIK_JEDNOSTKI_LUB_UPOWAZNIONY';
    /**
     * Constant for value 'PRZEDSTAWICIEL_ADRESATA'
     * @return string 'PRZEDSTAWICIEL_ADRESATA'
     */
    const VALUE_PRZEDSTAWICIEL_ADRESATA = 'PRZEDSTAWICIEL_ADRESATA';
    /**
     * Constant for value 'OSOBA_UPOWAZNIONA_DO_REPREZENT_ADRESATA'
     * @return string 'OSOBA_UPOWAZNIONA_DO_REPREZENT_ADRESATA'
     */
    const VALUE_OSOBA_UPOWAZNIONA_DO_REPREZENT_ADRESATA = 'OSOBA_UPOWAZNIONA_DO_REPREZENT_ADRESATA';
    /**
     * Constant for value 'OSOBA_UPOWAZNIONA_PRZEZ_PRACODAWCE'
     * @return string 'OSOBA_UPOWAZNIONA_PRZEZ_PRACODAWCE'
     */
    const VALUE_OSOBA_UPOWAZNIONA_PRZEZ_PRACODAWCE = 'OSOBA_UPOWAZNIONA_PRZEZ_PRACODAWCE';
    /**
     * Constant for value 'PRZELOZONY_ABW'
     * @return string 'PRZELOZONY_ABW'
     */
    const VALUE_PRZELOZONY_ABW = 'PRZELOZONY_ABW';
    /**
     * Constant for value 'PRZELOZONY_AW'
     * @return string 'PRZELOZONY_AW'
     */
    const VALUE_PRZELOZONY_AW = 'PRZELOZONY_AW';
    /**
     * Constant for value 'PRZELOZONY_CBA'
     * @return string 'PRZELOZONY_CBA'
     */
    const VALUE_PRZELOZONY_CBA = 'PRZELOZONY_CBA';
    /**
     * Constant for value 'PRZELOZONY_POLICJI'
     * @return string 'PRZELOZONY_POLICJI'
     */
    const VALUE_PRZELOZONY_POLICJI = 'PRZELOZONY_POLICJI';
    /**
     * Constant for value 'PRZELOZONY_SC'
     * @return string 'PRZELOZONY_SC'
     */
    const VALUE_PRZELOZONY_SC = 'PRZELOZONY_SC';
    /**
     * Constant for value 'PRZELOZONY_SG'
     * @return string 'PRZELOZONY_SG'
     */
    const VALUE_PRZELOZONY_SG = 'PRZELOZONY_SG';
    /**
     * Constant for value 'PRZELOZONY_SKW'
     * @return string 'PRZELOZONY_SKW'
     */
    const VALUE_PRZELOZONY_SKW = 'PRZELOZONY_SKW';
    /**
     * Constant for value 'PRZELOZONY_SW'
     * @return string 'PRZELOZONY_SW'
     */
    const VALUE_PRZELOZONY_SW = 'PRZELOZONY_SW';
    /**
     * Constant for value 'PRZELOZONY_SWW'
     * @return string 'PRZELOZONY_SWW'
     */
    const VALUE_PRZELOZONY_SWW = 'PRZELOZONY_SWW';
    /**
     * Constant for value 'PRZELOZONY_ZOLNIERZA'
     * @return string 'PRZELOZONY_ZOLNIERZA'
     */
    const VALUE_PRZELOZONY_ZOLNIERZA = 'PRZELOZONY_ZOLNIERZA';
    /**
     * Constant for value 'SKRYTKA_POCZTOWA'
     * @return string 'SKRYTKA_POCZTOWA'
     */
    const VALUE_SKRYTKA_POCZTOWA = 'SKRYTKA_POCZTOWA';
    /**
     * Constant for value 'PROKURENT'
     * @return string 'PROKURENT'
     */
    const VALUE_PROKURENT = 'PROKURENT';
    /**
     * Constant for value 'ZARZADCA_DOMU'
     * @return string 'ZARZADCA_DOMU'
     */
    const VALUE_ZARZADCA_DOMU = 'ZARZADCA_DOMU';
    /**
     * Constant for value 'OSOBA_UPOWAZNIONA_PRZEZ_KIER_WIEZIENIA'
     * @return string 'OSOBA_UPOWAZNIONA_PRZEZ_KIER_WIEZIENIA'
     */
    const VALUE_OSOBA_UPOWAZNIONA_PRZEZ_KIER_WIEZIENIA = 'OSOBA_UPOWAZNIONA_PRZEZ_KIER_WIEZIENIA';
    /**
     * Return allowed values
     * @uses self::VALUE_ADRESAT
     * @uses self::VALUE_PELNOLETNI_DOMOWNIK
     * @uses self::VALUE_SASIAD
     * @uses self::VALUE_DOZORCA_DOMU
     * @uses self::VALUE_SOLTYS
     * @uses self::VALUE_ADMINISTRACJA_DOMU
     * @uses self::VALUE_UPOWAZNIONY_PRACOWNIK
     * @uses self::VALUE_PELNOMOCNIK_POCZTOWY
     * @uses self::VALUE_PRZEDSTAWICIEL_USTAWOWY
     * @uses self::VALUE_PELNOMOCNIK_ADRESATA
     * @uses self::VALUE_OSOBA_UPRAWNIONA_DO_REPREZENTACJI
     * @uses self::VALUE_SKRZYNKA_ODDAWCZA
     * @uses self::VALUE_ADRESAT_KTORY_NIE_MOGL
     * @uses self::VALUE_OSOBA_UPRAWNIONA_DO_ODBIORU
     * @uses self::VALUE_DOROSLY_DOMOWNIK
     * @uses self::VALUE_OSOBA_UPOWAZNIONA_DO_ODB_KORESP
     * @uses self::VALUE_KIEROWNIK_JEDNOSTKI_LUB_UPOWAZNIONY
     * @uses self::VALUE_PRZEDSTAWICIEL_ADRESATA
     * @uses self::VALUE_OSOBA_UPOWAZNIONA_DO_REPREZENT_ADRESATA
     * @uses self::VALUE_OSOBA_UPOWAZNIONA_PRZEZ_PRACODAWCE
     * @uses self::VALUE_PRZELOZONY_ABW
     * @uses self::VALUE_PRZELOZONY_AW
     * @uses self::VALUE_PRZELOZONY_CBA
     * @uses self::VALUE_PRZELOZONY_POLICJI
     * @uses self::VALUE_PRZELOZONY_SC
     * @uses self::VALUE_PRZELOZONY_SG
     * @uses self::VALUE_PRZELOZONY_SKW
     * @uses self::VALUE_PRZELOZONY_SW
     * @uses self::VALUE_PRZELOZONY_SWW
     * @uses self::VALUE_PRZELOZONY_ZOLNIERZA
     * @uses self::VALUE_SKRYTKA_POCZTOWA
     * @uses self::VALUE_PROKURENT
     * @uses self::VALUE_ZARZADCA_DOMU
     * @uses self::VALUE_OSOBA_UPOWAZNIONA_PRZEZ_KIER_WIEZIENIA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADRESAT,
            self::VALUE_PELNOLETNI_DOMOWNIK,
            self::VALUE_SASIAD,
            self::VALUE_DOZORCA_DOMU,
            self::VALUE_SOLTYS,
            self::VALUE_ADMINISTRACJA_DOMU,
            self::VALUE_UPOWAZNIONY_PRACOWNIK,
            self::VALUE_PELNOMOCNIK_POCZTOWY,
            self::VALUE_PRZEDSTAWICIEL_USTAWOWY,
            self::VALUE_PELNOMOCNIK_ADRESATA,
            self::VALUE_OSOBA_UPRAWNIONA_DO_REPREZENTACJI,
            self::VALUE_SKRZYNKA_ODDAWCZA,
            self::VALUE_ADRESAT_KTORY_NIE_MOGL,
            self::VALUE_OSOBA_UPRAWNIONA_DO_ODBIORU,
            self::VALUE_DOROSLY_DOMOWNIK,
            self::VALUE_OSOBA_UPOWAZNIONA_DO_ODB_KORESP,
            self::VALUE_KIEROWNIK_JEDNOSTKI_LUB_UPOWAZNIONY,
            self::VALUE_PRZEDSTAWICIEL_ADRESATA,
            self::VALUE_OSOBA_UPOWAZNIONA_DO_REPREZENT_ADRESATA,
            self::VALUE_OSOBA_UPOWAZNIONA_PRZEZ_PRACODAWCE,
            self::VALUE_PRZELOZONY_ABW,
            self::VALUE_PRZELOZONY_AW,
            self::VALUE_PRZELOZONY_CBA,
            self::VALUE_PRZELOZONY_POLICJI,
            self::VALUE_PRZELOZONY_SC,
            self::VALUE_PRZELOZONY_SG,
            self::VALUE_PRZELOZONY_SKW,
            self::VALUE_PRZELOZONY_SW,
            self::VALUE_PRZELOZONY_SWW,
            self::VALUE_PRZELOZONY_ZOLNIERZA,
            self::VALUE_SKRYTKA_POCZTOWA,
            self::VALUE_PROKURENT,
            self::VALUE_ZARZADCA_DOMU,
            self::VALUE_OSOBA_UPOWAZNIONA_PRZEZ_KIER_WIEZIENIA,
        ];
    }
}
