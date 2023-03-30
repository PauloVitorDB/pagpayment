<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class AmountDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $value public property
     */
    public $value;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $value
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->value = func_get_arg(0);
        }
    }
    
    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['value'] = $this->value;
        return $json;
    }
}
