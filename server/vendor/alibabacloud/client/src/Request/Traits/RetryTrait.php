<?php

namespace AlibabaCloud\Client\Request\Traits;

use Exception;
use Stringy\Stringy;
use AlibabaCloud\Client\Result\Result;
use AlibabaCloud\Client\Filter\ClientFilter;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Trait RetryTrait
 *
 * @package AlibabaCloud\Client\Request\Traits
 */
trait RetryTrait
{
    /**
     * Server Retry Times
     *
     * @var int
     */
    private $serverRetry = 0;

    /**
     * Server Retry Strings
     *
     * @var string[]
     */
    private $serverRetryStrings = [];

    /**
     * Server Retry Codes
     *
     * @var int[]
     */
    private $serverRetryStatusCodes = [];

    /**
     * Client Retry Times
     *
     * @var int
     */
    private $clientRetry = 0;

    /**
     * Client Retry Strings
     *
     * @var string[]
     */
    private $clientRetryStrings = [];

    /**
     * Client Retry Codes
     *
     * @var int[]
     */
    private $clientRetryStatusCodes = [];

    /**
     * @param int   $times
     * @param array $strings
     * @param array $statusCodes
     *
     * @return $this
     * @throws ClientException
     */
    public function retryByServer($times, array $strings, array $statusCodes = [])
    {
        $this->serverRetry            = ClientFilter::retry($times);
        $this->serverRetryStrings     = $strings;
        $this->serverRetryStatusCodes = $statusCodes;

        return $this;
    }

    /**
     * @param int   $times
     * @param array $strings
     * @param array $codes
     *
     * @return $this
     * @throws ClientException
     */
    public function retryByClient($times, array $strings, array $codes = [])
    {
        $this->clientRetry            = ClientFilter::retry($times);
        $this->clientRetryStrings     = $strings;
        $this->clientRetryStatusCodes = $codes;

        return $this;
    }

    /**
     * @param Result $result
     *
     * @return bool
     */
    private function shouldServerRetry(Result $result)
    {
        if ($this->serverRetry <= 0) {
            return false;
        }

        if (in_array($result->getStatusCode(), $this->serverRetryStatusCodes)) {
            $this->serverRetry--;

            return true;
        }

        foreach ($this->serverRetryStrings as $message) {
            if (Stringy::create($result->getBody())->contains($message)) {
                $this->serverRetry--;

                return true;
            }
        }

        return false;
    }

    /**
     * @param Exception $exception
     *
     * @return bool
     */
    private function shouldClientRetry(Exception $exception)
    {
        if ($this->clientRetry <= 0) {
            return false;
        }

        if (in_array($exception->getCode(), $this->clientRetryStatusCodes, true)) {
            $this->clientRetry--;

            return true;
        }

        foreach ($this->clientRetryStrings as $message) {
            if (Stringy::create($exception->getMessage())->contains($message)) {
                $this->clientRetry--;

                return true;
            }
        }

        return false;
    }
}
