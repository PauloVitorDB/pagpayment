<?php
namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class CreditCardHolderDto implements JsonSerializable {

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->name = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name'] = $this->name;
        return $json;
    }
    
}