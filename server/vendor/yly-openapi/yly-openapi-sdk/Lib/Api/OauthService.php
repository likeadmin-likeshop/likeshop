<?php

namespace App\Api;

class OauthService extends RpcService{


    /**
     * 设置推送URL接口
     *
     * @param $cmd string 推送队列键
     * @param $url string 推送地址
     * @param $status string 推送开关
     * @return mixed
     */
    public function setPushUrl($cmd, $url, $status = 'open')
    {
        return $this->client->call('oauth/setpushurl', array('cmd' => $cmd, 'url' => $url, 'status' => $status));
    }
}


