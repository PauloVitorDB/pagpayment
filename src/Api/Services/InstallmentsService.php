<?php

namespace PagseguroApi\Api\Services;

use PagseguroApi\Api\BaseServiceRequest;
use PagseguroApi\Util\ApiRest;
use PagseguroApi\Util\ResponseHttpRange;
use PagseguroApi\Util\Response;
use PagseguroApi\Api\Environment;
use PagseguroApi\Api\Authentication;

class InstallmentsService extends BaseServiceRequest {

    private static $instance;

    private function __construct() {
        parent::__construct(Environment::$BASE_URL);
    }

    public static function getInstance() {

        if(is_null(self::$instance)) self::$instance = new self; 

        return self::$instance;
    }

    public function getInstallments(\PagseguroApi\Model\InstallmentsModel $installmentsModel) {

        $endpoint = '/charges/fees/calculate?';

        $endpoint .= $installmentsModel->toQueryParameters();

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::GET,
            [
                "Content-Type: application/json",
                "Authorization: Bearer " . Authentication::$USER_TOKEN
            ]
        );
        
        Response::validate($response, $http_code);
       
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::GET,
            $response,
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