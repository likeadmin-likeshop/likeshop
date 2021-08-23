<?php

namespace AlibabaCloud\Client\Credentials;

use AlibabaCloud\Client\Filter\CredentialFilter;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Use the RAM role of an ECS instance to complete the authentication.
 *
 * @package   AlibabaCloud\Client\Credentials
 */
class EcsRamRoleCredential implements CredentialsInterface
{

    /**
     * @var string
     */
    private $roleName;

    /**
     * Class constructor.
     *
     * @param string $roleName
     *
     * @throws ClientException
     */
    public function __construct($roleName)
    {
        CredentialFilter::roleName($roleName);

        $this->roleName = $roleName;
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "roleName#$this->roleName";
    }
}
