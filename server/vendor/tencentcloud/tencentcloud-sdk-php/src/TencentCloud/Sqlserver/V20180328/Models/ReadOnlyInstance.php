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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 只读副本实例
 *
 * @method string getInstanceId() 获取只读副本ID，格式如：mssqlro-3l3fgqn7
 * @method void setInstanceId(string $InstanceId) 设置只读副本ID，格式如：mssqlro-3l3fgqn7
 * @method string getName() 获取只读副本名称
 * @method void setName(string $Name) 设置只读副本名称
 * @method string getUid() 获取只读副本唯一UID
 * @method void setUid(string $Uid) 设置只读副本唯一UID
 * @method integer getProjectId() 获取只读副本所在项目ID
 * @method void setProjectId(integer $ProjectId) 设置只读副本所在项目ID
 * @method integer getStatus() 获取只读副本状态。1：申请中 2：运行中 3：被延迟剔除 4：已隔离 5：回收中 6：已回收 7：任务执行中 8：已下线 9：实例扩容中 10：实例迁移中  12：重启中
 * @method void setStatus(integer $Status) 设置只读副本状态。1：申请中 2：运行中 3：被延迟剔除 4：已隔离 5：回收中 6：已回收 7：任务执行中 8：已下线 9：实例扩容中 10：实例迁移中  12：重启中
 * @method string getCreateTime() 获取只读副本创建时间
 * @method void setCreateTime(string $CreateTime) 设置只读副本创建时间
 * @method string getUpdateTime() 获取只读副本更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置只读副本更新时间
 * @method integer getMemory() 获取只读副本内存大小，单位G
 * @method void setMemory(integer $Memory) 设置只读副本内存大小，单位G
 * @method integer getStorage() 获取只读副本存储空间大小，单位G
 * @method void setStorage(integer $Storage) 设置只读副本存储空间大小，单位G
 * @method integer getCpu() 获取只读副本cpu核心数
 * @method void setCpu(integer $Cpu) 设置只读副本cpu核心数
 * @method string getVersion() 获取只读副本版本代号
 * @method void setVersion(string $Version) 设置只读副本版本代号
 * @method string getType() 获取宿主机代号
 * @method void setType(string $Type) 设置宿主机代号
 * @method integer getModel() 获取只读副本模式，2-单机
 * @method void setModel(integer $Model) 设置只读副本模式，2-单机
 * @method integer getPayMode() 获取只读副本计费模式，1-包年包月，0-按量计费
 * @method void setPayMode(integer $PayMode) 设置只读副本计费模式，1-包年包月，0-按量计费
 * @method integer getWeight() 获取只读副本权重
 * @method void setWeight(integer $Weight) 设置只读副本权重
 * @method string getDelayTime() 获取只读副本延迟时间，单位秒
 * @method void setDelayTime(string $DelayTime) 设置只读副本延迟时间，单位秒
 * @method string getSynStatus() 获取只读副本与主实例的同步状态。
Init:初始化
DeployReadOnlyInPorgress:部署副本进行中
DeployReadOnlySuccess:部署副本成功
DeployReadOnlyFail:部署副本失败
DeployMasterDBInPorgress:主节点上加入副本数据库进行中
DeployMasterDBSuccess:主节点上加入副本数据库成功
DeployMasterDBFail:主节点上加入副本数据库进失败
DeployReadOnlyDBInPorgress:副本还原加入数据库开始
DeployReadOnlyDBSuccess:副本还原加入数据库成功
DeployReadOnlyDBFail:副本还原加入数据库失败
SyncDelay:同步延迟
SyncFail:同步故障
SyncExcluded:已剔除只读组
SyncNormal:正常
 * @method void setSynStatus(string $SynStatus) 设置只读副本与主实例的同步状态。
Init:初始化
DeployReadOnlyInPorgress:部署副本进行中
DeployReadOnlySuccess:部署副本成功
DeployReadOnlyFail:部署副本失败
DeployMasterDBInPorgress:主节点上加入副本数据库进行中
DeployMasterDBSuccess:主节点上加入副本数据库成功
DeployMasterDBFail:主节点上加入副本数据库进失败
DeployReadOnlyDBInPorgress:副本还原加入数据库开始
DeployReadOnlyDBSuccess:副本还原加入数据库成功
DeployReadOnlyDBFail:副本还原加入数据库失败
SyncDelay:同步延迟
SyncFail:同步故障
SyncExcluded:已剔除只读组
SyncNormal:正常
 * @method string getDatabaseDifference() 获取只读副本与主实例没有同步的库
 * @method void setDatabaseDifference(string $DatabaseDifference) 设置只读副本与主实例没有同步的库
 * @method string getAccountDifference() 获取只读副本与主实例没有同步的账户
 * @method void setAccountDifference(string $AccountDifference) 设置只读副本与主实例没有同步的账户
 * @method string getStartTime() 获取只读副本计费开始时间
 * @method void setStartTime(string $StartTime) 设置只读副本计费开始时间
 * @method string getEndTime() 获取只读副本计费结束时间
 * @method void setEndTime(string $EndTime) 设置只读副本计费结束时间
 * @method string getIsolateTime() 获取只读副本隔离时间
 * @method void setIsolateTime(string $IsolateTime) 设置只读副本隔离时间
 */
class ReadOnlyInstance extends AbstractModel
{
    /**
     * @var string 只读副本ID，格式如：mssqlro-3l3fgqn7
     */
    public $InstanceId;

    /**
     * @var string 只读副本名称
     */
    public $Name;

    /**
     * @var string 只读副本唯一UID
     */
    public $Uid;

    /**
     * @var integer 只读副本所在项目ID
     */
    public $ProjectId;

    /**
     * @var integer 只读副本状态。1：申请中 2：运行中 3：被延迟剔除 4：已隔离 5：回收中 6：已回收 7：任务执行中 8：已下线 9：实例扩容中 10：实例迁移中  12：重启中
     */
    public $Status;

    /**
     * @var string 只读副本创建时间
     */
    public $CreateTime;

    /**
     * @var string 只读副本更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 只读副本内存大小，单位G
     */
    public $Memory;

    /**
     * @var integer 只读副本存储空间大小，单位G
     */
    public $Storage;

    /**
     * @var integer 只读副本cpu核心数
     */
    public $Cpu;

    /**
     * @var string 只读副本版本代号
     */
    public $Version;

    /**
     * @var string 宿主机代号
     */
    public $Type;

    /**
     * @var integer 只读副本模式，2-单机
     */
    public $Model;

    /**
     * @var integer 只读副本计费模式，1-包年包月，0-按量计费
     */
    public $PayMode;

    /**
     * @var integer 只读副本权重
     */
    public $Weight;

    /**
     * @var string 只读副本延迟时间，单位秒
     */
    public $DelayTime;

    /**
     * @var string 只读副本与主实例的同步状态。
Init:初始化
DeployReadOnlyInPorgress:部署副本进行中
DeployReadOnlySuccess:部署副本成功
DeployReadOnlyFail:部署副本失败
DeployMasterDBInPorgress:主节点上加入副本数据库进行中
DeployMasterDBSuccess:主节点上加入副本数据库成功
DeployMasterDBFail:主节点上加入副本数据库进失败
DeployReadOnlyDBInPorgress:副本还原加入数据库开始
DeployReadOnlyDBSuccess:副本还原加入数据库成功
DeployReadOnlyDBFail:副本还原加入数据库失败
SyncDelay:同步延迟
SyncFail:同步故障
SyncExcluded:已剔除只读组
SyncNormal:正常
     */
    public $SynStatus;

    /**
     * @var string 只读副本与主实例没有同步的库
     */
    public $DatabaseDifference;

    /**
     * @var string 只读副本与主实例没有同步的账户
     */
    public $AccountDifference;

    /**
     * @var string 只读副本计费开始时间
     */
    public $StartTime;

    /**
     * @var string 只读副本计费结束时间
     */
    public $EndTime;

    /**
     * @var string 只读副本隔离时间
     */
    public $IsolateTime;

    /**
     * @param string $InstanceId 只读副本ID，格式如：mssqlro-3l3fgqn7
     * @param string $Name 只读副本名称
     * @param string $Uid 只读副本唯一UID
     * @param integer $ProjectId 只读副本所在项目ID
     * @param integer $Status 只读副本状态。1：申请中 2：运行中 3：被延迟剔除 4：已隔离 5：回收中 6：已回收 7：任务执行中 8：已下线 9：实例扩容中 10：实例迁移中  12：重启中
     * @param string $CreateTime 只读副本创建时间
     * @param string $UpdateTime 只读副本更新时间
     * @param integer $Memory 只读副本内存大小，单位G
     * @param integer $Storage 只读副本存储空间大小，单位G
     * @param integer $Cpu 只读副本cpu核心数
     * @param string $Version 只读副本版本代号
     * @param string $Type 宿主机代号
     * @param integer $Model 只读副本模式，2-单机
     * @param integer $PayMode 只读副本计费模式，1-包年包月，0-按量计费
     * @param integer $Weight 只读副本权重
     * @param string $DelayTime 只读副本延迟时间，单位秒
     * @param string $SynStatus 只读副本与主实例的同步状态。
Init:初始化
DeployReadOnlyInPorgress:部署副本进行中
DeployReadOnlySuccess:部署副本成功
DeployReadOnlyFail:部署副本失败
DeployMasterDBInPorgress:主节点上加入副本数据库进行中
DeployMasterDBSuccess:主节点上加入副本数据库成功
DeployMasterDBFail:主节点上加入副本数据库进失败
DeployReadOnlyDBInPorgress:副本还原加入数据库开始
DeployReadOnlyDBSuccess:副本还原加入数据库成功
DeployReadOnlyDBFail:副本还原加入数据库失败
SyncDelay:同步延迟
SyncFail:同步故障
SyncExcluded:已剔除只读组
SyncNormal:正常
     * @param string $DatabaseDifference 只读副本与主实例没有同步的库
     * @param string $AccountDifference 只读副本与主实例没有同步的账户
     * @param string $StartTime 只读副本计费开始时间
     * @param string $EndTime 只读副本计费结束时间
     * @param string $IsolateTime 只读副本隔离时间
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("SynStatus",$param) and $param["SynStatus"] !== null) {
            $this->SynStatus = $param["SynStatus"];
        }

        if (array_key_exists("DatabaseDifference",$param) and $param["DatabaseDifference"] !== null) {
            $this->DatabaseDifference = $param["DatabaseDifference"];
        }

        if (array_key_exists("AccountDifference",$param) and $param["AccountDifference"] !== null) {
            $this->AccountDifference = $param["AccountDifference"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }
    }
}
