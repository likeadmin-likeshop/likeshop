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
 * GetTransactionDetailForUser请求参数结构体
 *
 * @method string getModule() 获取模块名，固定字段：transaction
 * @method void setModule(string $Module) 设置模块名，固定字段：transaction
 * @method string getOperation() 获取操作名，固定字段：transaction_detail_for_user
 * @method void setOperation(string $Operation) 设置操作名，固定字段：transaction_detail_for_user
 * @method string getClusterId() 获取区块链网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置区块链网络ID，可在区块链网络详情或列表中获取
 * @method string getGroupName() 获取参与交易的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method void setGroupName(string $GroupName) 设置参与交易的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method string getChannelName() 获取业务所属通道名称，可在通道详情或列表中获取
 * @method void setChannelName(string $ChannelName) 设置业务所属通道名称，可在通道详情或列表中获取
 * @method integer getBlockId() 获取区块ID，通过GetInvokeTx接口可以获取交易所在的区块ID
 * @method void setBlockId(integer $BlockId) 设置区块ID，通过GetInvokeTx接口可以获取交易所在的区块ID
 * @method string getTransactionId() 获取交易ID，需要查询的详情的交易ID
 * @method void setTransactionId(string $TransactionId) 设置交易ID，需要查询的详情的交易ID
 */
class GetTransactionDetailForUserRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定字段：transaction
     */
    public $Module;

    /**
     * @var string 操作名，固定字段：transaction_detail_for_user
     */
    public $Operation;

    /**
     * @var string 区块链网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var string 参与交易的组织名称，可以在组织管理列表中获取当前组织的名称
     */
    public $GroupName;

    /**
     * @var string 业务所属通道名称，可在通道详情或列表中获取
     */
    public $ChannelName;

    /**
     * @var integer 区块ID，通过GetInvokeTx接口可以获取交易所在的区块ID
     */
    public $BlockId;

    /**
     * @var string 交易ID，需要查询的详情的交易ID
     */
    public $TransactionId;

    /**
     * @param string $Module 模块名，固定字段：transaction
     * @param string $Operation 操作名，固定字段：transaction_detail_for_user
     * @param string $ClusterId 区块链网络ID，可在区块链网络详情或列表中获取
     * @param string $GroupName 参与交易的组织名称，可以在组织管理列表中获取当前组织的名称
     * @param string $ChannelName 业务所属通道名称，可在通道详情或列表中获取
     * @param integer $BlockId 区块ID，通过GetInvokeTx接口可以获取交易所在的区块ID
     * @param string $TransactionId 交易ID，需要查询的详情的交易ID
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

        if (array_key_exists("BlockId",$param) and $param["BlockId"] !== null) {
            $this->BlockId = $param["BlockId"];
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }
    }
}
