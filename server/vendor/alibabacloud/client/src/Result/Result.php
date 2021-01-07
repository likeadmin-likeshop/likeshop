<?php

namespace AlibabaCloud\Client\Result;

use Countable;
use Exception;
use ArrayAccess;
use IteratorAggregate;
use InvalidArgumentException;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use AlibabaCloud\Client\Request\Request;
use AlibabaCloud\Client\Traits\HasDataTrait;

/**
 * Result from Alibaba Cloud
 *
 * @property string|null RequestId
 *
 * @package   AlibabaCloud\Client\Result
 */
class Result extends Response implements ArrayAccess, IteratorAggregate, Countable
{
    use HasDataTrait;

    /**
     * Instance of the request.
     *
     * @var Request
     */
    protected $request;

    /**
     * Result constructor.
     *
     * @param ResponseInterface $response
     * @param Request           $request
     */
    public function __construct(ResponseInterface $response, Request $request = null)
    {
        parent::__construct(
            $response->getStatusCode(),
            $response->getHeaders(),
            $response->getBody(),
            $response->getProtocolVersion(),
            $response->getReasonPhrase()
        );

        $this->request = $request;

        $this->resolveData();
    }

    private function resolveData()
    {
        $content = $this->getBody()->getContents();

        switch ($this->getRequestFormat()) {
            case 'JSON':
                $result_data = $this->jsonToArray($content);
                break;
            case 'XML':
                $result_data = $this->xmlToArray($content);
                break;
            case 'RAW':
                $result_data = $this->jsonToArray($content);
                break;
            default:
                $result_data = $this->jsonToArray($content);
        }

        if (!$result_data) {
            $result_data = [];
        }

        $this->dot($result_data);
    }

    /**
     * @return string
     */
    private function getRequestFormat()
    {
        return ($this->request instanceof Request)
            ? \strtoupper($this->request->format)
            : 'JSON';
    }

    /**
     * @param string $response
     *
     * @return array
     */
    private function jsonToArray($response)
    {
        try {
            return \GuzzleHttp\json_decode($response, true);
        } catch (InvalidArgumentException $exception) {
            return [];
        }
    }

    /**
     * @param string $string
     *
     * @return array
     */
    private function xmlToArray($string)
    {
        try {
            return json_decode(json_encode(simplexml_load_string($string)), true);
        } catch (Exception $exception) {
            return [];
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getBody();
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @codeCoverageIgnore
     * @return Response
     * @deprecated
     */
    public function getResponse()
    {
        return $this;
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return 200 <= $this->getStatusCode()
               && 300 > $this->getStatusCode();
    }
}
