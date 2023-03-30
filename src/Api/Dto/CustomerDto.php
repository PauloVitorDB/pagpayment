<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;
use PagarmeCoreApiLib\Utils\DateTimeHelper;

class CustomerDto implements JsonSerializable
{

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $tax_id public property
     */
    public $tax_id;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\PhoneDto[]|null $phones public property
     */
    public $phones;

    /**
     * Constructor to set initial or default values of member properties
     * @param string              $name  
     * @param string              $email 
     * @param string              $tax_id
     * @param \PagseguroApi\Api\Dto\PhoneDto[]|null $phones
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->name          = func_get_arg(1);
            $this->email         = func_get_arg(2);
            $this->tax_id    = func_get_arg(3);
            $this->phones     = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['phones']              = $this->phones;
        $json['name']            = $this->name;
        $json['email']           = $this->email;
        $json['tax_id']      = $this->tax_id;

        return $json;
    }
}
