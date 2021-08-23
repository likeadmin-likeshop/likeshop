<?php

namespace AlibabaCloud\Client\Signature;

use Exception;
use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class ShaHmac256WithRsaSignature
 *
 * @package   AlibabaCloud\Signature
 */
class ShaHmac256WithRsaSignature extends Signature implements SignatureInterface
{

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'SHA256withRSA';
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'PRIVATEKEY';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0';
    }

    /**
     * @param string $string
     * @param string $privateKey
     *
     * @return string
     * @throws ClientException
     */
    public function sign($string, $privateKey)
    {
        $binarySignature = '';
        try {
            openssl_sign(
                $string,
                $binarySignature,
                $privateKey,
                \OPENSSL_ALGO_SHA256
            );
        } catch (Exception $exception) {
            throw  new ClientException(
                $exception->getMessage(),
                SDK::INVALID_CREDENTIAL
            );
        }

        return base64_encode($binarySignature);
    }
}
