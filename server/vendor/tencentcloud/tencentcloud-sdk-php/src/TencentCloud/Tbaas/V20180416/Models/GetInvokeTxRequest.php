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
 * GetInvokeTx请求参数结构体
 *
 * @method string getModule() 获取模块名，固定字段：transaction
 * @method void setModule(string $Module) 设置模块名，固定字段：transaction
 * @method string getOperation() 获取操作名，固定字段：query_txid
 * @method void setOperation(string $Operation) 设置操作名，固定字段：query_txid
 * @method string getClusterId() 获取区块链网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置区块链网络ID，可在区块链网络详情或列表中获取
 * @method string getChannelName() 获取业务所属通道名称，可在通道详情或列表中获取
 * @method void setChannelName(string $ChannelName) 设置业务所属通道名称，可在通道详情或列表中获取
 * @method string getPeerName() 获取执行该查询交易的节点名称，可以在通道详情中获取该通道上的节点名称极其所属组织名称
 * @method void setPeerName(string $PeerName) 设置执行该查询交易的节点名称，可以在通道详情中获取该通道上的节点名称极其所属组织名称
 * @method string getPeerGroup() 获取执行该查询交易的节点所属组织名称，可以在通道详情中获取该通道上的节点名称极其所属组织名称
 * @method void setPeerGroup(string $PeerGroup) 设置执行该查询交易的节点所属组织名称，可以在通道详情中获取该通道上的节点名称极其所属组织名称
 * @method string getTxId() 获取交易ID
 * @method void setTxId(string $TxId) 设置交易ID
 * @method string getGroupName() 获取调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method void setGroupName(string $GroupName) 设置调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
 */
class GetInvokeTxRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定字段：transaction
     */
    public $Module;

    /**
     * @var string 操作名，固定字段：query_txid
     */
    public $Operation;

    /**
     * @var string 区块链网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var string 业务所属通道名称，可在通道详情或列表中获取
     */
    public $ChannelName;

    /**
     * @var string 执行该查询交易的节点名称，可以在通道详情中获取该通道上的节点名称极其所属组织名称
     */
    public $PeerName;

    /**
     * @var string 执行该查询交易的节点所属组织名称，可以在通道详情中获取该通道上的节点名称极其所属组织名称
     */
    public $PeerGroup;

    /**
     * @var string 交易ID
     */
    public $TxId;

    /**
     * @var string 调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
     */
    public $GroupName;

    /**
     * @param string $Module 模块名，固定字段：transaction
     * @param string $Operation 操作名，固定字段：query_txid
     * @param string $ClusterId 区块链网络ID，可在区块链网络详情或列表中获取
     * @param string $ChannelName 业务所属通道名称，可在通道详情或列表中获取
     * @param string $PeerName 执行该查询交易的节点名称，可以在通道详情中获取该通道上的节点名称极其所属组织名称
     * @param string $PeerGroup 执行该查询交易的节点所属组织名称，可以在通道详情中获取该通道上的节点名称极其所属组织名称
     * @param string $TxId 交易ID
     * @param string $GroupName 调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
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

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PeerName",$param) and $param["PeerName"] !== null) {
            $this->PeerName = $param["PeerName"];
        }

        if (array_key_exists("PeerGroup",$param) and $param["PeerGroup"] !== null) {
            $this->PeerGroup = $param["PeerGroup"];
        }

        if (array_key_exists("TxId",$param) and $param["TxId"] !== null) {
            $this->TxId = $param["TxId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
