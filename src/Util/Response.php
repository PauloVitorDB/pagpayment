<?php

namespace PagseguroApi\Util;
use Exception;

class Response {

    private $response;
    private $request_response;
    private $body;
    private $request_headers;
    private $request_url;
    private $http_code;
    private $success;

    public function __construct($response, $body, $request_response, $request_headers, $request_url, $http_code, ResponseHttpRange $response_http_range) {
       
        $this->response = $response;
        $this->request_response = $request_response;
        $this->http_code = $http_code;
        $this->request_headers = $request_headers;
        $this->request_url = $request_url;
        $this->body = $body;

        if(
            $http_code >= $response_http_range->getStartHttpCode()
            && $http_code <= $response_http_range->getEndHttpCode()
        ) {
            $this->success = true;
        } else {
            $this->success = false;
        }
    }

    public static function validate($response, $http_code) {
        
        switch($http_code) {
            case 0:
                throw new Exception("0 - Unable to receive a response from the serve " . json_encode($response));
            break;
            case 400:
                throw new Exception("400 - Bad Request " . json_encode($response));
            break;
            case 401:
                throw new Exception("401 － Unauthorized" . json_encode($response));
            break;
            case 403:
                throw new Exception("403 - Forbidden" . json_encode($response));
            break;
            case 404:
                throw new Exception("404 - Not Found" . json_encode($response));
            break;
            case 406:
                throw new Exception("406 - Not Acceptable" . json_encode($response));
            break;
            case 409:
                throw new Exception("409 - Conflict" . json_encode($response));
            break;
            case 500:
                throw new Exception("500 - Internal Server Error" . json_encode($response));
            break;
            default:
            break;
        }

    }

    /**
     * Get the value of response
     */ 
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set the value of response
     *
     * @return  self
     */ 
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get the value of http_code
     */ 
    public function getHttpCode()
    {
        return $this->http_code;
    }

    /**
     * Set the value of http_code
     *
     * @return  self
     */ 
    public function setHttpCode($http_code)
    {
        $this->http_code = $http_code;

        return $this;
    }

    /**
     * Get the value of success
     */ 
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Set the value of success
     *
     * @return  self
     */ 
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * Get the value of request_response
     */ 
    public function getRequestResponse()
    {
        return $this->request_response;
    }

    /**
     * Set the value of request_response
     *
     * @return  self
     */ 
    public function setRequestResponse($request_response)
    {
        $this->request_response = $request_response;

        return $this;
    }

    /**
     * Get the value of request_headers
     */ 
    public function getRequestHeaders()
    {
        return $this->request_headers;
    }

    /**
     * Set the value of request_headers
     *
     * @return  self
     */ 
    public function setRequestHeaders($request_headers)
    {
        $this->request_headers = $request_headers;

        return $this;
    }

    /**
     * Get the value of request_url
     */ 
    public function getRequestUrl()
    {
        return $this->request_url;
    }

    /**
     * Set the value of request_url
     *
     * @return  self
     */ 
    public function setRequestUrl($request_url)
    {
        $this->request_url = $request_url;

        return $this;
    }

    /**
     * Get the value of body
     */ 
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set the value of body
     *
     * @return  self
     */ 
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }
}