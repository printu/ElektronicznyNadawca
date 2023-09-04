<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eZwrotTypZgodyType EnumType
 * @subpackage Enumerations
 */
class EZwrotTypZgodyType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ZGODA_BRAK'
     * @return string 'ZGODA_BRAK'
     */
    const VALUE_ZGODA_BRAK = 'ZGODA_BRAK';
    /**
     * Constant for value 'ZGODA_AUTOMATYCZNA'
     * @return string 'ZGODA_AUTOMATYCZNA'
     */
    const VALUE_ZGODA_AUTOMATYCZNA = 'ZGODA_AUTOMATYCZNA';
    /**
     * Constant for value 'ZGODA_INDYWIDUALNA'
     * @return string 'ZGODA_INDYWIDUALNA'
     */
    const VALUE_ZGODA_INDYWIDUALNA = 'ZGODA_INDYWIDUALNA';
    /**
     * Return allowed values
     * @uses self::VALUE_ZGODA_BRAK
     * @uses self::VALUE_ZGODA_AUTOMATYCZNA
     * @uses self::VALUE_ZGODA_INDYWIDUALNA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ZGODA_BRAK,
            self::VALUE_ZGODA_AUTOMATYCZNA,
            self::VALUE_ZGODA_INDYWIDUALNA,
        ];
    }
}
