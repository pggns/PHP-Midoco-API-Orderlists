<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierSettlPaymentConditionResponse StructType
 * @subpackage Structs
 */
class SearchSupplierSettlPaymentConditionResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierSettlPaymentCondition
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition[]
     */
    protected array $MidocoSupplierSettlPaymentCondition = [];
    /**
     * Constructor method for SearchSupplierSettlPaymentConditionResponse
     * @uses SearchSupplierSettlPaymentConditionResponse::setMidocoSupplierSettlPaymentCondition()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition[] $midocoSupplierSettlPaymentCondition
     */
    public function __construct(array $midocoSupplierSettlPaymentCondition = [])
    {
        $this
            ->setMidocoSupplierSettlPaymentCondition($midocoSupplierSettlPaymentCondition);
    }
    /**
     * Get MidocoSupplierSettlPaymentCondition value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition[]
     */
    public function getMidocoSupplierSettlPaymentCondition(): array
    {
        return $this->MidocoSupplierSettlPaymentCondition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierSettlPaymentCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierSettlPaymentCondition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierSettlPaymentConditionForArrayConstraintsFromSetMidocoSupplierSettlPaymentCondition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem) {
            // validation for constraint: itemType
            if (!$searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition) {
                $invalidValues[] = is_object($searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem) ? get_class($searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem) : sprintf('%s(%s)', gettype($searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem), var_export($searchSupplierSettlPaymentConditionResponseMidocoSupplierSettlPaymentConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierSettlPaymentCondition property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierSettlPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition[] $midocoSupplierSettlPaymentCondition
     * @return \Pggns\MidocoApi\Orderlists\StructType\SearchSupplierSettlPaymentConditionResponse
     */
    public function setMidocoSupplierSettlPaymentCondition(array $midocoSupplierSettlPaymentCondition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierSettlPaymentConditionArrayErrorMessage = self::validateMidocoSupplierSettlPaymentConditionForArrayConstraintsFromSetMidocoSupplierSettlPaymentCondition($midocoSupplierSettlPaymentCondition))) {
            throw new InvalidArgumentException($midocoSupplierSettlPaymentConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierSettlPaymentCondition = $midocoSupplierSettlPaymentCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierSettlPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SearchSupplierSettlPaymentConditionResponse
     */
    public function addToMidocoSupplierSettlPaymentCondition(\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierSettlPaymentCondition property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierSettlPaymentCondition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierSettlPaymentCondition[] = $item;
        
        return $this;
    }
}
