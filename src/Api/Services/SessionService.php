<?php

namespace PagseguroApi\Api\Services;

use PagseguroApi\Api\BaseServiceRequest;
use PagseguroApi\Api\Dto\SessionDto;
use PagseguroApi\Util\ApiRest;
use PagseguroApi\Util\ResponseHttpRange;
use PagseguroApi\Util\Response;
use PagseguroApi\Api\Environment;
use PagseguroApi\Api\Authentication;

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

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            [
                "Content-Type: application/json",
                "Authorization: Bearer " . Authentication::$USER_TOKEN
            ],
            null
        );
      
        Response::validate($response, $http_code);

        $mapper = new \JsonMapper();
        $sessionDto = $mapper->map($response, new SessionDto());
       
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::POST,
            $sessionDto,
            '',
            $response,
            $req_headers,
            $url,
            $http_code, 
            $responseHttpRange
            )
        );
        
    }


}