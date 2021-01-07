<?php

namespace AlibabaCloud\Client\Traits;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Filter\Filter;
use AlibabaCloud\Client\Request\UserAgent;
use AlibabaCloud\Client\Request\RpcRequest;
use AlibabaCloud\Client\Request\RoaRequest;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Trait RequestTrait
 *
 * @package   AlibabaCloud\Client\Traits
 *
 * @mixin     AlibabaCloud
 */
trait RequestTrait
{
    /**
     * @param string $name
     * @param string $value
     *
     * @throws ClientException
     */
    public static function appendUserAgent($name, $value)
    {
        Filter::name($name);
        Filter::value($value);

        UserAgent::append($name, $value);
    }

    /**
     * @param array $userAgent
     */
    public static function withUserAgent(array $userAgent)
    {
        UserAgent::with($userAgent);
    }

    /**
     * @param array $options
     *
     * @return RpcRequest
     * @throws ClientException
     * @deprecated
     * @codeCoverageIgnore
     */
    public static function rpcRequest(array $options = [])
    {
        return self::rpc($options);
    }

    /**
     * @param array $options
     *
     * @return RpcRequest
     * @throws ClientException
     */
    public static function rpc(array $options = [])
    {
        return new RpcRequest($options);
    }

    /**
     * @param array $options
     *
     * @return RoaRequest
     * @throws ClientException
     * @deprecated
     * @codeCoverageIgnore
     */
    public static function roaRequest(array $options = [])
    {
        return self::roa($options);
    }

    /**
     * @param array $options
     *
     * @return RoaRequest
     * @throws ClientException
     */
    public static function roa(array $options = [])
    {
        return new RoaRequest($options);
    }
}
