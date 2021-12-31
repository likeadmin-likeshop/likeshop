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
 * CreateVpcEndPoint请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。
 * @method string getSubnetId() 获取子网实例ID。
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID。
 * @method string getEndPointName() 获取终端节点名称。
 * @method void setEndPointName(string $EndPointName) 设置终端节点名称。
 * @method string getEndPointServiceId() 获取终端节点服务ID。
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID。
 * @method string getEndPointVip() 获取终端节点VIP，可以指定IP申请。
 * @method void setEndPointVip(string $EndPointVip) 设置终端节点VIP，可以指定IP申请。
 * @method string getSecurityGroupId() 获取安全组ID。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组ID。
 */
class CreateVpcEndPointRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。
     */
    public $VpcId;

    /**
     * @var string 子网实例ID。
     */
    public $SubnetId;

    /**
     * @var string 终端节点名称。
     */
    public $EndPointName;

    /**
     * @var string 终端节点服务ID。
     */
    public $EndPointServiceId;

    /**
     * @var string 终端节点VIP，可以指定IP申请。
     */
    public $EndPointVip;

    /**
     * @var string 安全组ID。
     */
    public $SecurityGroupId;

    /**
     * @param string $VpcId VPC实例ID。
     * @param string $SubnetId 子网实例ID。
     * @param string $EndPointName 终端节点名称。
     * @param string $EndPointServiceId 终端节点服务ID。
     * @param string $EndPointVip 终端节点VIP，可以指定IP申请。
     * @param string $SecurityGroupId 安全组ID。
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVip",$param) and $param["EndPointVip"] !== null) {
            $this->EndPointVip = $param["EndPointVip"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }
    }
}
