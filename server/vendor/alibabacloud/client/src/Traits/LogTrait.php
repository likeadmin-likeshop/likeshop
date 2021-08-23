<?php

namespace AlibabaCloud\Client\Traits;

use DateTime;
use DateTimeZone;
use Exception;
use Psr\Log\LoggerInterface;

/**
 * Trait LogTrait
 *
 * @package AlibabaCloud\Client\Traits
 */
trait LogTrait
{
    /**
     * @var LoggerInterface
     */
    private static $logger;

    /**
     * @var float
     */
    private static $logStartTime = 0;

    /**
     * @var string
     */
    private static $logFormat;

    /**
     * @var DateTime
     */
    private static $ts;

    /**
     * @return LoggerInterface
     */
    public static function getLogger()
    {
        return self::$logger;
    }

    /**
     * @param LoggerInterface $logger
     *
     * @throws Exception
     */
    public static function setLogger(LoggerInterface $logger)
    {
        self::$logger       = $logger;
        self::$logStartTime = microtime(true);
        $timezone           = new DateTimeZone(date_default_timezone_get() ?: 'UTC');
        if (PHP_VERSION_ID < 70100) {
            self::$ts = DateTime::createFromFormat('U.u', sprintf('%.6F', microtime(true)), $timezone);
        } else {
            self::$ts = new DateTime(null, $timezone);
        }
    }

    /**
     * @return string
     */
    public static function getLogFormat()
    {
        $template = self::$logFormat
            ?: '"{method} {uri} HTTP/{version}" {code} {cost} {hostname} {pid}';

        return str_replace(
            ['{pid}', '{cost}', '{start_time}'],
            [getmypid(), self::getCost(), self::$ts->format('Y-m-d H:i:s.u')],
            $template
        );
    }

    /**
     * Apache Common Log Format.
     *
     * @param string $formatter
     *
     * @link http://httpd.apache.org/docs/2.4/logs.html#common
     * @see  \GuzzleHttp\MessageFormatter
     */
    public static function setLogFormat($formatter)
    {
        self::$logFormat = $formatter;
    }

    /**
     * @return float|mixed
     */
    private static function getCost()
    {
        return microtime(true) - self::$logStartTime;
    }
}
