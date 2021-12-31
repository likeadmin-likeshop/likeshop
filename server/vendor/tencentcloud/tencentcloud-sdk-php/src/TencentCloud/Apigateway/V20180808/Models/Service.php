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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 展示服务列表用
 *
 * @method integer getInnerHttpsPort() 获取内网访问https端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerHttpsPort(integer $InnerHttpsPort) 设置内网访问https端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceDesc() 获取用户自定义的服务描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDesc(string $ServiceDesc) 设置用户自定义的服务描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取服务的前端请求类型。如http、https 或者 http&https。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置服务的前端请求类型。如http、https 或者 http&https。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifiedTime() 获取最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifiedTime(string $ModifiedTime) 设置最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetTypes() 获取服务支持的网络类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetTypes(array $NetTypes) 设置服务支持的网络类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExclusiveSetName() 获取独占集群名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExclusiveSetName(string $ExclusiveSetName) 设置独占集群名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceId() 获取服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(string $ServiceId) 设置服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpVersion() 获取IP版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpVersion(string $IpVersion) 设置IP版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAvailableEnvironments() 获取已经发布的环境列表。如test、prepub、release。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableEnvironments(array $AvailableEnvironments) 设置已经发布的环境列表。如test、prepub、release。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceName() 获取用户自定义的服务名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置用户自定义的服务名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOuterSubDomain() 获取系统为该服务分配的外网域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOuterSubDomain(string $OuterSubDomain) 设置系统为该服务分配的外网域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInnerHttpPort() 获取内网访问http端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerHttpPort(integer $InnerHttpPort) 设置内网访问http端口。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInnerSubDomain() 获取系统为该服务自动分配的内网域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInnerSubDomain(string $InnerSubDomain) 设置系统为该服务自动分配的内网域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTradeIsolateStatus() 获取服务的计费状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeIsolateStatus(integer $TradeIsolateStatus) 设置服务的计费状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取服务绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置服务绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取独享实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置独享实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSetType() 获取集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetType(string $SetType) 设置集群类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class Service extends AbstractModel
{
    /**
     * @var integer 内网访问https端口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerHttpsPort;

    /**
     * @var string 用户自定义的服务描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDesc;

    /**
     * @var string 服务的前端请求类型。如http、https 或者 http&https。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifiedTime;

    /**
     * @var array 服务支持的网络类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetTypes;

    /**
     * @var string 独占集群名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExclusiveSetName;

    /**
     * @var string 服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string IP版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpVersion;

    /**
     * @var array 已经发布的环境列表。如test、prepub、release。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableEnvironments;

    /**
     * @var string 用户自定义的服务名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string 系统为该服务分配的外网域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OuterSubDomain;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var integer 内网访问http端口。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerHttpPort;

    /**
     * @var string 系统为该服务自动分配的内网域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InnerSubDomain;

    /**
     * @var integer 服务的计费状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeIsolateStatus;

    /**
     * @var array 服务绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 独享实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetType;

    /**
     * @param integer $InnerHttpsPort 内网访问https端口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceDesc 用户自定义的服务描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 服务的前端请求类型。如http、https 或者 http&https。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifiedTime 最后修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NetTypes 服务支持的网络类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExclusiveSetName 独占集群名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceId 服务唯一 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpVersion IP版本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AvailableEnvironments 已经发布的环境列表。如test、prepub、release。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceName 用户自定义的服务名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OuterSubDomain 系统为该服务分配的外网域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InnerHttpPort 内网访问http端口。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InnerSubDomain 系统为该服务自动分配的内网域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TradeIsolateStatus 服务的计费状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 服务绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 独享实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SetType 集群类型
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
        if (array_key_exists("InnerHttpsPort",$param) and $param["InnerHttpsPort"] !== null) {
            $this->InnerHttpsPort = $param["InnerHttpsPort"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("NetTypes",$param) and $param["NetTypes"] !== null) {
            $this->NetTypes = $param["NetTypes"];
        }

        if (array_key_exists("ExclusiveSetName",$param) and $param["ExclusiveSetName"] !== null) {
            $this->ExclusiveSetName = $param["ExclusiveSetName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("AvailableEnvironments",$param) and $param["AvailableEnvironments"] !== null) {
            $this->AvailableEnvironments = $param["AvailableEnvironments"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("OuterSubDomain",$param) and $param["OuterSubDomain"] !== null) {
            $this->OuterSubDomain = $param["OuterSubDomain"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("InnerHttpPort",$param) and $param["InnerHttpPort"] !== null) {
            $this->InnerHttpPort = $param["InnerHttpPort"];
        }

        if (array_key_exists("InnerSubDomain",$param) and $param["InnerSubDomain"] !== null) {
            $this->InnerSubDomain = $param["InnerSubDomain"];
        }

        if (array_key_exists("TradeIsolateStatus",$param) and $param["TradeIsolateStatus"] !== null) {
            $this->TradeIsolateStatus = $param["TradeIsolateStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SetType",$param) and $param["SetType"] !== null) {
            $this->SetType = $param["SetType"];
        }
    }
}
