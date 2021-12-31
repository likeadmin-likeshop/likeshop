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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEnvironment请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境（命名空间）名称，不支持中字以及除了短线和下划线外的特殊字符且不超过16个字符。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称，不支持中字以及除了短线和下划线外的特殊字符且不超过16个字符。
 * @method integer getMsgTTL() 获取未消费消息过期时间，单位：秒，最小60，最大1296000，（15天）。
 * @method void setMsgTTL(integer $MsgTTL) 设置未消费消息过期时间，单位：秒，最小60，最大1296000，（15天）。
 * @method string getRemark() 获取说明，128个字符以内。
 * @method void setRemark(string $Remark) 设置说明，128个字符以内。
 * @method string getClusterId() 获取Pulsar 集群的ID
 * @method void setClusterId(string $ClusterId) 设置Pulsar 集群的ID
 */
class CreateEnvironmentRequest extends AbstractModel
{
    /**
     * @var string 环境（命名空间）名称，不支持中字以及除了短线和下划线外的特殊字符且不超过16个字符。
     */
    public $EnvironmentId;

    /**
     * @var integer 未消费消息过期时间，单位：秒，最小60，最大1296000，（15天）。
     */
    public $MsgTTL;

    /**
     * @var string 说明，128个字符以内。
     */
    public $Remark;

    /**
     * @var string Pulsar 集群的ID
     */
    public $ClusterId;

    /**
     * @param string $EnvironmentId 环境（命名空间）名称，不支持中字以及除了短线和下划线外的特殊字符且不超过16个字符。
     * @param integer $MsgTTL 未消费消息过期时间，单位：秒，最小60，最大1296000，（15天）。
     * @param string $Remark 说明，128个字符以内。
     * @param string $ClusterId Pulsar 集群的ID
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
