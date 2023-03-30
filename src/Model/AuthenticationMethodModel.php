<?php

namespace PagseguroApi\Model;

use JsonSerializable;

class AuthenticationMethodModel implements JsonSerializable {

    private $authentication_id;
    
    private $type = "THREEDS";

    /**
     * @param string $authentication_id
     **/
    public function __construct($authentication_id) {
        $this->authentication_id = $authentication_id;
    }

    public function jsonSerialize() {

        $json = [
            "type" => $this->type,
            "id" => $this->authentication_id
        ];

        return $json;
    }


    /**
     * Get the value of authentication_id
     */ 
    public function getAuthenticationId()
    {
        return $this->authentication_id;
    }

    /**
     * Set the value of authentication_id
     *
     * @return  self
     */ 
    public function setAuthenticationId($authentication_id)
    {
        $this->authentication_id = $authentication_id;

        return $this;
    }
}