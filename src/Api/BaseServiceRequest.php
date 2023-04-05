<?php

namespace PagseguroApi\Api;

use PagseguroApi\Util\ApiRest;
use PagseguroApi\Util\RequestInterface;

abstract class BaseServiceRequest {

    protected RequestInterface $request;

    public function __construct($BASE_URL) {
        $this->request = new ApiRest($BASE_URL);
    }

}