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
 * DeployDynamicContractHandler请求参数结构体
 *
 * @method string getModule() 获取模块名，固定字段：contract
 * @method void setModule(string $Module) 设置模块名，固定字段：contract
 * @method string getOperation() 获取操作名，固定字段：deploy_dynamic_contract
 * @method void setOperation(string $Operation) 设置操作名，固定字段：deploy_dynamic_contract
 * @method string getGroupPk() 获取群组编号
 * @method void setGroupPk(string $GroupPk) 设置群组编号
 * @method string getContractName() 获取合约名称
 * @method void setContractName(string $ContractName) 设置合约名称
 * @method string getAbiInfo() 获取合约编译后的abi
 * @method void setAbiInfo(string $AbiInfo) 设置合约编译后的abi
 * @method string getByteCodeBin() 获取合约编译后的binary
 * @method void setByteCodeBin(string $ByteCodeBin) 设置合约编译后的binary
 * @method array getConstructorParams() 获取构造函数入参
 * @method void setConstructorParams(array $ConstructorParams) 设置构造函数入参
 */
class DeployDynamicContractHandlerRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定字段：contract
     */
    public $Module;

    /**
     * @var string 操作名，固定字段：deploy_dynamic_contract
     */
    public $Operation;

    /**
     * @var string 群组编号
     */
    public $GroupPk;

    /**
     * @var string 合约名称
     */
    public $ContractName;

    /**
     * @var string 合约编译后的abi
     */
    public $AbiInfo;

    /**
     * @var string 合约编译后的binary
     */
    public $ByteCodeBin;

    /**
     * @var array 构造函数入参
     */
    public $ConstructorParams;

    /**
     * @param string $Module 模块名，固定字段：contract
     * @param string $Operation 操作名，固定字段：deploy_dynamic_contract
     * @param string $GroupPk 群组编号
     * @param string $ContractName 合约名称
     * @param string $AbiInfo 合约编译后的abi
     * @param string $ByteCodeBin 合约编译后的binary
     * @param array $ConstructorParams 构造函数入参
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

        if (array_key_exists("GroupPk",$param) and $param["GroupPk"] !== null) {
            $this->GroupPk = $param["GroupPk"];
        }

        if (array_key_exists("ContractName",$param) and $param["ContractName"] !== null) {
            $this->ContractName = $param["ContractName"];
        }

        if (array_key_exists("AbiInfo",$param) and $param["AbiInfo"] !== null) {
            $this->AbiInfo = $param["AbiInfo"];
        }

        if (array_key_exists("ByteCodeBin",$param) and $param["ByteCodeBin"] !== null) {
            $this->ByteCodeBin = $param["ByteCodeBin"];
        }

        if (array_key_exists("ConstructorParams",$param) and $param["ConstructorParams"] !== null) {
            $this->ConstructorParams = $param["ConstructorParams"];
        }
    }
}
