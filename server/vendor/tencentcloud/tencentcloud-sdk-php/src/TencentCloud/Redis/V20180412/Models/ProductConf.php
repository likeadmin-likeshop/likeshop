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
 * 产品信息
 *
 * @method integer getType() 获取产品类型，2 – Redis2.8内存版(标准架构)，3 – CKV 3.2内存版(标准架构)，4 – CKV 3.2内存版(集群架构)，5 – Redis2.8内存版(单机版)，6 – Redis4.0内存版(标准架构)，7 – Redis4.0内存版(集群架构)，8 – Redis5.0内存版(标准架构)，9 – Redis5.0内存版(集群架构)，10 – Redis4.0混合存储版Tendis
 * @method void setType(integer $Type) 设置产品类型，2 – Redis2.8内存版(标准架构)，3 – CKV 3.2内存版(标准架构)，4 – CKV 3.2内存版(集群架构)，5 – Redis2.8内存版(单机版)，6 – Redis4.0内存版(标准架构)，7 – Redis4.0内存版(集群架构)，8 – Redis5.0内存版(标准架构)，9 – Redis5.0内存版(集群架构)，10 – Redis4.0混合存储版Tendis
 * @method string getTypeName() 获取产品名称，Redis主从版，CKV主从版，CKV集群版，Redis单机版，Redis集群版，混合存储版Tendis
 * @method void setTypeName(string $TypeName) 设置产品名称，Redis主从版，CKV主从版，CKV集群版，Redis单机版，Redis集群版，混合存储版Tendis
 * @method integer getMinBuyNum() 获取购买时的最小数量
 * @method void setMinBuyNum(integer $MinBuyNum) 设置购买时的最小数量
 * @method integer getMaxBuyNum() 获取购买时的最大数量
 * @method void setMaxBuyNum(integer $MaxBuyNum) 设置购买时的最大数量
 * @method boolean getSaleout() 获取产品是否售罄
 * @method void setSaleout(boolean $Saleout) 设置产品是否售罄
 * @method string getEngine() 获取产品引擎，腾讯云CKV或者社区版Redis
 * @method void setEngine(string $Engine) 设置产品引擎，腾讯云CKV或者社区版Redis
 * @method string getVersion() 获取兼容版本，Redis-2.8，Redis-3.2，Redis-4.0
 * @method void setVersion(string $Version) 设置兼容版本，Redis-2.8，Redis-3.2，Redis-4.0
 * @method array getTotalSize() 获取规格总大小，单位G
 * @method void setTotalSize(array $TotalSize) 设置规格总大小，单位G
 * @method array getShardSize() 获取每个分片大小，单位G
 * @method void setShardSize(array $ShardSize) 设置每个分片大小，单位G
 * @method array getReplicaNum() 获取副本数量
 * @method void setReplicaNum(array $ReplicaNum) 设置副本数量
 * @method array getShardNum() 获取分片数量
 * @method void setShardNum(array $ShardNum) 设置分片数量
 * @method string getPayMode() 获取支持的计费模式，1-包年包月，0-按量计费
 * @method void setPayMode(string $PayMode) 设置支持的计费模式，1-包年包月，0-按量计费
 * @method boolean getEnableRepicaReadOnly() 获取是否支持副本只读
 * @method void setEnableRepicaReadOnly(boolean $EnableRepicaReadOnly) 设置是否支持副本只读
 */
class ProductConf extends AbstractModel
{
    /**
     * @var integer 产品类型，2 – Redis2.8内存版(标准架构)，3 – CKV 3.2内存版(标准架构)，4 – CKV 3.2内存版(集群架构)，5 – Redis2.8内存版(单机版)，6 – Redis4.0内存版(标准架构)，7 – Redis4.0内存版(集群架构)，8 – Redis5.0内存版(标准架构)，9 – Redis5.0内存版(集群架构)，10 – Redis4.0混合存储版Tendis
     */
    public $Type;

    /**
     * @var string 产品名称，Redis主从版，CKV主从版，CKV集群版，Redis单机版，Redis集群版，混合存储版Tendis
     */
    public $TypeName;

    /**
     * @var integer 购买时的最小数量
     */
    public $MinBuyNum;

    /**
     * @var integer 购买时的最大数量
     */
    public $MaxBuyNum;

    /**
     * @var boolean 产品是否售罄
     */
    public $Saleout;

    /**
     * @var string 产品引擎，腾讯云CKV或者社区版Redis
     */
    public $Engine;

    /**
     * @var string 兼容版本，Redis-2.8，Redis-3.2，Redis-4.0
     */
    public $Version;

    /**
     * @var array 规格总大小，单位G
     */
    public $TotalSize;

    /**
     * @var array 每个分片大小，单位G
     */
    public $ShardSize;

    /**
     * @var array 副本数量
     */
    public $ReplicaNum;

    /**
     * @var array 分片数量
     */
    public $ShardNum;

    /**
     * @var string 支持的计费模式，1-包年包月，0-按量计费
     */
    public $PayMode;

    /**
     * @var boolean 是否支持副本只读
     */
    public $EnableRepicaReadOnly;

    /**
     * @param integer $Type 产品类型，2 – Redis2.8内存版(标准架构)，3 – CKV 3.2内存版(标准架构)，4 – CKV 3.2内存版(集群架构)，5 – Redis2.8内存版(单机版)，6 – Redis4.0内存版(标准架构)，7 – Redis4.0内存版(集群架构)，8 – Redis5.0内存版(标准架构)，9 – Redis5.0内存版(集群架构)，10 – Redis4.0混合存储版Tendis
     * @param string $TypeName 产品名称，Redis主从版，CKV主从版，CKV集群版，Redis单机版，Redis集群版，混合存储版Tendis
     * @param integer $MinBuyNum 购买时的最小数量
     * @param integer $MaxBuyNum 购买时的最大数量
     * @param boolean $Saleout 产品是否售罄
     * @param string $Engine 产品引擎，腾讯云CKV或者社区版Redis
     * @param string $Version 兼容版本，Redis-2.8，Redis-3.2，Redis-4.0
     * @param array $TotalSize 规格总大小，单位G
     * @param array $ShardSize 每个分片大小，单位G
     * @param array $ReplicaNum 副本数量
     * @param array $ShardNum 分片数量
     * @param string $PayMode 支持的计费模式，1-包年包月，0-按量计费
     * @param boolean $EnableRepicaReadOnly 是否支持副本只读
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("MinBuyNum",$param) and $param["MinBuyNum"] !== null) {
            $this->MinBuyNum = $param["MinBuyNum"];
        }

        if (array_key_exists("MaxBuyNum",$param) and $param["MaxBuyNum"] !== null) {
            $this->MaxBuyNum = $param["MaxBuyNum"];
        }

        if (array_key_exists("Saleout",$param) and $param["Saleout"] !== null) {
            $this->Saleout = $param["Saleout"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("ShardSize",$param) and $param["ShardSize"] !== null) {
            $this->ShardSize = $param["ShardSize"];
        }

        if (array_key_exists("ReplicaNum",$param) and $param["ReplicaNum"] !== null) {
            $this->ReplicaNum = $param["ReplicaNum"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("EnableRepicaReadOnly",$param) and $param["EnableRepicaReadOnly"] !== null) {
            $this->EnableRepicaReadOnly = $param["EnableRepicaReadOnly"];
        }
    }
}
