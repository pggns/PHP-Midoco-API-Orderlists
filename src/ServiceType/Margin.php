<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Margin ServiceType
 * @subpackage Services
 */
class Margin extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Orderlists\ServiceType\Margin
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named marginDataList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarginListRequest $paramMarginListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginListResponse|bool
     */
    public function marginDataList(\Pggns\MidocoApi\Orderlists\StructType\MarginListRequest $paramMarginListRequest)
    {
        try {
            $this->setResult($resultMarginDataList = $this->getSoapClient()->__soapCall('marginDataList', [
                $paramMarginListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarginDataList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named marginExtDataList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarginExtListRequest $paramMarginExtListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginExtListResponse|bool
     */
    public function marginExtDataList(\Pggns\MidocoApi\Orderlists\StructType\MarginExtListRequest $paramMarginExtListRequest)
    {
        try {
            $this->setResult($resultMarginExtDataList = $this->getSoapClient()->__soapCall('marginExtDataList', [
                $paramMarginExtListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarginExtDataList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginExtListResponse|\Pggns\MidocoApi\Orderlists\StructType\MarginListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
