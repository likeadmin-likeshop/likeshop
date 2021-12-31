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
namespace TencentCloud\Cis\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateContainerInstance请求参数结构体
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getVpcId() 获取vpcId
 * @method void setVpcId(string $VpcId) 设置vpcId
 * @method string getSubnetId() 获取subnetId
 * @method void setSubnetId(string $SubnetId) 设置subnetId
 * @method string getInstanceName() 获取容器实例名称，由小写字母、数字和 - 组成，由小写字母开头，小写字母或数字结尾，且长度不超过 40个字符
 * @method void setInstanceName(string $InstanceName) 设置容器实例名称，由小写字母、数字和 - 组成，由小写字母开头，小写字母或数字结尾，且长度不超过 40个字符
 * @method string getRestartPolicy() 获取重启策略（Always,OnFailure,Never）
 * @method void setRestartPolicy(string $RestartPolicy) 设置重启策略（Always,OnFailure,Never）
 * @method array getContainers() 获取容器列表
 * @method void setContainers(array $Containers) 设置容器列表
 */
class CreateContainerInstanceRequest extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string vpcId
     */
    public $VpcId;

    /**
     * @var string subnetId
     */
    public $SubnetId;

    /**
     * @var string 容器实例名称，由小写字母、数字和 - 组成，由小写字母开头，小写字母或数字结尾，且长度不超过 40个字符
     */
    public $InstanceName;

    /**
     * @var string 重启策略（Always,OnFailure,Never）
     */
    public $RestartPolicy;

    /**
     * @var array 容器列表
     */
    public $Containers;

    /**
     * @param string $Zone 可用区
     * @param string $VpcId vpcId
     * @param string $SubnetId subnetId
     * @param string $InstanceName 容器实例名称，由小写字母、数字和 - 组成，由小写字母开头，小写字母或数字结尾，且长度不超过 40个字符
     * @param string $RestartPolicy 重启策略（Always,OnFailure,Never）
     * @param array $Containers 容器列表
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("RestartPolicy",$param) and $param["RestartPolicy"] !== null) {
            $this->RestartPolicy = $param["RestartPolicy"];
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }
    }
}
