<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for miejscePozostawieniaZawiadomieniaODoreczeniuEnum EnumType
 * @subpackage Enumerations
 */
class MiejscePozostawieniaZawiadomieniaODoreczeniuEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SKRZYNKA_ADRESATA'
     * @return string 'SKRZYNKA_ADRESATA'
     */
    const VALUE_SKRZYNKA_ADRESATA = 'SKRZYNKA_ADRESATA';
    /**
     * Constant for value 'DRZWI_MIESZKANIA'
     * @return string 'DRZWI_MIESZKANIA'
     */
    const VALUE_DRZWI_MIESZKANIA = 'DRZWI_MIESZKANIA';
    /**
     * Constant for value 'INNE_WIDOCZNE_MIEJSCE'
     * @return string 'INNE_WIDOCZNE_MIEJSCE'
     */
    const VALUE_INNE_WIDOCZNE_MIEJSCE = 'INNE_WIDOCZNE_MIEJSCE';
    /**
     * Constant for value 'SKRYTKA_POCZTOWA'
     * @return string 'SKRYTKA_POCZTOWA'
     */
    const VALUE_SKRYTKA_POCZTOWA = 'SKRYTKA_POCZTOWA';
    /**
     * Return allowed values
     * @uses self::VALUE_SKRZYNKA_ADRESATA
     * @uses self::VALUE_DRZWI_MIESZKANIA
     * @uses self::VALUE_INNE_WIDOCZNE_MIEJSCE
     * @uses self::VALUE_SKRYTKA_POCZTOWA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SKRZYNKA_ADRESATA,
            self::VALUE_DRZWI_MIESZKANIA,
            self::VALUE_INNE_WIDOCZNE_MIEJSCE,
            self::VALUE_SKRYTKA_POCZTOWA,
        ];
    }
}
