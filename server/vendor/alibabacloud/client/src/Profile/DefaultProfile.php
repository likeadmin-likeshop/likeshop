<?php

namespace AlibabaCloud\Client\Profile;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Clients\Client;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class DefaultProfile
 *
 * @package    AlibabaCloud\Client\Profile
 * @codeCoverageIgnore
 * @deprecated deprecated since version 2.0, Use AlibabaCloud instead.
 */
class DefaultProfile
{

    /**
     * @param string $regionId
     * @param string $accessKeyId
     * @param string $accessKeySecret
     *
     * @return Client
     * @throws ClientException
     */
    public static function getProfile($regionId, $accessKeyId, $accessKeySecret)
    {
        return AlibabaCloud::accessKeyClient($accessKeyId, $accessKeySecret)
                           ->regionId($regionId);
    }

    /**
     * @param string $regionId
     * @param string $accessKeyId
     * @param string $accessKeySecret
     * @param string $roleArn
     * @param string $roleSessionName
     *
     * @return Client
     * @throws ClientException
     */
    public static function getRamRoleArnProfile($regionId, $accessKeyId, $accessKeySecret, $roleArn, $roleSessionName)
    {
        return AlibabaCloud::ramRoleArnClient($accessKeyId, $accessKeySecret, $roleArn, $roleSessionName)
                           ->regionId($regionId);
    }

    /**
     * @param string $regionId
     * @param string $roleName
     *
     * @return Client
     * @throws ClientException
     */
    public static function getEcsRamRoleProfile($regionId, $roleName)
    {
        return AlibabaCloud::ecsRamRoleClient($roleName)
                           ->regionId($regionId);
    }

    /**
     * @param string $regionId
     * @param string $bearerToken
     *
     * @return Client
     * @throws ClientException
     */
    public static function getBearerTokenProfile($regionId, $bearerToken)
    {
        return AlibabaCloud::bearerTokenClient($bearerToken)
                           ->regionId($regionId);
    }
}
