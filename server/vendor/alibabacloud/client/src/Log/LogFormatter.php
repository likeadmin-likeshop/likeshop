<?php

namespace AlibabaCloud\Client\Log;

use DateTime;
use Exception;
use DateTimeZone;
use GuzzleHttp\MessageFormatter;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @deprecated Use GuzzleHttp\MessageFormatter.
 * Class LogFormatter
 *
 * @package AlibabaCloud\Client\Log
 */
class LogFormatter
{
    /**
     * @var float
     */
    private static $logStartTime = 0;

    /**
     * @var DateTime
     */
    private static $ts;

    /** @var string Template used to format log messages */
    public $template;

    /**
     * @param string $template Log message template
     *
     * @throws Exception
     */
    public function __construct($template)
    {
        parent::__construct($template);
        self::$logStartTime = microtime(true);
        $this->template     = $template;
        $timezone           = new DateTimeZone(date_default_timezone_get() ?: 'UTC');
        if (PHP_VERSION_ID < 70100) {
            self::$ts = DateTime::createFromFormat('U.u', sprintf('%.6F', microtime(true)), $timezone);
        } else {
            self::$ts = new DateTime(null, $timezone);
        }
    }

    /**
     * Returns a formatted message string.
     *
     * @param RequestInterface  $request  Request that was sent
     * @param ResponseInterface $response Response that was received
     * @param Exception         $error    Exception that was received
     *
     * @return string
     */
    public function format(
        RequestInterface $request,
        ResponseInterface $response = null,
        Exception $error = null
    ) {
        $this->template = str_replace('{pid}', getmypid(), $this->template);
        $this->template = str_replace('{cost}', self::getCost(), $this->template);
        $this->template = str_replace('{start_time}', self::$ts->format('Y-m-d H:i:s.u'), $this->template);

        return (new MessageFormatter($this->template))->format($request, $response, $error);
    }

    /**
     * @return float|mixed
     */
    private static function getCost()
    {
        return microtime(true) - self::$logStartTime;
    }
}
