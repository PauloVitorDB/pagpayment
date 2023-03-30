<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class OrderItemDto implements JsonSerializable {

    /**
     * reference_id
     * @required
     * @var string $reference_id public property
     */
    public $reference_id;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $unit_amount public property
     */
    public $unit_amount;

    /**
     * @todo Write general name for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $quantity public property
     */
    public $quantity;

    /**
     * Category
     * @required
     * @var string $category public property
     */
    public $category;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $reference_id          Initialization value for $this->reference_id
     * @param integer $name      Initialization value for $this->name
     * @param string  $quantity Initialization value for $this->quantity
     * @param integer $unit_amount    Initialization value for $this->unit_amount
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->reference_id          = func_get_arg(0);
            $this->name      = func_get_arg(1);
            $this->quantity = func_get_arg(2);
            $this->unit_amount    = func_get_arg(3);
        }
    }

    public function jsonSerialize()
    {
        $json = array();
        $json['reference_id']          = $this->reference_id;
        $json['name']      = $this->name;
        $json['quantity'] = $this->quantity;
        $json['unit_amount']    = $this->unit_amount;

        return $json;
    }
}
