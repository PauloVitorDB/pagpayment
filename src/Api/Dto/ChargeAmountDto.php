<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class ChargeAmountDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $value public property
     */
    public $value;


    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\SummaryDto $summary public property
     */
    public $summary;


    /**
     * @todo Write general description for this property
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $value
     * @param integer $currency
     * @param \PagseguroApi\Api\Dto\SummaryDto $summary
    */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->value = func_get_arg(0);
            $this->currency = func_get_arg(1);
            $this->summary = func_get_arg(2);
        }
    }
    
    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {

        $json = array();
        $json['value'] = $this->value;
        $json['currency'] = $this->currency;
        $json['summary'] = $this->summary;

        return $json;
    }
}
