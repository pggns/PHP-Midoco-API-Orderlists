<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNoMarginDetailsResponse StructType
 * @subpackage Structs
 */
class GetTravelNoMarginDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoMarginBuyItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoMarginBuyItem
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem[]
     */
    protected array $MidocoMarginBuyItem = [];
    /**
     * The MidocoMarginSaleItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoMarginSaleItem
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem[]
     */
    protected array $MidocoMarginSaleItem = [];
    /**
     * Constructor method for GetTravelNoMarginDetailsResponse
     * @uses GetTravelNoMarginDetailsResponse::setMidocoMarginBuyItem()
     * @uses GetTravelNoMarginDetailsResponse::setMidocoMarginSaleItem()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem[] $midocoMarginBuyItem
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem[] $midocoMarginSaleItem
     */
    public function __construct(array $midocoMarginBuyItem = [], array $midocoMarginSaleItem = [])
    {
        $this
            ->setMidocoMarginBuyItem($midocoMarginBuyItem)
            ->setMidocoMarginSaleItem($midocoMarginSaleItem);
    }
    /**
     * Get MidocoMarginBuyItem value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem[]
     */
    public function getMidocoMarginBuyItem(): array
    {
        return $this->MidocoMarginBuyItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMarginBuyItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginBuyItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginBuyItemForArrayConstraintsFromSetMidocoMarginBuyItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelNoMarginDetailsResponseMidocoMarginBuyItemItem) {
            // validation for constraint: itemType
            if (!$getTravelNoMarginDetailsResponseMidocoMarginBuyItemItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem) {
                $invalidValues[] = is_object($getTravelNoMarginDetailsResponseMidocoMarginBuyItemItem) ? get_class($getTravelNoMarginDetailsResponseMidocoMarginBuyItemItem) : sprintf('%s(%s)', gettype($getTravelNoMarginDetailsResponseMidocoMarginBuyItemItem), var_export($getTravelNoMarginDetailsResponseMidocoMarginBuyItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginBuyItem property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem[] $midocoMarginBuyItem
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetTravelNoMarginDetailsResponse
     */
    public function setMidocoMarginBuyItem(array $midocoMarginBuyItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginBuyItemArrayErrorMessage = self::validateMidocoMarginBuyItemForArrayConstraintsFromSetMidocoMarginBuyItem($midocoMarginBuyItem))) {
            throw new InvalidArgumentException($midocoMarginBuyItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginBuyItem = $midocoMarginBuyItem;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginBuyItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetTravelNoMarginDetailsResponse
     */
    public function addToMidocoMarginBuyItem(\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginBuyItem property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginBuyItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginBuyItem[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMarginSaleItem value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem[]
     */
    public function getMidocoMarginSaleItem(): array
    {
        return $this->MidocoMarginSaleItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMarginSaleItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginSaleItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginSaleItemForArrayConstraintsFromSetMidocoMarginSaleItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelNoMarginDetailsResponseMidocoMarginSaleItemItem) {
            // validation for constraint: itemType
            if (!$getTravelNoMarginDetailsResponseMidocoMarginSaleItemItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem) {
                $invalidValues[] = is_object($getTravelNoMarginDetailsResponseMidocoMarginSaleItemItem) ? get_class($getTravelNoMarginDetailsResponseMidocoMarginSaleItemItem) : sprintf('%s(%s)', gettype($getTravelNoMarginDetailsResponseMidocoMarginSaleItemItem), var_export($getTravelNoMarginDetailsResponseMidocoMarginSaleItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginSaleItem property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem[] $midocoMarginSaleItem
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetTravelNoMarginDetailsResponse
     */
    public function setMidocoMarginSaleItem(array $midocoMarginSaleItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginSaleItemArrayErrorMessage = self::validateMidocoMarginSaleItemForArrayConstraintsFromSetMidocoMarginSaleItem($midocoMarginSaleItem))) {
            throw new InvalidArgumentException($midocoMarginSaleItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginSaleItem = $midocoMarginSaleItem;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginSaleItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetTravelNoMarginDetailsResponse
     */
    public function addToMidocoMarginSaleItem(\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginSaleItem property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginSaleItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginSaleItem[] = $item;
        
        return $this;
    }
}
