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
 * CreateForwardRule返回参数结构体
 *
 * @method string getEndpoint() 获取腾讯云账号
 * @method void setEndpoint(string $Endpoint) 设置腾讯云账号
 * @method string getQueueName() 获取队列名
 * @method void setQueueName(string $QueueName) 设置队列名
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method integer getMsgType() 获取消息类型
 * @method void setMsgType(integer $MsgType) 设置消息类型
 * @method integer getResult() 获取结果
 * @method void setResult(integer $Result) 设置结果
 * @method string getRoleName() 获取角色名称
 * @method void setRoleName(string $RoleName) 设置角色名称
 * @method integer getRoleID() 获取角色ID
 * @method void setRoleID(integer $RoleID) 设置角色ID
 * @method string getQueueRegion() 获取队列区
 * @method void setQueueRegion(string $QueueRegion) 设置队列区
 * @method integer getQueueType() 获取消息队列的类型。 0：CMQ，1：CKafaka
 * @method void setQueueType(integer $QueueType) 设置消息队列的类型。 0：CMQ，1：CKafaka
 * @method string getInstanceId() 获取实例id， 目前只有Ckafaka会用到
 * @method void setInstanceId(string $InstanceId) 设置实例id， 目前只有Ckafaka会用到
 * @method string getInstanceName() 获取实例名称，目前只有Ckafaka会用到
 * @method void setInstanceName(string $InstanceName) 设置实例名称，目前只有Ckafaka会用到
 * @method string getErrMsg() 获取错误消息
 * @method void setErrMsg(string $ErrMsg) 设置错误消息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateForwardRuleResponse extends AbstractModel
{
    /**
     * @var string 腾讯云账号
     */
    public $Endpoint;

    /**
     * @var string 队列名
     */
    public $QueueName;

    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var integer 消息类型
     */
    public $MsgType;

    /**
     * @var integer 结果
     */
    public $Result;

    /**
     * @var string 角色名称
     */
    public $RoleName;

    /**
     * @var integer 角色ID
     */
    public $RoleID;

    /**
     * @var string 队列区
     */
    public $QueueRegion;

    /**
     * @var integer 消息队列的类型。 0：CMQ，1：CKafaka
     */
    public $QueueType;

    /**
     * @var string 实例id， 目前只有Ckafaka会用到
     */
    public $InstanceId;

    /**
     * @var string 实例名称，目前只有Ckafaka会用到
     */
    public $InstanceName;

    /**
     * @var string 错误消息
     */
    public $ErrMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Endpoint 腾讯云账号
     * @param string $QueueName 队列名
     * @param string $ProductID 产品ID
     * @param integer $MsgType 消息类型
     * @param integer $Result 结果
     * @param string $RoleName 角色名称
     * @param integer $RoleID 角色ID
     * @param string $QueueRegion 队列区
     * @param integer $QueueType 消息队列的类型。 0：CMQ，1：CKafaka
     * @param string $InstanceId 实例id， 目前只有Ckafaka会用到
     * @param string $InstanceName 实例名称，目前只有Ckafaka会用到
     * @param string $ErrMsg 错误消息
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("MsgType",$param) and $param["MsgType"] !== null) {
            $this->MsgType = $param["MsgType"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RoleID",$param) and $param["RoleID"] !== null) {
            $this->RoleID = $param["RoleID"];
        }

        if (array_key_exists("QueueRegion",$param) and $param["QueueRegion"] !== null) {
            $this->QueueRegion = $param["QueueRegion"];
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
