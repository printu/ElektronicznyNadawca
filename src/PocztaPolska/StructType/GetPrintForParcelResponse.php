<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPrintForParcelResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintForParcelResponse extends AbstractStructBase
{
    /**
     * The printResult
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\PrintResultType[]
     */
    protected ?array $printResult = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;
    /**
     * Constructor method for getPrintForParcelResponse
     * @uses GetPrintForParcelResponse::setPrintResult()
     * @uses GetPrintForParcelResponse::setError()
     * @param \PocztaPolska\StructType\PrintResultType[] $printResult
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?array $printResult = null, ?array $error = null)
    {
        $this
            ->setPrintResult($printResult)
            ->setError($error);
    }
    /**
     * Get printResult value
     * @return \PocztaPolska\StructType\PrintResultType[]
     */
    public function getPrintResult(): ?array
    {
        return $this->printResult;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrintResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintResultForArrayConstraintFromSetPrintResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintForParcelResponsePrintResultItem) {
            // validation for constraint: itemType
            if (!$getPrintForParcelResponsePrintResultItem instanceof \PocztaPolska\StructType\PrintResultType) {
                $invalidValues[] = is_object($getPrintForParcelResponsePrintResultItem) ? get_class($getPrintForParcelResponsePrintResultItem) : sprintf('%s(%s)', gettype($getPrintForParcelResponsePrintResultItem), var_export($getPrintForParcelResponsePrintResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printResult property can only contain items of type \PocztaPolska\StructType\PrintResultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set printResult value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\PrintResultType[] $printResult
     * @return \PocztaPolska\StructType\GetPrintForParcelResponse
     */
    public function setPrintResult(?array $printResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($printResultArrayErrorMessage = self::validatePrintResultForArrayConstraintFromSetPrintResult($printResult))) {
            throw new InvalidArgumentException($printResultArrayErrorMessage, __LINE__);
        }
        $this->printResult = $printResult;
        
        return $this;
    }
    /**
     * Add item to printResult value
     * @throws InvalidArgumentException
     * @param \PocztaPolska\StructType\PrintResultType $item
     * @return \PocztaPolska\StructType\GetPrintForParcelResponse
     */
    public function addToPrintResult(\PocztaPolska\StructType\PrintResultType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \PocztaPolska\StructType\PrintResultType) {
            throw new InvalidArgumentException(sprintf('The printResult property can only contain items of type \PocztaPolska\StructType\PrintResultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printResult[] = $item;
        
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
        foreach ($values as $getPrintForParcelResponseErrorItem) {
            // validation for constraint: itemType
            if (!$getPrintForParcelResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($getPrintForParcelResponseErrorItem) ? get_class($getPrintForParcelResponseErrorItem) : sprintf('%s(%s)', gettype($getPrintForParcelResponseErrorItem), var_export($getPrintForParcelResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\GetPrintForParcelResponse
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
     * @return \PocztaPolska\StructType\GetPrintForParcelResponse
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
