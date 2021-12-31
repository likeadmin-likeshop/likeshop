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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApplicationTriggerPersonal请求参数结构体
 *
 * @method string getRepoName() 获取触发器关联的镜像仓库，library/test格式
 * @method void setRepoName(string $RepoName) 设置触发器关联的镜像仓库，library/test格式
 * @method string getTriggerName() 获取触发器名称
 * @method void setTriggerName(string $TriggerName) 设置触发器名称
 * @method string getInvokeMethod() 获取触发方式，"all"全部触发，"taglist"指定tag触发，"regex"正则触发
 * @method void setInvokeMethod(string $InvokeMethod) 设置触发方式，"all"全部触发，"taglist"指定tag触发，"regex"正则触发
 * @method string getInvokeExpr() 获取触发方式对应的表达式
 * @method void setInvokeExpr(string $InvokeExpr) 设置触发方式对应的表达式
 * @method string getClusterId() 获取应用所在TKE集群ID
 * @method void setClusterId(string $ClusterId) 设置应用所在TKE集群ID
 * @method string getNamespace() 获取应用所在TKE集群命名空间
 * @method void setNamespace(string $Namespace) 设置应用所在TKE集群命名空间
 * @method string getWorkloadType() 获取应用所在TKE集群工作负载类型,支持Deployment、StatefulSet、DaemonSet、CronJob、Job。
 * @method void setWorkloadType(string $WorkloadType) 设置应用所在TKE集群工作负载类型,支持Deployment、StatefulSet、DaemonSet、CronJob、Job。
 * @method string getWorkloadName() 获取应用所在TKE集群工作负载名称
 * @method void setWorkloadName(string $WorkloadName) 设置应用所在TKE集群工作负载名称
 * @method string getContainerName() 获取应用所在TKE集群工作负载下容器名称
 * @method void setContainerName(string $ContainerName) 设置应用所在TKE集群工作负载下容器名称
 * @method integer getClusterRegion() 获取应用所在TKE集群地域数字ID，如1（广州）、16（成都）
 * @method void setClusterRegion(integer $ClusterRegion) 设置应用所在TKE集群地域数字ID，如1（广州）、16（成都）
 * @method string getNewTriggerName() 获取新触发器名称
 * @method void setNewTriggerName(string $NewTriggerName) 设置新触发器名称
 */
class ModifyApplicationTriggerPersonalRequest extends AbstractModel
{
    /**
     * @var string 触发器关联的镜像仓库，library/test格式
     */
    public $RepoName;

    /**
     * @var string 触发器名称
     */
    public $TriggerName;

    /**
     * @var string 触发方式，"all"全部触发，"taglist"指定tag触发，"regex"正则触发
     */
    public $InvokeMethod;

    /**
     * @var string 触发方式对应的表达式
     */
    public $InvokeExpr;

    /**
     * @var string 应用所在TKE集群ID
     */
    public $ClusterId;

    /**
     * @var string 应用所在TKE集群命名空间
     */
    public $Namespace;

    /**
     * @var string 应用所在TKE集群工作负载类型,支持Deployment、StatefulSet、DaemonSet、CronJob、Job。
     */
    public $WorkloadType;

    /**
     * @var string 应用所在TKE集群工作负载名称
     */
    public $WorkloadName;

    /**
     * @var string 应用所在TKE集群工作负载下容器名称
     */
    public $ContainerName;

    /**
     * @var integer 应用所在TKE集群地域数字ID，如1（广州）、16（成都）
     */
    public $ClusterRegion;

    /**
     * @var string 新触发器名称
     */
    public $NewTriggerName;

    /**
     * @param string $RepoName 触发器关联的镜像仓库，library/test格式
     * @param string $TriggerName 触发器名称
     * @param string $InvokeMethod 触发方式，"all"全部触发，"taglist"指定tag触发，"regex"正则触发
     * @param string $InvokeExpr 触发方式对应的表达式
     * @param string $ClusterId 应用所在TKE集群ID
     * @param string $Namespace 应用所在TKE集群命名空间
     * @param string $WorkloadType 应用所在TKE集群工作负载类型,支持Deployment、StatefulSet、DaemonSet、CronJob、Job。
     * @param string $WorkloadName 应用所在TKE集群工作负载名称
     * @param string $ContainerName 应用所在TKE集群工作负载下容器名称
     * @param integer $ClusterRegion 应用所在TKE集群地域数字ID，如1（广州）、16（成都）
     * @param string $NewTriggerName 新触发器名称
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
        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("InvokeMethod",$param) and $param["InvokeMethod"] !== null) {
            $this->InvokeMethod = $param["InvokeMethod"];
        }

        if (array_key_exists("InvokeExpr",$param) and $param["InvokeExpr"] !== null) {
            $this->InvokeExpr = $param["InvokeExpr"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            $this->WorkloadType = $param["WorkloadType"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ClusterRegion",$param) and $param["ClusterRegion"] !== null) {
            $this->ClusterRegion = $param["ClusterRegion"];
        }

        if (array_key_exists("NewTriggerName",$param) and $param["NewTriggerName"] !== null) {
            $this->NewTriggerName = $param["NewTriggerName"];
        }
    }
}
