<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMarketingKeysForTypeResponse StructType
 * @subpackage Structs
 */
class GetMarketingKeysForTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoMarketingKey
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMarketingKey
     * @var \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDTO[]
     */
    protected array $MidocoMarketingKey = [];
    /**
     * Constructor method for GetMarketingKeysForTypeResponse
     * @uses GetMarketingKeysForTypeResponse::setMidocoMarketingKey()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDTO[] $midocoMarketingKey
     */
    public function __construct(array $midocoMarketingKey = [])
    {
        $this
            ->setMidocoMarketingKey($midocoMarketingKey);
    }
    /**
     * Get MidocoMarketingKey value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDTO[]
     */
    public function getMidocoMarketingKey(): array
    {
        return $this->MidocoMarketingKey;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMarketingKey method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarketingKey method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarketingKeyForArrayConstraintsFromSetMidocoMarketingKey(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMarketingKeysForTypeResponseMidocoMarketingKeyItem) {
            // validation for constraint: itemType
            if (!$getMarketingKeysForTypeResponseMidocoMarketingKeyItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDTO) {
                $invalidValues[] = is_object($getMarketingKeysForTypeResponseMidocoMarketingKeyItem) ? get_class($getMarketingKeysForTypeResponseMidocoMarketingKeyItem) : sprintf('%s(%s)', gettype($getMarketingKeysForTypeResponseMidocoMarketingKeyItem), var_export($getMarketingKeysForTypeResponseMidocoMarketingKeyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarketingKey property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarketingKey value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDTO[] $midocoMarketingKey
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMarketingKeysForTypeResponse
     */
    public function setMidocoMarketingKey(array $midocoMarketingKey = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarketingKeyArrayErrorMessage = self::validateMidocoMarketingKeyForArrayConstraintsFromSetMidocoMarketingKey($midocoMarketingKey))) {
            throw new InvalidArgumentException($midocoMarketingKeyArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarketingKey = $midocoMarketingKey;
        
        return $this;
    }
    /**
     * Add item to MidocoMarketingKey value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDTO $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMarketingKeysForTypeResponse
     */
    public function addToMidocoMarketingKey(\Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMarketingKey property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarketingKey[] = $item;
        
        return $this;
    }
}
