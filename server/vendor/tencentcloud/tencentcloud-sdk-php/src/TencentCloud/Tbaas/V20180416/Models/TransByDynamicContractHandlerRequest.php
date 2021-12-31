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
 * TransByDynamicContractHandler请求参数结构体
 *
 * @method string getModule() 获取模块名，固定字段：transaction
 * @method void setModule(string $Module) 设置模块名，固定字段：transaction
 * @method string getOperation() 获取操作名，固定字段：trans_by_dynamic_contract
 * @method void setOperation(string $Operation) 设置操作名，固定字段：trans_by_dynamic_contract
 * @method string getGroupPk() 获取群组编号
 * @method void setGroupPk(string $GroupPk) 设置群组编号
 * @method string getContractAddress() 获取合约地址（合约部署成功，可得到合约地址）
 * @method void setContractAddress(string $ContractAddress) 设置合约地址（合约部署成功，可得到合约地址）
 * @method string getContractName() 获取合约名
 * @method void setContractName(string $ContractName) 设置合约名
 * @method string getAbiInfo() 获取合约编译后的abi
 * @method void setAbiInfo(string $AbiInfo) 设置合约编译后的abi
 * @method string getFuncName() 获取合约被调用方法名
 * @method void setFuncName(string $FuncName) 设置合约被调用方法名
 * @method array getFuncParam() 获取合约被调用方法的入参
 * @method void setFuncParam(array $FuncParam) 设置合约被调用方法的入参
 */
class TransByDynamicContractHandlerRequest extends AbstractModel
{
    /**
     * @var string 模块名，固定字段：transaction
     */
    public $Module;

    /**
     * @var string 操作名，固定字段：trans_by_dynamic_contract
     */
    public $Operation;

    /**
     * @var string 群组编号
     */
    public $GroupPk;

    /**
     * @var string 合约地址（合约部署成功，可得到合约地址）
     */
    public $ContractAddress;

    /**
     * @var string 合约名
     */
    public $ContractName;

    /**
     * @var string 合约编译后的abi
     */
    public $AbiInfo;

    /**
     * @var string 合约被调用方法名
     */
    public $FuncName;

    /**
     * @var array 合约被调用方法的入参
     */
    public $FuncParam;

    /**
     * @param string $Module 模块名，固定字段：transaction
     * @param string $Operation 操作名，固定字段：trans_by_dynamic_contract
     * @param string $GroupPk 群组编号
     * @param string $ContractAddress 合约地址（合约部署成功，可得到合约地址）
     * @param string $ContractName 合约名
     * @param string $AbiInfo 合约编译后的abi
     * @param string $FuncName 合约被调用方法名
     * @param array $FuncParam 合约被调用方法的入参
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

        if (array_key_exists("ContractAddress",$param) and $param["ContractAddress"] !== null) {
            $this->ContractAddress = $param["ContractAddress"];
        }

        if (array_key_exists("ContractName",$param) and $param["ContractName"] !== null) {
            $this->ContractName = $param["ContractName"];
        }

        if (array_key_exists("AbiInfo",$param) and $param["AbiInfo"] !== null) {
            $this->AbiInfo = $param["AbiInfo"];
        }

        if (array_key_exists("FuncName",$param) and $param["FuncName"] !== null) {
            $this->FuncName = $param["FuncName"];
        }

        if (array_key_exists("FuncParam",$param) and $param["FuncParam"] !== null) {
            $this->FuncParam = $param["FuncParam"];
        }
    }
}
