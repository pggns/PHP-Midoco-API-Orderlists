<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/OrderlistsService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/OrderlistsService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\Orderlists\ClassMap::get(),
];
/**
 * Samples for Sales ServiceType
 */
$sales = new \Pggns\MidocoApi\Orderlists\ServiceType\Sales($options);
$sales->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for salesListBySupplier operation/method
 */
if ($sales->salesListBySupplier(new \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierRequest()) !== false) {
    print_r($sales->getResult());
} else {
    print_r($sales->getLastError());
}
/**
 * Sample call for salesListBySupplierAndMonth operation/method
 */
if ($sales->salesListBySupplierAndMonth(new \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthRequest()) !== false) {
    print_r($sales->getResult());
} else {
    print_r($sales->getLastError());
}
/**
 * Sample call for salesListByProductType operation/method
 */
if ($sales->salesListByProductType(new \Pggns\MidocoApi\Orderlists\StructType\SalesListByProductTypeRequest()) !== false) {
    print_r($sales->getResult());
} else {
    print_r($sales->getLastError());
}
/**
 * Sample call for salesListBySupplierGroup operation/method
 */
if ($sales->salesListBySupplierGroup(new \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupRequest()) !== false) {
    print_r($sales->getResult());
} else {
    print_r($sales->getLastError());
}
/**
 * Sample call for salesListByEmployee operation/method
 */
if ($sales->salesListByEmployee(new \Pggns\MidocoApi\Orderlists\StructType\SalesListByEmployeeRequest()) !== false) {
    print_r($sales->getResult());
} else {
    print_r($sales->getLastError());
}
/**
 * Sample call for salesListByAgency operation/method
 */
if ($sales->salesListByAgency(new \Pggns\MidocoApi\Orderlists\StructType\SalesListByAgencyRequest()) !== false) {
    print_r($sales->getResult());
} else {
    print_r($sales->getLastError());
}
/**
 * Sample call for salesListByPaymentType operation/method
 */
if ($sales->salesListByPaymentType(new \Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeRequest()) !== false) {
    print_r($sales->getResult());
} else {
    print_r($sales->getLastError());
}
/**
 * Samples for Participant ServiceType
 */
$participant = new \Pggns\MidocoApi\Orderlists\ServiceType\Participant($options);
$participant->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for participantList operation/method
 */
if ($participant->participantList(new \Pggns\MidocoApi\Orderlists\StructType\ParticipantListRequest()) !== false) {
    print_r($participant->getResult());
} else {
    print_r($participant->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\Orderlists\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getAvailableSupplierGroupValues operation/method
 */
if ($get->getAvailableSupplierGroupValues(new \Pggns\MidocoApi\Orderlists\StructType\GetAvailableSupplierGroupValuesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getInfoForCustomer operation/method
 */
if ($get->getInfoForCustomer(new \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTTVByProduct operation/method
 */
if ($get->getTTVByProduct(new \Pggns\MidocoApi\Orderlists\StructType\GetTTVByProductRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getGroupAdvisorInfo operation/method
 */
if ($get->getGroupAdvisorInfo(new \Pggns\MidocoApi\Orderlists\StructType\GetGroupAdvisorInfoRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrderBookingJournals operation/method
 */
if ($get->getOrderBookingJournals(new \Pggns\MidocoApi\Orderlists\StructType\GetOrderBookingJournalsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingBookingJournals operation/method
 */
if ($get->getBillingBookingJournals(new \Pggns\MidocoApi\Orderlists\StructType\GetBillingBookingJournalsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoCCSaleList operation/method
 */
if ($get->getMidocoCCSaleList(new \Pggns\MidocoApi\Orderlists\StructType\GetMidocoCCSaleListRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getSupplierInvoiceList operation/method
 */
if ($get->getSupplierInvoiceList(new \Pggns\MidocoApi\Orderlists\StructType\GetSupplierInvoiceListRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOpenErList operation/method
 */
if ($get->getOpenErList(new \Pggns\MidocoApi\Orderlists\StructType\OpenErListRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOpenErCvsExport operation/method
 */
if ($get->getOpenErCvsExport(new \Pggns\MidocoApi\Orderlists\StructType\OpenErCsvExportRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getConnectedCustomerList operation/method
 */
if ($get->getConnectedCustomerList(new \Pggns\MidocoApi\Orderlists\StructType\ConnectedCustomerListRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingStat operation/method
 */
if ($get->getBillingStat(new \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getBillingStatCustomer operation/method
 */
if ($get->getBillingStatCustomer(new \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Ticket ServiceType
 */
$ticket = new \Pggns\MidocoApi\Orderlists\ServiceType\Ticket($options);
$ticket->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for ticketList operation/method
 */
if ($ticket->ticketList(new \Pggns\MidocoApi\Orderlists\StructType\TicketListRequest()) !== false) {
    print_r($ticket->getResult());
} else {
    print_r($ticket->getLastError());
}
/**
 * Samples for Hotel ServiceType
 */
$hotel = new \Pggns\MidocoApi\Orderlists\ServiceType\Hotel($options);
$hotel->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for hotelList operation/method
 */
if ($hotel->hotelList(new \Pggns\MidocoApi\Orderlists\StructType\HotelListRequest()) !== false) {
    print_r($hotel->getResult());
} else {
    print_r($hotel->getLastError());
}
/**
 * Samples for Transfer ServiceType
 */
$transfer = new \Pggns\MidocoApi\Orderlists\ServiceType\Transfer($options);
$transfer->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for transferList operation/method
 */
if ($transfer->transferList(new \Pggns\MidocoApi\Orderlists\StructType\TransferListRequest()) !== false) {
    print_r($transfer->getResult());
} else {
    print_r($transfer->getLastError());
}
/**
 * Samples for Billing ServiceType
 */
$billing = new \Pggns\MidocoApi\Orderlists\ServiceType\Billing($options);
$billing->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for billingList operation/method
 */
if ($billing->billingList(new \Pggns\MidocoApi\Orderlists\StructType\BillingListRequest()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Sample call for billingDataList operation/method
 */
if ($billing->billingDataList(new \Pggns\MidocoApi\Orderlists\StructType\BillingDataListRequest()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Sample call for billingDataExtendedList operation/method
 */
if ($billing->billingDataExtendedList(new \Pggns\MidocoApi\Orderlists\StructType\BillingDataExtendedListRequest()) !== false) {
    print_r($billing->getResult());
} else {
    print_r($billing->getLastError());
}
/**
 * Samples for Vat ServiceType
 */
$vat = new \Pggns\MidocoApi\Orderlists\ServiceType\Vat($options);
$vat->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for vatReconciliation operation/method
 */
if ($vat->vatReconciliation(new \Pggns\MidocoApi\Orderlists\StructType\VatReconciliationRequest()) !== false) {
    print_r($vat->getResult());
} else {
    print_r($vat->getLastError());
}
/**
 * Samples for Balance ServiceType
 */
$balance = new \Pggns\MidocoApi\Orderlists\ServiceType\Balance($options);
$balance->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for balanceList operation/method
 */
if ($balance->balanceList(new \Pggns\MidocoApi\Orderlists\StructType\BalanceListRequest()) !== false) {
    print_r($balance->getResult());
} else {
    print_r($balance->getLastError());
}
/**
 * Samples for Invoice ServiceType
 */
$invoice = new \Pggns\MidocoApi\Orderlists\ServiceType\Invoice($options);
$invoice->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for invoiceDataList operation/method
 */
if ($invoice->invoiceDataList(new \Pggns\MidocoApi\Orderlists\StructType\InvoiceDataListRequest()) !== false) {
    print_r($invoice->getResult());
} else {
    print_r($invoice->getLastError());
}
/**
 * Samples for Margin ServiceType
 */
$margin = new \Pggns\MidocoApi\Orderlists\ServiceType\Margin($options);
$margin->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for marginDataList operation/method
 */
if ($margin->marginDataList(new \Pggns\MidocoApi\Orderlists\StructType\MarginListRequest()) !== false) {
    print_r($margin->getResult());
} else {
    print_r($margin->getLastError());
}
/**
 * Sample call for marginExtDataList operation/method
 */
if ($margin->marginExtDataList(new \Pggns\MidocoApi\Orderlists\StructType\MarginExtListRequest()) !== false) {
    print_r($margin->getResult());
} else {
    print_r($margin->getLastError());
}
/**
 * Samples for Ar ServiceType
 */
$ar = new \Pggns\MidocoApi\Orderlists\ServiceType\Ar($options);
$ar->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for arErList operation/method
 */
if ($ar->arErList(new \Pggns\MidocoApi\Orderlists\StructType\ArErListRequest()) !== false) {
    print_r($ar->getResult());
} else {
    print_r($ar->getLastError());
}
/**
 * Sample call for arErCsvExport operation/method
 */
if ($ar->arErCsvExport(new \Pggns\MidocoApi\Orderlists\StructType\ArErCsvExportRequest()) !== false) {
    print_r($ar->getResult());
} else {
    print_r($ar->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \Pggns\MidocoApi\Orderlists\ServiceType\_List($options);
$list->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for listFIBUInvRbBalance operation/method
 */
if ($list->listFIBUInvRbBalance(new \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
/**
 * Samples for Execute ServiceType
 */
$execute = new \Pggns\MidocoApi\Orderlists\ServiceType\Execute($options);
$execute->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for executeMidocoSettlement operation/method
 */
if ($execute->executeMidocoSettlement(new \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest()) !== false) {
    print_r($execute->getResult());
} else {
    print_r($execute->getLastError());
}
/**
 * Samples for Birthday ServiceType
 */
$birthday = new \Pggns\MidocoApi\Orderlists\ServiceType\Birthday($options);
$birthday->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for birthdayList operation/method
 */
if ($birthday->birthdayList(new \Pggns\MidocoApi\Orderlists\StructType\BirthdayListRequest()) !== false) {
    print_r($birthday->getResult());
} else {
    print_r($birthday->getLastError());
}
/**
 * Samples for Deposit ServiceType
 */
$deposit = new \Pggns\MidocoApi\Orderlists\ServiceType\Deposit($options);
$deposit->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for depositList operation/method
 */
if ($deposit->depositList(new \Pggns\MidocoApi\Orderlists\StructType\DepositListRequest()) !== false) {
    print_r($deposit->getResult());
} else {
    print_r($deposit->getLastError());
}
/**
 * Sample call for depositListCsvExport operation/method
 */
if ($deposit->depositListCsvExport(new \Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportRequest()) !== false) {
    print_r($deposit->getResult());
} else {
    print_r($deposit->getLastError());
}
/**
 * Samples for Client ServiceType
 */
$client = new \Pggns\MidocoApi\Orderlists\ServiceType\Client($options);
$client->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for clientPerformanceLogList operation/method
 */
if ($client->clientPerformanceLogList(new \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogListRequest()) !== false) {
    print_r($client->getResult());
} else {
    print_r($client->getLastError());
}
