<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrgunitEmailSigRequest StructType
 * @subpackage Structs
 */
class SaveOrgunitEmailSigRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitEmailSig
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoOrgunitEmailSig
     * @var \Pggns\MidocoApi\Orderlists\StructType\OrgunitEmailSigDTO[]
     */
    protected array $MidocoOrgunitEmailSig = [];
    /**
     * Constructor method for SaveOrgunitEmailSigRequest
     * @uses SaveOrgunitEmailSigRequest::setMidocoOrgunitEmailSig()
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrgunitEmailSigDTO[] $midocoOrgunitEmailSig
     */
    public function __construct(array $midocoOrgunitEmailSig = [])
    {
        $this
            ->setMidocoOrgunitEmailSig($midocoOrgunitEmailSig);
    }
    /**
     * Get MidocoOrgunitEmailSig value
     * @return \Pggns\MidocoApi\Orderlists\StructType\OrgunitEmailSigDTO[]
     */
    public function getMidocoOrgunitEmailSig(): array
    {
        return $this->MidocoOrgunitEmailSig;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrgunitEmailSig method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunitEmailSig method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitEmailSigForArrayConstraintsFromSetMidocoOrgunitEmailSig(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveOrgunitEmailSigRequestMidocoOrgunitEmailSigItem) {
            // validation for constraint: itemType
            if (!$saveOrgunitEmailSigRequestMidocoOrgunitEmailSigItem instanceof \Pggns\MidocoApi\Orderlists\StructType\OrgunitEmailSigDTO) {
                $invalidValues[] = is_object($saveOrgunitEmailSigRequestMidocoOrgunitEmailSigItem) ? get_class($saveOrgunitEmailSigRequestMidocoOrgunitEmailSigItem) : sprintf('%s(%s)', gettype($saveOrgunitEmailSigRequestMidocoOrgunitEmailSigItem), var_export($saveOrgunitEmailSigRequestMidocoOrgunitEmailSigItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunitEmailSig property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\OrgunitEmailSigDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunitEmailSig value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrgunitEmailSigDTO[] $midocoOrgunitEmailSig
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveOrgunitEmailSigRequest
     */
    public function setMidocoOrgunitEmailSig(array $midocoOrgunitEmailSig = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitEmailSigArrayErrorMessage = self::validateMidocoOrgunitEmailSigForArrayConstraintsFromSetMidocoOrgunitEmailSig($midocoOrgunitEmailSig))) {
            throw new InvalidArgumentException($midocoOrgunitEmailSigArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunitEmailSig = $midocoOrgunitEmailSig;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunitEmailSig value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\OrgunitEmailSigDTO $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveOrgunitEmailSigRequest
     */
    public function addToMidocoOrgunitEmailSig(\Pggns\MidocoApi\Orderlists\StructType\OrgunitEmailSigDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\OrgunitEmailSigDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunitEmailSig property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\OrgunitEmailSigDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunitEmailSig[] = $item;
        
        return $this;
    }
}
