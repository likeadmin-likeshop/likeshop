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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateContract请求参数结构体
 *
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getUserId() 获取用户ID，长度不小于5位，仅支持字母和数字的组合
 * @method void setUserId(string $UserId) 设置用户ID，长度不小于5位，仅支持字母和数字的组合
 * @method string getChannel() 获取指定渠道：  wechat：微信支付  qqwallet：QQ钱包 
 bank：网银支付  只有一个渠道时需要指定
 * @method void setChannel(string $Channel) 设置指定渠道：  wechat：微信支付  qqwallet：QQ钱包 
 bank：网银支付  只有一个渠道时需要指定
 * @method string getTerminateMode() 获取枚举值：
CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE: 按OutContractCode+ContractSceneId解约
CONTRACT_TERMINATION_MODE_BY_CHANNEL_CONTRACT_CODE：按ChannelContractCode解约
 * @method void setTerminateMode(string $TerminateMode) 设置枚举值：
CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE: 按OutContractCode+ContractSceneId解约
CONTRACT_TERMINATION_MODE_BY_CHANNEL_CONTRACT_CODE：按ChannelContractCode解约
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getMidasSignature() 获取按照聚鑫安全密钥计算的签名
 * @method void setMidasSignature(string $MidasSignature) 设置按照聚鑫安全密钥计算的签名
 * @method string getSubAppId() 获取聚鑫计费SubAppId，代表子商户
 * @method void setSubAppId(string $SubAppId) 设置聚鑫计费SubAppId，代表子商户
 * @method string getOutContractCode() 获取业务签约合同协议号 当TerminateMode=CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE 时 必填
 * @method void setOutContractCode(string $OutContractCode) 设置业务签约合同协议号 当TerminateMode=CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE 时 必填
 * @method string getContractSceneId() 获取签约场景ID，当 TerminateMode=CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE 时 必填，在米大师侧托管后生成
 * @method void setContractSceneId(string $ContractSceneId) 设置签约场景ID，当 TerminateMode=CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE 时 必填，在米大师侧托管后生成
 * @method string getChannelContractCode() 获取米大师生成的协议号 当 TerminateMode=CONTRACT_TERMINATION_MODE_BY_CHANNEL_CONTRACT_CODE 时 必填
 * @method void setChannelContractCode(string $ChannelContractCode) 设置米大师生成的协议号 当 TerminateMode=CONTRACT_TERMINATION_MODE_BY_CHANNEL_CONTRACT_CODE 时 必填
 * @method string getExternalContractData() 获取第三方渠道合约数据，json字符串，与特定渠道有关
 * @method void setExternalContractData(string $ExternalContractData) 设置第三方渠道合约数据，json字符串，与特定渠道有关
 * @method string getTerminationReason() 获取终止合约原因
 * @method void setTerminationReason(string $TerminationReason) 设置终止合约原因
 * @method string getMidasEnvironment() 获取环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method string getUserType() 获取USER_ID: 用户ID
ANONYMOUS: 匿名类型 USER_ID
默认值为 USER_ID
 * @method void setUserType(string $UserType) 设置USER_ID: 用户ID
ANONYMOUS: 匿名类型 USER_ID
默认值为 USER_ID
 */
class TerminateContractRequest extends AbstractModel
{
    /**
     * @var string 聚鑫分配的支付主MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 用户ID，长度不小于5位，仅支持字母和数字的组合
     */
    public $UserId;

    /**
     * @var string 指定渠道：  wechat：微信支付  qqwallet：QQ钱包 
 bank：网银支付  只有一个渠道时需要指定
     */
    public $Channel;

    /**
     * @var string 枚举值：
CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE: 按OutContractCode+ContractSceneId解约
CONTRACT_TERMINATION_MODE_BY_CHANNEL_CONTRACT_CODE：按ChannelContractCode解约
     */
    public $TerminateMode;

    /**
     * @var string 聚鑫分配的安全ID
     */
    public $MidasSecretId;

    /**
     * @var string 按照聚鑫安全密钥计算的签名
     */
    public $MidasSignature;

    /**
     * @var string 聚鑫计费SubAppId，代表子商户
     */
    public $SubAppId;

    /**
     * @var string 业务签约合同协议号 当TerminateMode=CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE 时 必填
     */
    public $OutContractCode;

    /**
     * @var string 签约场景ID，当 TerminateMode=CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE 时 必填，在米大师侧托管后生成
     */
    public $ContractSceneId;

    /**
     * @var string 米大师生成的协议号 当 TerminateMode=CONTRACT_TERMINATION_MODE_BY_CHANNEL_CONTRACT_CODE 时 必填
     */
    public $ChannelContractCode;

    /**
     * @var string 第三方渠道合约数据，json字符串，与特定渠道有关
     */
    public $ExternalContractData;

    /**
     * @var string 终止合约原因
     */
    public $TerminationReason;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $MidasEnvironment;

    /**
     * @var string USER_ID: 用户ID
ANONYMOUS: 匿名类型 USER_ID
默认值为 USER_ID
     */
    public $UserType;

    /**
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $UserId 用户ID，长度不小于5位，仅支持字母和数字的组合
     * @param string $Channel 指定渠道：  wechat：微信支付  qqwallet：QQ钱包 
 bank：网银支付  只有一个渠道时需要指定
     * @param string $TerminateMode 枚举值：
CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE: 按OutContractCode+ContractSceneId解约
CONTRACT_TERMINATION_MODE_BY_CHANNEL_CONTRACT_CODE：按ChannelContractCode解约
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $MidasSignature 按照聚鑫安全密钥计算的签名
     * @param string $SubAppId 聚鑫计费SubAppId，代表子商户
     * @param string $OutContractCode 业务签约合同协议号 当TerminateMode=CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE 时 必填
     * @param string $ContractSceneId 签约场景ID，当 TerminateMode=CONTRACT_TERMINATION_MODE_BY_OUT_CONTRACT_CODE 时 必填，在米大师侧托管后生成
     * @param string $ChannelContractCode 米大师生成的协议号 当 TerminateMode=CONTRACT_TERMINATION_MODE_BY_CHANNEL_CONTRACT_CODE 时 必填
     * @param string $ExternalContractData 第三方渠道合约数据，json字符串，与特定渠道有关
     * @param string $TerminationReason 终止合约原因
     * @param string $MidasEnvironment 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     * @param string $UserType USER_ID: 用户ID
ANONYMOUS: 匿名类型 USER_ID
默认值为 USER_ID
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
        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("TerminateMode",$param) and $param["TerminateMode"] !== null) {
            $this->TerminateMode = $param["TerminateMode"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("OutContractCode",$param) and $param["OutContractCode"] !== null) {
            $this->OutContractCode = $param["OutContractCode"];
        }

        if (array_key_exists("ContractSceneId",$param) and $param["ContractSceneId"] !== null) {
            $this->ContractSceneId = $param["ContractSceneId"];
        }

        if (array_key_exists("ChannelContractCode",$param) and $param["ChannelContractCode"] !== null) {
            $this->ChannelContractCode = $param["ChannelContractCode"];
        }

        if (array_key_exists("ExternalContractData",$param) and $param["ExternalContractData"] !== null) {
            $this->ExternalContractData = $param["ExternalContractData"];
        }

        if (array_key_exists("TerminationReason",$param) and $param["TerminationReason"] !== null) {
            $this->TerminationReason = $param["TerminationReason"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
