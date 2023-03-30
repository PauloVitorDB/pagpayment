<?php

namespace PagseguroApi\Model;

use JsonSerializable;

class OrderItemModel implements JsonSerializable {

    private $reference_id;
    private $name;
    private int $quantity;
    private int $unit_amount;


    function __construct() {

        if(func_num_args() == 4) {
            $this->reference_id = func_get_arg(0);
            $this->name = func_get_arg(1);
            $this->quantity = func_get_arg(2);
            $this->unit_amount = func_get_arg(3);
        }

    }

    public function jsonSerialize() {
        
        $json = [
            "reference_id" => $this->reference_id,
            "name" => $this->name,
            "quantity" => $this->quantity,
            "unit_amount" => $this->unit_amount
        ];

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
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of unit_amount
     */ 
    public function getUnitAmount()
    {
        return $this->unit_amount;
    }

    /**
     * Set the value of unit_amount
     *
     * @return  self
     */ 
    public function setUnitAmount($unit_amount)
    {
        $this->unit_amount = $unit_amount;

        return $this;
    }
}