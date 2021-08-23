<?php

namespace AlibabaCloud\Client\Traits;

use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Clients\Client;
use AlibabaCloud\Client\Clients\StsClient;
use AlibabaCloud\Client\Filter\ClientFilter;
use AlibabaCloud\Client\Clients\AccessKeyClient;
use AlibabaCloud\Client\Clients\EcsRamRoleClient;
use AlibabaCloud\Client\Clients\RamRoleArnClient;
use AlibabaCloud\Client\Clients\RsaKeyPairClient;
use AlibabaCloud\Client\Clients\BearerTokenClient;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Signature\SignatureInterface;
use AlibabaCloud\Client\Credentials\Ini\IniCredential;
use AlibabaCloud\Client\Credentials\CredentialsInterface;
use AlibabaCloud\Client\Credentials\Providers\CredentialsProvider;

/**
 * Trait of the manage clients.
 *
 * @package   AlibabaCloud\Client\Traits
 *
 * @mixin     AlibabaCloud
 */
trait ClientTrait
{
    /**
     * @var array Containers of Clients
     */
    protected static $clients = [];

    /**
     * @param string $clientName
     * @param Client $client
     *
     * @return Client
     * @throws ClientException
     */
    public static function set($clientName, Client $client)
    {
        ClientFilter::clientName($clientName);

        return self::$clients[\strtolower($clientName)] = $client;
    }

    /**
     * Get all clients.
     *
     * @return array
     */
    public static function all()
    {
        return self::$clients;
    }

    /**
     * Delete the client by specifying name.
     *
     * @param string $clientName
     *
     * @throws ClientException
     */
    public static function del($clientName)
    {
        ClientFilter::clientName($clientName);

        unset(self::$clients[\strtolower($clientName)]);
    }

    /**
     * Delete all clients.
     *
     * @return void
     */
    public static function flush()
    {
        self::$clients         = [];
        self::$defaultRegionId = null;
    }

    /**
     * @codeCoverageIgnore
     * @throws ClientException
     * @deprecated
     */
    public static function getGlobalClient()
    {
        return self::getDefaultClient();
    }

    /**
     * Get the default client.
     *
     * @return Client
     * @throws ClientException
     */
    public static function getDefaultClient()
    {
        return self::get(CredentialsProvider::getDefaultName());
    }

    /**
     * Get the Client instance by name.
     *
     * @param string $clientName
     *
     * @return Client
     * @throws ClientException
     */
    public static function get($clientName)
    {
        ClientFilter::clientName($clientName);

        if (self::has($clientName)) {
            return self::$clients[\strtolower($clientName)];
        }

        throw new ClientException(
            "Client '$clientName' not found",
            SDK::CLIENT_NOT_FOUND
        );
    }

    /**
     * Determine whether there is a client.
     *
     * @param string $clientName
     *
     * @return bool
     * @throws ClientException
     */
    public static function has($clientName)
    {
        ClientFilter::clientName($clientName);

        return isset(self::$clients[\strtolower($clientName)]);
    }

    /**
     * A list of additional files to load.
     *
     * @return array
     * @throws ClientException when a file has a syntax error or does not exist or is not readable
     */
    public static function load()
    {
        if (\func_get_args() === []) {
            return (new IniCredential())->load();
        }
        $list = [];
        foreach (\func_get_args() as $filename) {
            $list[$filename] = (new IniCredential($filename))->load();
        }

        return $list;
    }

    /**
     * Custom Client.
     *
     * @param CredentialsInterface $credentials
     * @param SignatureInterface   $signature
     *
     * @return Client
     */
    public static function client(CredentialsInterface $credentials, SignatureInterface $signature)
    {
        return new Client($credentials, $signature);
    }

    /**
     * Use the AccessKey to complete the authentication.
     *
     * @param string $accessKeyId
     * @param string $accessKeySecret
     *
     * @return AccessKeyClient
     * @throws ClientException
     */
    public static function accessKeyClient($accessKeyId, $accessKeySecret)
    {
        if (strpos($accessKeyId, ' ') !== false) {
            throw new ClientException(
                'AccessKey ID format is invalid',
                SDK::INVALID_ARGUMENT
            );
        }

        if (strpos($accessKeySecret, ' ') !== false) {
            throw new ClientException(
                'AccessKey Secret format is invalid',
                SDK::INVALID_ARGUMENT
            );
        }

        return new AccessKeyClient($accessKeyId, $accessKeySecret);
    }

    /**
     * Use the AssumeRole of the RAM account to complete  the authentication.
     *
     * @param string       $accessKeyId
     * @param string       $accessKeySecret
     * @param string       $roleArn
     * @param string       $roleSessionName
     * @param string|array $policy
     *
     * @return RamRoleArnClient
     * @throws ClientException
     */
    public static function ramRoleArnClient($accessKeyId, $accessKeySecret, $roleArn, $roleSessionName, $policy = '')
    {
        return new RamRoleArnClient($accessKeyId, $accessKeySecret, $roleArn, $roleSessionName, $policy);
    }

    /**
     * Use the RAM role of an ECS instance to complete the authentication.
     *
     * @param string $roleName
     *
     * @return EcsRamRoleClient
     * @throws ClientException
     */
    public static function ecsRamRoleClient($roleName)
    {
        return new EcsRamRoleClient($roleName);
    }

    /**
     * Use the Bearer Token to complete the authentication.
     *
     * @param string $bearerToken
     *
     * @return BearerTokenClient
     * @throws ClientException
     */
    public static function bearerTokenClient($bearerToken)
    {
        return new BearerTokenClient($bearerToken);
    }

    /**
     * Use the STS Token to complete the authentication.
     *
     * @param string $accessKeyId     Access key ID
     * @param string $accessKeySecret Access Key Secret
     * @param string $securityToken   Security Token
     *
     * @return StsClient
     * @throws ClientException
     */
    public static function stsClient($accessKeyId, $accessKeySecret, $securityToken = '')
    {
        return new StsClient($accessKeyId, $accessKeySecret, $securityToken);
    }

    /**
     * Use the RSA key pair to complete the authentication (supported only on Japanese site)
     *
     * @param string $publicKeyId
     * @param string $privateKeyFile
     *
     * @return RsaKeyPairClient
     * @throws ClientException
     */
    public static function rsaKeyPairClient($publicKeyId, $privateKeyFile)
    {
        return new RsaKeyPairClient($publicKeyId, $privateKeyFile);
    }
}
