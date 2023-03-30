<?php

namespace PagseguroApi\Api;

abstract class TransactionStatus {

    const TRANSACTION_PROCESSING_STATUS = [
        "AUTHORIZED",
        "IN_ANALYSIS"
    ];  

    const TRANSACTION_WAITING_STATUS = [
        "WAITING"
    ];  

    const TRANSACTION_ERROR_STATUS = [
        "DECLINED",
        "CANCELED"
    ];

    const TRANSACTION_PAID_STATUS = [
        "PAID"
    ];

    public static function getAllowedTransactionStatus() {
        return array_merge(self::TRANSACTION_WAITING_STATUS, self::TRANSACTION_PROCESSING_STATUS, self::TRANSACTION_PAID_STATUS);
    }

}