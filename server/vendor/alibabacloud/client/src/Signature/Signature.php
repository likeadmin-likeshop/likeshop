<?php

namespace AlibabaCloud\Client\Signature;

use GuzzleHttp\Psr7\Request;
use AlibabaCloud\Client\Support\Sign;

/**
 * Class Signature
 *
 * @package AlibabaCloud\Client\Signature
 */
abstract class Signature
{

    /**
     * @codeCoverageIgnore
     *
     * @param string  $accessKeyId
     * @param string  $accessKeySecret
     * @param Request $request
     *
     * @return string
     */
    public function roa($accessKeyId, $accessKeySecret, Request $request)
    {
        $string = Sign::roaString($request);

        $signature = $this->sign($string, $accessKeySecret);

        return "acs $accessKeyId:$signature";
    }

    /**
     * @codeCoverageIgnore
     *
     * @param string $accessKeySecret
     * @param string $method
     * @param array  $parameters
     *
     * @return string
     */
    public function rpc($accessKeySecret, $method, array $parameters)
    {
        $string = Sign::rpcString($method, $parameters);

        return $this->sign($string, $accessKeySecret . '&');
    }
}
