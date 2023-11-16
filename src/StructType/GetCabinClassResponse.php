<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCabinClassResponse StructType
 * @subpackage Structs
 */
class GetCabinClassResponse extends AbstractStructBase
{
    /**
     * The MidocoCabinClass
     * Meta information extracted from the WSDL
     * - ref: MidocoCabinClass
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass $MidocoCabinClass = null;
    /**
     * Constructor method for GetCabinClassResponse
     * @uses GetCabinClassResponse::setMidocoCabinClass()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass $midocoCabinClass
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass $midocoCabinClass = null)
    {
        $this
            ->setMidocoCabinClass($midocoCabinClass);
    }
    /**
     * Get MidocoCabinClass value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass|null
     */
    public function getMidocoCabinClass(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass
    {
        return $this->MidocoCabinClass;
    }
    /**
     * Set MidocoCabinClass value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass $midocoCabinClass
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetCabinClassResponse
     */
    public function setMidocoCabinClass(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass $midocoCabinClass = null): self
    {
        $this->MidocoCabinClass = $midocoCabinClass;
        
        return $this;
    }
}