<?php

namespace PagseguroApi\Model;

use JsonSerializable;

namespace PagseguroApi\Model;

use JsonSerializable;

class CustomerModel implements JsonSerializable {

    private $name;
    private ContactModel $contact;

    private AddressModel $address;

    private $document_number;

    public function __construct() {
        if(func_num_args() == 3) {
            $this->name = func_get_arg(0);
            $this->contact = func_get_arg(1);
            $this->setDocumentNumber(func_get_arg(2));
        }
    }

    /**
     * Get the value of document_number
     */ 
    public function getDocumentNumber()
    {
        return $this->document_number;
    }

    /**
     * Set the value of document_number
     *
     * @return  self
     */ 
    public function setDocumentNumber($document_number)
    {
        $this->document_number = preg_replace("/[^0-9]/", '', trim($document_number));

        return $this;
    }

    public function jsonSerialize() {

        $json = [
            "name" => $this->name,
            "tax_id" => $this->document_number,
            "phones" => $this->contact->getPhones(),
            "email" => $this->contact->getEmail()
        ];

        return $json;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of contact
     */ 
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set the value of contact
     *
     * @return  self
     */ 
    public function setContact(ContactModel $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress(AddressModel $address)
    {
        $this->address = $address;

        return $this;
    }
}