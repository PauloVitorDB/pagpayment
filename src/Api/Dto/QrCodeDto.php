<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class QrCodeDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $text public property
     */
    public $text;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\LinksDto[]|null $links public property
     */
    public $links;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\AmountDto $amount public property
     */
    public $amount;

     /**
     * Constructor to set initial or default values of member properties
     * @param integer $id
     * @param integer $text
     * @param integer $links
     * @param integer $amount
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->id = func_get_arg(0);
            $this->text = func_get_arg(1);
            $this->links = func_get_arg(2);
            $this->amount = func_get_arg(3);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id'] = $this->id;
        $json['text'] = $this->text;
        $json['links'] = $this->links;
        $json['amount'] = $this->amount;
        return $json;
    }
}
