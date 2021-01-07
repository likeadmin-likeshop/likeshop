<?php

namespace AlibabaCloud\Client\Credentials;

use AlibabaCloud\Client\Filter\CredentialFilter;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Use the AssumeRole of the RAM account to complete  the authentication.
 *
 * @package   AlibabaCloud\Client\Credentials
 */
class RamRoleArnCredential implements CredentialsInterface
{

    /**
     * @var string
     */
    private $accessKeyId;

    /**
     * @var string
     */
    private $accessKeySecret;

    /**
     * @var string
     */
    private $roleArn;

    /**
     * @var string
     */
    private $roleSessionName;

    /**
     * @var string
     */
    private $policy;

    /**
     * Class constructor.
     *
     * @param string       $accessKeyId
     * @param string       $accessKeySecret
     * @param string       $roleArn
     * @param string       $roleSessionName
     * @param string|array $policy
     *
     * @throws ClientException
     */
    public function __construct($accessKeyId, $accessKeySecret, $roleArn, $roleSessionName, $policy = '')
    {
        CredentialFilter::AccessKey($accessKeyId, $accessKeySecret);

        $this->accessKeyId     = $accessKeyId;
        $this->accessKeySecret = $accessKeySecret;
        $this->roleArn         = $roleArn;
        $this->roleSessionName = $roleSessionName;
        $this->policy          = $policy;
    }

    /**
     * @return string
     */
    public function getAccessKeyId()
    {
        return $this->accessKeyId;
    }

    /**
     * @return string
     */
    public function getAccessKeySecret()
    {
        return $this->accessKeySecret;
    }

    /**
     * @return string
     */
    public function getRoleArn()
    {
        return $this->roleArn;
    }

    /**
     * @return string
     */
    public function getRoleSessionName()
    {
        return $this->roleSessionName;
    }

    /**
     * @return string
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "$this->accessKeyId#$this->accessKeySecret#$this->roleArn#$this->roleSessionName";
    }
}
