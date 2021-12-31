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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFlowLogAttribute请求参数结构体
 *
 * @method string getVpcId() 获取私用网络ID或者统一ID，建议使用统一ID
 * @method void setVpcId(string $VpcId) 设置私用网络ID或者统一ID，建议使用统一ID
 * @method string getFlowLogId() 获取流日志唯一ID
 * @method void setFlowLogId(string $FlowLogId) 设置流日志唯一ID
 * @method string getFlowLogName() 获取流日志实例名字
 * @method void setFlowLogName(string $FlowLogName) 设置流日志实例名字
 * @method string getFlowLogDescription() 获取流日志实例描述
 * @method void setFlowLogDescription(string $FlowLogDescription) 设置流日志实例描述
 */
class ModifyFlowLogAttributeRequest extends AbstractModel
{
    /**
     * @var string 私用网络ID或者统一ID，建议使用统一ID
     */
    public $VpcId;

    /**
     * @var string 流日志唯一ID
     */
    public $FlowLogId;

    /**
     * @var string 流日志实例名字
     */
    public $FlowLogName;

    /**
     * @var string 流日志实例描述
     */
    public $FlowLogDescription;

    /**
     * @param string $VpcId 私用网络ID或者统一ID，建议使用统一ID
     * @param string $FlowLogId 流日志唯一ID
     * @param string $FlowLogName 流日志实例名字
     * @param string $FlowLogDescription 流日志实例描述
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
            $this->FlowLogId = $param["FlowLogId"];
        }

        if (array_key_exists("FlowLogName",$param) and $param["FlowLogName"] !== null) {
            $this->FlowLogName = $param["FlowLogName"];
        }

        if (array_key_exists("FlowLogDescription",$param) and $param["FlowLogDescription"] !== null) {
            $this->FlowLogDescription = $param["FlowLogDescription"];
        }
    }
}
