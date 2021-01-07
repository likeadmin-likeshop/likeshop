<?php

namespace AlibabaCloud\Client;

/**
 * Class Accept
 *
 * @package AlibabaCloud\Client
 */
class Accept
{
    /**
     * @var string
     */
    private $format;

    /**
     * Accept constructor.
     *
     * @param string $format
     */
    private function __construct($format)
    {
        $this->format = $format;
    }

    /**
     * @param $format
     *
     * @return Accept
     */
    public static function create($format)
    {
        return new static($format);
    }

    /**
     * @return mixed|string
     */
    public function toString()
    {
        $key = \strtoupper($this->format);

        $list = [
            'JSON' => 'application/json',
            'XML'  => 'application/xml',
            'RAW'  => 'application/octet-stream',
            'FORM' => 'application/x-www-form-urlencoded'
        ];

        return isset($list[$key]) ? $list[$key] : $list['RAW'];
    }
}
