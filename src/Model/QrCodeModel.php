<?php

namespace PagseguroApi\Model;

use JsonSerializable;

class QrCodeModel implements JsonSerializable {

    private $amount_value;

    public function __construct(int $amount_value) {
       
        $this->amount_value = $amount_value;

    }

    public function jsonSerialize() {

        $json = [
            "qr_codes" => [
                [
                    "amount" => [
                        "value" => $this->amount_value   
                    ]
                ]
            ]
        ];

        return $json;
    }
}