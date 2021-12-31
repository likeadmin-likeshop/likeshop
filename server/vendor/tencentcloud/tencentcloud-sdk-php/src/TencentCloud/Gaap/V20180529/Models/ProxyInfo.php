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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通道信息
 *
 * @method string getInstanceId() 获取（旧参数，请使用ProxyId）通道实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置（旧参数，请使用ProxyId）通道实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
 * @method integer getProjectId() 获取项目ID。
 * @method void setProjectId(integer $ProjectId) 设置项目ID。
 * @method string getProxyName() 获取通道名称。
 * @method void setProxyName(string $ProxyName) 设置通道名称。
 * @method string getAccessRegion() 获取接入地域。
 * @method void setAccessRegion(string $AccessRegion) 设置接入地域。
 * @method string getRealServerRegion() 获取源站地域。
 * @method void setRealServerRegion(string $RealServerRegion) 设置源站地域。
 * @method integer getBandwidth() 获取带宽，单位：Mbps。
 * @method void setBandwidth(integer $Bandwidth) 设置带宽，单位：Mbps。
 * @method integer getConcurrent() 获取并发，单位：个/秒。
 * @method void setConcurrent(integer $Concurrent) 设置并发，单位：个/秒。
 * @method string getStatus() 获取通道状态。其中：
RUNNING表示运行中；
CREATING表示创建中；
DESTROYING表示销毁中；
OPENING表示开启中；
CLOSING表示关闭中；
CLOSED表示已关闭；
ADJUSTING表示配置变更中；
ISOLATING表示隔离中；
ISOLATED表示已隔离；
CLONING表示复制中；
UNKNOWN表示未知状态。
 * @method void setStatus(string $Status) 设置通道状态。其中：
RUNNING表示运行中；
CREATING表示创建中；
DESTROYING表示销毁中；
OPENING表示开启中；
CLOSING表示关闭中；
CLOSED表示已关闭；
ADJUSTING表示配置变更中；
ISOLATING表示隔离中；
ISOLATED表示已隔离；
CLONING表示复制中；
UNKNOWN表示未知状态。
 * @method string getDomain() 获取接入域名。
 * @method void setDomain(string $Domain) 设置接入域名。
 * @method string getIP() 获取接入IP。
 * @method void setIP(string $IP) 设置接入IP。
 * @method string getVersion() 获取通道版本号：1.0，2.0，3.0。
 * @method void setVersion(string $Version) 设置通道版本号：1.0，2.0，3.0。
 * @method string getProxyId() 获取（新参数）通道实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyId(string $ProxyId) 设置（新参数）通道实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScalarable() 获取1，该通道可缩扩容；0，该通道无法缩扩容。
 * @method void setScalarable(integer $Scalarable) 设置1，该通道可缩扩容；0，该通道无法缩扩容。
 * @method array getSupportProtocols() 获取支持的协议类型。
 * @method void setSupportProtocols(array $SupportProtocols) 设置支持的协议类型。
 * @method string getGroupId() 获取通道组ID，当通道归属于某一通道组时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置通道组ID，当通道归属于某一通道组时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyId() 获取安全策略ID，当设置了安全策略时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(string $PolicyId) 设置安全策略ID，当设置了安全策略时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RegionDetail getAccessRegionInfo() 获取接入地域详细信息，包括地域ID和地域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessRegionInfo(RegionDetail $AccessRegionInfo) 设置接入地域详细信息，包括地域ID和地域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RegionDetail getRealServerRegionInfo() 获取源站地域详细信息，包括地域ID和地域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealServerRegionInfo(RegionDetail $RealServerRegionInfo) 设置源站地域详细信息，包括地域ID和地域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getForwardIP() 获取通道转发IP
 * @method void setForwardIP(string $ForwardIP) 设置通道转发IP
 * @method array getTagSet() 获取标签列表，不存在标签时，该字段为空列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签列表，不存在标签时，该字段为空列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSupportSecurity() 获取是否支持安全组配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportSecurity(integer $SupportSecurity) 设置是否支持安全组配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBillingType() 获取计费类型: 0表示按带宽计费  1表示按流量计费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBillingType(integer $BillingType) 设置计费类型: 0表示按带宽计费  1表示按流量计费。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelatedGlobalDomains() 获取关联了解析的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedGlobalDomains(array $RelatedGlobalDomains) 设置关联了解析的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getModifyConfigTime() 获取配置变更时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyConfigTime(integer $ModifyConfigTime) 设置配置变更时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxyType() 获取通道类型，104表示新的银牌质量通道类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyType(integer $ProxyType) 设置通道类型，104表示新的银牌质量通道类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClientIPMethod() 获取通道获取客户端IP的方式，0表示TOA，1表示Proxy Protocol
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIPMethod(array $ClientIPMethod) 设置通道获取客户端IP的方式，0表示TOA，1表示Proxy Protocol
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProxyInfo extends AbstractModel
{
    /**
     * @var string （旧参数，请使用ProxyId）通道实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer 创建时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
     */
    public $CreateTime;

    /**
     * @var integer 项目ID。
     */
    public $ProjectId;

    /**
     * @var string 通道名称。
     */
    public $ProxyName;

    /**
     * @var string 接入地域。
     */
    public $AccessRegion;

    /**
     * @var string 源站地域。
     */
    public $RealServerRegion;

    /**
     * @var integer 带宽，单位：Mbps。
     */
    public $Bandwidth;

    /**
     * @var integer 并发，单位：个/秒。
     */
    public $Concurrent;

    /**
     * @var string 通道状态。其中：
RUNNING表示运行中；
CREATING表示创建中；
DESTROYING表示销毁中；
OPENING表示开启中；
CLOSING表示关闭中；
CLOSED表示已关闭；
ADJUSTING表示配置变更中；
ISOLATING表示隔离中；
ISOLATED表示已隔离；
CLONING表示复制中；
UNKNOWN表示未知状态。
     */
    public $Status;

    /**
     * @var string 接入域名。
     */
    public $Domain;

    /**
     * @var string 接入IP。
     */
    public $IP;

    /**
     * @var string 通道版本号：1.0，2.0，3.0。
     */
    public $Version;

    /**
     * @var string （新参数）通道实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyId;

    /**
     * @var integer 1，该通道可缩扩容；0，该通道无法缩扩容。
     */
    public $Scalarable;

    /**
     * @var array 支持的协议类型。
     */
    public $SupportProtocols;

    /**
     * @var string 通道组ID，当通道归属于某一通道组时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 安全策略ID，当设置了安全策略时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @var RegionDetail 接入地域详细信息，包括地域ID和地域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessRegionInfo;

    /**
     * @var RegionDetail 源站地域详细信息，包括地域ID和地域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealServerRegionInfo;

    /**
     * @var string 通道转发IP
     */
    public $ForwardIP;

    /**
     * @var array 标签列表，不存在标签时，该字段为空列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @var integer 是否支持安全组配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportSecurity;

    /**
     * @var integer 计费类型: 0表示按带宽计费  1表示按流量计费。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BillingType;

    /**
     * @var array 关联了解析的域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedGlobalDomains;

    /**
     * @var integer 配置变更时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyConfigTime;

    /**
     * @var integer 通道类型，104表示新的银牌质量通道类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyType;

    /**
     * @var array 通道获取客户端IP的方式，0表示TOA，1表示Proxy Protocol
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIPMethod;

    /**
     * @param string $InstanceId （旧参数，请使用ProxyId）通道实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
     * @param integer $ProjectId 项目ID。
     * @param string $ProxyName 通道名称。
     * @param string $AccessRegion 接入地域。
     * @param string $RealServerRegion 源站地域。
     * @param integer $Bandwidth 带宽，单位：Mbps。
     * @param integer $Concurrent 并发，单位：个/秒。
     * @param string $Status 通道状态。其中：
RUNNING表示运行中；
CREATING表示创建中；
DESTROYING表示销毁中；
OPENING表示开启中；
CLOSING表示关闭中；
CLOSED表示已关闭；
ADJUSTING表示配置变更中；
ISOLATING表示隔离中；
ISOLATED表示已隔离；
CLONING表示复制中；
UNKNOWN表示未知状态。
     * @param string $Domain 接入域名。
     * @param string $IP 接入IP。
     * @param string $Version 通道版本号：1.0，2.0，3.0。
     * @param string $ProxyId （新参数）通道实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Scalarable 1，该通道可缩扩容；0，该通道无法缩扩容。
     * @param array $SupportProtocols 支持的协议类型。
     * @param string $GroupId 通道组ID，当通道归属于某一通道组时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyId 安全策略ID，当设置了安全策略时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RegionDetail $AccessRegionInfo 接入地域详细信息，包括地域ID和地域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RegionDetail $RealServerRegionInfo 源站地域详细信息，包括地域ID和地域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ForwardIP 通道转发IP
     * @param array $TagSet 标签列表，不存在标签时，该字段为空列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SupportSecurity 是否支持安全组配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BillingType 计费类型: 0表示按带宽计费  1表示按流量计费。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelatedGlobalDomains 关联了解析的域名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ModifyConfigTime 配置变更时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxyType 通道类型，104表示新的银牌质量通道类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClientIPMethod 通道获取客户端IP的方式，0表示TOA，1表示Proxy Protocol
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Scalarable",$param) and $param["Scalarable"] !== null) {
            $this->Scalarable = $param["Scalarable"];
        }

        if (array_key_exists("SupportProtocols",$param) and $param["SupportProtocols"] !== null) {
            $this->SupportProtocols = $param["SupportProtocols"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("AccessRegionInfo",$param) and $param["AccessRegionInfo"] !== null) {
            $this->AccessRegionInfo = new RegionDetail();
            $this->AccessRegionInfo->deserialize($param["AccessRegionInfo"]);
        }

        if (array_key_exists("RealServerRegionInfo",$param) and $param["RealServerRegionInfo"] !== null) {
            $this->RealServerRegionInfo = new RegionDetail();
            $this->RealServerRegionInfo->deserialize($param["RealServerRegionInfo"]);
        }

        if (array_key_exists("ForwardIP",$param) and $param["ForwardIP"] !== null) {
            $this->ForwardIP = $param["ForwardIP"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("SupportSecurity",$param) and $param["SupportSecurity"] !== null) {
            $this->SupportSecurity = $param["SupportSecurity"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }

        if (array_key_exists("RelatedGlobalDomains",$param) and $param["RelatedGlobalDomains"] !== null) {
            $this->RelatedGlobalDomains = $param["RelatedGlobalDomains"];
        }

        if (array_key_exists("ModifyConfigTime",$param) and $param["ModifyConfigTime"] !== null) {
            $this->ModifyConfigTime = $param["ModifyConfigTime"];
        }

        if (array_key_exists("ProxyType",$param) and $param["ProxyType"] !== null) {
            $this->ProxyType = $param["ProxyType"];
        }

        if (array_key_exists("ClientIPMethod",$param) and $param["ClientIPMethod"] !== null) {
            $this->ClientIPMethod = $param["ClientIPMethod"];
        }
    }
}
