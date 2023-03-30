<?php

namespace PagseguroApi\Model;
use JsonSerializable;

class ChargeModel implements JsonSerializable {

    private $reference_id;

    private $description;

    private $amount_value;

    private $payment_method;


    public function jsonSerialize() {

        $json = [
            "reference_id" => $this->reference_id,
            "description" => $this->description,
            "amount" => [
                "value" => $this->amount_value,
                "currency" => "BRL"
            ],
            "payment_method" => $this->payment_method
        ];

        return $json;
    }


    /**
     * Get the value of amount
     */ 
    public function getAmountValue()
    {
        return $this->amount_value;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmountValue(int $amount)
    {
        $this->amount_value = $amount;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of reference_id
     */ 
    public function getReferenceId()
    {
        return $this->reference_id;
    }

    /**
     * Set the value of reference_id
     *
     * @return  self
     */ 
    public function setReferenceId($reference_id)
    {
        $this->reference_id = $reference_id;

        return $this;
    }

    /**
     * Get the value of payment_method
     */ 
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * Set the value of payment_method
     *
     * @return  self
     */ 
    public function setPaymentMethod($payment_method)
    {
        $this->payment_method = $payment_method;

        return $this;
    }
}