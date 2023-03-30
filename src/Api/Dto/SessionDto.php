<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class SessionDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $public_key public property
     */
    public $session;

     /**
     * @todo Write general description for this property
     * @required
     * @var int $expires_at public property
     */
    public $expires_at;


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['session'] = $this->session;
        $json['expires_at'] = $this->expires_at;
        return $json;
    }
}
