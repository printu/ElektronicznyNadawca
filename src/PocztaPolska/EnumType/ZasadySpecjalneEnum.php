<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for zasadySpecjalneEnum EnumType
 * @subpackage Enumerations
 */
class ZasadySpecjalneEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ADMINISTRACYJNA'
     * @return string 'ADMINISTRACYJNA'
     */
    public const VALUE_ADMINISTRACYJNA = 'ADMINISTRACYJNA';
    /**
     * Constant for value 'PODATKOWA'
     * @return string 'PODATKOWA'
     */
    public const VALUE_PODATKOWA = 'PODATKOWA';
    /**
     * Constant for value 'SADOWA_CYWILNA'
     * @return string 'SADOWA_CYWILNA'
     */
    public const VALUE_SADOWA_CYWILNA = 'SADOWA_CYWILNA';
    /**
     * Constant for value 'SADOWA_KARNA'
     * @return string 'SADOWA_KARNA'
     */
    public const VALUE_SADOWA_KARNA = 'SADOWA_KARNA';

    /**
     * Return allowed values
     * @uses self::VALUE_ADMINISTRACYJNA
     * @uses self::VALUE_PODATKOWA
     * @uses self::VALUE_SADOWA_CYWILNA
     * @uses self::VALUE_SADOWA_KARNA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADMINISTRACYJNA,
            self::VALUE_PODATKOWA,
            self::VALUE_SADOWA_CYWILNA,
            self::VALUE_SADOWA_KARNA,
        ];
    }
}
