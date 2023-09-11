<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for funkcjaPlacowkiPocztowejType EnumType
 * @subpackage Enumerations
 */
class FunkcjaPlacowkiPocztowejType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NADAWCZA'
     * @return string 'NADAWCZA'
     */
    public const VALUE_NADAWCZA = 'NADAWCZA';
    /**
     * Constant for value 'ODDAWCZA'
     * @return string 'ODDAWCZA'
     */
    public const VALUE_ODDAWCZA = 'ODDAWCZA';
    /**
     * Constant for value 'NADAWCZO-ODDAWCZA'
     * @return string 'NADAWCZO-ODDAWCZA'
     */
    public const VALUE_NADAWCZO_ODDAWCZA = 'NADAWCZO-ODDAWCZA';

    /**
     * Return allowed values
     * @uses self::VALUE_NADAWCZA
     * @uses self::VALUE_ODDAWCZA
     * @uses self::VALUE_NADAWCZO_ODDAWCZA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NADAWCZA,
            self::VALUE_ODDAWCZA,
            self::VALUE_NADAWCZO_ODDAWCZA,
        ];
    }
}
