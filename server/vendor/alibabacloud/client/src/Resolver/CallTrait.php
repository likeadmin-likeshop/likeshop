<?php

namespace AlibabaCloud\Client\Resolver;

use RuntimeException;
use ArgumentCountError;

/**
 * Trait CallTrait
 *
 * @codeCoverageIgnore
 * @package AlibabaCloud\Client\Resolver
 */
trait CallTrait
{
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
            $parameter = \mb_strcut($name, 3);

            return $this->__get($parameter);
        }

        if (strncmp($name, 'with', 4) === 0) {
            $parameter = \mb_strcut($name, 4);

            $value                                 = $this->getCallArguments($name, $arguments);
            $this->data[$parameter]                = $value;
            $this->parameterPosition()[$parameter] = $value;

            return $this;
        }

        if (strncmp($name, 'set', 3) === 0) {
            $parameter   = \mb_strcut($name, 3);
            $with_method = "with$parameter";

            return $this->$with_method($this->getCallArguments($name, $arguments));
        }

        throw new RuntimeException('Call to undefined method ' . __CLASS__ . '::' . $name . '()');
    }

    /**
     * @param string $name
     * @param array  $arguments
     * @param int    $index
     *
     * @return mixed
     */
    private function getCallArguments($name, array $arguments, $index = 0)
    {
        if (!isset($arguments[$index])) {
            throw new ArgumentCountError("Missing arguments to method $name");
        }

        return $arguments[$index];
    }
}
