<?php

namespace AlibabaCloud\Client\Clients;

use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Signature\ShaHmac1Signature;
use AlibabaCloud\Client\Credentials\RsaKeyPairCredential;

/**
 * Use the RSA key pair to complete the authentication (supported only on Japanese site)
 *
 * @package   AlibabaCloud\Client\Clients
 */
class RsaKeyPairClient extends Client
{

    /**
     * @param string $publicKeyId
     * @param string $privateKeyFile
     *
     * @throws ClientException
     */
    public function __construct($publicKeyId, $privateKeyFile)
    {
        parent::__construct(
            new RsaKeyPairCredential($publicKeyId, $privateKeyFile),
            new ShaHmac1Signature()
        );
    }
}
