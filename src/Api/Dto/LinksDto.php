<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class LinksDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var string $rel public property
     */
    public $rel;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $href public property
     */
    public $href;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $media public property
     */
    public $media;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

       /**
     * Constructor to set initial or default values of member properties
     * @param string $rel
     * @param string $href     
     * @param string $media   
     * @param string $type   
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->rel = func_get_arg(0);
            $this->href = func_get_arg(1);
            $this->media = func_get_arg(2);
            $this->type = func_get_arg(3);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['rel'] = $this->rel;
        $json['href'] = $this->href;
        $json['media'] = $this->media;
        $json['type'] = $this->type;
        return $json;
    }
}
