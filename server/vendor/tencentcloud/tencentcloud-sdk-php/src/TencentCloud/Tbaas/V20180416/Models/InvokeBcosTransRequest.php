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
 * InvokeBcosTrans请求参数结构体
 *
 * @method string getClusterId() 获取网络ID，可在区块链网络详情或列表中获取
 * @method void setClusterId(string $ClusterId) 设置网络ID，可在区块链网络详情或列表中获取
 * @method integer getGroupId() 获取群组编号，可在群组列表中获取
 * @method void setGroupId(integer $GroupId) 设置群组编号，可在群组列表中获取
 * @method string getContractAddress() 获取合约地址，可在合约详情获取
 * @method void setContractAddress(string $ContractAddress) 设置合约地址，可在合约详情获取
 * @method string getAbiInfo() 获取合约Abi的json数组格式的字符串，可在合约详情获取
 * @method void setAbiInfo(string $AbiInfo) 设置合约Abi的json数组格式的字符串，可在合约详情获取
 * @method string getFuncName() 获取合约方法名
 * @method void setFuncName(string $FuncName) 设置合约方法名
 * @method string getSignUserId() 获取签名用户编号，可在私钥管理页面获取
 * @method void setSignUserId(string $SignUserId) 设置签名用户编号，可在私钥管理页面获取
 * @method string getFuncParam() 获取合约方法入参，json格式字符串
 * @method void setFuncParam(string $FuncParam) 设置合约方法入参，json格式字符串
 */
class InvokeBcosTransRequest extends AbstractModel
{
    /**
     * @var string 网络ID，可在区块链网络详情或列表中获取
     */
    public $ClusterId;

    /**
     * @var integer 群组编号，可在群组列表中获取
     */
    public $GroupId;

    /**
     * @var string 合约地址，可在合约详情获取
     */
    public $ContractAddress;

    /**
     * @var string 合约Abi的json数组格式的字符串，可在合约详情获取
     */
    public $AbiInfo;

    /**
     * @var string 合约方法名
     */
    public $FuncName;

    /**
     * @var string 签名用户编号，可在私钥管理页面获取
     */
    public $SignUserId;

    /**
     * @var string 合约方法入参，json格式字符串
     */
    public $FuncParam;

    /**
     * @param string $ClusterId 网络ID，可在区块链网络详情或列表中获取
     * @param integer $GroupId 群组编号，可在群组列表中获取
     * @param string $ContractAddress 合约地址，可在合约详情获取
     * @param string $AbiInfo 合约Abi的json数组格式的字符串，可在合约详情获取
     * @param string $FuncName 合约方法名
     * @param string $SignUserId 签名用户编号，可在私钥管理页面获取
     * @param string $FuncParam 合约方法入参，json格式字符串
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ContractAddress",$param) and $param["ContractAddress"] !== null) {
            $this->ContractAddress = $param["ContractAddress"];
        }

        if (array_key_exists("AbiInfo",$param) and $param["AbiInfo"] !== null) {
            $this->AbiInfo = $param["AbiInfo"];
        }

        if (array_key_exists("FuncName",$param) and $param["FuncName"] !== null) {
            $this->FuncName = $param["FuncName"];
        }

        if (array_key_exists("SignUserId",$param) and $param["SignUserId"] !== null) {
            $this->SignUserId = $param["SignUserId"];
        }

        if (array_key_exists("FuncParam",$param) and $param["FuncParam"] !== null) {
            $this->FuncParam = $param["FuncParam"];
        }
    }
}
