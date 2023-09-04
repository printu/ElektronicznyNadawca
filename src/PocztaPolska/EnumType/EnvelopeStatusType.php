<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for envelopeStatusType EnumType
 * @subpackage Enumerations
 */
class EnvelopeStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'WYSLANY'
     * @return string 'WYSLANY'
     */
    const VALUE_WYSLANY = 'WYSLANY';
    /**
     * Constant for value 'DOSTARCZONY'
     * @return string 'DOSTARCZONY'
     */
    const VALUE_DOSTARCZONY = 'DOSTARCZONY';
    /**
     * Constant for value 'PRZYJETY'
     * @return string 'PRZYJETY'
     */
    const VALUE_PRZYJETY = 'PRZYJETY';
    /**
     * Constant for value 'WALIDOWANY'
     * @return string 'WALIDOWANY'
     */
    const VALUE_WALIDOWANY = 'WALIDOWANY';
    /**
     * Constant for value 'BLEDNY'
     * @return string 'BLEDNY'
     */
    const VALUE_BLEDNY = 'BLEDNY';
    /**
     * Return allowed values
     * @uses self::VALUE_WYSLANY
     * @uses self::VALUE_DOSTARCZONY
     * @uses self::VALUE_PRZYJETY
     * @uses self::VALUE_WALIDOWANY
     * @uses self::VALUE_BLEDNY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WYSLANY,
            self::VALUE_DOSTARCZONY,
            self::VALUE_PRZYJETY,
            self::VALUE_WALIDOWANY,
            self::VALUE_BLEDNY,
        ];
    }
}
