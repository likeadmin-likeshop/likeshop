<?php

namespace AlibabaCloud\Client\Signature;

/**
 * Class BearerTokenSignature
 *
 * @package   AlibabaCloud\Signature
 */
class BearerTokenSignature extends Signature implements SignatureInterface
{

    /**
     * @return string
     */
    public function getMethod()
    {
        return '';
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'BEARERTOKEN';
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
        return '';
    }
}
