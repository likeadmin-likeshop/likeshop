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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 负载均衡实例信息
 *
 * @method string getRegion() 获取区域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置区域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Position getPosition() 获取位置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(Position $Position) 设置位置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerId() 获取负载均衡实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerName() 获取负载均衡实例的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡实例的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoadBalancerType() 获取负载均衡实例的网络类型：OPEN：公网属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置负载均衡实例的网络类型：OPEN：公网属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLoadBalancerVips() 获取负载均衡实例的 VIP 列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerVips(array $LoadBalancerVips) 设置负载均衡实例的 VIP 列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取负载均衡实例的状态，包括
 0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置负载均衡实例的状态，包括
 0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusTime() 获取负载均衡实例的上次状态转换时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusTime(string $StatusTime) 设置负载均衡实例的上次状态转换时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取私有网络的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取负载均衡实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置负载均衡实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVipIsp() 获取负载均衡IP地址所属的ISP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVipIsp(string $VipIsp) 设置负载均衡IP地址所属的ISP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LoadBalancerInternetAccessible getNetworkAttributes() 获取负载均衡实例的网络属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkAttributes(LoadBalancerInternetAccessible $NetworkAttributes) 设置负载均衡实例的网络属性。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecureGroups() 获取安全组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecureGroups(array $SecureGroups) 设置安全组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getLoadBalancerPassToTarget() 获取后端机器是否放通来自ELB的流量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadBalancerPassToTarget(boolean $LoadBalancerPassToTarget) 设置后端机器是否放通来自ELB的流量。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LoadBalancer extends AbstractModel
{
    /**
     * @var string 区域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var Position 位置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var string 负载均衡实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡实例的名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerName;

    /**
     * @var string 负载均衡实例的网络类型：OPEN：公网属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerType;

    /**
     * @var array 负载均衡实例的 VIP 列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerVips;

    /**
     * @var integer 负载均衡实例的状态，包括
 0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 负载均衡实例的上次状态转换时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusTime;

    /**
     * @var string 私有网络的 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var array 负载均衡实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 负载均衡IP地址所属的ISP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VipIsp;

    /**
     * @var LoadBalancerInternetAccessible 负载均衡实例的网络属性。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkAttributes;

    /**
     * @var array 安全组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecureGroups;

    /**
     * @var boolean 后端机器是否放通来自ELB的流量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadBalancerPassToTarget;

    /**
     * @param string $Region 区域。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Position $Position 位置信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerId 负载均衡实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerName 负载均衡实例的名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoadBalancerType 负载均衡实例的网络类型：OPEN：公网属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LoadBalancerVips 负载均衡实例的 VIP 列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 负载均衡实例的状态，包括
 0：创建中，1：正常运行。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 负载均衡实例的创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusTime 负载均衡实例的上次状态转换时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 私有网络的 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 负载均衡实例的标签信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VipIsp 负载均衡IP地址所属的ISP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LoadBalancerInternetAccessible $NetworkAttributes 负载均衡实例的网络属性。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecureGroups 安全组。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $LoadBalancerPassToTarget 后端机器是否放通来自ELB的流量。
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = new Position();
            $this->Position->deserialize($param["Position"]);
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("LoadBalancerVips",$param) and $param["LoadBalancerVips"] !== null) {
            $this->LoadBalancerVips = $param["LoadBalancerVips"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StatusTime",$param) and $param["StatusTime"] !== null) {
            $this->StatusTime = $param["StatusTime"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("VipIsp",$param) and $param["VipIsp"] !== null) {
            $this->VipIsp = $param["VipIsp"];
        }

        if (array_key_exists("NetworkAttributes",$param) and $param["NetworkAttributes"] !== null) {
            $this->NetworkAttributes = new LoadBalancerInternetAccessible();
            $this->NetworkAttributes->deserialize($param["NetworkAttributes"]);
        }

        if (array_key_exists("SecureGroups",$param) and $param["SecureGroups"] !== null) {
            $this->SecureGroups = $param["SecureGroups"];
        }

        if (array_key_exists("LoadBalancerPassToTarget",$param) and $param["LoadBalancerPassToTarget"] !== null) {
            $this->LoadBalancerPassToTarget = $param["LoadBalancerPassToTarget"];
        }
    }
}
