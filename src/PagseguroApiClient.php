<?php

namespace PagseguroApi;

use PagseguroApi\Api\Authentication;
use PagseguroApi\Api\Environment;

class PagseguroApiClient {

    public function __construct(
        $application_token,
        $user_token = "",
        $sandbox_environment = false,
        $redirect_uri = ''
    ) {
        Authentication::$APPLICATION_TOKEN = $application_token;
        Authentication::$USER_TOKEN = $user_token;
        Environment::defineEnvironment($sandbox_environment);
        if(strlen($redirect_uri) > 0) Environment::$APPLICATION_REDIRECT_URI = $redirect_uri;
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

    public function getTokenService() {
        return \PagseguroApi\Api\Services\TokenService::getInstance();
    }

}