<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteChecklistTemplate StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteChecklistTemplate extends AbstractStructBase
{
    /**
     * The checklistTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \PocztaPolska\StructType\ChecklistTemplateType[]
     */
    protected array $checklistTemplate;
    /**
     * Constructor method for deleteChecklistTemplate
     * @uses DeleteChecklistTemplate::setChecklistTemplate()
     * @param \PocztaPolska\StructType\ChecklistTemplateType[] $checklistTemplate
     */
    public function __construct(array $checklistTemplate)
    {
        $this
            ->setChecklistTemplate($checklistTemplate);
    }
    /**
     * Get checklistTemplate value
     * @return \PocztaPolska\StructType\ChecklistTemplateType[]
     */
    public function getChecklistTemplate(): array
    {
        return $this->checklistTemplate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setChecklistTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChecklistTemplate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChecklistTemplateForArrayConstraintFromSetChecklistTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteChecklistTemplateChecklistTemplateItem) {
            // validation for constraint: itemType
            if (!$deleteChecklistTemplateChecklistTemplateItem instanceof \PocztaPolska\StructType\ChecklistTemplateType) {
                $invalidValues[] = is_object($deleteChecklistTemplateChecklistTemplateItem) ? get_class($deleteChecklistTemplateChecklistTemplateItem) : sprintf('%s(%s)', gettype($deleteChecklistTemplateChecklistTemplateItem), var_export($deleteChecklistTemplateChecklistTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The checklistTemplate property can only contain items of type \PocztaPolska\StructType\ChecklistTemplateType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set checklistTemplate value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ChecklistTemplateType[] $checklistTemplate
     * @return \PocztaPolska\StructType\DeleteChecklistTemplate
     */
    public function setChecklistTemplate(array $checklistTemplate): self
    {
        // validation for constraint: array
        if ('' !== ($checklistTemplateArrayErrorMessage = self::validateChecklistTemplateForArrayConstraintFromSetChecklistTemplate($checklistTemplate))) {
            throw new InvalidArgumentException($checklistTemplateArrayErrorMessage, __LINE__);
        }
        $this->checklistTemplate = $checklistTemplate;
        
        return $this;
    }
    /**
     * Add item to checklistTemplate value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ChecklistTemplateType $item
     * @return \PocztaPolska\StructType\DeleteChecklistTemplate
     */
    public function addToChecklistTemplate(\PocztaPolska\StructType\ChecklistTemplateType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ChecklistTemplateType) {
            throw new InvalidArgumentException(sprintf('The checklistTemplate property can only contain items of type \PocztaPolska\StructType\ChecklistTemplateType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->checklistTemplate[] = $item;
        
        return $this;
    }
}
