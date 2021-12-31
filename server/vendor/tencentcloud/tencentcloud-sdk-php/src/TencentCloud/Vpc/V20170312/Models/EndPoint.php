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
 * 终端节点详情。
 *
 * @method string getEndPointId() 获取终端节点ID。
 * @method void setEndPointId(string $EndPointId) 设置终端节点ID。
 * @method string getVpcId() 获取VPCID。
 * @method void setVpcId(string $VpcId) 设置VPCID。
 * @method string getSubnetId() 获取子网ID。
 * @method void setSubnetId(string $SubnetId) 设置子网ID。
 * @method string getEndPointOwner() 获取APPID。
 * @method void setEndPointOwner(string $EndPointOwner) 设置APPID。
 * @method string getEndPointName() 获取终端节点名称。
 * @method void setEndPointName(string $EndPointName) 设置终端节点名称。
 * @method string getServiceVpcId() 获取终端节点服务的VPCID。
 * @method void setServiceVpcId(string $ServiceVpcId) 设置终端节点服务的VPCID。
 * @method string getServiceVip() 获取终端节点服务的VIP。
 * @method void setServiceVip(string $ServiceVip) 设置终端节点服务的VIP。
 * @method string getEndPointServiceId() 获取终端节点服务的ID。
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务的ID。
 * @method string getEndPointVip() 获取终端节点的VIP。
 * @method void setEndPointVip(string $EndPointVip) 设置终端节点的VIP。
 * @method string getState() 获取终端节点状态，ACTIVE：可用，PENDING：待接受，ACCEPTING：接受中，REJECTED：已拒绝，FAILED：失败。
 * @method void setState(string $State) 设置终端节点状态，ACTIVE：可用，PENDING：待接受，ACCEPTING：接受中，REJECTED：已拒绝，FAILED：失败。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method array getGroupSet() 获取终端节点绑定的安全组实例ID列表。
 * @method void setGroupSet(array $GroupSet) 设置终端节点绑定的安全组实例ID列表。
 * @method string getServiceName() 获取终端节点服务名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置终端节点服务名称。
注意：此字段可能返回 null，表示取不到有效值。
 */
class EndPoint extends AbstractModel
{
    /**
     * @var string 终端节点ID。
     */
    public $EndPointId;

    /**
     * @var string VPCID。
     */
    public $VpcId;

    /**
     * @var string 子网ID。
     */
    public $SubnetId;

    /**
     * @var string APPID。
     */
    public $EndPointOwner;

    /**
     * @var string 终端节点名称。
     */
    public $EndPointName;

    /**
     * @var string 终端节点服务的VPCID。
     */
    public $ServiceVpcId;

    /**
     * @var string 终端节点服务的VIP。
     */
    public $ServiceVip;

    /**
     * @var string 终端节点服务的ID。
     */
    public $EndPointServiceId;

    /**
     * @var string 终端节点的VIP。
     */
    public $EndPointVip;

    /**
     * @var string 终端节点状态，ACTIVE：可用，PENDING：待接受，ACCEPTING：接受中，REJECTED：已拒绝，FAILED：失败。
     */
    public $State;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var array 终端节点绑定的安全组实例ID列表。
     */
    public $GroupSet;

    /**
     * @var string 终端节点服务名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @param string $EndPointId 终端节点ID。
     * @param string $VpcId VPCID。
     * @param string $SubnetId 子网ID。
     * @param string $EndPointOwner APPID。
     * @param string $EndPointName 终端节点名称。
     * @param string $ServiceVpcId 终端节点服务的VPCID。
     * @param string $ServiceVip 终端节点服务的VIP。
     * @param string $EndPointServiceId 终端节点服务的ID。
     * @param string $EndPointVip 终端节点的VIP。
     * @param string $State 终端节点状态，ACTIVE：可用，PENDING：待接受，ACCEPTING：接受中，REJECTED：已拒绝，FAILED：失败。
     * @param string $CreateTime 创建时间。
     * @param array $GroupSet 终端节点绑定的安全组实例ID列表。
     * @param string $ServiceName 终端节点服务名称。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("EndPointOwner",$param) and $param["EndPointOwner"] !== null) {
            $this->EndPointOwner = $param["EndPointOwner"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("ServiceVpcId",$param) and $param["ServiceVpcId"] !== null) {
            $this->ServiceVpcId = $param["ServiceVpcId"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVip",$param) and $param["EndPointVip"] !== null) {
            $this->EndPointVip = $param["EndPointVip"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupSet",$param) and $param["GroupSet"] !== null) {
            $this->GroupSet = $param["GroupSet"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }
    }
}
