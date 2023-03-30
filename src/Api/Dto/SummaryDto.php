<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class SummaryDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var integer $total public property
     */
    public $total;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $paid public property
     */
    public $paid;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $refunded public property
     */
    public $refunded;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $total
     * @param integer $paid
     * @param integer $refunded
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->total = func_get_arg(0);
            $this->paid = func_get_arg(0);
            $this->refunded = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['total'] = $this->total;
        $json['paid'] = $this->paid;
        $json['refunded'] = $this->refunded;
        return $json;
    }
}
