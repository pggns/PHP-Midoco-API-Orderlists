<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTextRemarksResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoTextRemarksResponse extends AbstractStructBase
{
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark[]
     */
    protected ?array $MidocoTextRemark = null;
    /**
     * Constructor method for GetMidocoTextRemarksResponse
     * @uses GetMidocoTextRemarksResponse::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark[] $midocoTextRemark
     */
    public function __construct(?array $midocoTextRemark = null)
    {
        $this
            ->setMidocoTextRemark($midocoTextRemark);
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark[]
     */
    public function getMidocoTextRemark(): ?array
    {
        return $this->MidocoTextRemark;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTextRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTextRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTextRemarkForArrayConstraintFromSetMidocoTextRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoTextRemarksResponseMidocoTextRemarkItem) {
            // validation for constraint: itemType
            if (!$getMidocoTextRemarksResponseMidocoTextRemarkItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark) {
                $invalidValues[] = is_object($getMidocoTextRemarksResponseMidocoTextRemarkItem) ? get_class($getMidocoTextRemarksResponseMidocoTextRemarkItem) : sprintf('%s(%s)', gettype($getMidocoTextRemarksResponseMidocoTextRemarkItem), var_export($getMidocoTextRemarksResponseMidocoTextRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTextRemark property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTextRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark[] $midocoTextRemark
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMidocoTextRemarksResponse
     */
    public function setMidocoTextRemark(?array $midocoTextRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTextRemarkArrayErrorMessage = self::validateMidocoTextRemarkForArrayConstraintFromSetMidocoTextRemark($midocoTextRemark))) {
            throw new InvalidArgumentException($midocoTextRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoTextRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMidocoTextRemarksResponse
     */
    public function addToMidocoTextRemark(\Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark) {
            throw new InvalidArgumentException(sprintf('The MidocoTextRemark property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoTextRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTextRemark[] = $item;
        
        return $this;
    }
}
