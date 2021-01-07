<?php

namespace AlibabaCloud\Client\Request\Traits;

use AlibabaCloud\Client\Exception\ClientException;
use RuntimeException;
use AlibabaCloud\Client\Request\Request;

/**
 * @package    AlibabaCloud\Client\Request\Traits
 *
 * @mixin Request
 */
trait DeprecatedTrait
{

    /**
     * @param $content
     *
     * @return $this
     * @throws ClientException
     * @deprecated
     * @codeCoverageIgnore
     */
    public function setContent($content)
    {
        return $this->body($content);
    }

    /**
     * @param $method
     *
     * @return $this
     * @throws ClientException
     * @deprecated
     * @codeCoverageIgnore
     */
    public function setMethod($method)
    {
        return $this->method($method);
    }

    /**
     * @param $scheme
     *
     * @return $this
     * @throws ClientException
     * @deprecated
     * @codeCoverageIgnore
     */
    public function setProtocol($scheme)
    {
        return $this->scheme($scheme);
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getProtocolType()
    {
        return $this->uri->getScheme();
    }

    /**
     * @param $scheme
     *
     * @return $this
     * @throws ClientException
     * @deprecated
     * @codeCoverageIgnore
     */
    public function setProtocolType($scheme)
    {
        return $this->scheme($scheme);
    }

    /**
     * @param $actionName
     *
     * @return $this
     * @throws ClientException
     * @deprecated
     * @codeCoverageIgnore
     */
    public function setActionName($actionName)
    {
        return $this->action($actionName);
    }

    /**
     * @param $format
     *
     * @return $this
     * @throws ClientException
     * @deprecated
     * @codeCoverageIgnore
     */
    public function setAcceptFormat($format)
    {
        return $this->format($format);
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getProtocol()
    {
        return $this->uri->getScheme();
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getContent()
    {
        return isset($this->options['body'])
            ? $this->options['body']
            : null;
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getHeaders()
    {
        return isset($this->options['headers'])
            ? $this->options['headers']
            : [];
    }

    /**
     * @param $headerKey
     * @param $headerValue
     *
     * @return $this
     * @deprecated
     * @codeCoverageIgnore
     */
    public function addHeader($headerKey, $headerValue)
    {
        $this->options['headers'][$headerKey] = $headerValue;

        return $this;
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getQueryParameters()
    {
        return isset($this->options['query'])
            ? $this->options['query']
            : [];
    }

    /**
     * @param $name
     * @param $value
     *
     * @return $this
     * @deprecated
     * @codeCoverageIgnore
     */
    public function setQueryParameters($name, $value)
    {
        $this->options['query'][$name] = $value;

        return $this;
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getDomainParameter()
    {
        return isset($this->options['form_params'])
            ? $this->options['form_params']
            : [];
    }

    /**
     * @param $name
     * @param $value
     *
     * @return $this
     * @deprecated
     * @codeCoverageIgnore
     */
    public function putDomainParameters($name, $value)
    {
        $this->options['form_params'][$name] = $value;

        return $this;
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getActionName()
    {
        return $this->action;
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getAcceptFormat()
    {
        return $this->format;
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getLocationEndpointType()
    {
        return $this->endpointType;
    }

    /**
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getLocationServiceCode()
    {
        return $this->serviceCode;
    }
}
