<?php

namespace PagseguroApi\Model;

use JsonSerializable;
use PagseguroApi\Api\LengthValidator;
use PagseguroApi\Model\OrderItemModel;

class OrderModel implements JsonSerializable {

    private $reference_id;
    
    private \PagseguroApi\Model\CustomerModel $customer;
    
    /**
    * @var \PagseguroApi\Model\OrderItemModel[] $items
    **/
    private $items = [];

    private \PagseguroApi\Model\ShippingModel $shipping;
    
    /**
    * @var \PagseguroApi\Model\QrCodeModel 
    */
    private $qr_code = null;
    
    private $notification_urls = [];
    
    private $charges = [];

    /**
    * @param \PagseguroApi\Model\AddressModel $address
    **/
    public function __construct() {
     
        if(func_num_args() == 5) {
            $this->reference_id = func_get_arg(0);
            $this->customer = func_get_arg(1);
            $this->items = func_get_arg(2);
            $this->shipping = func_get_arg(3);
        }

    }

    public function jsonSerialize() {

        $json = [
            "reference_id" => $this->reference_id,
            "customer" => $this->customer,
            "items" => $this->items,
            "notification_urls" => $this->notification_urls,
            "shipping" => $this->shipping
        ];

        if(!is_null($this->qr_code)) {
            $json["qr_codes"] = $this->qr_code;
        } else {
            $json["charges"] = $this->charges;
        }
        
        return $json;
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
     * Get the value of customer
     */ 
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set the value of customer
     *
     * @return  self
     */ 
    public function setCustomer(CustomerModel $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get the value of items
     * @return \PagseguroApi\Model\OrderItemModel[]
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     * @param \PagseguroApi\Model\OrderItemModel $name
     * @return  self
     */ 
    public function addItem(OrderItemModel $item)
    {
        array_push($this->items, $item);

        return $this;
    }

    /**
     * Get the value of shipping
     */ 
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set the value of shipping
     *
     * @return  self
     */ 
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get the value of qr_code
     */ 
    public function getQrCodes()
    {
        return $this->qr_code;
    }

    /**
     * Set the value of qr_code
     *
     * @return  self
     */ 
    public function setQrCodes($qr_code)
    {
        $this->qr_code = $qr_code;

        return $this;
    }

    /**
     * Get the value of notification_urls
     */ 
    public function getNotificationUrls()
    {
        return $this->notification_urls;
    }

    /**
     * Set the value of notification_urls
     *
     * @return  self
     */ 
    public function addNotificationUrls($notification_url)
    {
        array_push($this->notification_urls, $notification_url);

        return $this;
    }

    /**
     * Get the value of charges
     */ 
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * Set the value of charges
     *
     * @return  self
     */ 
    public function addCharges($charge)
    {
        array_push($this->charges, $charge);

        return $this;
    }
}