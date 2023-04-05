<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class TokenDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $token_type public property
    */
    public $token_type;

     /**
     * @todo Write general description for this property
     * @required
     * @var string $access_token public property
    */
    public $access_token;


     /**
     * @todo Write general description for this property
     * @required
     * @var string $expires_in public property
    */
    public $expires_in;


     /**
     * @todo Write general description for this property
     * @required
     * @var string $refresh_token public property
    */
    public $refresh_token;


     /**
     * @todo Write general description for this property
     * @required
     * @var string $scope public property
    */
    public $scope;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $account_id public property
    */
    public $account_id;

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['token_type'] = $this->token_type;
        $json['access_token'] = $this->access_token;
        $json['expires_in'] = $this->expires_in;
        $json['refresh_token'] = $this->refresh_token;
        $json['scope'] = $this->scope;
        $json['account_id'] = $this->account_id;
        return $json;
    }
}
