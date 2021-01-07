<?php

namespace AlibabaCloud\Client\Credentials\Providers;

use AlibabaCloud\Client\Clients\Client;

/**
 * Class Provider
 *
 * @package   AlibabaCloud\Client\Credentials\Providers
 */
class Provider
{
    /**
     * For TSC Duration Seconds
     */
    const DURATION_SECONDS = 3600;

    /**
     * @var array
     */
    protected static $credentialsCache = [];

    /**
     * Expiration time slot for temporary security credentials.
     *
     * @var int
     */
    protected $expirationSlot = 180;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $error = 'Result contains no credentials';

    /**
     * CredentialTrait constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Get the credentials from the cache in the validity period.
     *
     * @return array|null
     */
    public function getCredentialsInCache()
    {
        if (isset(self::$credentialsCache[$this->key()])) {
            $result = self::$credentialsCache[$this->key()];
            if (\strtotime($result['Expiration']) - \time() >= $this->expirationSlot) {
                return $result;
            }
            unset(self::$credentialsCache[$this->key()]);
        }

        return null;
    }

    /**
     * Get the toString of the credentials as the key.
     *
     * @return string
     */
    protected function key()
    {
        return (string)$this->client->getCredential();
    }

    /**
     * Cache credentials.
     *
     * @param array $credential
     */
    protected function cache(array $credential)
    {
        self::$credentialsCache[$this->key()] = $credential;
    }
}
