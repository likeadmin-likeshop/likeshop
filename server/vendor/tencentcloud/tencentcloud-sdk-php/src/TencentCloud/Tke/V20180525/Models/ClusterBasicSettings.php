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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述集群的基本配置信息
 *
 * @method string getClusterOs() 获取集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
 * @method void setClusterOs(string $ClusterOs) 设置集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
 * @method string getClusterVersion() 获取集群版本,默认值为1.10.5
 * @method void setClusterVersion(string $ClusterVersion) 设置集群版本,默认值为1.10.5
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getClusterDescription() 获取集群描述
 * @method void setClusterDescription(string $ClusterDescription) 设置集群描述
 * @method string getVpcId() 获取私有网络ID，形如vpc-xxx。创建托管空集群时必传。
 * @method void setVpcId(string $VpcId) 设置私有网络ID，形如vpc-xxx。创建托管空集群时必传。
 * @method integer getProjectId() 获取集群内新增资源所属项目ID。
 * @method void setProjectId(integer $ProjectId) 设置集群内新增资源所属项目ID。
 * @method array getTagSpecification() 获取标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
 * @method string getOsCustomizeType() 获取容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
 * @method void setOsCustomizeType(string $OsCustomizeType) 设置容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
 * @method boolean getNeedWorkSecurityGroup() 获取是否开启节点的默认安全组(默认: 否，Aphla特性)
 * @method void setNeedWorkSecurityGroup(boolean $NeedWorkSecurityGroup) 设置是否开启节点的默认安全组(默认: 否，Aphla特性)
 */
class ClusterBasicSettings extends AbstractModel
{
    /**
     * @var string 集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
     */
    public $ClusterOs;

    /**
     * @var string 集群版本,默认值为1.10.5
     */
    public $ClusterVersion;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 集群描述
     */
    public $ClusterDescription;

    /**
     * @var string 私有网络ID，形如vpc-xxx。创建托管空集群时必传。
     */
    public $VpcId;

    /**
     * @var integer 集群内新增资源所属项目ID。
     */
    public $ProjectId;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
     */
    public $TagSpecification;

    /**
     * @var string 容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
     */
    public $OsCustomizeType;

    /**
     * @var boolean 是否开启节点的默认安全组(默认: 否，Aphla特性)
     */
    public $NeedWorkSecurityGroup;

    /**
     * @param string $ClusterOs 集群系统。centos7.2x86_64 或者 ubuntu16.04.1 LTSx86_64，默认取值为ubuntu16.04.1 LTSx86_64
     * @param string $ClusterVersion 集群版本,默认值为1.10.5
     * @param string $ClusterName 集群名称
     * @param string $ClusterDescription 集群描述
     * @param string $VpcId 私有网络ID，形如vpc-xxx。创建托管空集群时必传。
     * @param integer $ProjectId 集群内新增资源所属项目ID。
     * @param array $TagSpecification 标签描述列表。通过指定该参数可以同时绑定标签到相应的资源实例，当前仅支持绑定标签到集群实例。
     * @param string $OsCustomizeType 容器的镜像版本，"DOCKER_CUSTOMIZE"(容器定制版),"GENERAL"(普通版本，默认值)
     * @param boolean $NeedWorkSecurityGroup 是否开启节点的默认安全组(默认: 否，Aphla特性)
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
        if (array_key_exists("ClusterOs",$param) and $param["ClusterOs"] !== null) {
            $this->ClusterOs = $param["ClusterOs"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }

        if (array_key_exists("NeedWorkSecurityGroup",$param) and $param["NeedWorkSecurityGroup"] !== null) {
            $this->NeedWorkSecurityGroup = $param["NeedWorkSecurityGroup"];
        }
    }
}
