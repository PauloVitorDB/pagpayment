<?php

namespace PagseguroApi\Model;

class InstallmentsModel {

    private $value;
    private $max_installments;
    private $max_installments_no_interest;
    private $credit_card_bin;
   
    public function toQueryParameters() {
        return http_build_query([
            "value" => $this->value,
            "max_installments" => $this->max_installments,
            "max_installments_no_interest" => $this->max_installments_no_interest,
            "credit_card_bin" => $this->credit_card_bin,
            "payment_methods" => "credit_card",
        ]);
    }

    /**
     * Get the value of value
     */ 
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the value of max_installments
     */ 
    public function getMaxInstallments()
    {
        return $this->max_installments;
    }

    /**
     * Set the value of max_installments
     *
     * @return  self
     */ 
    public function setMaxInstallments($max_installments)
    {
        $this->max_installments = $max_installments;

        return $this;
    }

    /**
     * Get the value of max_installments_no_interest
     */ 
    public function getMaxInstallmentsNo_Interest()
    {
        return $this->max_installments_no_interest;
    }

    /**
     * Set the value of max_installments_no_interest
     *
     * @return  self
     */ 
    public function setMaxInstallmentsNoInterest($max_installments_no_interest)
    {
        $this->max_installments_no_interest = $max_installments_no_interest;

        return $this;
    }

    /**
     * Get the value of credit_card_bin
     */ 
    public function getCreditCardBin()
    {
        return $this->credit_card_bin;
    }

    /**
     * Set the value of credit_card_bin
     *
     * @return  self
     */ 
    public function setCreditCardBin($credit_card_bin)
    {
        $this->credit_card_bin = $credit_card_bin;

        return $this;
    }

}