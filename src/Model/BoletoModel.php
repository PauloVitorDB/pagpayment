<?php 

namespace PagseguroApi\Model;
use JsonSerializable;

class BoletoModel implements JsonSerializable {
    
    private $due_date;
    
    private $line_1 = "";

    private $line_2 = "";

    private \PagseguroApi\Model\BoletoHolder $holder;

    /**
     * Get the value of holder
     */ 
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * Set the value of holder
     *
     * @return  self
     */ 
    public function setHolder($holder)
    {
        $this->holder = $holder;

        return $this;
    }

    
    public function jsonSerialize() {

        $json = [
            "due_date" => $this->due_date,
            // "instruction_lines" => [
            //     "line_1" => $this->line_1,
            //     "line_2" => $this->line_2,
            // ],
            "holder" => $this->holder
        ];

        return $json;
    }

    /**
     * Get the value of due_date
     */ 
    public function getDueDate()
    {
        return $this->due_date;
    }

    /**
     * Set the value of due_date
     *
     * @return  self
     */ 
    public function setDueDate($due_date)
    {
        $this->due_date = $due_date;

        return $this;
    }

    /**
     * Get the value of line_1
     */ 
    public function getline1()
    {
        return $this->line_1;
    }

    /**
     * Set the value of line_1
     *
     * @return  self
     */ 
    public function setline1($line_1)
    {
        $this->line_1 = $line_1;

        return $this;
    }

    /**
     * Get the value of line_2
     */ 
    public function getline2()
    {
        return $this->line_2;
    }

    /**
     * Set the value of line_2
     *
     * @return  self
     */ 
    public function setline2($line_2)
    {
        $this->line_2 = $line_2;

        return $this;
    }
}