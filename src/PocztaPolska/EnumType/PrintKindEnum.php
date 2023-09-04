<?php

declare(strict_types=1);

namespace PocztaPolska\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PrintKindEnum EnumType
 * @subpackage Enumerations
 */
class PrintKindEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ADDRESS_LABEL'
     * @return string 'ADDRESS_LABEL'
     */
    const VALUE_ADDRESS_LABEL = 'ADDRESS_LABEL';
    /**
     * Constant for value 'ADDRESS_LABEL_BY_GUID'
     * @return string 'ADDRESS_LABEL_BY_GUID'
     */
    const VALUE_ADDRESS_LABEL_BY_GUID = 'ADDRESS_LABEL_BY_GUID';
    /**
     * Constant for value 'CUSTOMS_DECLARATION'
     * @return string 'CUSTOMS_DECLARATION'
     */
    const VALUE_CUSTOMS_DECLARATION = 'CUSTOMS_DECLARATION';
    /**
     * Constant for value 'ADDRESS_LABEL_FOR_RETURN_DOCUMENTS'
     * @return string 'ADDRESS_LABEL_FOR_RETURN_DOCUMENTS'
     */
    const VALUE_ADDRESS_LABEL_FOR_RETURN_DOCUMENTS = 'ADDRESS_LABEL_FOR_RETURN_DOCUMENTS';
    /**
     * Constant for value 'CHECKLIST'
     * @return string 'CHECKLIST'
     */
    const VALUE_CHECKLIST = 'CHECKLIST';
    /**
     * Constant for value 'COLLECT_ON_DELIVERY_FORM'
     * @return string 'COLLECT_ON_DELIVERY_FORM'
     */
    const VALUE_COLLECT_ON_DELIVERY_FORM = 'COLLECT_ON_DELIVERY_FORM';
    /**
     * Constant for value 'WAYBILL'
     * @return string 'WAYBILL'
     */
    const VALUE_WAYBILL = 'WAYBILL';
    /**
     * Constant for value 'REPORT'
     * @return string 'REPORT'
     */
    const VALUE_REPORT = 'REPORT';
    /**
     * Constant for value 'ADDRESS_LABEL_FOR_ERETURN'
     * @return string 'ADDRESS_LABEL_FOR_ERETURN'
     */
    const VALUE_ADDRESS_LABEL_FOR_ERETURN = 'ADDRESS_LABEL_FOR_ERETURN';
    /**
     * Constant for value 'ADDRESS_LABEL_FOR_FOREGIN_RETURN'
     * @return string 'ADDRESS_LABEL_FOR_FOREGIN_RETURN'
     */
    const VALUE_ADDRESS_LABEL_FOR_FOREGIN_RETURN = 'ADDRESS_LABEL_FOR_FOREGIN_RETURN';
    /**
     * Return allowed values
     * @uses self::VALUE_ADDRESS_LABEL
     * @uses self::VALUE_ADDRESS_LABEL_BY_GUID
     * @uses self::VALUE_CUSTOMS_DECLARATION
     * @uses self::VALUE_ADDRESS_LABEL_FOR_RETURN_DOCUMENTS
     * @uses self::VALUE_CHECKLIST
     * @uses self::VALUE_COLLECT_ON_DELIVERY_FORM
     * @uses self::VALUE_WAYBILL
     * @uses self::VALUE_REPORT
     * @uses self::VALUE_ADDRESS_LABEL_FOR_ERETURN
     * @uses self::VALUE_ADDRESS_LABEL_FOR_FOREGIN_RETURN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADDRESS_LABEL,
            self::VALUE_ADDRESS_LABEL_BY_GUID,
            self::VALUE_CUSTOMS_DECLARATION,
            self::VALUE_ADDRESS_LABEL_FOR_RETURN_DOCUMENTS,
            self::VALUE_CHECKLIST,
            self::VALUE_COLLECT_ON_DELIVERY_FORM,
            self::VALUE_WAYBILL,
            self::VALUE_REPORT,
            self::VALUE_ADDRESS_LABEL_FOR_ERETURN,
            self::VALUE_ADDRESS_LABEL_FOR_FOREGIN_RETURN,
        ];
    }
}
