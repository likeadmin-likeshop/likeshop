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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群信息
 *
 * @method string getStatus() 获取集群状态
 * @method void setStatus(string $Status) 设置集群状态
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getDbVersion() 获取数据库版本
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getInstanceNum() 获取实例数
 * @method void setInstanceNum(integer $InstanceNum) 设置实例数
 * @method string getUin() 获取用户uin
 * @method void setUin(string $Uin) 设置用户uin
 * @method string getDbType() 获取引擎类型
 * @method void setDbType(string $DbType) 设置引擎类型
 * @method integer getAppId() 获取用户appid
 * @method void setAppId(integer $AppId) 设置用户appid
 * @method string getStatusDesc() 获取集群状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置集群状态描述
 * @method string getCreateTime() 获取集群创建时间
 * @method void setCreateTime(string $CreateTime) 设置集群创建时间
 * @method integer getPayMode() 获取付费模式。0-按量计费，1-包年包月
 * @method void setPayMode(integer $PayMode) 设置付费模式。0-按量计费，1-包年包月
 * @method string getPeriodEndTime() 获取截止时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置截止时间
 * @method string getVip() 获取集群读写vip
 * @method void setVip(string $Vip) 设置集群读写vip
 * @method integer getVport() 获取集群读写vport
 * @method void setVport(integer $Vport) 设置集群读写vport
 * @method integer getProjectID() 获取项目id
 * @method void setProjectID(integer $ProjectID) 设置项目id
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getCynosVersion() 获取cynos内核版本
 * @method void setCynosVersion(string $CynosVersion) 设置cynos内核版本
 * @method integer getStorageLimit() 获取存储容量
 * @method void setStorageLimit(integer $StorageLimit) 设置存储容量
 * @method integer getRenewFlag() 获取续费标志
 * @method void setRenewFlag(integer $RenewFlag) 设置续费标志
 * @method string getProcessingTask() 获取正在处理的任务
 * @method void setProcessingTask(string $ProcessingTask) 设置正在处理的任务
 * @method array getTasks() 获取集群的任务数组
 * @method void setTasks(array $Tasks) 设置集群的任务数组
 * @method array getResourceTags() 获取集群绑定的tag数组
 * @method void setResourceTags(array $ResourceTags) 设置集群绑定的tag数组
 * @method string getDbMode() 获取Db类型(NORMAL, SERVERLESS)
 * @method void setDbMode(string $DbMode) 设置Db类型(NORMAL, SERVERLESS)
 * @method string getServerlessStatus() 获取当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
pause
 * @method void setServerlessStatus(string $ServerlessStatus) 设置当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
pause
 */
class CynosdbCluster extends AbstractModel
{
    /**
     * @var string 集群状态
     */
    public $Status;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 数据库版本
     */
    public $DbVersion;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 实例数
     */
    public $InstanceNum;

    /**
     * @var string 用户uin
     */
    public $Uin;

    /**
     * @var string 引擎类型
     */
    public $DbType;

    /**
     * @var integer 用户appid
     */
    public $AppId;

    /**
     * @var string 集群状态描述
     */
    public $StatusDesc;

    /**
     * @var string 集群创建时间
     */
    public $CreateTime;

    /**
     * @var integer 付费模式。0-按量计费，1-包年包月
     */
    public $PayMode;

    /**
     * @var string 截止时间
     */
    public $PeriodEndTime;

    /**
     * @var string 集群读写vip
     */
    public $Vip;

    /**
     * @var integer 集群读写vport
     */
    public $Vport;

    /**
     * @var integer 项目id
     */
    public $ProjectID;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string cynos内核版本
     */
    public $CynosVersion;

    /**
     * @var integer 存储容量
     */
    public $StorageLimit;

    /**
     * @var integer 续费标志
     */
    public $RenewFlag;

    /**
     * @var string 正在处理的任务
     */
    public $ProcessingTask;

    /**
     * @var array 集群的任务数组
     */
    public $Tasks;

    /**
     * @var array 集群绑定的tag数组
     */
    public $ResourceTags;

    /**
     * @var string Db类型(NORMAL, SERVERLESS)
     */
    public $DbMode;

    /**
     * @var string 当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
pause
     */
    public $ServerlessStatus;

    /**
     * @param string $Status 集群状态
     * @param string $UpdateTime 更新时间
     * @param string $Zone 可用区
     * @param string $ClusterName 集群名称
     * @param string $Region 地域
     * @param string $DbVersion 数据库版本
     * @param string $ClusterId 集群ID
     * @param integer $InstanceNum 实例数
     * @param string $Uin 用户uin
     * @param string $DbType 引擎类型
     * @param integer $AppId 用户appid
     * @param string $StatusDesc 集群状态描述
     * @param string $CreateTime 集群创建时间
     * @param integer $PayMode 付费模式。0-按量计费，1-包年包月
     * @param string $PeriodEndTime 截止时间
     * @param string $Vip 集群读写vip
     * @param integer $Vport 集群读写vport
     * @param integer $ProjectID 项目id
     * @param string $VpcId 私有网络ID
     * @param string $SubnetId 子网ID
     * @param string $CynosVersion cynos内核版本
     * @param integer $StorageLimit 存储容量
     * @param integer $RenewFlag 续费标志
     * @param string $ProcessingTask 正在处理的任务
     * @param array $Tasks 集群的任务数组
     * @param array $ResourceTags 集群绑定的tag数组
     * @param string $DbMode Db类型(NORMAL, SERVERLESS)
     * @param string $ServerlessStatus 当Db类型为SERVERLESS时，serverless集群状态，可选值:
resume
pause
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CynosVersion",$param) and $param["CynosVersion"] !== null) {
            $this->CynosVersion = $param["CynosVersion"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ProcessingTask",$param) and $param["ProcessingTask"] !== null) {
            $this->ProcessingTask = $param["ProcessingTask"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("ServerlessStatus",$param) and $param["ServerlessStatus"] !== null) {
            $this->ServerlessStatus = $param["ServerlessStatus"];
        }
    }
}
