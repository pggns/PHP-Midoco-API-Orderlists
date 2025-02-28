<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrUpdateAbtaDataResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrUpdateAbtaDataResponse extends AbstractStructBase
{
    /**
     * The MidocoABTAList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType[]
     */
    protected ?array $MidocoABTAList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The MidocoABTAListTypeSums
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType $MidocoABTAListTypeSums = null;
    /**
     * Constructor method for GetOrUpdateAbtaDataResponse
     * @uses GetOrUpdateAbtaDataResponse::setMidocoABTAList()
     * @uses GetOrUpdateAbtaDataResponse::setNoOfResults()
     * @uses GetOrUpdateAbtaDataResponse::setMidocoABTAListTypeSums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType[] $midocoABTAList
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType $midocoABTAListTypeSums
     */
    public function __construct(?array $midocoABTAList = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType $midocoABTAListTypeSums = null)
    {
        $this
            ->setMidocoABTAList($midocoABTAList)
            ->setNoOfResults($noOfResults)
            ->setMidocoABTAListTypeSums($midocoABTAListTypeSums);
    }
    /**
     * Get MidocoABTAList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType[]
     */
    public function getMidocoABTAList(): ?array
    {
        return $this->MidocoABTAList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoABTAList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoABTAList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoABTAListForArrayConstraintFromSetMidocoABTAList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrUpdateAbtaDataResponseMidocoABTAListItem) {
            // validation for constraint: itemType
            if (!$getOrUpdateAbtaDataResponseMidocoABTAListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType) {
                $invalidValues[] = is_object($getOrUpdateAbtaDataResponseMidocoABTAListItem) ? get_class($getOrUpdateAbtaDataResponseMidocoABTAListItem) : sprintf('%s(%s)', gettype($getOrUpdateAbtaDataResponseMidocoABTAListItem), var_export($getOrUpdateAbtaDataResponseMidocoABTAListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoABTAList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoABTAList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType[] $midocoABTAList
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrUpdateAbtaDataResponse
     */
    public function setMidocoABTAList(?array $midocoABTAList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoABTAListArrayErrorMessage = self::validateMidocoABTAListForArrayConstraintFromSetMidocoABTAList($midocoABTAList))) {
            throw new InvalidArgumentException($midocoABTAListArrayErrorMessage, __LINE__);
        }
        $this->MidocoABTAList = $midocoABTAList;
        
        return $this;
    }
    /**
     * Add item to MidocoABTAList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrUpdateAbtaDataResponse
     */
    public function addToMidocoABTAList(\Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType) {
            throw new InvalidArgumentException(sprintf('The MidocoABTAList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoABTAList[] = $item;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrUpdateAbtaDataResponse
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
    /**
     * Get MidocoABTAListTypeSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType|null
     */
    public function getMidocoABTAListTypeSums(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType
    {
        return $this->MidocoABTAListTypeSums;
    }
    /**
     * Set MidocoABTAListTypeSums value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType $midocoABTAListTypeSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrUpdateAbtaDataResponse
     */
    public function setMidocoABTAListTypeSums(?\Pggns\MidocoApi\Orderlists\StructType\MidocoABTAListType $midocoABTAListTypeSums = null): self
    {
        $this->MidocoABTAListTypeSums = $midocoABTAListTypeSums;
        
        return $this;
    }
}
