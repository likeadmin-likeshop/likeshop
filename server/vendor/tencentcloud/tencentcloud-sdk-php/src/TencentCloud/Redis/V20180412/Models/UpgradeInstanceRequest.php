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
 * UpgradeInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getMemSize() 获取分片大小 单位 MB
 * @method void setMemSize(integer $MemSize) 设置分片大小 单位 MB
 * @method integer getRedisShardNum() 获取分片数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
 * @method void setRedisShardNum(integer $RedisShardNum) 设置分片数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
 * @method integer getRedisReplicasNum() 获取副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) 设置副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
 * @method array getNodeSet() 获取多AZ实例增加副本时的附带信息，非多AZ实例不需要传此参数。多AZ增加副本时此参数为必传参数，传入要增加的副本的信息，包括副本的可用区和副本的类型（NodeType为1）
 * @method void setNodeSet(array $NodeSet) 设置多AZ实例增加副本时的附带信息，非多AZ实例不需要传此参数。多AZ增加副本时此参数为必传参数，传入要增加的副本的信息，包括副本的可用区和副本的类型（NodeType为1）
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 分片大小 单位 MB
     */
    public $MemSize;

    /**
     * @var integer 分片数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
     */
    public $RedisShardNum;

    /**
     * @var integer 副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
     */
    public $RedisReplicasNum;

    /**
     * @var array 多AZ实例增加副本时的附带信息，非多AZ实例不需要传此参数。多AZ增加副本时此参数为必传参数，传入要增加的副本的信息，包括副本的可用区和副本的类型（NodeType为1）
     */
    public $NodeSet;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $MemSize 分片大小 单位 MB
     * @param integer $RedisShardNum 分片数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
     * @param integer $RedisReplicasNum 副本数量，Redis2.8主从版、CKV主从版和Redis2.8单机版不需要填写
     * @param array $NodeSet 多AZ实例增加副本时的附带信息，非多AZ实例不需要传此参数。多AZ增加副本时此参数为必传参数，传入要增加的副本的信息，包括副本的可用区和副本的类型（NodeType为1）
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

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }
    }
}
