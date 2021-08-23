<?php

namespace AlibabaCloud\Client\Filter;

use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class HttpFilter
 *
 * @package AlibabaCloud\Client\Filter
 */
class HttpFilter
{
    /**
     * @param $host
     *
     * @return string
     *
     * @throws ClientException
     */
    public static function host($host)
    {
        if (!is_string($host)) {
            throw new ClientException(
                'Host must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($host === '') {
            throw new ClientException(
                'Host cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $host;
    }

    /**
     * @param $scheme
     *
     * @return string
     *
     * @throws ClientException
     */
    public static function scheme($scheme)
    {
        if (!is_string($scheme)) {
            throw new ClientException(
                'Scheme must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($scheme === '') {
            throw new ClientException(
                'Scheme cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $scheme;
    }

    /**
     * @param $body
     *
     * @return mixed
     * @throws ClientException
     */
    public static function body($body)
    {
        if (!is_string($body) && !is_numeric($body)) {
            throw new ClientException(
                'Body must be a string or int',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($body === '') {
            throw new ClientException(
                'Body cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $body;
    }

    /**
     * @param $method
     *
     * @return mixed
     * @throws ClientException
     */
    public static function method($method)
    {
        if (!is_string($method)) {
            throw new ClientException(
                'Method must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($method === '') {
            throw new ClientException(
                'Method cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return \strtoupper($method);
    }

    /**
     * @param $contentType
     *
     * @return mixed
     * @throws ClientException
     */
    public static function contentType($contentType)
    {
        if (!is_string($contentType)) {
            throw new ClientException(
                'Content-Type must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($contentType === '') {
            throw new ClientException(
                'Content-Type cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $contentType;
    }

    /**
     * @param $accept
     *
     * @return mixed
     * @throws ClientException
     */
    public static function accept($accept)
    {
        if (!is_string($accept)) {
            throw new ClientException(
                'Accept must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($accept === '') {
            throw new ClientException(
                'Accept cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $accept;
    }
}
