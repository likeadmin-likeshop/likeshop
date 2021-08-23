<?php

namespace AlibabaCloud\Client\Resolver;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Request\RoaRequest;
use ReflectionClass;
use ReflectionException;

/**
 * Class Roa
 *
 * @codeCoverageIgnore
 * @package AlibabaCloud\Client\Resolver
 */
abstract class Roa extends RoaRequest
{
    use ActionResolverTrait;
    use CallTrait;

    /**
     * @param array $options
     *
     * @throws ReflectionException
     * @throws ClientException
     */
    public function __construct(array $options = [])
    {
        parent::__construct($options);

        $this->resolveActionName();
        $this->appendSdkUA();
    }

    /**
     * @return mixed
     */
    private function &parameterPosition()
    {
        return $this->pathParameters;
    }
}
