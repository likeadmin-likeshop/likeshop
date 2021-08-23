<?php

namespace AlibabaCloud\Client\Request;

use Exception;
use Stringy\Stringy;
use RuntimeException;
use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\Encode;
use AlibabaCloud\Client\Accept;
use AlibabaCloud\Client\Support\Path;
use AlibabaCloud\Client\Support\Sign;
use AlibabaCloud\Client\Filter\Filter;
use AlibabaCloud\Client\Support\Arrays;
use AlibabaCloud\Client\Filter\ApiFilter;
use AlibabaCloud\Client\Credentials\StsCredential;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Credentials\AccessKeyCredential;
use AlibabaCloud\Client\Credentials\BearerTokenCredential;
use AlibabaCloud\Client\Request\Traits\DeprecatedRoaTrait;

/**
 * RESTful ROA Request.
 *
 * @package   AlibabaCloud\Client\Request
 * @method setParameter()
 */
class RoaRequest extends Request
{
    use DeprecatedRoaTrait;

    /**
     * @var string
     */
    public $pathPattern = '/';

    /**
     * @var array
     */
    public $pathParameters = [];

    /**
     * @var string
     */
    private $dateTimeFormat = "D, d M Y H:i:s \G\M\T";

    /**
     * Resolve request parameter.
     *
     * @throws ClientException
     * @throws Exception
     */
    public function resolveParameter()
    {
        $this->resolveQuery();
        $this->resolveHeaders();
        $this->resolveBody();
        $this->resolveUri();
        $this->resolveSignature();
    }

    private function resolveQuery()
    {
        if (!isset($this->options['query']['Version'])) {
            $this->options['query']['Version'] = $this->version;
        }
    }

    private function resolveBody()
    {
        // If the body has already been specified, it will not be resolved.
        if (isset($this->options['body'])) {
            return;
        }

        if (!isset($this->options['form_params'])) {
            return;
        }

        // Merge data, compatible with parameters set from constructor.
        $params = Arrays::merge(
            [
                $this->data,
                $this->options['form_params']
            ]
        );

        $this->encodeBody($params);

        unset($this->options['form_params']);
    }

    /**
     * Determine the body format based on the Content-Type and calculate the MD5 value.
     *
     * @param array $params
     */
    private function encodeBody(array $params)
    {
        $stringy = Stringy::create($this->options['headers']['Content-Type']);

        if ($stringy->contains('application/json', false)) {
            $this->options['body']                   = json_encode($params);
            $this->options['headers']['Content-MD5'] = base64_encode(md5($this->options['body'], true));

            return;
        }

        $this->options['body']                    = Encode::create($params)->ksort()->toString();
        $this->options['headers']['Content-MD5']  = base64_encode(md5($this->options['body'], true));
        $this->options['headers']['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
    }

    /**
     * @throws ClientException
     * @throws ServerException
     * @throws Exception
     */
    private function resolveHeaders()
    {
        $this->options['headers']['x-acs-version']   = $this->version;
        $this->options['headers']['x-acs-region-id'] = $this->realRegionId();
        $this->options['headers']['Date']            = gmdate($this->dateTimeFormat);

        $signature                                           = $this->httpClient()->getSignature();
        $this->options['headers']['x-acs-signature-method']  = $signature->getMethod();
        $this->options['headers']['x-acs-signature-nonce']   = Sign::uuid($this->product . $this->action);
        $this->options['headers']['x-acs-signature-version'] = $signature->getVersion();
        if ($signature->getType()) {
            $this->options['headers']['x-acs-signature-type'] = $signature->getType();
        }

        $this->resolveAccept();
        $this->resolveContentType();
        $this->resolveSecurityToken();
        $this->resolveBearerToken();
    }

    /**
     * @throws ClientException
     * @throws Exception
     */
    private function resolveSignature()
    {
        $this->options['headers']['Authorization'] = $this->signature();
    }

    /**
     * If accept is not specified, it is determined by format.
     */
    private function resolveAccept()
    {
        if (!isset($this->options['headers']['Accept'])) {
            $this->options['headers']['Accept'] = Accept::create($this->format)->toString();
        }
    }

    /**
     * If the Content-Type is not specified, it is determined according to accept.
     */
    private function resolveContentType()
    {
        if (!isset($this->options['headers']['Content-Type'])) {
            $this->options['headers']['Content-Type'] = "{$this->options['headers']['Accept']}; charset=utf-8";
        }
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

        $this->options['headers']['x-acs-security-token'] = $this->credential()->getSecurityToken();
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    private function resolveBearerToken()
    {
        if ($this->credential() instanceof BearerTokenCredential) {
            $this->options['headers']['x-acs-bearer-token'] = $this->credential()->getBearerToken();
        }
    }

    /**
     * Sign the request message.
     *
     * @return string
     * @throws ClientException
     * @throws ServerException
     */
    private function signature()
    {
        /**
         * @var AccessKeyCredential $credential
         */
        $credential    = $this->credential();
        $access_key_id = $credential->getAccessKeyId();
        $signature     = $this->httpClient()
                              ->getSignature()
                              ->sign(
                                  $this->stringToSign(),
                                  $credential->getAccessKeySecret()
                              );

        return "acs $access_key_id:$signature";
    }

    /**
     * @return void
     */
    private function resolveUri()
    {
        $path = Path::assign($this->pathPattern, $this->pathParameters);

        $this->uri = $this->uri->withPath($path)
                               ->withQuery(
                                   $this->queryString()
                               );
    }

    /**
     * @return string
     */
    public function stringToSign()
    {
        $request = new \GuzzleHttp\Psr7\Request(
            $this->method,
            $this->uri,
            $this->options['headers']
        );

        return Sign::roaString($request);
    }

    /**
     * @return bool|string
     */
    private function queryString()
    {
        $query = isset($this->options['query'])
            ? $this->options['query']
            : [];

        return Encode::create($query)->ksort()->toString();
    }

    /**
     * Set path parameter by name.
     *
     * @param string $name
     * @param string $value
     *
     * @return RoaRequest
     * @throws ClientException
     */
    public function pathParameter($name, $value)
    {
        Filter::name($name);

        if ($value === '') {
            throw new ClientException(
                'Value cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        $this->pathParameters[$name] = $value;

        return $this;
    }

    /**
     * Set path pattern.
     *
     * @param string $pattern
     *
     * @return self
     * @throws ClientException
     */
    public function pathPattern($pattern)
    {
        ApiFilter::pattern($pattern);

        $this->pathPattern = $pattern;

        return $this;
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
            $this->pathParameters[$parameter_name] = $arguments[0];

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
