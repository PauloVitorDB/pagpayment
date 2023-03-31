<?php

namespace PagseguroApi\Model;

use JsonSerializable;
use PagseguroApi\Api\LengthValidator;

class PhoneModel implements JsonSerializable {

    private $country_DDI;
    private $area_DDD;
    private $phone_number;
    private $type;

    const TYPE_MOBILE = "MOBILE";
    const TYPE_HOME = "HOME";

    /**
     * @param \PagseguroApi\Model\AddressModel $address
     **/
    public function __construct($country_DDI, $area_DDD, $phone_number, $type) {
        $this->country_DDI = $country_DDI;
        $this->area_DDD = $area_DDD;
        $this->phone_number = $phone_number;
        $this->type = $type;
    }

    public function jsonSerialize() {

        $json = [
            "country" => $this->country_DDI,
            "area" => $this->area_DDD,
            "number" => $this->phone_number,
            "type" => $this->type,
        ];

        return $json;
    }

}