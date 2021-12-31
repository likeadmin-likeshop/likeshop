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
 * 通道组详情信息
 *
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getProxyNum() 获取通道组中通道数量
 * @method void setProxyNum(integer $ProxyNum) 设置通道组中通道数量
 * @method integer getStatus() 获取通道组状态：
0表示正常运行；
1表示创建中；
4表示销毁中；
11表示迁移中；
 * @method void setStatus(integer $Status) 设置通道组状态：
0表示正常运行；
1表示创建中；
4表示销毁中；
11表示迁移中；
 * @method string getOwnerUin() 获取归属Uin
 * @method void setOwnerUin(string $OwnerUin) 设置归属Uin
 * @method string getCreateUin() 获取创建Uin
 * @method void setCreateUin(string $CreateUin) 设置创建Uin
 * @method string getGroupName() 获取通道名称
 * @method void setGroupName(string $GroupName) 设置通道名称
 * @method string getDnsDefaultIp() 获取通道组域名解析默认IP
 * @method void setDnsDefaultIp(string $DnsDefaultIp) 设置通道组域名解析默认IP
 * @method string getDomain() 获取通道组域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置通道组域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method RegionDetail getRealServerRegionInfo() 获取目标地域
 * @method void setRealServerRegionInfo(RegionDetail $RealServerRegionInfo) 设置目标地域
 * @method boolean getIsOldGroup() 获取是否老通道组，2018-08-03之前创建的通道组为老通道组
 * @method void setIsOldGroup(boolean $IsOldGroup) 设置是否老通道组，2018-08-03之前创建的通道组为老通道组
 * @method string getGroupId() 获取通道组ID
 * @method void setGroupId(string $GroupId) 设置通道组ID
 * @method array getTagSet() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyId() 获取安全策略ID，当设置了安全策略时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyId(string $PolicyId) 设置安全策略ID，当设置了安全策略时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取通道组版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置通道组版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClientIPMethod() 获取通道获取客户端IP的方式，0表示TOA，1表示Proxy Protocol
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIPMethod(array $ClientIPMethod) 设置通道获取客户端IP的方式，0表示TOA，1表示Proxy Protocol
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProxyGroupDetail extends AbstractModel
{
    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 通道组中通道数量
     */
    public $ProxyNum;

    /**
     * @var integer 通道组状态：
0表示正常运行；
1表示创建中；
4表示销毁中；
11表示迁移中；
     */
    public $Status;

    /**
     * @var string 归属Uin
     */
    public $OwnerUin;

    /**
     * @var string 创建Uin
     */
    public $CreateUin;

    /**
     * @var string 通道名称
     */
    public $GroupName;

    /**
     * @var string 通道组域名解析默认IP
     */
    public $DnsDefaultIp;

    /**
     * @var string 通道组域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var RegionDetail 目标地域
     */
    public $RealServerRegionInfo;

    /**
     * @var boolean 是否老通道组，2018-08-03之前创建的通道组为老通道组
     */
    public $IsOldGroup;

    /**
     * @var string 通道组ID
     */
    public $GroupId;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @var string 安全策略ID，当设置了安全策略时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyId;

    /**
     * @var string 通道组版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var array 通道获取客户端IP的方式，0表示TOA，1表示Proxy Protocol
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIPMethod;

    /**
     * @param integer $CreateTime 创建时间
     * @param integer $ProjectId 项目ID
     * @param integer $ProxyNum 通道组中通道数量
     * @param integer $Status 通道组状态：
0表示正常运行；
1表示创建中；
4表示销毁中；
11表示迁移中；
     * @param string $OwnerUin 归属Uin
     * @param string $CreateUin 创建Uin
     * @param string $GroupName 通道名称
     * @param string $DnsDefaultIp 通道组域名解析默认IP
     * @param string $Domain 通道组域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param RegionDetail $RealServerRegionInfo 目标地域
     * @param boolean $IsOldGroup 是否老通道组，2018-08-03之前创建的通道组为老通道组
     * @param string $GroupId 通道组ID
     * @param array $TagSet 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyId 安全策略ID，当设置了安全策略时，存在该字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 通道组版本
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProxyNum",$param) and $param["ProxyNum"] !== null) {
            $this->ProxyNum = $param["ProxyNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("DnsDefaultIp",$param) and $param["DnsDefaultIp"] !== null) {
            $this->DnsDefaultIp = $param["DnsDefaultIp"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RealServerRegionInfo",$param) and $param["RealServerRegionInfo"] !== null) {
            $this->RealServerRegionInfo = new RegionDetail();
            $this->RealServerRegionInfo->deserialize($param["RealServerRegionInfo"]);
        }

        if (array_key_exists("IsOldGroup",$param) and $param["IsOldGroup"] !== null) {
            $this->IsOldGroup = $param["IsOldGroup"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ClientIPMethod",$param) and $param["ClientIPMethod"] !== null) {
            $this->ClientIPMethod = $param["ClientIPMethod"];
        }
    }
}
