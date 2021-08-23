<?php

namespace App\Api;

use App\Config\YlyConfig;
use App\Protocol\YlyRpcClient;

class RpcService{

    protected $client;

    public function __construct($token, YlyConfig $config)
    {
        $this->client = new YlyRpcClient($token, $config);
    }

}