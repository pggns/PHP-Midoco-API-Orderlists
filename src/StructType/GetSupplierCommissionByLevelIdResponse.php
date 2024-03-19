<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierCommissionByLevelIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierCommissionByLevelIdResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierCommission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSupplierCommission
     * @var \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO $MidocoSupplierCommission = null;
    /**
     * Constructor method for GetSupplierCommissionByLevelIdResponse
     * @uses GetSupplierCommissionByLevelIdResponse::setMidocoSupplierCommission()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO $midocoSupplierCommission
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO $midocoSupplierCommission = null)
    {
        $this
            ->setMidocoSupplierCommission($midocoSupplierCommission);
    }
    /**
     * Get MidocoSupplierCommission value
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO|null
     */
    public function getMidocoSupplierCommission(): ?\Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO
    {
        return $this->MidocoSupplierCommission;
    }
    /**
     * Set MidocoSupplierCommission value
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO $midocoSupplierCommission
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetSupplierCommissionByLevelIdResponse
     */
    public function setMidocoSupplierCommission(?\Pggns\MidocoApi\Orderlists\StructType\SupplierCommissionDTO $midocoSupplierCommission = null): self
    {
        $this->MidocoSupplierCommission = $midocoSupplierCommission;
        
        return $this;
    }
}
