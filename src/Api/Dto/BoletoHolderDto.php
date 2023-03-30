<?php
namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class BoletoHolderDto implements JsonSerializable {

    /**
     * @todo Write general description for this property
     * @required
     * @var string $name public property
     */
    public $name;

     /**
     * @todo Write general description for this property
     * @required
     * @var string $tax_id public property
     */
    public $tax_id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\AddressDto $address public property
     */
    public $address;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name
     * @param string $tax_id
     * @param string $email
     * @param \PagseguroApi\Api\Dto\AddressDto $address
    */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->name = func_get_arg(0);
            $this->tax_id = func_get_arg(1);
            $this->email = func_get_arg(2);
            $this->address = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name'] = $this->name;
        $json['tax_id'] = $this->tax_id;
        $json['email'] = $this->email;
        $json['address'] = $this->address;
        return $json;
    }
    
}