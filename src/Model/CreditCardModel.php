<?php 

namespace PagseguroApi\Model;
use JsonSerializable;

class CreditCardModel implements JsonSerializable {
    
    private $encrypted;
    private $security_code;
    private \PagseguroApi\Model\CardHolder $holder;
    const STORE_CREDIT_CARD = false;
  
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
            "security_code" => $this->security_code,
            "holder" => $this->holder,
            "store" => self::STORE_CREDIT_CARD
        ];

        return $json;
    }
}