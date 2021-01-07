<?php

namespace AlibabaCloud\Client\Exception;

use Exception;
use RuntimeException;

/**
 * Class AlibabaCloudException
 *
 * @package   AlibabaCloud\Client\Exception
 */
abstract class AlibabaCloudException extends Exception
{

    /**
     * @var string
     */
    protected $errorCode;

    /**
     * @var string
     */
    protected $errorMessage;

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @codeCoverageIgnore
     * @deprecated
     */
    public function setErrorCode()
    {
        throw new RuntimeException('deprecated since 2.0.');
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @codeCoverageIgnore
     *
     * @param $errorMessage
     *
     * @deprecated
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @codeCoverageIgnore
     * @deprecated
     */
    public function setErrorType()
    {
    }
}
