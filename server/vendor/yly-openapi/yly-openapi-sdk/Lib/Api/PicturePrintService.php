<?php

namespace App\Api;

class PicturePrintService extends RpcService{


    /**
     * 图形打印接口
     * 不支持机型: k4-wh, k4-wa, m1
     *
     * @param $machineCode string 机器码
     * @param $pictureUrl string 图片链接地址
     * @param $originId string 商户系统内部订单号，要求32个字符内，只能是数字、大小写字母
     * @return mixed
     */
    public function index($machineCode, $pictureUrl, $originId)
    {
        return $this->client->call('pictureprint/index', array('machine_code' => $machineCode, 'picture_url' => $pictureUrl, 'origin_id' => $originId));
    }
}