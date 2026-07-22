<?php

namespace Expressage;
class Expressage
{
    protected $app;
    protected $key;
    protected $debug;

    protected $logistics_info;

    protected $error;

    public function __construct($app, $key, $debug = false)
    {
        $this->app = $app;
        $this->key = $key;
        $this->debug = $debug;
    }

    /**
     * 格式化
     * @return bool
     */
    public function logisticsFormat()
    {
        if (empty($this->logistics_info)) {
            return false;
        }
        $info = $this->logistics_info;
        usort($info, function ($left, $right) {
            $left_time = self::getTraceTimestamp($left);
            $right_time = self::getTraceTimestamp($right);
            if ($left_time == $right_time) {
                return 0;
            }
            return $left_time < $right_time ? 1 : -1;
        });

        foreach ($info as $k => $v) {
            $info[$k] = array_values($v);
        }
        return $info;
    }

    /**
     * 获取不同物流供应商轨迹中的时间戳
     * @param array $trace
     * @return int
     */
    private static function getTraceTimestamp($trace)
    {
        foreach ($trace as $key => $value) {
            if (!is_string($key) || !is_string($value)
                || !in_array(strtolower($key), ['time', 'ftime', 'accepttime', 'accept_time'])) {
                continue;
            }
            $timestamp = strtotime($value);
            if ($timestamp !== false) {
                return $timestamp;
            }
        }

        foreach ($trace as $value) {
            if (!is_string($value) || !preg_match('/^\d{4}[-\/]\d{1,2}[-\/]\d{1,2}/', $value)) {
                continue;
            }
            $timestamp = strtotime($value);
            if ($timestamp !== false) {
                return $timestamp;
            }
        }

        return 0;
    }

    /**
     * 电商Sign签名生成
     * @param data 内容
     * @param appkey Appkey
     * @return DataSign签名
     */
    protected function encrypt($data, $appkey)
    {
        return urlencode(base64_encode(md5($data . $appkey)));
    }

    public function getError()
    {
        return $this->error;
    }
}
