<?php

namespace PagseguroApi\Api\Services;

use PagseguroApi\Api\BaseServiceRequest;
use PagseguroApi\Api\Dto\SessionDto;
use PagseguroApi\Util\ApiRest;
use PagseguroApi\Util\ResponseHttpRange;
use PagseguroApi\Util\Response;
use PagseguroApi\Api\Environment;

class SessionService extends BaseServiceRequest {

    private static $instance;

    private function __construct() {
        parent::__construct(Environment::$BASE_URL_SDK);
    }

    public static function getInstance() {

        if(is_null(self::$instance)) self::$instance = new self; 

        return self::$instance;
    }

    public function createSession() {

        $endpoint = '/checkout-sdk/sessions';

        list($response, $http_code) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            ["Content-Type: application/json"],
            null
        );
      
        Response::validate($response, $http_code);

        $mapper = new \JsonMapper();
        $sessionDto = $mapper->map($response, new SessionDto());
       
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response($sessionDto, $http_code, $responseHttpRange) );
        
    }


}