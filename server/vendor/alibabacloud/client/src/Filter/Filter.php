<?php

namespace AlibabaCloud\Client\Filter;

use AlibabaCloud\Client\SDK;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class Filter
 *
 * @package AlibabaCloud\Client\Filter
 */
class Filter
{

    /**
     * @param $name
     *
     * @return string
     *
     * @throws ClientException
     */
    public static function name($name)
    {
        if (!is_string($name)) {
            throw new ClientException(
                'Name must be a string',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($name === '') {
            throw new ClientException(
                'Name cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $name;
    }

    /**
     * @param $value
     *
     * @return string
     *
     * @throws ClientException
     */
    public static function value($value)
    {
        if (!is_numeric($value) && !is_string($value)) {
            throw new ClientException(
                'Value must be a string or int',
                SDK::INVALID_ARGUMENT
            );
        }

        if ($value === '') {
            throw new ClientException(
                'Value cannot be empty',
                SDK::INVALID_ARGUMENT
            );
        }

        return $value;
    }
}
