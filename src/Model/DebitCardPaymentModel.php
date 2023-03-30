<?php

namespace PagseguroApi\Model;

use JsonSerializable;
use PagseguroApi\Api\PaymentTypes;

class DebitCardPaymentModel extends PaymentModel implements JsonSerializable {

    private int $installments = 1;

    private bool $capture = true;

    private \PagseguroApi\Model\DebitCardModel $card;

    private AuthenticationMethodModel $authentication_method;

    function jsonSerialize() {
        
        $json = [
            "type" => PaymentTypes::DEBIT_CARD,
            "installments" => $this->installments,
            "capture" => $this->capture,
            "card" => $this->card,
            "authentication_method" => $this->authentication_method
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

    /**
     * Get the value of authentication_method
     */ 
    public function getAuthenticationMethod()
    {
        return $this->authentication_method;
    }

    /**
     * Set the value of authentication_method
     *
     * @return  self
     */ 
    public function setAuthenticationMethod($authentication_method)
    {
        $this->authentication_method = $authentication_method;

        return $this;
    }
}