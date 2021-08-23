<?php

namespace AlibabaCloud\Client\Support;

/**
 * Class Arrays
 *
 * @package AlibabaCloud\Client\Support
 */
class Arrays
{

    /**
     * @param array $arrays
     *
     * @return array
     */
    public static function merge(array $arrays)
    {
        $result = [];
        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                if (is_int($key)) {
                    $result[] = $value;
                    continue;
                }

                if (isset($result[$key]) && is_array($result[$key])) {
                    $result[$key] = self::merge(
                        [$result[$key], $value]
                    );
                    continue;
                }

                $result[$key] = $value;
            }
        }

        return $result;
    }
}
