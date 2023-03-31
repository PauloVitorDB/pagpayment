<?php

namespace PagseguroApi\Api\Services;

use PagseguroApi\Api\BaseServiceRequest;
use PagseguroApi\Api\Dto\PublicKeyDto;
use PagseguroApi\Util\ApiRest;
use PagseguroApi\Util\ResponseHttpRange;
use PagseguroApi\Util\Response;
use PagseguroApi\Api\Environment;

class PublicKeyService extends BaseServiceRequest {

    private static $instance;

    private function __construct() {
        parent::__construct(Environment::$BASE_URL);
    }

    public static function getInstance() {

        if(is_null(self::$instance)) self::$instance = new self; 

        return self::$instance;
    }

    public function createPublicKey($type) {

        $endpoint = '/public-keys/';

        $body = json_encode(["type" => $type]);

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            ["Content-Type: application/json"],
            $body
        );
      
        $mapper = new \JsonMapper();
        $publicKeyDto = $mapper->map($response, new PublicKeyDto());
       
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::POST,
            $publicKeyDto,
            $body,
            $response,
            $req_headers,
            $url,
            $http_code,
            $responseHttpRange
            )
        );
        
    }

    public function getPublicKeys($type) {

        $endpoint = "/public-keys/$type";

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::GET,
            ["Content-Type: application/json"]
        );
        
        Response::validate($response, $http_code);

        $mapper = new \JsonMapper();
        $publicKeyDto = $mapper->map($response, new PublicKeyDto());
       
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::GET,
            $publicKeyDto,
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