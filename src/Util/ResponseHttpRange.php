<?php

namespace PagseguroApi\Util;

class ResponseHttpRange {

    private $start_http_code;
    private $end_http_code;

    public function __construct(int $start_http_code, int $end_http_code) {
        $this->start_http_code = $start_http_code;
        $this->end_http_code = $end_http_code;
    }

    /**
     * Get the value of start_code
     */ 
    public function getStartHttpCode()
    {
        return $this->start_http_code;
    }

    /**
     * Set the value of start_code
     *
     * @return  self
     */ 
    public function setStartHttpCode($start_http_code)
    {
        $this->start_http_code = $start_http_code;

        return $this;
    }

    /**
     * Get the value of end_code
     */ 
    public function getEndHttpCode()
    {
        return $this->end_http_code;
    }

    /**
     * Set the value of end_code
     *
     * @return  self
     */ 
    public function setEndHttpCode($end_http_code)
    {
        $this->end_http_code = $end_http_code;

        return $this;
    }
}