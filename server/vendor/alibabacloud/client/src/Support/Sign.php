<?php

namespace AlibabaCloud\Client\Support;

use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\UriInterface;

/**
 * Class Sign
 *
 * @package AlibabaCloud\Client\Support
 */
class Sign
{
    /**
     * @var string
     */
    private static $headerSeparator = "\n";

    /**
     * Construct standard Header for Alibaba Cloud.
     *
     * @param array $headers
     *
     * @return string
     */
    private static function acsHeaderString(array $headers)
    {
        $array = [];
        foreach ($headers as $headerKey => $headerValue) {
            $key = strtolower($headerKey);
            if (strncmp($key, 'x-acs-', 6) === 0) {
                $array[$key] = $headerValue;
            }
        }
        ksort($array);
        $string = '';
        foreach ($array as $sortMapKey => $sortMapValue) {
            $string .= $sortMapKey . ':' . $sortMapValue[0] . self::$headerSeparator;
        }

        return $string;
    }

    /**
     * @param UriInterface $uri
     *
     * @return string
     */
    private static function resourceString(UriInterface $uri)
    {
        return $uri->getPath() . '?' . rawurldecode($uri->getQuery());
    }

    /**
     * @param string $method
     * @param array  $headers
     *
     * @return string
     */
    private static function headerString($method, array $headers)
    {
        $string = $method . self::$headerSeparator;
        if (isset($headers['Accept'][0])) {
            $string .= $headers['Accept'][0];
        }
        $string .= self::$headerSeparator;

        if (isset($headers['Content-MD5'][0])) {
            $string .= $headers['Content-MD5'][0];
        }
        $string .= self::$headerSeparator;

        if (isset($headers['Content-Type'][0])) {
            $string .= $headers['Content-Type'][0];
        }
        $string .= self::$headerSeparator;

        if (isset($headers['Date'][0])) {
            $string .= $headers['Date'][0];
        }
        $string .= self::$headerSeparator;

        $string .= self::acsHeaderString($headers);

        return $string;
    }

    /**
     * @param string $string
     *
     * @return null|string|string[]
     */
    private static function percentEncode($string)
    {
        $result = urlencode($string);
        $result = str_replace(['+', '*'], ['%20', '%2A'], $result);
        $result = preg_replace('/%7E/', '~', $result);

        return $result;
    }

    /**
     * @param string $method
     * @param array  $parameters
     *
     * @return string
     */
    public static function rpcString($method, array $parameters)
    {
        ksort($parameters);
        $canonicalized = '';
        foreach ($parameters as $key => $value) {
            if ($value === null || $value === '') {
                continue;
            }
            $canonicalized .= '&' . self::percentEncode($key) . '=' . self::percentEncode($value);
        }

        return $method . '&%2F&' . self::percentEncode(substr($canonicalized, 1));
    }

    /**
     * @param Request $request
     *
     * @return string
     */
    public static function roaString(Request $request)
    {
        return self::headerString($request->getMethod(), $request->getHeaders()) .
               self::resourceString($request->getUri());
    }

    /**
     * @param string $salt
     *
     * @return string
     */
    public static function uuid($salt)
    {
        return md5($salt . uniqid(md5(microtime(true)), true)) . microtime();
    }
}
