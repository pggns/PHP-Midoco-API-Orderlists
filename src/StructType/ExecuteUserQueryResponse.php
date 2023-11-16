<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteUserQueryResponse StructType
 * @subpackage Structs
 */
class ExecuteUserQueryResponse extends AbstractStructBase
{
    /**
     * The MidocoQueryResult
     * Meta information extracted from the WSDL
     * - ref: MidocoQueryResult
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult $MidocoQueryResult = null;
    /**
     * Constructor method for ExecuteUserQueryResponse
     * @uses ExecuteUserQueryResponse::setMidocoQueryResult()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult $midocoQueryResult
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult $midocoQueryResult = null)
    {
        $this
            ->setMidocoQueryResult($midocoQueryResult);
    }
    /**
     * Get MidocoQueryResult value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult|null
     */
    public function getMidocoQueryResult(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult
    {
        return $this->MidocoQueryResult;
    }
    /**
     * Set MidocoQueryResult value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult $midocoQueryResult
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteUserQueryResponse
     */
    public function setMidocoQueryResult(?\Pggns\MidocoApi\Orderlists\StructType\MidocoQueryResult $midocoQueryResult = null): self
    {
        $this->MidocoQueryResult = $midocoQueryResult;
        
        return $this;
    }
}
