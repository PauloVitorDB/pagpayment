<?php 

namespace PagseguroApi\Model;
use JsonSerializable;

class DebitCardModel implements JsonSerializable {
    
    private $encrypted;
    private $number;
    private $exp_month;
    private $exp_year;
    private $security_code;
    private \PagseguroApi\Model\CardHolder $holder;
  
    /**
     * Get the value of security_code
     */ 
    public function getSecurityCode()
    {
        return $this->security_code;
    }

    /**
     * Set the value of security_code
     *
     * @return  self
     */ 
    public function setSecurityCode($security_code)
    {
        $this->security_code = $security_code;

        return $this;
    }

    /**
     * Get the value of holder
     */ 
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * Set the value of holder
     *
     * @return  self
     */ 
    public function setHolder($holder)
    {
        $this->holder = $holder;

        return $this;
    }

    
    public function jsonSerialize() {

        $json = [
            "encrypted" => $this->encrypted,
            // "number" => $this->number,
            // "exp_month" => $this->exp_month,
            // "exp_year" => "20" . $this->exp_year,
            "security_code" => $this->security_code,
            "holder" => $this->holder
        ];

        return $json;
    }

    /**
     * Get the value of exp_month
     */ 
    public function getExpMonth()
    {
        return $this->exp_month;
    }

    /**
     * Set the value of exp_month
     *
     * @return  self
     */ 
    public function setExpMonth($exp_month)
    {
        $this->exp_month = $exp_month;

        return $this;
    }

    /**
     * Get the value of exp_year
     */ 
    public function getExpYear()
    {
        return $this->exp_year;
    }

    /**
     * Set the value of exp_year
     *
     * @return  self
     */ 
    public function setExpYear($exp_year)
    {
        $this->exp_year = $exp_year;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of encrypted
     */ 
    public function getEncrypted()
    {
        return $this->encrypted;
    }

    /**
     * Set the value of encrypted
     *
     * @return  self
     */ 
    public function setEncrypted($encrypted)
    {
        $this->encrypted = $encrypted;

        return $this;
    }
}