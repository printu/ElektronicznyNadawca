<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for miejscaPozostawieniaAwizoEnum EnumType
 * @subpackage Enumerations
 */
class MiejscaPozostawieniaAwizoEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SKRZYNKA_ODDAWCZA'
     * @return string 'SKRZYNKA_ODDAWCZA'
     */
    public const VALUE_SKRZYNKA_ODDAWCZA = 'SKRZYNKA_ODDAWCZA';
    /**
     * Constant for value 'DRZWI_MIESZKANIA'
     * @return string 'DRZWI_MIESZKANIA'
     */
    public const VALUE_DRZWI_MIESZKANIA = 'DRZWI_MIESZKANIA';
    /**
     * Constant for value 'DRZWI_INNEGO_POMIESZCZENIA'
     * @return string 'DRZWI_INNEGO_POMIESZCZENIA'
     */
    public const VALUE_DRZWI_INNEGO_POMIESZCZENIA = 'DRZWI_INNEGO_POMIESZCZENIA';
    /**
     * Constant for value 'PRZY_WEJSCIU_NA_POSESJE'
     * @return string 'PRZY_WEJSCIU_NA_POSESJE'
     */
    public const VALUE_PRZY_WEJSCIU_NA_POSESJE = 'PRZY_WEJSCIU_NA_POSESJE';
    /**
     * Constant for value 'SKRYTKA_POCZTOWA'
     * @return string 'SKRYTKA_POCZTOWA'
     */
    public const VALUE_SKRYTKA_POCZTOWA = 'SKRYTKA_POCZTOWA';
    /**
     * Constant for value 'INNE_WIDOCZNE_MIEJSCE'
     * @return string 'INNE_WIDOCZNE_MIEJSCE'
     */
    public const VALUE_INNE_WIDOCZNE_MIEJSCE = 'INNE_WIDOCZNE_MIEJSCE';
    /**
     * Constant for value 'DRZWI_BIURA'
     * @return string 'DRZWI_BIURA'
     */
    public const VALUE_DRZWI_BIURA = 'DRZWI_BIURA';

    /**
     * Return allowed values
     * @uses self::VALUE_SKRZYNKA_ODDAWCZA
     * @uses self::VALUE_DRZWI_MIESZKANIA
     * @uses self::VALUE_DRZWI_INNEGO_POMIESZCZENIA
     * @uses self::VALUE_PRZY_WEJSCIU_NA_POSESJE
     * @uses self::VALUE_SKRYTKA_POCZTOWA
     * @uses self::VALUE_INNE_WIDOCZNE_MIEJSCE
     * @uses self::VALUE_DRZWI_BIURA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SKRZYNKA_ODDAWCZA,
            self::VALUE_DRZWI_MIESZKANIA,
            self::VALUE_DRZWI_INNEGO_POMIESZCZENIA,
            self::VALUE_PRZY_WEJSCIU_NA_POSESJE,
            self::VALUE_SKRYTKA_POCZTOWA,
            self::VALUE_INNE_WIDOCZNE_MIEJSCE,
            self::VALUE_DRZWI_BIURA,
        ];
    }
}
