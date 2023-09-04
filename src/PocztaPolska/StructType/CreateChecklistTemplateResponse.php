<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for createChecklistTemplateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateChecklistTemplateResponse extends AbstractStructBase
{
    /**
     * The checklistTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ChecklistTemplateType[]
     */
    protected ?array $checklistTemplate = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for createChecklistTemplateResponse
     * @uses CreateChecklistTemplateResponse::setChecklistTemplate()
     * @uses CreateChecklistTemplateResponse::setError()
     * @param \PocztaPolska\StructType\ChecklistTemplateType[] $checklistTemplate
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?array $checklistTemplate = null, ?array $error = null)
    {
        $this
            ->setChecklistTemplate($checklistTemplate)
            ->setError($error);
    }
    /**
     * Get checklistTemplate value
     * @return \PocztaPolska\StructType\ChecklistTemplateType[]
     */
    public function getChecklistTemplate(): ?array
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
        foreach ($values as $createChecklistTemplateResponseChecklistTemplateItem) {
            // validation for constraint: itemType
            if (!$createChecklistTemplateResponseChecklistTemplateItem instanceof \PocztaPolska\StructType\ChecklistTemplateType) {
                $invalidValues[] = is_object($createChecklistTemplateResponseChecklistTemplateItem) ? get_class($createChecklistTemplateResponseChecklistTemplateItem) : sprintf('%s(%s)', gettype($createChecklistTemplateResponseChecklistTemplateItem), var_export($createChecklistTemplateResponseChecklistTemplateItem, true));
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
     * @return \PocztaPolska\StructType\CreateChecklistTemplateResponse
     */
    public function setChecklistTemplate(?array $checklistTemplate = null): self
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
     * @return \PocztaPolska\StructType\CreateChecklistTemplateResponse
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
    /**
     * Get error value
     * @return \PocztaPolska\StructType\ErrorType[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintFromSetError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createChecklistTemplateResponseErrorItem) {
            // validation for constraint: itemType
            if (!$createChecklistTemplateResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($createChecklistTemplateResponseErrorItem) ? get_class($createChecklistTemplateResponseErrorItem) : sprintf('%s(%s)', gettype($createChecklistTemplateResponseErrorItem), var_export($createChecklistTemplateResponseErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The error property can only contain items of type \PocztaPolska\StructType\ErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set error value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ErrorType[] $error
     * @return \PocztaPolska\StructType\CreateChecklistTemplateResponse
     */
    public function setError(?array $error = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Add item to error value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\ErrorType $item
     * @return \PocztaPolska\StructType\CreateChecklistTemplateResponse
     */
    public function addToError(\PocztaPolska\StructType\ErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\ErrorType) {
            throw new InvalidArgumentException(sprintf('The error property can only contain items of type \PocztaPolska\StructType\ErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->error[] = $item;
        
        return $this;
    }
}
