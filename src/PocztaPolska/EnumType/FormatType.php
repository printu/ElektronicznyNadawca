<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for formatType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Określa format przesyłki. Format S: Maksymalne wymiary koperty [mm]: 160 x 230 x 20. Maksymalna waga [g]: 500 Format M: Maksymalne wymiary koperty [mm]: 230 x 325 x 20. Maksymalna waga [g]: 1000 Format L: Maksymalna suma wymiarów
 * koperty [mm]: 900. Maksymalna długość najdłuższego boku [mm]: 600 Rulony Maksymalna waga [g]: 2000
 * @subpackage Enumerations
 */
class FormatType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    public const VALUE_S = 'S';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    public const VALUE_M = 'M';
    /**
     * Constant for value 'L'
     * @return string 'L'
     */
    public const VALUE_L = 'L';

    /**
     * Return allowed values
     * @uses self::VALUE_S
     * @uses self::VALUE_M
     * @uses self::VALUE_L
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_S,
            self::VALUE_M,
            self::VALUE_L,
        ];
    }
}
