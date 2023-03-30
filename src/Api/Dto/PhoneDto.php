<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class PhoneDto implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $country public property
     */
    public $country;

    /**
     * @todo Write general description for this property
     * @var string|null $number public property
     */
    public $number;

    /**
     * @todo Write general description for this property
     * @var string|null $area public property
     */
    public $area;

    /**
     * @todo Write general description for this property
     * @var string|null $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $country
     * @param string $area     
     * @param string $number   
     * @param string $type   
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->country = func_get_arg(0);
            $this->area      = func_get_arg(1);
            $this->number    = func_get_arg(2);
            $this->type    = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['country'] = $this->country;
        $json['area']       = $this->area;
        $json['number']    = $this->number;
        $json['type']    = $this->type;

        return $json;
    }
}
