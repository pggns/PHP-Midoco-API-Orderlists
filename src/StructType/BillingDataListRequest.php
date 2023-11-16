<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingDataListRequest StructType
 * @subpackage Structs
 */
class BillingDataListRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingDataListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDataListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListCriteriaType $MidocoBillingDataListCriteria = null;
    /**
     * Constructor method for BillingDataListRequest
     * @uses BillingDataListRequest::setMidocoBillingDataListCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListCriteriaType $midocoBillingDataListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListCriteriaType $midocoBillingDataListCriteria = null)
    {
        $this
            ->setMidocoBillingDataListCriteria($midocoBillingDataListCriteria);
    }
    /**
     * Get MidocoBillingDataListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListCriteriaType|null
     */
    public function getMidocoBillingDataListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListCriteriaType
    {
        return $this->MidocoBillingDataListCriteria;
    }
    /**
     * Set MidocoBillingDataListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListCriteriaType $midocoBillingDataListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataListRequest
     */
    public function setMidocoBillingDataListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListCriteriaType $midocoBillingDataListCriteria = null): self
    {
        $this->MidocoBillingDataListCriteria = $midocoBillingDataListCriteria;
        
        return $this;
    }
}
