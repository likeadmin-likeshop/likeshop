<?php

namespace AlibabaCloud\Client\Request\Traits;

/**
 * @package    AlibabaCloud\Client\Request\Traits
 * @codeCoverageIgnore
 */
trait DeprecatedRoaTrait
{
    /**
     * @param $name
     * @param $value
     *
     * @return $this
     * @deprecated
     * @codeCoverageIgnore
     */
    public function putPathParameter($name, $value)
    {
        return $this->pathParameter($name, $value);
    }

    /**
     * @param $pathPattern
     *
     * @return $this
     * @deprecated
     * @codeCoverageIgnore
     */
    public function setUriPattern($pathPattern)
    {
        return $this->pathPattern($pathPattern);
    }

    /**
     * @return string
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getUriPattern()
    {
        return $this->pathPattern;
    }

    /**
     * @return array
     * @deprecated
     * @codeCoverageIgnore
     */
    public function getPathParameters()
    {
        return $this->pathParameters;
    }
}
