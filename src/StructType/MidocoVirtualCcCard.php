<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVirtualCcCard StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoVirtualCcCard extends VirtualCreditCardDTO
{
    /**
     * The MidocoVirtualCcCardAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoVirtualCcCardAccount
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCardAccount|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCardAccount $MidocoVirtualCcCardAccount = null;
    /**
     * The MidocoVirtualCcMetaData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVirtualCcMetaData
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcMetaData[]
     */
    protected ?array $MidocoVirtualCcMetaData = null;
    /**
     * Constructor method for MidocoVirtualCcCard
     * @uses MidocoVirtualCcCard::setMidocoVirtualCcCardAccount()
     * @uses MidocoVirtualCcCard::setMidocoVirtualCcMetaData()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcMetaData[] $midocoVirtualCcMetaData
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount = null, ?array $midocoVirtualCcMetaData = null)
    {
        $this
            ->setMidocoVirtualCcCardAccount($midocoVirtualCcCardAccount)
            ->setMidocoVirtualCcMetaData($midocoVirtualCcMetaData);
    }
    /**
     * Get MidocoVirtualCcCardAccount value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCardAccount|null
     */
    public function getMidocoVirtualCcCardAccount(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCardAccount
    {
        return $this->MidocoVirtualCcCardAccount;
    }
    /**
     * Set MidocoVirtualCcCardAccount value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCard
     */
    public function setMidocoVirtualCcCardAccount(?\Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCardAccount $midocoVirtualCcCardAccount = null): self
    {
        $this->MidocoVirtualCcCardAccount = $midocoVirtualCcCardAccount;
        
        return $this;
    }
    /**
     * Get MidocoVirtualCcMetaData value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcMetaData[]
     */
    public function getMidocoVirtualCcMetaData(): ?array
    {
        return $this->MidocoVirtualCcMetaData;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVirtualCcMetaData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVirtualCcMetaData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVirtualCcMetaDataForArrayConstraintFromSetMidocoVirtualCcMetaData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoVirtualCcCardMidocoVirtualCcMetaDataItem) {
            // validation for constraint: itemType
            if (!$midocoVirtualCcCardMidocoVirtualCcMetaDataItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcMetaData) {
                $invalidValues[] = is_object($midocoVirtualCcCardMidocoVirtualCcMetaDataItem) ? get_class($midocoVirtualCcCardMidocoVirtualCcMetaDataItem) : sprintf('%s(%s)', gettype($midocoVirtualCcCardMidocoVirtualCcMetaDataItem), var_export($midocoVirtualCcCardMidocoVirtualCcMetaDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVirtualCcMetaData property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcMetaData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVirtualCcMetaData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcMetaData[] $midocoVirtualCcMetaData
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCard
     */
    public function setMidocoVirtualCcMetaData(?array $midocoVirtualCcMetaData = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVirtualCcMetaDataArrayErrorMessage = self::validateMidocoVirtualCcMetaDataForArrayConstraintFromSetMidocoVirtualCcMetaData($midocoVirtualCcMetaData))) {
            throw new InvalidArgumentException($midocoVirtualCcMetaDataArrayErrorMessage, __LINE__);
        }
        $this->MidocoVirtualCcMetaData = $midocoVirtualCcMetaData;
        
        return $this;
    }
    /**
     * Add item to MidocoVirtualCcMetaData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcMetaData $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcCard
     */
    public function addToMidocoVirtualCcMetaData(\Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcMetaData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcMetaData) {
            throw new InvalidArgumentException(sprintf('The MidocoVirtualCcMetaData property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoVirtualCcMetaData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVirtualCcMetaData[] = $item;
        
        return $this;
    }
}
