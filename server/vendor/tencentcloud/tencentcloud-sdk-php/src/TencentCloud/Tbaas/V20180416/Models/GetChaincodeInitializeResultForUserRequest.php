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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetChaincodeInitializeResultForUser请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：chaincode_mng
 * @method void setModule(string $Module) 设置模块名，本接口取值：chaincode_mng
 * @method string getOperation() 获取操作名，本接口取值：chaincode_init_result_for_user
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：chaincode_init_result_for_user
 * @method string getClusterId() 获取区块链网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置区块链网络ID，可在区块链网络详情或列表中获取
 * @method string getGroupName() 获取调用合约的组织名称
 * @method void setGroupName(string $GroupName) 设置调用合约的组织名称
 * @method string getChannelName() 获取业务所属通道名称
 * @method void setChannelName(string $ChannelName) 设置业务所属通道名称
 * @method string getChaincodeName() 获取业务所属合约名称
 * @method void setChaincodeName(string $ChaincodeName) 设置业务所属合约名称
 * @method string getChaincodeVersion() 获取业务所属智能合约版本
 * @method void setChaincodeVersion(string $ChaincodeVersion) 设置业务所属智能合约版本
 * @method integer getTaskId() 获取实例化任务ID
 * @method void setTaskId(integer $TaskId) 设置实例化任务ID
 */
class GetChaincodeInitializeResultForUserRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：chaincode_mng
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：chaincode_init_result_for_user
     */
    public $Operation;

    /**
     * @var string 区块链网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var string 调用合约的组织名称
     */
    public $GroupName;

    /**
     * @var string 业务所属通道名称
     */
    public $ChannelName;

    /**
     * @var string 业务所属合约名称
     */
    public $ChaincodeName;

    /**
     * @var string 业务所属智能合约版本
     */
    public $ChaincodeVersion;

    /**
     * @var integer 实例化任务ID
     */
    public $TaskId;

    /**
     * @param string $Module 模块名，本接口取值：chaincode_mng
     * @param string $Operation 操作名，本接口取值：chaincode_init_result_for_user
     * @param string $ClusterId 区块链网络ID，可在区块链网络详情或列表中获取
     * @param string $GroupName 调用合约的组织名称
     * @param string $ChannelName 业务所属通道名称
     * @param string $ChaincodeName 业务所属合约名称
     * @param string $ChaincodeVersion 业务所属智能合约版本
     * @param integer $TaskId 实例化任务ID
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChaincodeName",$param) and $param["ChaincodeName"] !== null) {
            $this->ChaincodeName = $param["ChaincodeName"];
        }

        if (array_key_exists("ChaincodeVersion",$param) and $param["ChaincodeVersion"] !== null) {
            $this->ChaincodeVersion = $param["ChaincodeVersion"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
