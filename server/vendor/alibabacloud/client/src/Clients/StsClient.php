<?php

namespace AlibabaCloud\Client\Clients;

use AlibabaCloud\Client\Credentials\StsCredential;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Signature\ShaHmac1Signature;

/**
 * Use the STS Token to complete the authentication.
 */
class StsClient extends Client
{
    /**
     * @param string $accessKeyId     Access key ID
     * @param string $accessKeySecret Access Key Secret
     * @param string $securityToken   Security Token
     *
     * @throws ClientException
     */
    public function __construct($accessKeyId, $accessKeySecret, $securityToken = '')
    {
        parent::__construct(
            new StsCredential($accessKeyId, $accessKeySecret, $securityToken),
            new ShaHmac1Signature()
        );
    }
}
