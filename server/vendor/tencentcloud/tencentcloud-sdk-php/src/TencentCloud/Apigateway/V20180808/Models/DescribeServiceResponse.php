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
 * DescribeService返回参数结构体
 *
 * @method string getServiceId() 获取服务唯一ID。
 * @method void setServiceId(string $ServiceId) 设置服务唯一ID。
 * @method array getAvailableEnvironments() 获取服务 环境列表。
 * @method void setAvailableEnvironments(array $AvailableEnvironments) 设置服务 环境列表。
 * @method string getServiceName() 获取服务名称。
 * @method void setServiceName(string $ServiceName) 设置服务名称。
 * @method string getServiceDesc() 获取服务描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceDesc(string $ServiceDesc) 设置服务描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取服务支持协议，可选值为http、https、http&https。
 * @method void setProtocol(string $Protocol) 设置服务支持协议，可选值为http、https、http&https。
 * @method string getCreatedTime() 获取服务创建时间。
 * @method void setCreatedTime(string $CreatedTime) 设置服务创建时间。
 * @method string getModifiedTime() 获取服务修改时间。
 * @method void setModifiedTime(string $ModifiedTime) 设置服务修改时间。
 * @method string getExclusiveSetName() 获取独立集群名称。
 * @method void setExclusiveSetName(string $ExclusiveSetName) 设置独立集群名称。
 * @method array getNetTypes() 获取网络类型列表，INNER为内网访问，OUTER为外网访问。
 * @method void setNetTypes(array $NetTypes) 设置网络类型列表，INNER为内网访问，OUTER为外网访问。
 * @method string getInternalSubDomain() 获取内网访问子域名。
 * @method void setInternalSubDomain(string $InternalSubDomain) 设置内网访问子域名。
 * @method string getOuterSubDomain() 获取外网访问子域名。
 * @method void setOuterSubDomain(string $OuterSubDomain) 设置外网访问子域名。
 * @method integer getInnerHttpPort() 获取内网访问http服务端口号。
 * @method void setInnerHttpPort(integer $InnerHttpPort) 设置内网访问http服务端口号。
 * @method integer getInnerHttpsPort() 获取内网访问https端口号。
 * @method void setInnerHttpsPort(integer $InnerHttpsPort) 设置内网访问https端口号。
 * @method integer getApiTotalCount() 获取API总数。
 * @method void setApiTotalCount(integer $ApiTotalCount) 设置API总数。
 * @method array getApiIdStatusSet() 获取API列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiIdStatusSet(array $ApiIdStatusSet) 设置API列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsagePlanTotalCount() 获取使用计划总数量。
 * @method void setUsagePlanTotalCount(integer $UsagePlanTotalCount) 设置使用计划总数量。
 * @method array getUsagePlanList() 获取使用计划数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsagePlanList(array $UsagePlanList) 设置使用计划数组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpVersion() 获取IP版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpVersion(string $IpVersion) 设置IP版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserType() 获取此服务的用户类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserType(string $UserType) 设置此服务的用户类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSetId() 获取预留字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetId(integer $SetId) 设置预留字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取服务绑定的标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置服务绑定的标签。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取独享实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置独享实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取独享实例name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置独享实例name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSetType() 获取集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetType(string $SetType) 设置集群类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeServiceResponse extends AbstractModel
{
    /**
     * @var string 服务唯一ID。
     */
    public $ServiceId;

    /**
     * @var array 服务 环境列表。
     */
    public $AvailableEnvironments;

    /**
     * @var string 服务名称。
     */
    public $ServiceName;

    /**
     * @var string 服务描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceDesc;

    /**
     * @var string 服务支持协议，可选值为http、https、http&https。
     */
    public $Protocol;

    /**
     * @var string 服务创建时间。
     */
    public $CreatedTime;

    /**
     * @var string 服务修改时间。
     */
    public $ModifiedTime;

    /**
     * @var string 独立集群名称。
     */
    public $ExclusiveSetName;

    /**
     * @var array 网络类型列表，INNER为内网访问，OUTER为外网访问。
     */
    public $NetTypes;

    /**
     * @var string 内网访问子域名。
     */
    public $InternalSubDomain;

    /**
     * @var string 外网访问子域名。
     */
    public $OuterSubDomain;

    /**
     * @var integer 内网访问http服务端口号。
     */
    public $InnerHttpPort;

    /**
     * @var integer 内网访问https端口号。
     */
    public $InnerHttpsPort;

    /**
     * @var integer API总数。
     */
    public $ApiTotalCount;

    /**
     * @var array API列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiIdStatusSet;

    /**
     * @var integer 使用计划总数量。
     */
    public $UsagePlanTotalCount;

    /**
     * @var array 使用计划数组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsagePlanList;

    /**
     * @var string IP版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpVersion;

    /**
     * @var string 此服务的用户类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserType;

    /**
     * @var integer 预留字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetId;

    /**
     * @var array 服务绑定的标签。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 独享实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 独享实例name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetType;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ServiceId 服务唯一ID。
     * @param array $AvailableEnvironments 服务 环境列表。
     * @param string $ServiceName 服务名称。
     * @param string $ServiceDesc 服务描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 服务支持协议，可选值为http、https、http&https。
     * @param string $CreatedTime 服务创建时间。
     * @param string $ModifiedTime 服务修改时间。
     * @param string $ExclusiveSetName 独立集群名称。
     * @param array $NetTypes 网络类型列表，INNER为内网访问，OUTER为外网访问。
     * @param string $InternalSubDomain 内网访问子域名。
     * @param string $OuterSubDomain 外网访问子域名。
     * @param integer $InnerHttpPort 内网访问http服务端口号。
     * @param integer $InnerHttpsPort 内网访问https端口号。
     * @param integer $ApiTotalCount API总数。
     * @param array $ApiIdStatusSet API列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UsagePlanTotalCount 使用计划总数量。
     * @param array $UsagePlanList 使用计划数组。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpVersion IP版本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserType 此服务的用户类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SetId 预留字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 服务绑定的标签。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 独享实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 独享实例name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SetType 集群类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("AvailableEnvironments",$param) and $param["AvailableEnvironments"] !== null) {
            $this->AvailableEnvironments = $param["AvailableEnvironments"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceDesc",$param) and $param["ServiceDesc"] !== null) {
            $this->ServiceDesc = $param["ServiceDesc"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("ExclusiveSetName",$param) and $param["ExclusiveSetName"] !== null) {
            $this->ExclusiveSetName = $param["ExclusiveSetName"];
        }

        if (array_key_exists("NetTypes",$param) and $param["NetTypes"] !== null) {
            $this->NetTypes = $param["NetTypes"];
        }

        if (array_key_exists("InternalSubDomain",$param) and $param["InternalSubDomain"] !== null) {
            $this->InternalSubDomain = $param["InternalSubDomain"];
        }

        if (array_key_exists("OuterSubDomain",$param) and $param["OuterSubDomain"] !== null) {
            $this->OuterSubDomain = $param["OuterSubDomain"];
        }

        if (array_key_exists("InnerHttpPort",$param) and $param["InnerHttpPort"] !== null) {
            $this->InnerHttpPort = $param["InnerHttpPort"];
        }

        if (array_key_exists("InnerHttpsPort",$param) and $param["InnerHttpsPort"] !== null) {
            $this->InnerHttpsPort = $param["InnerHttpsPort"];
        }

        if (array_key_exists("ApiTotalCount",$param) and $param["ApiTotalCount"] !== null) {
            $this->ApiTotalCount = $param["ApiTotalCount"];
        }

        if (array_key_exists("ApiIdStatusSet",$param) and $param["ApiIdStatusSet"] !== null) {
            $this->ApiIdStatusSet = [];
            foreach ($param["ApiIdStatusSet"] as $key => $value){
                $obj = new ApiIdStatus();
                $obj->deserialize($value);
                array_push($this->ApiIdStatusSet, $obj);
            }
        }

        if (array_key_exists("UsagePlanTotalCount",$param) and $param["UsagePlanTotalCount"] !== null) {
            $this->UsagePlanTotalCount = $param["UsagePlanTotalCount"];
        }

        if (array_key_exists("UsagePlanList",$param) and $param["UsagePlanList"] !== null) {
            $this->UsagePlanList = [];
            foreach ($param["UsagePlanList"] as $key => $value){
                $obj = new UsagePlan();
                $obj->deserialize($value);
                array_push($this->UsagePlanList, $obj);
            }
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("SetId",$param) and $param["SetId"] !== null) {
            $this->SetId = $param["SetId"];
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SetType",$param) and $param["SetType"] !== null) {
            $this->SetType = $param["SetType"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
