<?php

namespace AlibabaCloud\Client\Clients;

use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Signature\BearerTokenSignature;
use AlibabaCloud\Client\Credentials\BearerTokenCredential;

/**
 * Use the Bearer Token to complete the authentication.
 *
 * @package   AlibabaCloud\Client\Clients
 */
class BearerTokenClient extends Client
{

    /**
     * @param string $bearerToken
     *
     * @throws ClientException
     */
    public function __construct($bearerToken)
    {
        parent::__construct(
            new BearerTokenCredential($bearerToken),
            new BearerTokenSignature()
        );
    }
}
