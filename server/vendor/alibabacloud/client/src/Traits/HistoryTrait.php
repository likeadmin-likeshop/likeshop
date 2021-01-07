<?php

namespace AlibabaCloud\Client\Traits;

/**
 * Trait HistoryTrait
 *
 * @package AlibabaCloud\Client\Traits
 */
trait HistoryTrait
{
    /**
     * @var array
     */
    private static $history = [];

    /**
     * @var bool
     */
    private static $isRememberHistory = false;

    /**
     * @return array
     */
    public static function getHistory()
    {
        return self::$history;
    }

    public static function forgetHistory()
    {
        self::$history = [];
    }

    public static function notRememberHistory()
    {
        self::$isRememberHistory = false;
    }

    public static function rememberHistory()
    {
        self::$isRememberHistory = true;
    }

    /**
     * @return bool
     */
    public static function isRememberHistory()
    {
        return self::$isRememberHistory;
    }

    /**
     * @return array
     */
    public static function &referenceHistory()
    {
        return self::$history;
    }

    /**
     * @return int
     */
    public static function countHistory()
    {
        return count(self::$history);
    }
}
