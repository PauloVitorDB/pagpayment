<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class ShippingDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\AddressDto $address public property
     */
    public $address;

    /**
     * Constructor to set initial or default values of member properties
     * @param \PagseguroApi\Api\Dto\AddressDto $address Initialization value for $this->address
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->address = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['address'] = $this->address;
        return $json;
    }
}
