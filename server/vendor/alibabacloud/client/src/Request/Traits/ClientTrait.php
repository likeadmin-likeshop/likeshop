<?php

namespace AlibabaCloud\Client\Request\Traits;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Clients\Client;
use AlibabaCloud\Client\Support\Arrays;
use AlibabaCloud\Client\Request\Request;
use AlibabaCloud\Client\Credentials\StsCredential;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Credentials\AccessKeyCredential;
use AlibabaCloud\Client\Credentials\Requests\AssumeRole;
use AlibabaCloud\Client\Credentials\CredentialsInterface;
use AlibabaCloud\Client\Credentials\BearerTokenCredential;
use AlibabaCloud\Client\Credentials\Providers\CredentialsProvider;
use AlibabaCloud\Client\Credentials\Requests\GenerateSessionAccessKey;

/**
 * Trait ClientTrait
 *
 * @package   AlibabaCloud\Client\Request\Traits
 *
 * @mixin     Request
 */
trait ClientTrait
{
    /**
     * @var array
     */
    private static $config = [];

    /**
     * @param array $config
     */
    public static function config(array $config)
    {
        self::$config = $config;
    }

    /**
     * Return credentials directly if it is an AssumeRole or GenerateSessionAccessKey.
     *
     * @return AccessKeyCredential|BearerTokenCredential|CredentialsInterface|StsCredential
     * @throws ClientException
     * @throws ServerException
     */
    public function credential()
    {
        if ($this instanceof AssumeRole || $this instanceof GenerateSessionAccessKey) {
            return $this->httpClient()->getCredential();
        }

        $timeout = isset($this->options['timeout'])
            ? $this->options['timeout']
            : Request::TIMEOUT;

        $connectTimeout = isset($this->options['connect_timeout'])
            ? $this->options['connect_timeout']
            : Request::CONNECT_TIMEOUT;

        return $this->httpClient()->getSessionCredential($timeout, $connectTimeout);
    }

    /**
     * Get the client based on the request's settings.
     *
     * @return Client
     * @throws ClientException
     */
    public function httpClient()
    {
        if (!AlibabaCloud::all()) {
            if (CredentialsProvider::hasCustomChain()) {
                CredentialsProvider::customProvider($this->client);
            } else {
                CredentialsProvider::defaultProvider($this->client);
            }
        }

        return AlibabaCloud::get($this->client);
    }

    /**
     * Merged with the client's options, the same name will be overwritten.
     *
     * @throws ClientException
     */
    public function mergeOptionsIntoClient()
    {
        $this->options = Arrays::merge(
            [
                $this->httpClient()->options,
                $this->options
            ]
        );
    }
}
