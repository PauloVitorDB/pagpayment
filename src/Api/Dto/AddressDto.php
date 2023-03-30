<?php
namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class AddressDto implements JsonSerializable {
   
    /**
     * @todo Write general description for this property
     * @required
     * @var string $street public property
     */
    public $street;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $number public property
     */
    public $number;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $complement public property
     */
    public $complement;

    /**
     * @todo Write general description for this property
     * @required
     * @maps postal_code
     * @var string $postal_code public property
     */
    public $postal_code;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $locality public property
     */
    public $locality;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $region_code public property
     */
    public $region_code;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $street
     * @param string $number
     * @param string $complement
     * @param string $postal_code
     * @param string $locality
     * @param string $city
     * @param string $region_code
     * @param string $country
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->street           = func_get_arg(0);
            $this->number       = func_get_arg(1);
            $this->complement       = func_get_arg(2);
            $this->postal_code   = func_get_arg(3);
            $this->locality      = func_get_arg(4);
            $this->city = func_get_arg(5);
            $this->region_code         = func_get_arg(6);
            $this->country         = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['street']       = $this->street;
        $json['number']       = $this->number;
        $json['complement']   = $this->complement;
        $json['postal_code']     = $this->postal_code;
        $json['locality'] = $this->locality;
        $json['city']         = $this->city;
        $json['region_code']        = $this->region_code;
        $json['country']      = $this->country;

        return $json;
    }
}
