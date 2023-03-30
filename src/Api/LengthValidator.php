<?php

namespace PagseguroApi\Api;

class LengthValidator {

    const MAX_API_PARAMETERS_LENGTH = [
        "street" => 160,
        "number" => 20,
        "complement" => 40,
        "locality" => 60,
        "city" => 90,
        "region" => 50,
        "region_code" => 2,
        "country" => 50,
        "postal_code" => 8,
        "phone" => [
            "country" => 3,
            "area" => 2,
            "number" => 9,
            "type" => 8,
        ]
    ];

    static function validate($api_plain_parameters = []) {

        foreach($api_plain_parameters as $api_parameter_name => $api_parameter_value) {
            
            if(isset(self::MAX_API_PARAMETERS_LENGTH[$api_parameter_name])) {
                $api_parameter_value = trim(substr(trim($api_parameter_value), 0, self::MAX_API_PARAMETERS_LENGTH[$api_parameter_value]));
            }

        }

        return $api_parameter_name;
    }

}