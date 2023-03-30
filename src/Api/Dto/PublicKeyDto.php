<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class PublicKeyDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $public_key public property
     */
    public $public_key;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $public_key Initialization value for $this->address
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->public_key = func_get_arg(0);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['public_key'] = $this->public_key;
        return $json;
    }
}
