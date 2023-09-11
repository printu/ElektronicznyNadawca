<?php

declare(strict_types=1);

namespace PocztaPolska\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for deleteReturnDocumentsProfileResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteReturnDocumentsProfileResponse extends AbstractStructBase
{
    /**
     * The result
     * @var bool|null
     */
    protected ?bool $result = null;
    /**
     * The idProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idProfile = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PocztaPolska\StructType\ErrorType[]
     */
    protected ?array $error = null;

    /**
     * Constructor method for deleteReturnDocumentsProfileResponse
     * @uses DeleteReturnDocumentsProfileResponse::setResult()
     * @uses DeleteReturnDocumentsProfileResponse::setIdProfile()
     * @uses DeleteReturnDocumentsProfileResponse::setError()
     * @param bool $result
     * @param int $idProfile
     * @param \PocztaPolska\StructType\ErrorType[] $error
     */
    public function __construct(?bool $result = null, ?int $idProfile = null, ?array $error = null)
    {
        $this
            ->setResult($result)
            ->setIdProfile($idProfile)
            ->setError($error);
    }

    /**
     * Get result value
     * @return bool|null
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }

    /**
     * Set result value
     * @param bool $result
     * @return \PocztaPolska\StructType\DeleteReturnDocumentsProfileResponse
     */
    public function setResult(?bool $result = null): self
    {
        // validation for constraint: boolean
        if (!is_null($result) && !is_bool($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;

        return $this;
    }

    /**
     * Get idProfile value
     * @return int|null
     */
    public function getIdProfile(): ?int
    {
        return $this->idProfile;
    }

    /**
     * Set idProfile value
     * @param int $idProfile
     * @return \PocztaPolska\StructType\DeleteReturnDocumentsProfileResponse
     */
    public function setIdProfile(?int $idProfile = null): self
    {
        // validation for constraint: int
        if (!is_null($idProfile) && !(is_int($idProfile) || ctype_digit($idProfile))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idProfile, true), gettype($idProfile)), __LINE__);
        }
        $this->idProfile = $idProfile;

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
        foreach ($values as $deleteReturnDocumentsProfileResponseErrorItem) {
            // validation for constraint: itemType
            if (!$deleteReturnDocumentsProfileResponseErrorItem instanceof \PocztaPolska\StructType\ErrorType) {
                $invalidValues[] = is_object($deleteReturnDocumentsProfileResponseErrorItem) ? get_class($deleteReturnDocumentsProfileResponseErrorItem) : sprintf('%s(%s)', gettype($deleteReturnDocumentsProfileResponseErrorItem), var_export($deleteReturnDocumentsProfileResponseErrorItem, true));
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
     * @return \PocztaPolska\StructType\DeleteReturnDocumentsProfileResponse
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
     * @return \PocztaPolska\StructType\DeleteReturnDocumentsProfileResponse
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
