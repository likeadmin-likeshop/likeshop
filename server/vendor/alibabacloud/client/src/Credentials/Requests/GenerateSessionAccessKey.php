<?php

namespace AlibabaCloud\Client\Credentials\Requests;

use AlibabaCloud\Client\Request\RpcRequest;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Credentials\Providers\Provider;

/**
 * Use the RSA key pair to complete the authentication (supported only on Japanese site)
 *
 * @package   AlibabaCloud\Client\Credentials\Requests
 */
class GenerateSessionAccessKey extends RpcRequest
{

    /**
     * GenerateSessionAccessKey constructor.
     *
     * @param string $publicKeyId
     *
     * @throws ClientException
     */
    public function __construct($publicKeyId)
    {
        parent::__construct();
        $this->product('Sts');
        $this->version('2015-04-01');
        $this->action('GenerateSessionAccessKey');
        $this->host('sts.ap-northeast-1.aliyuncs.com');
        $this->scheme('https');
        $this->regionId('cn-hangzhou');
        $this->options['verify']                   = false;
        $this->options['query']['PublicKeyId']     = $publicKeyId;
        $this->options['query']['DurationSeconds'] = Provider::DURATION_SECONDS;
    }
}
