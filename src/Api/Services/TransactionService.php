<?php

namespace PagseguroApi\Api\Services;

use PagseguroApi\Api\BaseServiceRequest;
use PagseguroApi\Api\Dto\OrderTransactionDto;
use PagseguroApi\Api\Environment;
use PagseguroApi\Model\OrderModel;
use PagseguroApi\Util\ApiRest;
use PagseguroApi\Util\ResponseHttpRange;
use PagseguroApi\Util\Response;

class TransactionService extends BaseServiceRequest {

    private static $instance;

    private function __construct() {
        parent::__construct(Environment::$BASE_URL);
    }

    public static function getInstance() {

        if(is_null(self::$instance)) self::$instance = new self; 

        return self::$instance;
    }

    public function createTransaction(
        OrderModel $order
    ) {

        $endpoint = '/orders';

        $body = json_encode($order);

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::POST,
            ["Content-Type: application/json"],
            $body
        );
      
        Response::validate($response, $http_code);

        $mapper = new \JsonMapper();
        $orderTransactionDto = $mapper->map($response, new OrderTransactionDto());
      
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::POST,
            $orderTransactionDto,
            $body,
            $response,
            $req_headers,
            $url,
            $http_code,
            $responseHttpRange
            )
        );
        
    }

    public function getTransaction($pagseguro_order_id) {

        $endpoint = "/orders/$pagseguro_order_id";

        list($response, $http_code, $req_headers, $url) = $this->request->defaultRequest(
            $endpoint,
            ApiRest::GET,
            ["Content-Type: application/json"]
        );
      
        $mapper = new \JsonMapper();
        $orderTransactionDto = $mapper->map($response, new OrderTransactionDto());
       
        $responseHttpRange = new ResponseHttpRange(200, 299);
        return ( new Response(
            ApiRest::GET,
            $orderTransactionDto,
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