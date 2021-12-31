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
 * 实例分片列表信息
 *
 * @method string getShardName() 获取分片节点名称
 * @method void setShardName(string $ShardName) 设置分片节点名称
 * @method string getShardId() 获取分片节点Id
 * @method void setShardId(string $ShardId) 设置分片节点Id
 * @method integer getRole() 获取角色
 * @method void setRole(integer $Role) 设置角色
 * @method integer getKeys() 获取Key数量
 * @method void setKeys(integer $Keys) 设置Key数量
 * @method string getSlots() 获取slot信息
 * @method void setSlots(string $Slots) 设置slot信息
 * @method integer getStorage() 获取使用容量
 * @method void setStorage(integer $Storage) 设置使用容量
 * @method float getStorageSlope() 获取容量倾斜率
 * @method void setStorageSlope(float $StorageSlope) 设置容量倾斜率
 * @method string getRunid() 获取实例运行时节点Id
 * @method void setRunid(string $Runid) 设置实例运行时节点Id
 * @method integer getConnected() 获取服务状态：0-down；1-on
 * @method void setConnected(integer $Connected) 设置服务状态：0-down；1-on
 */
class InstanceClusterShard extends AbstractModel
{
    /**
     * @var string 分片节点名称
     */
    public $ShardName;

    /**
     * @var string 分片节点Id
     */
    public $ShardId;

    /**
     * @var integer 角色
     */
    public $Role;

    /**
     * @var integer Key数量
     */
    public $Keys;

    /**
     * @var string slot信息
     */
    public $Slots;

    /**
     * @var integer 使用容量
     */
    public $Storage;

    /**
     * @var float 容量倾斜率
     */
    public $StorageSlope;

    /**
     * @var string 实例运行时节点Id
     */
    public $Runid;

    /**
     * @var integer 服务状态：0-down；1-on
     */
    public $Connected;

    /**
     * @param string $ShardName 分片节点名称
     * @param string $ShardId 分片节点Id
     * @param integer $Role 角色
     * @param integer $Keys Key数量
     * @param string $Slots slot信息
     * @param integer $Storage 使用容量
     * @param float $StorageSlope 容量倾斜率
     * @param string $Runid 实例运行时节点Id
     * @param integer $Connected 服务状态：0-down；1-on
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
        if (array_key_exists("ShardName",$param) and $param["ShardName"] !== null) {
            $this->ShardName = $param["ShardName"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Slots",$param) and $param["Slots"] !== null) {
            $this->Slots = $param["Slots"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("StorageSlope",$param) and $param["StorageSlope"] !== null) {
            $this->StorageSlope = $param["StorageSlope"];
        }

        if (array_key_exists("Runid",$param) and $param["Runid"] !== null) {
            $this->Runid = $param["Runid"];
        }

        if (array_key_exists("Connected",$param) and $param["Connected"] !== null) {
            $this->Connected = $param["Connected"];
        }
    }
}
