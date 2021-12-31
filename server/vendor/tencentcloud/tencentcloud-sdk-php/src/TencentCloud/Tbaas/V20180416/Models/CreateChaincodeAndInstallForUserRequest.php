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
 * CreateChaincodeAndInstallForUser请求参数结构体
 *
 * @method string getModule() 获取模块名，本接口取值：chaincode_mng
 * @method void setModule(string $Module) 设置模块名，本接口取值：chaincode_mng
 * @method string getOperation() 获取操作名，本接口取值：chaincode_create_and_install_for_user
 * @method void setOperation(string $Operation) 设置操作名，本接口取值：chaincode_create_and_install_for_user
 * @method string getClusterId() 获取区块链网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置区块链网络ID，可在区块链网络详情或列表中获取
 * @method string getGroupName() 获取调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method void setGroupName(string $GroupName) 设置调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
 * @method string getPeerName() 获取合约安装节点名称，可以在通道详情中获取该通道上的节点名称
 * @method void setPeerName(string $PeerName) 设置合约安装节点名称，可以在通道详情中获取该通道上的节点名称
 * @method string getChaincodeName() 获取智能合约名称，格式说明：以小写字母开头，由2-12位数字或小写字母组成
 * @method void setChaincodeName(string $ChaincodeName) 设置智能合约名称，格式说明：以小写字母开头，由2-12位数字或小写字母组成
 * @method string getChaincodeVersion() 获取智能合约版本，格式说明：由1-12位数字、小写字母、特殊符号(“.”)组成，如v1.0
 * @method void setChaincodeVersion(string $ChaincodeVersion) 设置智能合约版本，格式说明：由1-12位数字、小写字母、特殊符号(“.”)组成，如v1.0
 * @method string getChaincodeFileType() 获取智能合约代码文件类型，支持类型：
1. "go"：.go合约文件
2. "gozip"：go合约工程zip包，要求压缩目录为代码根目录
3. "javazip"：java合约工程zip包，要求压缩目录为代码根目录
4. "nodezip"：nodejs合约工程zip包，要求压缩目录为代码根目录
 * @method void setChaincodeFileType(string $ChaincodeFileType) 设置智能合约代码文件类型，支持类型：
1. "go"：.go合约文件
2. "gozip"：go合约工程zip包，要求压缩目录为代码根目录
3. "javazip"：java合约工程zip包，要求压缩目录为代码根目录
4. "nodezip"：nodejs合约工程zip包，要求压缩目录为代码根目录
 * @method string getChaincode() 获取合约内容，合约文件或压缩包内容的base64编码，大小要求小于等于5M
 * @method void setChaincode(string $Chaincode) 设置合约内容，合约文件或压缩包内容的base64编码，大小要求小于等于5M
 */
class CreateChaincodeAndInstallForUserRequest extends AbstractModel
{
    /**
     * @var string 模块名，本接口取值：chaincode_mng
     */
    public $Module;

    /**
     * @var string 操作名，本接口取值：chaincode_create_and_install_for_user
     */
    public $Operation;

    /**
     * @var string 区块链网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var string 调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
     */
    public $GroupName;

    /**
     * @var string 合约安装节点名称，可以在通道详情中获取该通道上的节点名称
     */
    public $PeerName;

    /**
     * @var string 智能合约名称，格式说明：以小写字母开头，由2-12位数字或小写字母组成
     */
    public $ChaincodeName;

    /**
     * @var string 智能合约版本，格式说明：由1-12位数字、小写字母、特殊符号(“.”)组成，如v1.0
     */
    public $ChaincodeVersion;

    /**
     * @var string 智能合约代码文件类型，支持类型：
1. "go"：.go合约文件
2. "gozip"：go合约工程zip包，要求压缩目录为代码根目录
3. "javazip"：java合约工程zip包，要求压缩目录为代码根目录
4. "nodezip"：nodejs合约工程zip包，要求压缩目录为代码根目录
     */
    public $ChaincodeFileType;

    /**
     * @var string 合约内容，合约文件或压缩包内容的base64编码，大小要求小于等于5M
     */
    public $Chaincode;

    /**
     * @param string $Module 模块名，本接口取值：chaincode_mng
     * @param string $Operation 操作名，本接口取值：chaincode_create_and_install_for_user
     * @param string $ClusterId 区块链网络ID，可在区块链网络详情或列表中获取
     * @param string $GroupName 调用合约的组织名称，可以在组织管理列表中获取当前组织的名称
     * @param string $PeerName 合约安装节点名称，可以在通道详情中获取该通道上的节点名称
     * @param string $ChaincodeName 智能合约名称，格式说明：以小写字母开头，由2-12位数字或小写字母组成
     * @param string $ChaincodeVersion 智能合约版本，格式说明：由1-12位数字、小写字母、特殊符号(“.”)组成，如v1.0
     * @param string $ChaincodeFileType 智能合约代码文件类型，支持类型：
1. "go"：.go合约文件
2. "gozip"：go合约工程zip包，要求压缩目录为代码根目录
3. "javazip"：java合约工程zip包，要求压缩目录为代码根目录
4. "nodezip"：nodejs合约工程zip包，要求压缩目录为代码根目录
     * @param string $Chaincode 合约内容，合约文件或压缩包内容的base64编码，大小要求小于等于5M
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

        if (array_key_exists("PeerName",$param) and $param["PeerName"] !== null) {
            $this->PeerName = $param["PeerName"];
        }

        if (array_key_exists("ChaincodeName",$param) and $param["ChaincodeName"] !== null) {
            $this->ChaincodeName = $param["ChaincodeName"];
        }

        if (array_key_exists("ChaincodeVersion",$param) and $param["ChaincodeVersion"] !== null) {
            $this->ChaincodeVersion = $param["ChaincodeVersion"];
        }

        if (array_key_exists("ChaincodeFileType",$param) and $param["ChaincodeFileType"] !== null) {
            $this->ChaincodeFileType = $param["ChaincodeFileType"];
        }

        if (array_key_exists("Chaincode",$param) and $param["Chaincode"] !== null) {
            $this->Chaincode = $param["Chaincode"];
        }
    }
}
