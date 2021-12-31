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
 * ModifyVpcEndPointServiceAttribute请求参数结构体
 *
 * @method string getEndPointServiceId() 获取终端节点服务ID。
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID。
 * @method string getVpcId() 获取VPCID。
 * @method void setVpcId(string $VpcId) 设置VPCID。
 * @method string getEndPointServiceName() 获取终端节点服务名称。
 * @method void setEndPointServiceName(string $EndPointServiceName) 设置终端节点服务名称。
 * @method boolean getAutoAcceptFlag() 获取是否自动接受。
 * @method void setAutoAcceptFlag(boolean $AutoAcceptFlag) 设置是否自动接受。
 * @method string getServiceInstanceId() 获取后端服务的ID，比如lb-xxx。
 * @method void setServiceInstanceId(string $ServiceInstanceId) 设置后端服务的ID，比如lb-xxx。
 */
class ModifyVpcEndPointServiceAttributeRequest extends AbstractModel
{
    /**
     * @var string 终端节点服务ID。
     */
    public $EndPointServiceId;

    /**
     * @var string VPCID。
     */
    public $VpcId;

    /**
     * @var string 终端节点服务名称。
     */
    public $EndPointServiceName;

    /**
     * @var boolean 是否自动接受。
     */
    public $AutoAcceptFlag;

    /**
     * @var string 后端服务的ID，比如lb-xxx。
     */
    public $ServiceInstanceId;

    /**
     * @param string $EndPointServiceId 终端节点服务ID。
     * @param string $VpcId VPCID。
     * @param string $EndPointServiceName 终端节点服务名称。
     * @param boolean $AutoAcceptFlag 是否自动接受。
     * @param string $ServiceInstanceId 后端服务的ID，比如lb-xxx。
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
        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("EndPointServiceName",$param) and $param["EndPointServiceName"] !== null) {
            $this->EndPointServiceName = $param["EndPointServiceName"];
        }

        if (array_key_exists("AutoAcceptFlag",$param) and $param["AutoAcceptFlag"] !== null) {
            $this->AutoAcceptFlag = $param["AutoAcceptFlag"];
        }

        if (array_key_exists("ServiceInstanceId",$param) and $param["ServiceInstanceId"] !== null) {
            $this->ServiceInstanceId = $param["ServiceInstanceId"];
        }
    }
}
