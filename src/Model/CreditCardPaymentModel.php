<?php

namespace PagseguroApi\Model;

use JsonSerializable;
use PagseguroApi\Api\PaymentTypes;

class CreditCardPaymentModel extends PaymentModel implements JsonSerializable {

    private int $installments = 1;

    private bool $capture = true;

    private \PagseguroApi\Model\CreditCardModel $card;

    function jsonSerialize() {
        
        $json = [
            "type" => PaymentTypes::CREDIT_CARD,
            "installments" => $this->installments,
            "capture" => $this->capture,
            "card" => $this->card
        ];

        return $json;
    }


    /**
     * Get the value of installments
     */ 
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * Set the value of installments
     *
     * @return  self
     */ 
    public function setInstallments($installments)
    {
        $this->installments = $installments;

        return $this;
    }

    /**
     * Get the value of capture
     */ 
    public function getCapture()
    {
        return $this->capture;
    }

    /**
     * Set the value of capture
     *
     * @return  self
     */ 
    public function setCapture($capture)
    {
        $this->capture = $capture;

        return $this;
    }

    /**
     * Get the value of card
     */ 
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */ 
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }
}