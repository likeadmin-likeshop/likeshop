<?php

namespace AlibabaCloud\Client\Request;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Filter\Filter;
use AlibabaCloud\Client\Support\Arrays;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class UserAgent
 *
 * @package AlibabaCloud\Client\Request
 */
class UserAgent
{

    /**
     * @var array
     */
    private static $userAgent = [];

    /**
     * @var array
     */
    private static $guard = [
        'client',
        'php',
    ];

    /**
     * @param array $append
     *
     * @return string
     */
    public static function toString(array $append = [])
    {
        self::defaultFields();

        $os        = \PHP_OS;
        $osVersion = php_uname('r');
        $osMode    = php_uname('m');
        $userAgent = "AlibabaCloud ($os $osVersion; $osMode) ";

        $newUserAgent = [];

        $append = self::clean($append);

        $append = Arrays::merge(
            [
                self::$userAgent,
                $append,
            ]
        );

        foreach ($append as $key => $value) {
            if ($value === null) {
                $newUserAgent[] = $key;
                continue;
            }
            $newUserAgent[] = "$key/$value";
        }

        return $userAgent . \implode(' ', $newUserAgent);
    }

    /**
     * UserAgent constructor.
     */
    private static function defaultFields()
    {
        if (self::$userAgent === []) {
            self::$userAgent = [
                'Client' => AlibabaCloud::VERSION,
                'PHP'    => \PHP_VERSION,
            ];
        }
    }

    /**
     * @param array $append
     *
     * @return array
     */
    public static function clean(array $append)
    {
        foreach ($append as $key => $value) {
            if (self::isGuarded($key)) {
                unset($append[$key]);
                continue;
            }
        }

        return $append;
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public static function isGuarded($name)
    {
        return in_array(strtolower($name), self::$guard, true);
    }

    /**
     * set User Agent of Alibaba Cloud.
     *
     * @param string $name
     * @param string $value
     *
     * @throws ClientException
     */
    public static function append($name, $value)
    {
        Filter::name($name);
        Filter::value($value);

        self::defaultFields();

        if (!self::isGuarded($name)) {
            self::$userAgent[$name] = $value;
        }
    }

    /**
     * @param array $userAgent
     */
    public static function with(array $userAgent)
    {
        self::$userAgent = self::clean($userAgent);
    }

    /**
     * Clear all of the User Agent.
     */
    public static function clear()
    {
        self::$userAgent = [];
    }
}
