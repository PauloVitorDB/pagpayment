<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class InstructionLinesDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $line_1 public property
     */
    public $line_1;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $line_2 public property
    */
    public $line_2;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $line_1
     * @param string $line_2
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->line_1 = func_get_arg(0);
            $this->line_2 = func_get_arg(0);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['line_1'] = $this->line_1;
        $json['line_2'] = $this->line_2;
        return $json;
    }
}
