<?php

namespace AlibabaCloud\Client\Filter;

use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class CredentialFilter
 *
 * @package AlibabaCloud\Client\Filter
 */
class CredentialFilter
{
    /**
     * @param $bearerToken
     *
     * @return mixed
     * @throws ClientException
     */
    public static function bearerToken($bearerToken)
    {
        if (!is_string($bearerToken)) {
            throw new ClientException(
                'Bearer Token must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($bearerToken === '') {
            throw new ClientException(
                'Bearer Token cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $bearerToken;
    }

    /**
     * @param $publicKeyId
     *
     * @return mixed
     * @throws ClientException
     */
    public static function publicKeyId($publicKeyId)
    {
        if (!is_string($publicKeyId)) {
            throw new ClientException(
                'Public Key ID must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($publicKeyId === '') {
            throw new ClientException(
                'Public Key ID cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $publicKeyId;
    }

    /**
     * @param $privateKeyFile
     *
     * @return mixed
     * @throws ClientException
     */
    public static function privateKeyFile($privateKeyFile)
    {
        if (!is_string($privateKeyFile)) {
            throw new ClientException(
                'Private Key File must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($privateKeyFile === '') {
            throw new ClientException(
                'Private Key File cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $privateKeyFile;
    }

    /**
     * @param $roleName
     *
     * @return string
     *
     * @throws ClientException
     */
    public static function roleName($roleName)
    {
        if (!is_string($roleName)) {
            throw new ClientException(
                'Role Name must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($roleName === '') {
            throw new ClientException(
                'Role Name cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $roleName;
    }

    /**
     * @param string $accessKeyId
     * @param string $accessKeySecret
     *
     * @throws ClientException
     */
    public static function AccessKey($accessKeyId, $accessKeySecret)
    {
        if (!is_string($accessKeyId)) {
            throw new ClientException(
                'AccessKey ID must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($accessKeyId === '') {
            throw new ClientException(
                'AccessKey ID cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        if (!is_string($accessKeySecret)) {
            throw new ClientException(
                'AccessKey Secret must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($accessKeySecret === '') {
            throw new ClientException(
                'AccessKey Secret cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }
    }
}
