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
namespace TencentCloud\Mongodb\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mongodb售卖规格
 *
 * @method string getSpecCode() 获取规格信息标识
 * @method void setSpecCode(string $SpecCode) 设置规格信息标识
 * @method integer getStatus() 获取规格有效标志，取值：0-停止售卖，1-开放售卖
 * @method void setStatus(integer $Status) 设置规格有效标志，取值：0-停止售卖，1-开放售卖
 * @method string getMachineType() 获取机器类型，取值：0-HIO，4-HIO10G
 * @method void setMachineType(string $MachineType) 设置机器类型，取值：0-HIO，4-HIO10G
 * @method integer getCpu() 获取cpu核心数
 * @method void setCpu(integer $Cpu) 设置cpu核心数
 * @method integer getMemory() 获取内存规格，单位为MB
 * @method void setMemory(integer $Memory) 设置内存规格，单位为MB
 * @method integer getDefaultStorage() 获取默认磁盘规格，单位MB
 * @method void setDefaultStorage(integer $DefaultStorage) 设置默认磁盘规格，单位MB
 * @method integer getMaxStorage() 获取最大磁盘规格，单位MB
 * @method void setMaxStorage(integer $MaxStorage) 设置最大磁盘规格，单位MB
 * @method integer getMinStorage() 获取最小磁盘规格，单位MB
 * @method void setMinStorage(integer $MinStorage) 设置最小磁盘规格，单位MB
 * @method integer getQps() 获取可承载qps信息
 * @method void setQps(integer $Qps) 设置可承载qps信息
 * @method integer getConns() 获取连接数限制
 * @method void setConns(integer $Conns) 设置连接数限制
 * @method string getMongoVersionCode() 获取实例mongodb版本信息
 * @method void setMongoVersionCode(string $MongoVersionCode) 设置实例mongodb版本信息
 * @method integer getMongoVersionValue() 获取实例mongodb版本号
 * @method void setMongoVersionValue(integer $MongoVersionValue) 设置实例mongodb版本号
 * @method string getVersion() 获取实例mongodb版本号（短）
 * @method void setVersion(string $Version) 设置实例mongodb版本号（短）
 * @method string getEngineName() 获取存储引擎
 * @method void setEngineName(string $EngineName) 设置存储引擎
 * @method integer getClusterType() 获取集群类型，取值：1-分片集群，0-副本集集群
 * @method void setClusterType(integer $ClusterType) 设置集群类型，取值：1-分片集群，0-副本集集群
 * @method integer getMinNodeNum() 获取最小副本集从节点数
 * @method void setMinNodeNum(integer $MinNodeNum) 设置最小副本集从节点数
 * @method integer getMaxNodeNum() 获取最大副本集从节点数
 * @method void setMaxNodeNum(integer $MaxNodeNum) 设置最大副本集从节点数
 * @method integer getMinReplicateSetNum() 获取最小分片数
 * @method void setMinReplicateSetNum(integer $MinReplicateSetNum) 设置最小分片数
 * @method integer getMaxReplicateSetNum() 获取最大分片数
 * @method void setMaxReplicateSetNum(integer $MaxReplicateSetNum) 设置最大分片数
 * @method integer getMinReplicateSetNodeNum() 获取最小分片从节点数
 * @method void setMinReplicateSetNodeNum(integer $MinReplicateSetNodeNum) 设置最小分片从节点数
 * @method integer getMaxReplicateSetNodeNum() 获取最大分片从节点数
 * @method void setMaxReplicateSetNodeNum(integer $MaxReplicateSetNodeNum) 设置最大分片从节点数
 */
class SpecItem extends AbstractModel
{
    /**
     * @var string 规格信息标识
     */
    public $SpecCode;

    /**
     * @var integer 规格有效标志，取值：0-停止售卖，1-开放售卖
     */
    public $Status;

    /**
     * @var string 机器类型，取值：0-HIO，4-HIO10G
     */
    public $MachineType;

    /**
     * @var integer cpu核心数
     */
    public $Cpu;

    /**
     * @var integer 内存规格，单位为MB
     */
    public $Memory;

    /**
     * @var integer 默认磁盘规格，单位MB
     */
    public $DefaultStorage;

    /**
     * @var integer 最大磁盘规格，单位MB
     */
    public $MaxStorage;

    /**
     * @var integer 最小磁盘规格，单位MB
     */
    public $MinStorage;

    /**
     * @var integer 可承载qps信息
     */
    public $Qps;

    /**
     * @var integer 连接数限制
     */
    public $Conns;

    /**
     * @var string 实例mongodb版本信息
     */
    public $MongoVersionCode;

    /**
     * @var integer 实例mongodb版本号
     */
    public $MongoVersionValue;

    /**
     * @var string 实例mongodb版本号（短）
     */
    public $Version;

    /**
     * @var string 存储引擎
     */
    public $EngineName;

    /**
     * @var integer 集群类型，取值：1-分片集群，0-副本集集群
     */
    public $ClusterType;

    /**
     * @var integer 最小副本集从节点数
     */
    public $MinNodeNum;

    /**
     * @var integer 最大副本集从节点数
     */
    public $MaxNodeNum;

    /**
     * @var integer 最小分片数
     */
    public $MinReplicateSetNum;

    /**
     * @var integer 最大分片数
     */
    public $MaxReplicateSetNum;

    /**
     * @var integer 最小分片从节点数
     */
    public $MinReplicateSetNodeNum;

    /**
     * @var integer 最大分片从节点数
     */
    public $MaxReplicateSetNodeNum;

    /**
     * @param string $SpecCode 规格信息标识
     * @param integer $Status 规格有效标志，取值：0-停止售卖，1-开放售卖
     * @param string $MachineType 机器类型，取值：0-HIO，4-HIO10G
     * @param integer $Cpu cpu核心数
     * @param integer $Memory 内存规格，单位为MB
     * @param integer $DefaultStorage 默认磁盘规格，单位MB
     * @param integer $MaxStorage 最大磁盘规格，单位MB
     * @param integer $MinStorage 最小磁盘规格，单位MB
     * @param integer $Qps 可承载qps信息
     * @param integer $Conns 连接数限制
     * @param string $MongoVersionCode 实例mongodb版本信息
     * @param integer $MongoVersionValue 实例mongodb版本号
     * @param string $Version 实例mongodb版本号（短）
     * @param string $EngineName 存储引擎
     * @param integer $ClusterType 集群类型，取值：1-分片集群，0-副本集集群
     * @param integer $MinNodeNum 最小副本集从节点数
     * @param integer $MaxNodeNum 最大副本集从节点数
     * @param integer $MinReplicateSetNum 最小分片数
     * @param integer $MaxReplicateSetNum 最大分片数
     * @param integer $MinReplicateSetNodeNum 最小分片从节点数
     * @param integer $MaxReplicateSetNodeNum 最大分片从节点数
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
        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("DefaultStorage",$param) and $param["DefaultStorage"] !== null) {
            $this->DefaultStorage = $param["DefaultStorage"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("MinStorage",$param) and $param["MinStorage"] !== null) {
            $this->MinStorage = $param["MinStorage"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Conns",$param) and $param["Conns"] !== null) {
            $this->Conns = $param["Conns"];
        }

        if (array_key_exists("MongoVersionCode",$param) and $param["MongoVersionCode"] !== null) {
            $this->MongoVersionCode = $param["MongoVersionCode"];
        }

        if (array_key_exists("MongoVersionValue",$param) and $param["MongoVersionValue"] !== null) {
            $this->MongoVersionValue = $param["MongoVersionValue"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("MinNodeNum",$param) and $param["MinNodeNum"] !== null) {
            $this->MinNodeNum = $param["MinNodeNum"];
        }

        if (array_key_exists("MaxNodeNum",$param) and $param["MaxNodeNum"] !== null) {
            $this->MaxNodeNum = $param["MaxNodeNum"];
        }

        if (array_key_exists("MinReplicateSetNum",$param) and $param["MinReplicateSetNum"] !== null) {
            $this->MinReplicateSetNum = $param["MinReplicateSetNum"];
        }

        if (array_key_exists("MaxReplicateSetNum",$param) and $param["MaxReplicateSetNum"] !== null) {
            $this->MaxReplicateSetNum = $param["MaxReplicateSetNum"];
        }

        if (array_key_exists("MinReplicateSetNodeNum",$param) and $param["MinReplicateSetNodeNum"] !== null) {
            $this->MinReplicateSetNodeNum = $param["MinReplicateSetNodeNum"];
        }

        if (array_key_exists("MaxReplicateSetNodeNum",$param) and $param["MaxReplicateSetNodeNum"] !== null) {
            $this->MaxReplicateSetNodeNum = $param["MaxReplicateSetNodeNum"];
        }
    }
}
