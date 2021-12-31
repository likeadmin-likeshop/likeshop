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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例节点类型
 *
 * @method string getName() 获取节点名称
 * @method void setName(string $Name) 设置节点名称
 * @method string getRunId() 获取实例运行时节点Id
 * @method void setRunId(string $RunId) 设置实例运行时节点Id
 * @method integer getRole() 获取集群角色：0-master；1-slave
 * @method void setRole(integer $Role) 设置集群角色：0-master；1-slave
 * @method integer getStatus() 获取节点状态：0-readwrite, 1-read, 2-backup
 * @method void setStatus(integer $Status) 设置节点状态：0-readwrite, 1-read, 2-backup
 * @method integer getConnected() 获取服务状态：0-down；1-on
 * @method void setConnected(integer $Connected) 设置服务状态：0-down；1-on
 * @method string getCreateTime() 获取节点创建时间
 * @method void setCreateTime(string $CreateTime) 设置节点创建时间
 * @method string getDownTime() 获取节点下线时间
 * @method void setDownTime(string $DownTime) 设置节点下线时间
 * @method string getSlots() 获取节点slot分布
 * @method void setSlots(string $Slots) 设置节点slot分布
 * @method integer getKeys() 获取节点key分布
 * @method void setKeys(integer $Keys) 设置节点key分布
 * @method integer getQps() 获取节点qps
 * @method void setQps(integer $Qps) 设置节点qps
 * @method float getQpsSlope() 获取节点qps倾斜度
 * @method void setQpsSlope(float $QpsSlope) 设置节点qps倾斜度
 * @method integer getStorage() 获取节点存储
 * @method void setStorage(integer $Storage) 设置节点存储
 * @method float getStorageSlope() 获取节点存储倾斜度
 * @method void setStorageSlope(float $StorageSlope) 设置节点存储倾斜度
 */
class InstanceClusterNode extends AbstractModel
{
    /**
     * @var string 节点名称
     */
    public $Name;

    /**
     * @var string 实例运行时节点Id
     */
    public $RunId;

    /**
     * @var integer 集群角色：0-master；1-slave
     */
    public $Role;

    /**
     * @var integer 节点状态：0-readwrite, 1-read, 2-backup
     */
    public $Status;

    /**
     * @var integer 服务状态：0-down；1-on
     */
    public $Connected;

    /**
     * @var string 节点创建时间
     */
    public $CreateTime;

    /**
     * @var string 节点下线时间
     */
    public $DownTime;

    /**
     * @var string 节点slot分布
     */
    public $Slots;

    /**
     * @var integer 节点key分布
     */
    public $Keys;

    /**
     * @var integer 节点qps
     */
    public $Qps;

    /**
     * @var float 节点qps倾斜度
     */
    public $QpsSlope;

    /**
     * @var integer 节点存储
     */
    public $Storage;

    /**
     * @var float 节点存储倾斜度
     */
    public $StorageSlope;

    /**
     * @param string $Name 节点名称
     * @param string $RunId 实例运行时节点Id
     * @param integer $Role 集群角色：0-master；1-slave
     * @param integer $Status 节点状态：0-readwrite, 1-read, 2-backup
     * @param integer $Connected 服务状态：0-down；1-on
     * @param string $CreateTime 节点创建时间
     * @param string $DownTime 节点下线时间
     * @param string $Slots 节点slot分布
     * @param integer $Keys 节点key分布
     * @param integer $Qps 节点qps
     * @param float $QpsSlope 节点qps倾斜度
     * @param integer $Storage 节点存储
     * @param float $StorageSlope 节点存储倾斜度
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RunId",$param) and $param["RunId"] !== null) {
            $this->RunId = $param["RunId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Connected",$param) and $param["Connected"] !== null) {
            $this->Connected = $param["Connected"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DownTime",$param) and $param["DownTime"] !== null) {
            $this->DownTime = $param["DownTime"];
        }

        if (array_key_exists("Slots",$param) and $param["Slots"] !== null) {
            $this->Slots = $param["Slots"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("QpsSlope",$param) and $param["QpsSlope"] !== null) {
            $this->QpsSlope = $param["QpsSlope"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("StorageSlope",$param) and $param["StorageSlope"] !== null) {
            $this->StorageSlope = $param["StorageSlope"];
        }
    }
}
