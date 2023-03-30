<?php

namespace PagseguroApi\Api\Dto;

use JsonSerializable;

class BoletoDto implements JsonSerializable {
    
    /**
     * @todo Write general description for this property
     * @required
     * @var \DateTime|null $due_date public property
     */
    public $due_date;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\BoletoHolderDto $holder public property
     */
    public $holder;

    /**
     * @todo Write general description for this property
     * @required
     * @var \PagseguroApi\Api\Dto\InstructionLinesDto $instruction_lines public property
     */
    public $instruction_lines;

     /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

     /**
     * @todo Write general description for this property
     * @required
     * @var string $barcode public property
     */
    public $barcode;

     /**
     * @todo Write general description for this property
     * @required
     * @var string $formatted_barcode public property
     */
    public $formatted_barcode;

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime|null $due_date 
     * @param \PagseguroApi\Api\Dto\InstructionLinesDto $instruction_lines 
     * @param \PagseguroApi\Api\Dto\BoletoHolderDto $holder 
     * @param string $id 
     * @param string $barcode 
     * @param string $formatted_barcode 
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->due_date = func_get_arg(0);
            $this->instruction_lines = func_get_arg(1);
            $this->holder = func_get_arg(2);
            $this->id = func_get_arg(3);
            $this->barcode = func_get_arg(4);
            $this->formatted_barcode = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id'] = $this->id;
        $json['barcode'] = $this->barcode;
        $json['formatted_barcode'] = $this->formatted_barcode;
        $json['due_date'] = $this->due_date;
        $json['instruction_lines'] = $this->instruction_lines;
        $json['holder'] = $this->holder;
        return $json;
    }
}
