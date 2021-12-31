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
 * CreateVpcEndPointService请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getEndPointServiceName() 获取终端节点服务名称。
 * @method void setEndPointServiceName(string $EndPointServiceName) 设置终端节点服务名称。
 * @method boolean getAutoAcceptFlag() 获取是否自动接受。
 * @method void setAutoAcceptFlag(boolean $AutoAcceptFlag) 设置是否自动接受。
 * @method string getServiceInstanceId() 获取后端服务ID，比如lb-xxx。
 * @method void setServiceInstanceId(string $ServiceInstanceId) 设置后端服务ID，比如lb-xxx。
 * @method boolean getIsPassService() 获取是否是PassService类型。
 * @method void setIsPassService(boolean $IsPassService) 设置是否是PassService类型。
 */
class CreateVpcEndPointServiceRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。
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
     * @var string 后端服务ID，比如lb-xxx。
     */
    public $ServiceInstanceId;

    /**
     * @var boolean 是否是PassService类型。
     */
    public $IsPassService;

    /**
     * @param string $VpcId VPC实例ID。
     * @param string $EndPointServiceName 终端节点服务名称。
     * @param boolean $AutoAcceptFlag 是否自动接受。
     * @param string $ServiceInstanceId 后端服务ID，比如lb-xxx。
     * @param boolean $IsPassService 是否是PassService类型。
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

        if (array_key_exists("EndPointServiceName",$param) and $param["EndPointServiceName"] !== null) {
            $this->EndPointServiceName = $param["EndPointServiceName"];
        }

        if (array_key_exists("AutoAcceptFlag",$param) and $param["AutoAcceptFlag"] !== null) {
            $this->AutoAcceptFlag = $param["AutoAcceptFlag"];
        }

        if (array_key_exists("ServiceInstanceId",$param) and $param["ServiceInstanceId"] !== null) {
            $this->ServiceInstanceId = $param["ServiceInstanceId"];
        }

        if (array_key_exists("IsPassService",$param) and $param["IsPassService"] !== null) {
            $this->IsPassService = $param["IsPassService"];
        }
    }
}
