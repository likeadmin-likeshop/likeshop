<?php

namespace AlibabaCloud\Client\Resolver;

use ReflectionClass;
use ReflectionException;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Request\Request;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * @codeCoverageIgnore
 * @mixin Rpc
 * @mixin Roa
 * @mixin Request
 * @package AlibabaCloud\Client\Resolver
 */
trait ActionResolverTrait
{

    /**
     * Resolve Action name from class name
     */
    private function resolveActionName()
    {
        if (!$this->action) {
            $array        = explode('\\', get_class($this));
            $this->action = array_pop($array);
        }
    }

    /**
     * Append SDK version into User-Agent
     *
     * @throws ClientException
     * @throws ReflectionException
     */
    private function appendSdkUA()
    {
        if (!(new ReflectionClass(AlibabaCloud::class))->hasMethod('appendUserAgent')) {
            return;
        }

        if (!class_exists('AlibabaCloud\Release')) {
            return;
        }

        AlibabaCloud::appendUserAgent('SDK', \AlibabaCloud\Release::VERSION);
    }
}
