<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class CreditCardDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $encrypted public property
     */
    public $encrypted;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $security_code public property
     */
    public $security_code;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\CreditCardHolderDto $holder public property
     */
    public $holder;

    /**
     * @todo Write general description for this property
     * @required
     * @var bool $store public property
     */
    public $store;
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $brand public property
     */
    public $brand;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $first_digits public property
    */
    public $first_digits;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $last_digits public property
    */
    public $last_digits;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $exp_month public property
    */
    public $exp_month;

    /**
     * @todo Write general description for this property
     * @required
     * @var string|null $exp_year public property
    */
    public $exp_year;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $encrypted 
     * @param string $security_code 
     * @param \PagseguroApi\Api\Dto\CreditCardHolderDto $holder 
     * @param bool $store 
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->encrypted = func_get_arg(0);
            $this->security_code = func_get_arg(1);
            $this->holder = func_get_arg(2);
            $this->store = func_get_arg(3);
            $this->brand = func_get_arg(4);
            $this->first_digits = func_get_arg(5);
            $this->last_digits = func_get_arg(6);
            $this->exp_month = func_get_arg(7);
            $this->exp_year = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['encrypted'] = $this->encrypted;
        $json['security_code'] = $this->security_code;
        $json['holder'] = $this->holder;
        $json['store'] = $this->store;
        $json['brand'] = $this->brand;
        $json['first_digits'] = $this->first_digits;
        $json['last_digits'] = $this->last_digits;
        $json['exp_month'] = $this->exp_month;
        $json['exp_year'] = $this->exp_year;
        return $json;
    }
}
