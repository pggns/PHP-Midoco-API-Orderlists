<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingBookingJournalsResponse StructType
 * @subpackage Structs
 */
class GetBillingBookingJournalsResponse extends AbstractStructBase
{
    /**
     * The MidocoJournalPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoJournalPosition
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoJournalPosition[]
     */
    protected array $MidocoJournalPosition = [];
    /**
     * Constructor method for GetBillingBookingJournalsResponse
     * @uses GetBillingBookingJournalsResponse::setMidocoJournalPosition()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoJournalPosition[] $midocoJournalPosition
     */
    public function __construct(array $midocoJournalPosition = [])
    {
        $this
            ->setMidocoJournalPosition($midocoJournalPosition);
    }
    /**
     * Get MidocoJournalPosition value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoJournalPosition[]
     */
    public function getMidocoJournalPosition(): array
    {
        return $this->MidocoJournalPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJournalPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJournalPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJournalPositionForArrayConstraintsFromSetMidocoJournalPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingBookingJournalsResponseMidocoJournalPositionItem) {
            // validation for constraint: itemType
            if (!$getBillingBookingJournalsResponseMidocoJournalPositionItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoJournalPosition) {
                $invalidValues[] = is_object($getBillingBookingJournalsResponseMidocoJournalPositionItem) ? get_class($getBillingBookingJournalsResponseMidocoJournalPositionItem) : sprintf('%s(%s)', gettype($getBillingBookingJournalsResponseMidocoJournalPositionItem), var_export($getBillingBookingJournalsResponseMidocoJournalPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJournalPosition property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoJournalPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJournalPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoJournalPosition[] $midocoJournalPosition
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingBookingJournalsResponse
     */
    public function setMidocoJournalPosition(array $midocoJournalPosition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJournalPositionArrayErrorMessage = self::validateMidocoJournalPositionForArrayConstraintsFromSetMidocoJournalPosition($midocoJournalPosition))) {
            throw new InvalidArgumentException($midocoJournalPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoJournalPosition = $midocoJournalPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoJournalPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoJournalPosition $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingBookingJournalsResponse
     */
    public function addToMidocoJournalPosition(\Pggns\MidocoApi\Orderlists\StructType\MidocoJournalPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoJournalPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoJournalPosition property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoJournalPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJournalPosition[] = $item;
        
        return $this;
    }
}
