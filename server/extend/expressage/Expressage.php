<?php

namespace Expressage;
class Expressage
{
    protected $app;
    protected $key;
    protected $debug;

    protected $logistics_info;

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
        foreach ($info as $k => $v) {
            $info[$k] = array_values($v);
        }
        return $info;
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
}