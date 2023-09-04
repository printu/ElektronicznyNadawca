<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DokumentTowarzyszacyRodzajEnum EnumType
 * @subpackage Enumerations
 */
class DokumentTowarzyszacyRodzajEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LICENCJA'
     * @return string 'LICENCJA'
     */
    const VALUE_LICENCJA = 'LICENCJA';
    /**
     * Constant for value 'CERTYFIKAT'
     * @return string 'CERTYFIKAT'
     */
    const VALUE_CERTYFIKAT = 'CERTYFIKAT';
    /**
     * Constant for value 'FAKTURA'
     * @return string 'FAKTURA'
     */
    const VALUE_FAKTURA = 'FAKTURA';
    /**
     * Return allowed values
     * @uses self::VALUE_LICENCJA
     * @uses self::VALUE_CERTYFIKAT
     * @uses self::VALUE_FAKTURA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LICENCJA,
            self::VALUE_CERTYFIKAT,
            self::VALUE_FAKTURA,
        ];
    }
}
