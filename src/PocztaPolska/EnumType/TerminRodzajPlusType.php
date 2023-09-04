<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for terminRodzajPlusType EnumType
 * @subpackage Enumerations
 */
class TerminRodzajPlusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PORANEK'
     * @return string 'PORANEK'
     */
    const VALUE_PORANEK = 'PORANEK';
    /**
     * Constant for value 'POLUDNIE'
     * @return string 'POLUDNIE'
     */
    const VALUE_POLUDNIE = 'POLUDNIE';
    /**
     * Constant for value 'STANDARD'
     * @return string 'STANDARD'
     */
    const VALUE_STANDARD = 'STANDARD';
    /**
     * Return allowed values
     * @uses self::VALUE_PORANEK
     * @uses self::VALUE_POLUDNIE
     * @uses self::VALUE_STANDARD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PORANEK,
            self::VALUE_POLUDNIE,
            self::VALUE_STANDARD,
        ];
    }
}
