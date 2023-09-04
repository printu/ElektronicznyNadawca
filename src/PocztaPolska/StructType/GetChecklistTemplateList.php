<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getChecklistTemplateList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetChecklistTemplateList extends AbstractStructBase
{
    /**
     * The idChecklistTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $idChecklistTemplate = null;
    /**
     * Constructor method for getChecklistTemplateList
     * @uses GetChecklistTemplateList::setIdChecklistTemplate()
     * @param int[] $idChecklistTemplate
     */
    public function __construct(?array $idChecklistTemplate = null)
    {
        $this
            ->setIdChecklistTemplate($idChecklistTemplate);
    }
    /**
     * Get idChecklistTemplate value
     * @return int[]
     */
    public function getIdChecklistTemplate(): ?array
    {
        return $this->idChecklistTemplate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIdChecklistTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdChecklistTemplate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdChecklistTemplateForArrayConstraintFromSetIdChecklistTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getChecklistTemplateListIdChecklistTemplateItem) {
            // validation for constraint: itemType
            if (!(is_int($getChecklistTemplateListIdChecklistTemplateItem) || ctype_digit($getChecklistTemplateListIdChecklistTemplateItem))) {
                $invalidValues[] = is_object($getChecklistTemplateListIdChecklistTemplateItem) ? get_class($getChecklistTemplateListIdChecklistTemplateItem) : sprintf('%s(%s)', gettype($getChecklistTemplateListIdChecklistTemplateItem), var_export($getChecklistTemplateListIdChecklistTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The idChecklistTemplate property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set idChecklistTemplate value
     * @throws InvalidArgumentException
     * @param int[] $idChecklistTemplate
     * @return \PocztaPolska\StructType\GetChecklistTemplateList
     */
    public function setIdChecklistTemplate(?array $idChecklistTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($idChecklistTemplateArrayErrorMessage = self::validateIdChecklistTemplateForArrayConstraintFromSetIdChecklistTemplate($idChecklistTemplate))) {
            throw new InvalidArgumentException($idChecklistTemplateArrayErrorMessage, __LINE__);
        }
        $this->idChecklistTemplate = $idChecklistTemplate;
        
        return $this;
    }
    /**
     * Add item to idChecklistTemplate value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \PocztaPolska\StructType\GetChecklistTemplateList
     */
    public function addToIdChecklistTemplate(int $item): self
    {
        // validation for constraint: itemType
        if (!is_int($item)) {
            throw new InvalidArgumentException(sprintf('The idChecklistTemplate property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->idChecklistTemplate[] = $item;
        
        return $this;
    }
}
