<?php

namespace PagseguroApi\Model;

use JsonSerializable;
use PagseguroApi\Model\PhoneModel;
use PagseguroApi\Api\LengthValidator;

class ContactModel implements JsonSerializable {

    /**
    * @var string $email
    */
    private $email;

    /**
    * @var \PagseguroApi\Model\PhoneModel[] $phones
    */
    private $phones = [];

    public function addPhone($ddi, $ddd, $number) {

        $phone = new PhoneModel(
            $ddi,
            $ddd,
            $number
        );

        array_push($this->phones, $phone);
    }

    public function getPhones() {
        return $this->phones;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function jsonSerialize() {
        
        $json = [
            $this->phones
        ];

        return $json;
    }

}