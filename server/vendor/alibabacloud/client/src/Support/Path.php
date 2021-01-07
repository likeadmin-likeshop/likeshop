<?php

namespace AlibabaCloud\Client\Support;

/**
 * Class Path
 *
 * @package AlibabaCloud\Client\Support
 */
class Path
{
    /**
     * Assign path parameters to the url.
     *
     * @param string $pattern
     * @param array  $parameters
     *
     * @return string
     */
    public static function assign($pattern, array $parameters)
    {
        foreach ($parameters as $key => $value) {
            $pattern = str_replace("[$key]", $value, $pattern);
        }

        return $pattern;
    }
}
