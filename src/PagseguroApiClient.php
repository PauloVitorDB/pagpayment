<?php

namespace PagseguroApi;

use PagseguroApi\Api\Authentication;
use PagseguroApi\Api\Environment;

class PagseguroApiClient {

    public function __construct(
        $access_token,
        $sandbox_environment = false
    ) {
        //if(substr($access_token, -1) != "=") $access_token .= "=";
        
        Authentication::$TOKEN = $access_token;
        Environment::defineEnvironment($sandbox_environment);
    }


    public function getTransactionService() {
        return \PagseguroApi\Api\Services\TransactionService::getInstance();
    }

    public function getPublicKeyService() {
        return \PagseguroApi\Api\Services\PublicKeyService::getInstance();
    }

    public function getSessionService() {
        return \PagseguroApi\Api\Services\SessionService::getInstance();
    }

    public function getInstallmentsService() {
        return \PagseguroApi\Api\Services\InstallmentsService::getInstance();
    }

}