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
 * ModifyEnvironmentAttributes请求参数结构体
 *
 * @method string getEnvironmentId() 获取命名空间名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间名称。
 * @method integer getMsgTTL() 获取未消费消息过期时间，单位：秒，最大1296000。
 * @method void setMsgTTL(integer $MsgTTL) 设置未消费消息过期时间，单位：秒，最大1296000。
 * @method string getRemark() 获取备注，字符串最长不超过128。
 * @method void setRemark(string $Remark) 设置备注，字符串最长不超过128。
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 */
class ModifyEnvironmentAttributesRequest extends AbstractModel
{
    /**
     * @var string 命名空间名称。
     */
    public $EnvironmentId;

    /**
     * @var integer 未消费消息过期时间，单位：秒，最大1296000。
     */
    public $MsgTTL;

    /**
     * @var string 备注，字符串最长不超过128。
     */
    public $Remark;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @param string $EnvironmentId 命名空间名称。
     * @param integer $MsgTTL 未消费消息过期时间，单位：秒，最大1296000。
     * @param string $Remark 备注，字符串最长不超过128。
     * @param string $ClusterId 集群ID
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
