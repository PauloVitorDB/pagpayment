<?php

namespace PagseguroApi\Api;

abstract class Environment {

    private static $BASE_URL_PRODUCTION = "https://api.pagseguro.com";
    
    private static $BASE_URL_SDK_PRODUCTION = "https://sdk.pagseguro.com";

    private static $BASE_URL_SANDBOX = "https://sandbox.api.pagseguro.com";
    
    private static $BASE_URL_SDK_SANDBOX = "https://sandbox.sdk.pagseguro.com";

    public static $BASE_URL;
    public static $BASE_URL_SDK;

    public static function production () {
        self::$BASE_URL = self::$BASE_URL_PRODUCTION;
        self::$BASE_URL_SDK = self::$BASE_URL_SDK_PRODUCTION;
    }

    public static function sandbox () {
        self::$BASE_URL = self::$BASE_URL_SANDBOX;  
        self::$BASE_URL_SDK = self::$BASE_URL_SDK_SANDBOX;  
    }

    public static function defineEnvironment($sandbox_enabled) {
        if($sandbox_enabled) {
            self::sandbox();
        } else {
            self::production();
        }
    }
}