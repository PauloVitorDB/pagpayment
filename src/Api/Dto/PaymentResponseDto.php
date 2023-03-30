<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class PaymentResponseDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $code public property
     */
    public $code;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $message public property
     */
    public $message;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $reference public property
     */
    public $reference;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $code
     * @param string $message
     * @param string $reference
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->code = func_get_arg(0);
            $this->message = func_get_arg(1);
            $this->reference = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['code'] = $this->code;
        $json['message'] = $this->message;
        $json['reference'] = $this->reference;
        return $json;
    }
}
