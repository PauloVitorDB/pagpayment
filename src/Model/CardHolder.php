<?php 

namespace PagseguroApi\Model;
use JsonSerializable;

class CardHolder implements JsonSerializable {
    
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function jsonSerialize() {

        $json = [
            "name" => $this->name
        ];

        return $json;
    }

} 