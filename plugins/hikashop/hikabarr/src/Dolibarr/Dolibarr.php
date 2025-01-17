<?php

namespace Systrio\Plugins\Hikabarr\Dolibarr;

use Systrio\Plugins\Hikabarr\Dolibarr\RequestApi;

class Dolibarr
{
    public RequestApi $requestApi;

    public function __construct(string $api_url, string $token)
    {
        $this->requestApi = new RequestApi($api_url, $token);
    }

    public function requestApi()
    {
        return $this->requestApi;
    }
}