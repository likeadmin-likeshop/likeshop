<?php

namespace AlibabaCloud\Client;

/**
 * Class Encode
 *
 * @package AlibabaCloud\Client
 */
class Encode
{
    /**
     * @var array
     */
    private $data;

    /**
     * @param array $data
     *
     * @return static
     */
    public static function create(array $data)
    {
        return new static($data);
    }

    /**
     * Encode constructor.
     *
     * @param array $data
     */
    private function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return bool|string
     */
    public function toString()
    {
        $string = '';
        foreach ($this->data as $key => $value) {
            $encode = rawurlencode($value);
            if ($encode === '') {
                $string .= "$key&";
            } else {
                $string .= "$key=$encode&";
            }
        }

        if (0 < count($this->data)) {
            $string = substr($string, 0, -1);
        }

        return $string;
    }

    /**
     * @return $this
     */
    public function ksort()
    {
        ksort($this->data);

        return $this;
    }
}
