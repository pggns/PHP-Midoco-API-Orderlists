<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentType EnumType
 * @subpackage Enumerations
 */
class PaymentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CC'
     * @return string 'CC'
     */
    const VALUE_CC = 'CC';
    /**
     * Constant for value 'DEBIT'
     * @return string 'DEBIT'
     */
    const VALUE_DEBIT = 'DEBIT';
    /**
     * Constant for value 'CASH'
     * @return string 'CASH'
     */
    const VALUE_CASH = 'CASH';
    /**
     * Constant for value 'PP'
     * @return string 'PP'
     */
    const VALUE_PP = 'PP';
    /**
     * Constant for value 'PAYBYLINK'
     * @return string 'PAYBYLINK'
     */
    const VALUE_PAYBYLINK = 'PAYBYLINK';
    /**
     * Return allowed values
     * @uses self::VALUE_CC
     * @uses self::VALUE_DEBIT
     * @uses self::VALUE_CASH
     * @uses self::VALUE_PP
     * @uses self::VALUE_PAYBYLINK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CC,
            self::VALUE_DEBIT,
            self::VALUE_CASH,
            self::VALUE_PP,
            self::VALUE_PAYBYLINK,
        ];
    }
}
