<?php

namespace AlibabaCloud\Client\Credentials\Providers;

use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Result\Result;
use AlibabaCloud\Client\Request\Request;
use AlibabaCloud\Client\Credentials\StsCredential;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Credentials\Requests\AssumeRole;

/**
 * Class RamRoleArnProvider
 *
 * @package   AlibabaCloud\Client\Credentials\Providers
 */
class RamRoleArnProvider extends Provider
{

    /**
     * Get credential.
     *
     *
     * @param int $timeout
     * @param int $connectTimeout
     *
     * @return StsCredential
     * @throws ClientException
     * @throws ServerException
     */
    public function get($timeout = Request::TIMEOUT, $connectTimeout = Request::CONNECT_TIMEOUT)
    {
        $credential = $this->getCredentialsInCache();

        if (null === $credential) {
            $result = $this->request($timeout, $connectTimeout);

            if (!isset($result['Credentials']['AccessKeyId'],
                $result['Credentials']['AccessKeySecret'],
                $result['Credentials']['SecurityToken'])) {
                throw new ServerException($result, $this->error, SDK::INVALID_CREDENTIAL);
            }

            $credential = $result['Credentials'];
            $this->cache($credential);
        }

        return new StsCredential(
            $credential['AccessKeyId'],
            $credential['AccessKeySecret'],
            $credential['SecurityToken']
        );
    }

    /**
     * Get credentials by request.
     *
     * @param $timeout
     * @param $connectTimeout
     *
     * @return Result
     * @throws ClientException
     * @throws ServerException
     */
    private function request($timeout, $connectTimeout)
    {
        $clientName = __CLASS__ . \uniqid('ak', true);
        $credential = $this->client->getCredential();

        AlibabaCloud::accessKeyClient(
            $credential->getAccessKeyId(),
            $credential->getAccessKeySecret()
        )->name($clientName);

        return (new AssumeRole($credential))
            ->client($clientName)
            ->timeout($timeout)
            ->connectTimeout($connectTimeout)
            ->debug($this->client->isDebug())
            ->request();
    }
}
