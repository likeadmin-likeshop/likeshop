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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命名空间对象
 *
 * @method string getNamespaceId() 获取命名空间id
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间id
 * @method string getChannel() 获取渠道
 * @method void setChannel(string $Channel) 设置渠道
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getRegion() 获取区域名称
 * @method void setRegion(string $Region) 设置区域名称
 * @method string getDescription() 获取命名空间描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置命名空间描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态,1:已销毁;0:正常
 * @method void setStatus(integer $Status) 设置状态,1:已销毁;0:正常
 * @method string getVpc() 获取vpc网络
 * @method void setVpc(string $Vpc) 设置vpc网络
 * @method string getCreateDate() 获取创建时间
 * @method void setCreateDate(string $CreateDate) 设置创建时间
 * @method string getModifyDate() 获取修改时间
 * @method void setModifyDate(string $ModifyDate) 设置修改时间
 * @method string getModifier() 获取修改人
 * @method void setModifier(string $Modifier) 设置修改人
 * @method string getCreator() 获取创建人
 * @method void setCreator(string $Creator) 设置创建人
 * @method integer getServiceNum() 获取服务数
 * @method void setServiceNum(integer $ServiceNum) 设置服务数
 * @method integer getRunInstancesNum() 获取运行实例数
 * @method void setRunInstancesNum(integer $RunInstancesNum) 设置运行实例数
 * @method string getSubnetId() 获取子网络
 * @method void setSubnetId(string $SubnetId) 设置子网络
 * @method string getTcbEnvStatus() 获取tcb环境状态
 * @method void setTcbEnvStatus(string $TcbEnvStatus) 设置tcb环境状态
 * @method string getClusterStatus() 获取eks cluster status
 * @method void setClusterStatus(string $ClusterStatus) 设置eks cluster status
 * @method boolean getEnableTswTraceService() 获取是否开启tsw
 * @method void setEnableTswTraceService(boolean $EnableTswTraceService) 设置是否开启tsw
 */
class TemNamespaceInfo extends AbstractModel
{
    /**
     * @var string 命名空间id
     */
    public $NamespaceId;

    /**
     * @var string 渠道
     */
    public $Channel;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 区域名称
     */
    public $Region;

    /**
     * @var string 命名空间描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 状态,1:已销毁;0:正常
     */
    public $Status;

    /**
     * @var string vpc网络
     */
    public $Vpc;

    /**
     * @var string 创建时间
     */
    public $CreateDate;

    /**
     * @var string 修改时间
     */
    public $ModifyDate;

    /**
     * @var string 修改人
     */
    public $Modifier;

    /**
     * @var string 创建人
     */
    public $Creator;

    /**
     * @var integer 服务数
     */
    public $ServiceNum;

    /**
     * @var integer 运行实例数
     */
    public $RunInstancesNum;

    /**
     * @var string 子网络
     */
    public $SubnetId;

    /**
     * @var string tcb环境状态
     */
    public $TcbEnvStatus;

    /**
     * @var string eks cluster status
     */
    public $ClusterStatus;

    /**
     * @var boolean 是否开启tsw
     */
    public $EnableTswTraceService;

    /**
     * @param string $NamespaceId 命名空间id
     * @param string $Channel 渠道
     * @param string $NamespaceName 命名空间名称
     * @param string $Region 区域名称
     * @param string $Description 命名空间描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态,1:已销毁;0:正常
     * @param string $Vpc vpc网络
     * @param string $CreateDate 创建时间
     * @param string $ModifyDate 修改时间
     * @param string $Modifier 修改人
     * @param string $Creator 创建人
     * @param integer $ServiceNum 服务数
     * @param integer $RunInstancesNum 运行实例数
     * @param string $SubnetId 子网络
     * @param string $TcbEnvStatus tcb环境状态
     * @param string $ClusterStatus eks cluster status
     * @param boolean $EnableTswTraceService 是否开启tsw
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("Modifier",$param) and $param["Modifier"] !== null) {
            $this->Modifier = $param["Modifier"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("ServiceNum",$param) and $param["ServiceNum"] !== null) {
            $this->ServiceNum = $param["ServiceNum"];
        }

        if (array_key_exists("RunInstancesNum",$param) and $param["RunInstancesNum"] !== null) {
            $this->RunInstancesNum = $param["RunInstancesNum"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("TcbEnvStatus",$param) and $param["TcbEnvStatus"] !== null) {
            $this->TcbEnvStatus = $param["TcbEnvStatus"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("EnableTswTraceService",$param) and $param["EnableTswTraceService"] !== null) {
            $this->EnableTswTraceService = $param["EnableTswTraceService"];
        }
    }
}
