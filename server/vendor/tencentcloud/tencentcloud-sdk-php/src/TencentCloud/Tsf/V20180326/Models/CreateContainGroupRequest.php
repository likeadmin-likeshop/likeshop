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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateContainGroup请求参数结构体
 *
 * @method string getApplicationId() 获取分组所属应用ID
 * @method void setApplicationId(string $ApplicationId) 设置分组所属应用ID
 * @method string getNamespaceId() 获取分组所属命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置分组所属命名空间ID
 * @method string getGroupName() 获取分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
 * @method void setGroupName(string $GroupName) 设置分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
 * @method integer getInstanceNum() 获取实例数量
 * @method void setInstanceNum(integer $InstanceNum) 设置实例数量
 * @method integer getAccessType() 获取0:公网 1:集群内访问 2：NodePort
 * @method void setAccessType(integer $AccessType) 设置0:公网 1:集群内访问 2：NodePort
 * @method array getProtocolPorts() 获取数组对象，见下方定义
 * @method void setProtocolPorts(array $ProtocolPorts) 设置数组对象，见下方定义
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getCpuLimit() 获取最大分配 CPU 核数，对应 K8S limit
 * @method void setCpuLimit(string $CpuLimit) 设置最大分配 CPU 核数，对应 K8S limit
 * @method string getMemLimit() 获取最大分配内存 MiB 数，对应 K8S limit
 * @method void setMemLimit(string $MemLimit) 设置最大分配内存 MiB 数，对应 K8S limit
 * @method string getGroupComment() 获取分组备注字段，长度应不大于200字符
 * @method void setGroupComment(string $GroupComment) 设置分组备注字段，长度应不大于200字符
 * @method integer getUpdateType() 获取更新方式：0:快速更新 1:滚动更新
 * @method void setUpdateType(integer $UpdateType) 设置更新方式：0:快速更新 1:滚动更新
 * @method integer getUpdateIvl() 获取滚动更新必填，更新间隔
 * @method void setUpdateIvl(integer $UpdateIvl) 设置滚动更新必填，更新间隔
 * @method string getCpuRequest() 获取初始分配的 CPU 核数，对应 K8S request
 * @method void setCpuRequest(string $CpuRequest) 设置初始分配的 CPU 核数，对应 K8S request
 * @method string getMemRequest() 获取初始分配的内存 MiB 数，对应 K8S request
 * @method void setMemRequest(string $MemRequest) 设置初始分配的内存 MiB 数，对应 K8S request
 * @method string getGroupResourceType() 获取部署组资源类型
 * @method void setGroupResourceType(string $GroupResourceType) 设置部署组资源类型
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getAgentCpuRequest() 获取agent 容器分配的 CPU 核数，对应 K8S 的 request
 * @method void setAgentCpuRequest(string $AgentCpuRequest) 设置agent 容器分配的 CPU 核数，对应 K8S 的 request
 * @method string getAgentCpuLimit() 获取agent 容器最大的 CPU 核数，对应 K8S 的 limit
 * @method void setAgentCpuLimit(string $AgentCpuLimit) 设置agent 容器最大的 CPU 核数，对应 K8S 的 limit
 * @method string getAgentMemRequest() 获取agent 容器分配的内存 MiB 数，对应 K8S 的 request
 * @method void setAgentMemRequest(string $AgentMemRequest) 设置agent 容器分配的内存 MiB 数，对应 K8S 的 request
 * @method string getAgentMemLimit() 获取agent 容器最大的内存 MiB 数，对应 K8S 的 limit
 * @method void setAgentMemLimit(string $AgentMemLimit) 设置agent 容器最大的内存 MiB 数，对应 K8S 的 limit
 * @method string getIstioCpuRequest() 获取istioproxy 容器分配的 CPU 核数，对应 K8S 的 request
 * @method void setIstioCpuRequest(string $IstioCpuRequest) 设置istioproxy 容器分配的 CPU 核数，对应 K8S 的 request
 * @method string getIstioCpuLimit() 获取istioproxy 容器最大的 CPU 核数，对应 K8S 的 limit
 * @method void setIstioCpuLimit(string $IstioCpuLimit) 设置istioproxy 容器最大的 CPU 核数，对应 K8S 的 limit
 * @method string getIstioMemRequest() 获取istioproxy 容器分配的内存 MiB 数，对应 K8S 的 request
 * @method void setIstioMemRequest(string $IstioMemRequest) 设置istioproxy 容器分配的内存 MiB 数，对应 K8S 的 request
 * @method string getIstioMemLimit() 获取istioproxy 容器最大的内存 MiB 数，对应 K8S 的 limit
 * @method void setIstioMemLimit(string $IstioMemLimit) 设置istioproxy 容器最大的内存 MiB 数，对应 K8S 的 limit
 */
class CreateContainGroupRequest extends AbstractModel
{
    /**
     * @var string 分组所属应用ID
     */
    public $ApplicationId;

    /**
     * @var string 分组所属命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
     */
    public $GroupName;

    /**
     * @var integer 实例数量
     */
    public $InstanceNum;

    /**
     * @var integer 0:公网 1:集群内访问 2：NodePort
     */
    public $AccessType;

    /**
     * @var array 数组对象，见下方定义
     */
    public $ProtocolPorts;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 最大分配 CPU 核数，对应 K8S limit
     */
    public $CpuLimit;

    /**
     * @var string 最大分配内存 MiB 数，对应 K8S limit
     */
    public $MemLimit;

    /**
     * @var string 分组备注字段，长度应不大于200字符
     */
    public $GroupComment;

    /**
     * @var integer 更新方式：0:快速更新 1:滚动更新
     */
    public $UpdateType;

    /**
     * @var integer 滚动更新必填，更新间隔
     */
    public $UpdateIvl;

    /**
     * @var string 初始分配的 CPU 核数，对应 K8S request
     */
    public $CpuRequest;

    /**
     * @var string 初始分配的内存 MiB 数，对应 K8S request
     */
    public $MemRequest;

    /**
     * @var string 部署组资源类型
     */
    public $GroupResourceType;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string agent 容器分配的 CPU 核数，对应 K8S 的 request
     */
    public $AgentCpuRequest;

    /**
     * @var string agent 容器最大的 CPU 核数，对应 K8S 的 limit
     */
    public $AgentCpuLimit;

    /**
     * @var string agent 容器分配的内存 MiB 数，对应 K8S 的 request
     */
    public $AgentMemRequest;

    /**
     * @var string agent 容器最大的内存 MiB 数，对应 K8S 的 limit
     */
    public $AgentMemLimit;

    /**
     * @var string istioproxy 容器分配的 CPU 核数，对应 K8S 的 request
     */
    public $IstioCpuRequest;

    /**
     * @var string istioproxy 容器最大的 CPU 核数，对应 K8S 的 limit
     */
    public $IstioCpuLimit;

    /**
     * @var string istioproxy 容器分配的内存 MiB 数，对应 K8S 的 request
     */
    public $IstioMemRequest;

    /**
     * @var string istioproxy 容器最大的内存 MiB 数，对应 K8S 的 limit
     */
    public $IstioMemLimit;

    /**
     * @param string $ApplicationId 分组所属应用ID
     * @param string $NamespaceId 分组所属命名空间ID
     * @param string $GroupName 分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
     * @param integer $InstanceNum 实例数量
     * @param integer $AccessType 0:公网 1:集群内访问 2：NodePort
     * @param array $ProtocolPorts 数组对象，见下方定义
     * @param string $ClusterId 集群ID
     * @param string $CpuLimit 最大分配 CPU 核数，对应 K8S limit
     * @param string $MemLimit 最大分配内存 MiB 数，对应 K8S limit
     * @param string $GroupComment 分组备注字段，长度应不大于200字符
     * @param integer $UpdateType 更新方式：0:快速更新 1:滚动更新
     * @param integer $UpdateIvl 滚动更新必填，更新间隔
     * @param string $CpuRequest 初始分配的 CPU 核数，对应 K8S request
     * @param string $MemRequest 初始分配的内存 MiB 数，对应 K8S request
     * @param string $GroupResourceType 部署组资源类型
     * @param string $SubnetId 子网ID
     * @param string $AgentCpuRequest agent 容器分配的 CPU 核数，对应 K8S 的 request
     * @param string $AgentCpuLimit agent 容器最大的 CPU 核数，对应 K8S 的 limit
     * @param string $AgentMemRequest agent 容器分配的内存 MiB 数，对应 K8S 的 request
     * @param string $AgentMemLimit agent 容器最大的内存 MiB 数，对应 K8S 的 limit
     * @param string $IstioCpuRequest istioproxy 容器分配的 CPU 核数，对应 K8S 的 request
     * @param string $IstioCpuLimit istioproxy 容器最大的 CPU 核数，对应 K8S 的 limit
     * @param string $IstioMemRequest istioproxy 容器分配的内存 MiB 数，对应 K8S 的 request
     * @param string $IstioMemLimit istioproxy 容器最大的内存 MiB 数，对应 K8S 的 limit
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("ProtocolPorts",$param) and $param["ProtocolPorts"] !== null) {
            $this->ProtocolPorts = [];
            foreach ($param["ProtocolPorts"] as $key => $value){
                $obj = new ProtocolPort();
                $obj->deserialize($value);
                array_push($this->ProtocolPorts, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemLimit",$param) and $param["MemLimit"] !== null) {
            $this->MemLimit = $param["MemLimit"];
        }

        if (array_key_exists("GroupComment",$param) and $param["GroupComment"] !== null) {
            $this->GroupComment = $param["GroupComment"];
        }

        if (array_key_exists("UpdateType",$param) and $param["UpdateType"] !== null) {
            $this->UpdateType = $param["UpdateType"];
        }

        if (array_key_exists("UpdateIvl",$param) and $param["UpdateIvl"] !== null) {
            $this->UpdateIvl = $param["UpdateIvl"];
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("MemRequest",$param) and $param["MemRequest"] !== null) {
            $this->MemRequest = $param["MemRequest"];
        }

        if (array_key_exists("GroupResourceType",$param) and $param["GroupResourceType"] !== null) {
            $this->GroupResourceType = $param["GroupResourceType"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AgentCpuRequest",$param) and $param["AgentCpuRequest"] !== null) {
            $this->AgentCpuRequest = $param["AgentCpuRequest"];
        }

        if (array_key_exists("AgentCpuLimit",$param) and $param["AgentCpuLimit"] !== null) {
            $this->AgentCpuLimit = $param["AgentCpuLimit"];
        }

        if (array_key_exists("AgentMemRequest",$param) and $param["AgentMemRequest"] !== null) {
            $this->AgentMemRequest = $param["AgentMemRequest"];
        }

        if (array_key_exists("AgentMemLimit",$param) and $param["AgentMemLimit"] !== null) {
            $this->AgentMemLimit = $param["AgentMemLimit"];
        }

        if (array_key_exists("IstioCpuRequest",$param) and $param["IstioCpuRequest"] !== null) {
            $this->IstioCpuRequest = $param["IstioCpuRequest"];
        }

        if (array_key_exists("IstioCpuLimit",$param) and $param["IstioCpuLimit"] !== null) {
            $this->IstioCpuLimit = $param["IstioCpuLimit"];
        }

        if (array_key_exists("IstioMemRequest",$param) and $param["IstioMemRequest"] !== null) {
            $this->IstioMemRequest = $param["IstioMemRequest"];
        }

        if (array_key_exists("IstioMemLimit",$param) and $param["IstioMemLimit"] !== null) {
            $this->IstioMemLimit = $param["IstioMemLimit"];
        }
    }
}
