<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 函数的异步重试配置详情
 *
 * @method array getRetryConfig() 获取用户错误的异步重试重试配置
 * @method void setRetryConfig(array $RetryConfig) 设置用户错误的异步重试重试配置
 * @method integer getMsgTTL() 获取消息保留时间
 * @method void setMsgTTL(integer $MsgTTL) 设置消息保留时间
 */
class AsyncTriggerConfig extends AbstractModel
{
    /**
     * @var array 用户错误的异步重试重试配置
     */
    public $RetryConfig;

    /**
     * @var integer 消息保留时间
     */
    public $MsgTTL;

    /**
     * @param array $RetryConfig 用户错误的异步重试重试配置
     * @param integer $MsgTTL 消息保留时间
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RetryConfig",$param) and $param["RetryConfig"] !== null) {
            $this->RetryConfig = [];
            foreach ($param["RetryConfig"] as $key => $value){
                $obj = new RetryConfig();
                $obj->deserialize($value);
                array_push($this->RetryConfig, $obj);
            }
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }
    }
}
