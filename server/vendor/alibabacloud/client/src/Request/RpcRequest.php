<?php

namespace AlibabaCloud\Client\Request;

use Exception;
use RuntimeException;
use AlibabaCloud\Client\Support\Sign;
use AlibabaCloud\Client\Support\Arrays;
use AlibabaCloud\Client\Credentials\StsCredential;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Credentials\BearerTokenCredential;

/**
 * RESTful RPC Request.
 *
 * @package   AlibabaCloud\Client\Request
 */
class RpcRequest extends Request
{

    /**
     * @var string
     */
    private $dateTimeFormat = 'Y-m-d\TH:i:s\Z';

    /**
     * Resolve request parameter.
     *
     * @throws ClientException
     */
    public function resolveParameter()
    {
        $this->resolveBoolInParameters();
        $this->resolveCommonParameters();
        $this->repositionParameters();
    }

    /**
     * Convert a Boolean value to a string
     */
    private function resolveBoolInParameters()
    {
        if (isset($this->options['query'])) {
            $this->options['query'] = array_map(
                static function ($value) {
                    return self::boolToString($value);
                },
                $this->options['query']
            );
        }
    }

    /**
     * Convert a Boolean value to a string.
     *
     * @param bool|string $value
     *
     * @return string
     */
    public static function boolToString($value)
    {
        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        return $value;
    }

    /**
     * Resolve Common Parameters.
     *
     * @throws ClientException
     * @throws Exception
     */
    private function resolveCommonParameters()
    {
        $signature                                  = $this->httpClient()->getSignature();
        $this->options['query']['RegionId']         = $this->realRegionId();
        $this->options['query']['Format']           = $this->format;
        $this->options['query']['SignatureMethod']  = $signature->getMethod();
        $this->options['query']['SignatureVersion'] = $signature->getVersion();
        $this->options['query']['SignatureNonce']   = Sign::uuid($this->product . $this->action);
        $this->options['query']['Timestamp']        = gmdate($this->dateTimeFormat);
        $this->options['query']['Action']           = $this->action;
        if ($this->credential()->getAccessKeyId()) {
            $this->options['query']['AccessKeyId'] = $this->credential()->getAccessKeyId();
        }
        if ($signature->getType()) {
            $this->options['query']['SignatureType'] = $signature->getType();
        }
        if (!isset($this->options['query']['Version'])) {
            $this->options['query']['Version'] = $this->version;
        }
        $this->resolveSecurityToken();
        $this->resolveBearerToken();
        $this->options['query']['Signature'] = $this->signature();
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    private function resolveSecurityToken()
    {
        if (!$this->credential() instanceof StsCredential) {
            return;
        }

        if (!$this->credential()->getSecurityToken()) {
            return;
        }

        $this->options['query']['SecurityToken'] = $this->credential()->getSecurityToken();
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    private function resolveBearerToken()
    {
        if ($this->credential() instanceof BearerTokenCredential) {
            $this->options['query']['BearerToken'] = $this->credential()->getBearerToken();
        }
    }

    /**
     * Sign the parameters.
     *
     * @return mixed
     * @throws ClientException
     * @throws ServerException
     */
    private function signature()
    {
        return $this->httpClient()
                    ->getSignature()
                    ->sign(
                        $this->stringToSign(),
                        $this->credential()->getAccessKeySecret() . '&'
                    );
    }

    /**
     * @return string
     */
    public function stringToSign()
    {
        $query       = isset($this->options['query']) ? $this->options['query'] : [];
        $form_params = isset($this->options['form_params']) ? $this->options['form_params'] : [];
        $parameters  = Arrays::merge([$query, $form_params]);

        return Sign::rpcString($this->method, $parameters);
    }

    /**
     * Adjust parameter position
     */
    private function repositionParameters()
    {
        if ($this->method === 'POST' || $this->method === 'PUT') {
            foreach ($this->options['query'] as $api_key => $api_value) {
                $this->options['form_params'][$api_key] = $api_value;
            }
            unset($this->options['query']);
        }
    }

    /**
     * Magic method for set or get request parameters.
     *
     * @param string $name
     * @param mixed  $arguments
     *
     * @return $this
     */
    public function __call($name, $arguments)
    {
        if (strncmp($name, 'get', 3) === 0) {
            $parameter_name = \mb_strcut($name, 3);

            return $this->__get($parameter_name);
        }

        if (strncmp($name, 'with', 4) === 0) {
            $parameter_name = \mb_strcut($name, 4);
            $this->__set($parameter_name, $arguments[0]);
            $this->options['query'][$parameter_name] = $arguments[0];

            return $this;
        }

        if (strncmp($name, 'set', 3) === 0) {
            $parameter_name = \mb_strcut($name, 3);
            $with_method    = "with$parameter_name";

            throw new RuntimeException("Please use $with_method instead of $name");
        }

        throw new RuntimeException('Call to undefined method ' . __CLASS__ . '::' . $name . '()');
    }
}
