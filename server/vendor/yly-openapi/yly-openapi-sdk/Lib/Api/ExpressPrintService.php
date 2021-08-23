<?php

namespace App\Api;

class ExpressPrintService extends RpcService{

    /**
     * 面单打印接口
     * 不支持机型: k4-wh, k4-wa, m1 (k4系列机型不建议使用不干胶热敏纸)
     *
     * @param $machineCode string 机器码
     * @param $content array 面单数据
     * @param $originId string 商户系统内部订单号，要求32个字符内，只能是数字、大小写字母
     * @return mixed
     */
    public function index($machineCode, $content, $originId)
    {
        return $this->client->call('expressprint/index', array('machine_code' => $machineCode, 'content' => $content, 'origin_id' => $originId));
    }

}
