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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateForwardRule请求参数结构体
 *
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method integer getMsgType() 获取消息类型
 * @method void setMsgType(integer $MsgType) 设置消息类型
 * @method string getSkey() 获取控制台Skey
 * @method void setSkey(string $Skey) 设置控制台Skey
 * @method string getQueueRegion() 获取队列区域
 * @method void setQueueRegion(string $QueueRegion) 设置队列区域
 * @method integer getQueueType() 获取队列类型
 * @method void setQueueType(integer $QueueType) 设置队列类型
 * @method string getConsecretid() 获取临时密钥
 * @method void setConsecretid(string $Consecretid) 设置临时密钥
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getQueueID() 获取队列或主题ID
 * @method void setQueueID(string $QueueID) 设置队列或主题ID
 * @method string getQueueName() 获取队列或主题名称
 * @method void setQueueName(string $QueueName) 设置队列或主题名称
 */
class CreateForwardRuleRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var integer 消息类型
     */
    public $MsgType;

    /**
     * @var string 控制台Skey
     */
    public $Skey;

    /**
     * @var string 队列区域
     */
    public $QueueRegion;

    /**
     * @var integer 队列类型
     */
    public $QueueType;

    /**
     * @var string 临时密钥
     */
    public $Consecretid;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 队列或主题ID
     */
    public $QueueID;

    /**
     * @var string 队列或主题名称
     */
    public $QueueName;

    /**
     * @param string $ProductID 产品ID
     * @param integer $MsgType 消息类型
     * @param string $Skey 控制台Skey
     * @param string $QueueRegion 队列区域
     * @param integer $QueueType 队列类型
     * @param string $Consecretid 临时密钥
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $QueueID 队列或主题ID
     * @param string $QueueName 队列或主题名称
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("MsgType",$param) and $param["MsgType"] !== null) {
            $this->MsgType = $param["MsgType"];
        }

        if (array_key_exists("Skey",$param) and $param["Skey"] !== null) {
            $this->Skey = $param["Skey"];
        }

        if (array_key_exists("QueueRegion",$param) and $param["QueueRegion"] !== null) {
            $this->QueueRegion = $param["QueueRegion"];
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("Consecretid",$param) and $param["Consecretid"] !== null) {
            $this->Consecretid = $param["Consecretid"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("QueueID",$param) and $param["QueueID"] !== null) {
            $this->QueueID = $param["QueueID"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }
    }
}
