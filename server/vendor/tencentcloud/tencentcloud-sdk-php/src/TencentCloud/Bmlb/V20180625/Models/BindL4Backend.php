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
 * 待与四层监听器绑定的物理机主机、虚拟机或半托管主机信息。目前一个四层监听器下面最多允许绑定255个主机端口。
 *
 * @method integer getPort() 获取待绑定的主机端口，可选值1~65535。
 * @method void setPort(integer $Port) 设置待绑定的主机端口，可选值1~65535。
 * @method string getInstanceId() 获取待绑定的黑石物理机主机ID、虚拟机IP或者是半托管主机ID。
 * @method void setInstanceId(string $InstanceId) 设置待绑定的黑石物理机主机ID、虚拟机IP或者是半托管主机ID。
 * @method integer getWeight() 获取待绑定的主机权重，可选值0~100。
 * @method void setWeight(integer $Weight) 设置待绑定的主机权重，可选值0~100。
 * @method integer getProbePort() 获取自定义探测的主机端口，可选值1~65535。（需要监听器开启自定义健康检查）
 * @method void setProbePort(integer $ProbePort) 设置自定义探测的主机端口，可选值1~65535。（需要监听器开启自定义健康检查）
 */
class BindL4Backend extends AbstractModel
{
    /**
     * @var integer 待绑定的主机端口，可选值1~65535。
     */
    public $Port;

    /**
     * @var string 待绑定的黑石物理机主机ID、虚拟机IP或者是半托管主机ID。
     */
    public $InstanceId;

    /**
     * @var integer 待绑定的主机权重，可选值0~100。
     */
    public $Weight;

    /**
     * @var integer 自定义探测的主机端口，可选值1~65535。（需要监听器开启自定义健康检查）
     */
    public $ProbePort;

    /**
     * @param integer $Port 待绑定的主机端口，可选值1~65535。
     * @param string $InstanceId 待绑定的黑石物理机主机ID、虚拟机IP或者是半托管主机ID。
     * @param integer $Weight 待绑定的主机权重，可选值0~100。
     * @param integer $ProbePort 自定义探测的主机端口，可选值1~65535。（需要监听器开启自定义健康检查）
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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("ProbePort",$param) and $param["ProbePort"] !== null) {
            $this->ProbePort = $param["ProbePort"];
        }
    }
}
