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
 * Query请求参数结构体
 *
 * @method string getModule() 获取模块名，固定字段：transaction
 * @method void setModule(string $Module) 设置模块名，固定字段：transaction
 * @method string getOperation() 获取操作名，固定字段：query
 * @method void setOperation(string $Operation) 设置操作名，固定字段：query
 * @method string getClusterId() 获取区块链网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置区块链网络ID，可在区块链网络详情或列表中获取
 * @method string getChaincodeName() 获取业务所属智能合约名称，可在智能合约详情或列表中获取
 * @method void setChaincodeName(string $ChaincodeName) 设置业务所属智能合约名称，可在智能合约详情或列表中获取
 * @method string getChannelName() 获取业务所属通道名称，可在通道详情或列表中获取
 * @method void setChannelName(string $ChannelName) 设置业务所属通道名称，可在通道详情或列表中获取
 * @method array getPeers() 获取执行该查询交易的节点列表（包括节点名称和节点所属组织名称，详见数据结构一节），可以在通道详情中获取该通道上的节点名称及其所属组织名称
 * @method void setPeers(array $Peers) 设置执行该查询交易的节点列表（包括节点名称和节点所属组织名称，详见数据结构一节），可以在通道详情中获取该通道上的节点名称及其所属组织名称
 * @method string getFuncName() 获取该笔交易查询需要调用的智能合约中的函数名称
 * @method void setFuncName(string $FuncName) 设置该笔交易查询需要调用的智能合约中的函数名称
 * @method string getGroupName() 获取调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method void setGroupName(string $GroupName) 设置调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method array getArgs() 获取被调用的函数参数列表
 * @method void setArgs(array $Args) 设置被调用的函数参数列表
 */
class QueryRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定字段：transaction
     */
    public $Module;

    /**
     * @var string 操作名，固定字段：query
     */
    public $Operation;

    /**
     * @var string 区块链网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var string 业务所属智能合约名称，可在智能合约详情或列表中获取
     */
    public $ChaincodeName;

    /**
     * @var string 业务所属通道名称，可在通道详情或列表中获取
     */
    public $ChannelName;

    /**
     * @var array 执行该查询交易的节点列表（包括节点名称和节点所属组织名称，详见数据结构一节），可以在通道详情中获取该通道上的节点名称及其所属组织名称
     */
    public $Peers;

    /**
     * @var string 该笔交易查询需要调用的智能合约中的函数名称
     */
    public $FuncName;

    /**
     * @var string 调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
     */
    public $GroupName;

    /**
     * @var array 被调用的函数参数列表
     */
    public $Args;

    /**
     * @param string $Module 模块名，固定字段：transaction
     * @param string $Operation 操作名，固定字段：query
     * @param string $ClusterId 区块链网络ID，可在区块链网络详情或列表中获取
     * @param string $ChaincodeName 业务所属智能合约名称，可在智能合约详情或列表中获取
     * @param string $ChannelName 业务所属通道名称，可在通道详情或列表中获取
     * @param array $Peers 执行该查询交易的节点列表（包括节点名称和节点所属组织名称，详见数据结构一节），可以在通道详情中获取该通道上的节点名称及其所属组织名称
     * @param string $FuncName 该笔交易查询需要调用的智能合约中的函数名称
     * @param string $GroupName 调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
     * @param array $Args 被调用的函数参数列表
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

        if (array_key_exists("ChaincodeName",$param) and $param["ChaincodeName"] !== null) {
            $this->ChaincodeName = $param["ChaincodeName"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Peers",$param) and $param["Peers"] !== null) {
            $this->Peers = [];
            foreach ($param["Peers"] as $key => $value){
                $obj = new PeerSet();
                $obj->deserialize($value);
                array_push($this->Peers, $obj);
            }
        }

        if (array_key_exists("FuncName",$param) and $param["FuncName"] !== null) {
            $this->FuncName = $param["FuncName"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }
    }
}
