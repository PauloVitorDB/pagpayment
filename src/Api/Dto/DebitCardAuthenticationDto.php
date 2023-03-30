<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class DebitCardAuthenticationDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Model\CustomerModel  $customer public property
     */
    public $customer;

    public $amount_value;

    
     /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Model\AddressModel $billingAddress public property
     */
    public $billingAddress;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Model\AddressModel $shippingAddress public property
     */
    public $shippingAddress;

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        
        $json['data'] = [
            "customer" => $this->customer,
            "amount" => [
                "value" => $this->amount_value,
                "currency" => "BRL",
            ],
            "billingAddress" => [
                "street" => $this->billingAddress->getStreet(),
                "number" => $this->billingAddress->getNumber(),
                "complement" => $this->billingAddress->getComplement(),
                "regionCode" => $this->billingAddress->getRegionCode(),
                "country" => "BRA",
                "city" => $this->billingAddress->getCity(),
                "postalCode" => $this->billingAddress->getPostalCode()
            ],
            "shippingAddress" => [
                "street" => $this->shippingAddress->getStreet(),
                "number" => $this->shippingAddress->getNumber(),
                "complement" => $this->shippingAddress->getComplement(),
                "regionCode" => $this->shippingAddress->getRegionCode(),
                "country" => "BRA",
                "city" => $this->shippingAddress->getCity(),
                "postalCode" => $this->shippingAddress->getPostalCode()
            ],
            "dataOnly" => false
        ];

        return $json;
    }

    /**
     * Get $shippingAddress public property
     *
     * @return  \PagseguroApi\Model\AddressModel
     */ 
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Set $shippingAddress public property
     *
     * @param  \PagseguroApi\Model\AddressModel  $shippingAddress  $shippingAddress public property
     *
     * @return  self
     */ 
    public function setShippingAddress(\PagseguroApi\Model\AddressModel $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get $billingAddress public property
     *
     * @return  \PagseguroApi\Model\AddressModel
     */ 
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Set $billingAddress public property
     *
     * @param  \PagseguroApi\Model\AddressModel  $billingAddress  $billingAddress public property
     *
     * @return  self
     */ 
    public function setBillingAddress(\PagseguroApi\Model\AddressModel $billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * Get the value of amount_value
     */ 
    public function getAmountValue()
    {
        return $this->amount_value;
    }

    /**
     * Set the value of amount_value
     *
     * @return  self
     */ 
    public function setAmountValue($amount_value)
    {
        $this->amount_value = $amount_value;

        return $this;
    }

    /**
     * Get $customer public property
     *
     * @return \PagseguroApi\Model\CustomerModel 
     */ 
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set $customer public property
     *
     * @param \PagseguroApi\Model\CustomerModel string  $customer  $customer public property
     *
     * @return  self
     */ 
    public function setCustomer(\PagseguroApi\Model\CustomerModel $customer)
    {
        $this->customer = $customer;

        return $this;
    }
}
