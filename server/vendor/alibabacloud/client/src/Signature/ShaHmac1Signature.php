<?php

namespace AlibabaCloud\Client\Signature;

/**
 * Class ShaHmac1Signature
 *
 * @package   AlibabaCloud\Signature
 */
class ShaHmac1Signature extends Signature implements SignatureInterface
{

    /**
     * @return string
     */
    public function getMethod()
    {
        return 'HMAC-SHA1';
    }

    /**
     * @return string
     */
    public function getType()
    {
        return '';
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
     * @param string $accessKeySecret
     *
     * @return string
     */
    public function sign($string, $accessKeySecret)
    {
        return base64_encode(hash_hmac('sha1', $string, $accessKeySecret, true));
    }
}
