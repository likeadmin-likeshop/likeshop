<?php

namespace AlibabaCloud\Client\Filter;

use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class ApiFilter
 *
 * @package AlibabaCloud\Client\Filter
 */
class ApiFilter
{
    /**
     * @param $serviceCode
     *
     * @return mixed
     * @throws ClientException
     */
    public static function serviceCode($serviceCode)
    {
        if (!is_string($serviceCode)) {
            throw new ClientException(
                'Service Code must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($serviceCode === '') {
            throw new ClientException(
                'Service Code cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $serviceCode;
    }

    /**
     * @param $endpointType
     *
     * @return mixed
     * @throws ClientException
     */
    public static function endpointType($endpointType)
    {
        if (!is_string($endpointType)) {
            throw new ClientException(
                'Endpoint Type must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($endpointType === '') {
            throw new ClientException(
                'Endpoint Type cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $endpointType;
    }

    /**
     * @param $action
     *
     * @return mixed
     * @throws ClientException
     */
    public static function action($action)
    {
        if (!is_string($action)) {
            throw new ClientException(
                'Action must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($action === '') {
            throw new ClientException(
                'Action cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $action;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param string $endpointSuffix
     *
     * @return mixed
     * @throws ClientException
     */
    public static function endpointSuffix($endpointSuffix)
    {
        if (!is_string($endpointSuffix)) {
            throw new ClientException(
                'Endpoint Suffix must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($endpointSuffix === '') {
            throw new ClientException(
                'Endpoint Suffix cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        if (!preg_match("/^[a-zA-Z0-9_-]+$/", $endpointSuffix)) {
            throw new ClientException(
                'Invalid Endpoint Suffix',
                SDK::INVALID_ARGUMENT
            );
        }

        return $endpointSuffix;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param string $network
     *
     * @return mixed
     * @throws ClientException
     */
    public static function network($network)
    {
        if (!is_string($network)) {
            throw new ClientException(
                'Network Suffix must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($network === '') {
            throw new ClientException(
                'Network Suffix cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        if (!preg_match("/^[a-zA-Z0-9_-]+$/", $network)) {
            throw new ClientException(
                'Invalid Network Suffix',
                SDK::INVALID_ARGUMENT
            );
        }

        return $network;
    }

    /**
     * @param string $version
     *
     * @return mixed
     * @throws ClientException
     */
    public static function version($version)
    {
        if (!is_string($version)) {
            throw new ClientException(
                'Version must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($version === '') {
            throw new ClientException(
                'Version cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $version;
    }

    /**
     * @param $format
     *
     * @return mixed
     * @throws ClientException
     */
    public static function format($format)
    {
        if (!is_string($format)) {
            throw new ClientException(
                'Format must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($format === '') {
            throw new ClientException(
                'Format cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return \strtoupper($format);
    }

    /**
     * @param $product
     *
     * @return string
     *
     * @throws ClientException
     */
    public static function product($product)
    {
        if (!is_string($product)) {
            throw new ClientException(
                'Product must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($product === '') {
            throw new ClientException(
                'Product cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $product;
    }

    /**
     * @param $pattern
     *
     * @return string
     *
     * @throws ClientException
     */
    public static function pattern($pattern)
    {
        if (!is_string($pattern)) {
            throw new ClientException(
                'Pattern must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($pattern === '') {
            throw new ClientException(
                'Pattern cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $pattern;
    }
}
