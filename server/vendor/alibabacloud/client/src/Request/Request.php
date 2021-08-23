<?php

namespace AlibabaCloud\Client\Request;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Credentials\Providers\CredentialsProvider;
use AlibabaCloud\Client\Encode;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Filter\ApiFilter;
use AlibabaCloud\Client\Filter\ClientFilter;
use AlibabaCloud\Client\Filter\Filter;
use AlibabaCloud\Client\Filter\HttpFilter;
use AlibabaCloud\Client\Request\Traits\AcsTrait;
use AlibabaCloud\Client\Request\Traits\ClientTrait;
use AlibabaCloud\Client\Request\Traits\DeprecatedTrait;
use AlibabaCloud\Client\Request\Traits\RetryTrait;
use AlibabaCloud\Client\Result\Result;
use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\Traits\ArrayAccessTrait;
use AlibabaCloud\Client\Traits\HttpTrait;
use AlibabaCloud\Client\Traits\ObjectAccessTrait;
use AlibabaCloud\Client\Traits\RegionTrait;
use ArrayAccess;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Request
 *
 * @package   AlibabaCloud\Client\Request
 *
 * @method string stringToSign()
 * @method string resolveParameter()
 */
abstract class Request implements ArrayAccess
{
    use DeprecatedTrait;
    use HttpTrait;
    use RegionTrait;
    use ClientTrait;
    use AcsTrait;
    use ArrayAccessTrait;
    use ObjectAccessTrait;
    use RetryTrait;

    /**
     * Request Connect Timeout
     */
    const CONNECT_TIMEOUT = 5;

    /**
     * Request Timeout
     */
    const TIMEOUT = 10;

    /**
     * @var string HTTP Method
     */
    public $method = 'GET';

    /**
     * @var string
     */
    public $format = 'JSON';

    /**
     * @var string HTTP Scheme
     */
    protected $scheme = 'http';

    /**
     * @var string
     */
    public $client;

    /**
     * @var Uri
     */
    public $uri;

    /**
     * @var array The original parameters of the request.
     */
    public $data = [];

    /**
     * @var array
     */
    private $userAgent = [];

    /**
     * Request constructor.
     *
     * @param array $options
     *
     * @throws ClientException
     */
    public function __construct(array $options = [])
    {
        $this->client                     = CredentialsProvider::getDefaultName();
        $this->uri                        = new Uri();
        $this->uri                        = $this->uri->withScheme($this->scheme);
        $this->options['http_errors']     = false;
        $this->options['connect_timeout'] = self::CONNECT_TIMEOUT;
        $this->options['timeout']         = self::TIMEOUT;

        // Turn on debug mode based on environment variable.
        if (strtolower(\AlibabaCloud\Client\env('DEBUG')) === 'sdk') {
            $this->options['debug'] = true;
        }

        // Rewrite configuration if the user has a configuration.
        if ($options !== []) {
            $this->options($options);
        }
    }

    /**
     * @param string $name
     * @param string $value
     *
     * @return $this
     * @throws ClientException
     */
    public function appendUserAgent($name, $value)
    {
        $filter_name = Filter::name($name);

        if (!UserAgent::isGuarded($filter_name)) {
            $this->userAgent[$filter_name] = Filter::value($value);
        }

        return $this;
    }

    /**
     * @param array $userAgent
     *
     * @return $this
     */
    public function withUserAgent(array $userAgent)
    {
        $this->userAgent = UserAgent::clean($userAgent);

        return $this;
    }

    /**
     * Set Accept format.
     *
     * @param string $format
     *
     * @return $this
     * @throws ClientException
     */
    public function format($format)
    {
        $this->format = ApiFilter::format($format);

        return $this;
    }

    /**
     * @param $contentType
     *
     * @return $this
     * @throws ClientException
     */
    public function contentType($contentType)
    {
        $this->options['headers']['Content-Type'] = HttpFilter::contentType($contentType);

        return $this;
    }

    /**
     * @param string $accept
     *
     * @return $this
     * @throws ClientException
     */
    public function accept($accept)
    {
        $this->options['headers']['Accept'] = HttpFilter::accept($accept);

        return $this;
    }

    /**
     * Set the request body.
     *
     * @param string $body
     *
     * @return $this
     * @throws ClientException
     */
    public function body($body)
    {
        $this->options['body'] = HttpFilter::body($body);

        return $this;
    }

    /**
     * Set the json as body.
     *
     * @param array|object $content
     *
     * @return $this
     * @throws ClientException
     */
    public function jsonBody($content)
    {
        if (!\is_array($content) && !\is_object($content)) {
            throw new ClientException(
                'jsonBody only accepts an array or object',
                SDK::INVALID_ARGUMENT
            );
        }

        return $this->body(\json_encode($content));
    }

    /**
     * Set the request scheme.
     *
     * @param string $scheme
     *
     * @return $this
     * @throws ClientException
     */
    public function scheme($scheme)
    {
        $this->scheme = HttpFilter::scheme($scheme);
        $this->uri    = $this->uri->withScheme($scheme);

        return $this;
    }

    /**
     * Set the request host.
     *
     * @param string $host
     *
     * @return $this
     * @throws ClientException
     */
    public function host($host)
    {
        $this->uri = $this->uri->withHost(HttpFilter::host($host));

        return $this;
    }

    /**
     * @param string $method
     *
     * @return $this
     * @throws ClientException
     */
    public function method($method)
    {
        $this->method = HttpFilter::method($method);

        return $this;
    }

    /**
     * @param string $clientName
     *
     * @return $this
     * @throws ClientException
     */
    public function client($clientName)
    {
        $this->client = ClientFilter::clientName($clientName);

        return $this;
    }

    /**
     * @return bool
     * @throws ClientException
     */
    public function isDebug()
    {
        if (isset($this->options['debug'])) {
            return $this->options['debug'] === true;
        }

        if (isset($this->httpClient()->options['debug'])) {
            return $this->httpClient()->options['debug'] === true;
        }

        return false;
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function resolveOption()
    {
        $this->options['headers']['User-Agent'] = UserAgent::toString($this->userAgent);

        $this->cleanQuery();
        $this->cleanFormParams();
        $this->resolveHost();
        $this->resolveParameter();

        if (isset($this->options['form_params'])) {
            $this->options['form_params'] = \GuzzleHttp\Psr7\parse_query(
                Encode::create($this->options['form_params'])->toString()
            );
        }

        $this->mergeOptionsIntoClient();
    }

    /**
     * @return Result
     * @throws ClientException
     * @throws ServerException
     */
    public function request()
    {
        $this->resolveOption();
        $result = $this->response();

        if ($this->shouldServerRetry($result)) {
            return $this->request();
        }

        if (!$result->isSuccess()) {
            throw new ServerException($result);
        }

        return $result;
    }

    /***
     * @return PromiseInterface
     * @throws Exception
     */
    public function requestAsync()
    {
        $this->resolveOption();

        return self::createClient($this)->requestAsync(
            $this->method,
            (string)$this->uri,
            $this->options
        );
    }

    /**
     * @param Request $request
     *
     * @return Client
     * @throws Exception
     */
    public static function createClient(Request $request = null)
    {
        if (AlibabaCloud::hasMock()) {
            $stack = HandlerStack::create(AlibabaCloud::getMock());
        } else {
            $stack = HandlerStack::create();
        }

        if (AlibabaCloud::isRememberHistory()) {
            $stack->push(Middleware::history(AlibabaCloud::referenceHistory()));
        }

        if (AlibabaCloud::getLogger()) {
            $stack->push(Middleware::log(
                AlibabaCloud::getLogger(),
                new MessageFormatter(AlibabaCloud::getLogFormat())
            ));
        }

        $stack->push(Middleware::mapResponse(static function (ResponseInterface $response) use ($request) {
            return new Result($response, $request);
        }));

        self::$config['handler'] = $stack;

        return new Client(self::$config);
    }

    /**
     * @throws ClientException
     * @throws Exception
     */
    private function response()
    {
        try {
            return self::createClient($this)->request(
                $this->method,
                (string)$this->uri,
                $this->options
            );
        } catch (GuzzleException $exception) {
            if ($this->shouldClientRetry($exception)) {
                return $this->response();
            }
            throw new ClientException(
                $exception->getMessage(),
                SDK::SERVER_UNREACHABLE,
                $exception
            );
        }
    }

    /**
     * Remove redundant Query
     *
     * @codeCoverageIgnore
     */
    private function cleanQuery()
    {
        if (isset($this->options['query']) && $this->options['query'] === []) {
            unset($this->options['query']);
        }
    }

    /**
     * Remove redundant Headers
     *
     * @codeCoverageIgnore
     */
    private function cleanFormParams()
    {
        if (isset($this->options['form_params']) && $this->options['form_params'] === []) {
            unset($this->options['form_params']);
        }
    }
}
