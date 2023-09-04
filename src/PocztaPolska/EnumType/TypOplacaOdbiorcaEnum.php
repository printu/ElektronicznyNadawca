<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typOplacaOdbiorcaEnum EnumType
 * @subpackage Enumerations
 */
class TypOplacaOdbiorcaEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ADRESAT_INDYWIDUALNY'
     * @return string 'ADRESAT_INDYWIDUALNY'
     */
    const VALUE_ADRESAT_INDYWIDUALNY = 'ADRESAT_INDYWIDUALNY';
    /**
     * Constant for value 'ADRESAT_UMOWNY'
     * @return string 'ADRESAT_UMOWNY'
     */
    const VALUE_ADRESAT_UMOWNY = 'ADRESAT_UMOWNY';
    /**
     * Constant for value 'ODDZIAL'
     * @return string 'ODDZIAL'
     */
    const VALUE_ODDZIAL = 'ODDZIAL';
    /**
     * Return allowed values
     * @uses self::VALUE_ADRESAT_INDYWIDUALNY
     * @uses self::VALUE_ADRESAT_UMOWNY
     * @uses self::VALUE_ODDZIAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADRESAT_INDYWIDUALNY,
            self::VALUE_ADRESAT_UMOWNY,
            self::VALUE_ODDZIAL,
        ];
    }
}
