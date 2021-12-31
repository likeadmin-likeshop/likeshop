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
 * 发布订阅对象
 *
 * @method integer getId() 获取发布订阅ID
 * @method void setId(integer $Id) 设置发布订阅ID
 * @method string getName() 获取发布订阅名称
 * @method void setName(string $Name) 设置发布订阅名称
 * @method string getPublishInstanceId() 获取发布实例ID
 * @method void setPublishInstanceId(string $PublishInstanceId) 设置发布实例ID
 * @method string getPublishInstanceName() 获取发布实例名称
 * @method void setPublishInstanceName(string $PublishInstanceName) 设置发布实例名称
 * @method string getPublishInstanceIp() 获取发布实例IP
 * @method void setPublishInstanceIp(string $PublishInstanceIp) 设置发布实例IP
 * @method string getSubscribeInstanceId() 获取订阅实例ID
 * @method void setSubscribeInstanceId(string $SubscribeInstanceId) 设置订阅实例ID
 * @method string getSubscribeInstanceName() 获取订阅实例名称
 * @method void setSubscribeInstanceName(string $SubscribeInstanceName) 设置订阅实例名称
 * @method string getSubscribeInstanceIp() 获取订阅实例IP
 * @method void setSubscribeInstanceIp(string $SubscribeInstanceIp) 设置订阅实例IP
 * @method array getDatabaseTupleSet() 获取数据库的订阅发布关系集合
 * @method void setDatabaseTupleSet(array $DatabaseTupleSet) 设置数据库的订阅发布关系集合
 */
class PublishSubscribe extends AbstractModel
{
    /**
     * @var integer 发布订阅ID
     */
    public $Id;

    /**
     * @var string 发布订阅名称
     */
    public $Name;

    /**
     * @var string 发布实例ID
     */
    public $PublishInstanceId;

    /**
     * @var string 发布实例名称
     */
    public $PublishInstanceName;

    /**
     * @var string 发布实例IP
     */
    public $PublishInstanceIp;

    /**
     * @var string 订阅实例ID
     */
    public $SubscribeInstanceId;

    /**
     * @var string 订阅实例名称
     */
    public $SubscribeInstanceName;

    /**
     * @var string 订阅实例IP
     */
    public $SubscribeInstanceIp;

    /**
     * @var array 数据库的订阅发布关系集合
     */
    public $DatabaseTupleSet;

    /**
     * @param integer $Id 发布订阅ID
     * @param string $Name 发布订阅名称
     * @param string $PublishInstanceId 发布实例ID
     * @param string $PublishInstanceName 发布实例名称
     * @param string $PublishInstanceIp 发布实例IP
     * @param string $SubscribeInstanceId 订阅实例ID
     * @param string $SubscribeInstanceName 订阅实例名称
     * @param string $SubscribeInstanceIp 订阅实例IP
     * @param array $DatabaseTupleSet 数据库的订阅发布关系集合
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PublishInstanceId",$param) and $param["PublishInstanceId"] !== null) {
            $this->PublishInstanceId = $param["PublishInstanceId"];
        }

        if (array_key_exists("PublishInstanceName",$param) and $param["PublishInstanceName"] !== null) {
            $this->PublishInstanceName = $param["PublishInstanceName"];
        }

        if (array_key_exists("PublishInstanceIp",$param) and $param["PublishInstanceIp"] !== null) {
            $this->PublishInstanceIp = $param["PublishInstanceIp"];
        }

        if (array_key_exists("SubscribeInstanceId",$param) and $param["SubscribeInstanceId"] !== null) {
            $this->SubscribeInstanceId = $param["SubscribeInstanceId"];
        }

        if (array_key_exists("SubscribeInstanceName",$param) and $param["SubscribeInstanceName"] !== null) {
            $this->SubscribeInstanceName = $param["SubscribeInstanceName"];
        }

        if (array_key_exists("SubscribeInstanceIp",$param) and $param["SubscribeInstanceIp"] !== null) {
            $this->SubscribeInstanceIp = $param["SubscribeInstanceIp"];
        }

        if (array_key_exists("DatabaseTupleSet",$param) and $param["DatabaseTupleSet"] !== null) {
            $this->DatabaseTupleSet = [];
            foreach ($param["DatabaseTupleSet"] as $key => $value){
                $obj = new DatabaseTupleStatus();
                $obj->deserialize($value);
                array_push($this->DatabaseTupleSet, $obj);
            }
        }
    }
}
