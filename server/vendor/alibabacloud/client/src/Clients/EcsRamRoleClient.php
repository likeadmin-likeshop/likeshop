<?php

namespace AlibabaCloud\Client\Clients;

use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Signature\ShaHmac1Signature;
use AlibabaCloud\Client\Credentials\EcsRamRoleCredential;

/**
 * Use the RAM role of an ECS instance to complete the authentication.
 */
class EcsRamRoleClient extends Client
{
    /**
     * @param string $roleName
     *
     * @throws ClientException
     */
    public function __construct($roleName)
    {
        parent::__construct(
            new EcsRamRoleCredential($roleName),
            new ShaHmac1Signature()
        );
    }
}
