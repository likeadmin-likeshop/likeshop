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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量镜像进行健康检查的接收机信息。
 *
 * @method string getInstanceId() 获取物理机实例ID。
 * @method void setInstanceId(string $InstanceId) 设置物理机实例ID。
 * @method integer getPort() 获取物理机绑定的端口。
 * @method void setPort(integer $Port) 设置物理机绑定的端口。
 */
class DescribeTrafficMirrorReceiver extends AbstractModel
{
    /**
     * @var string 物理机实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 物理机绑定的端口。
     */
    public $Port;

    /**
     * @param string $InstanceId 物理机实例ID。
     * @param integer $Port 物理机绑定的端口。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
