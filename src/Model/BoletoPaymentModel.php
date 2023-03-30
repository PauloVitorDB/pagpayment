<?php

namespace PagseguroApi\Model;

use JsonSerializable;
use PagseguroApi\Api\PaymentTypes;

class BoletoPaymentModel extends PaymentModel implements JsonSerializable {

    private \PagseguroApi\Model\BoletoModel $boleto;

    function jsonSerialize() {
        
        $json = [
            "type" => PaymentTypes::BOLETO,
            "boleto" => $this->boleto
        ];

        return $json;
    }


    /**
     * Get the value of boleto
     */ 
    public function getBoleto()
    {
        return $this->boleto;
    }

    /**
     * Set the value of boleto
     *
     * @return  self
     */ 
    public function setBoleto(\PagseguroApi\Model\BoletoModel $boleto)
    {
        $this->boleto = $boleto;

        return $this;
    }
}