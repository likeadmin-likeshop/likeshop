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
 * SyncContractData请求参数结构体
 *
 * @method string getMidasAppId() 获取聚鑫分配的支付主MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫分配的支付主MidasAppId
 * @method string getUserId() 获取用户ID，长度不小于5位，仅支持字母和数字的组合
 * @method void setUserId(string $UserId) 设置用户ID，长度不小于5位，仅支持字母和数字的组合
 * @method string getChannel() 获取签约使用的渠道
 * @method void setChannel(string $Channel) 设置签约使用的渠道
 * @method string getOutContractCode() 获取业务签约合同协议号
 * @method void setOutContractCode(string $OutContractCode) 设置业务签约合同协议号
 * @method string getContractStatus() 获取签约状态，枚举值
CONTRACT_STATUS_INVALID=无效状态
CONTRACT_STATUS_SIGNED=已签约
CONTRACT_STATUS_TERMINATED=已解约
CONTRACT_STATUS_PENDING=签约进行中
 * @method void setContractStatus(string $ContractStatus) 设置签约状态，枚举值
CONTRACT_STATUS_INVALID=无效状态
CONTRACT_STATUS_SIGNED=已签约
CONTRACT_STATUS_TERMINATED=已解约
CONTRACT_STATUS_PENDING=签约进行中
 * @method ContractSyncInfo getContractSyncInfo() 获取签约同步信息
 * @method void setContractSyncInfo(ContractSyncInfo $ContractSyncInfo) 设置签约同步信息
 * @method string getMidasSignature() 获取按照聚鑫安全密钥计算的签名
 * @method void setMidasSignature(string $MidasSignature) 设置按照聚鑫安全密钥计算的签名
 * @method string getMidasSecretId() 获取聚鑫分配的安全ID
 * @method void setMidasSecretId(string $MidasSecretId) 设置聚鑫分配的安全ID
 * @method string getSubAppId() 获取聚鑫计费SubAppId，代表子商户
 * @method void setSubAppId(string $SubAppId) 设置聚鑫计费SubAppId，代表子商户
 * @method string getUserType() 获取用户类型，枚举值
USER_ID: 用户ID
ANONYMOUS: 匿名类型 USER_ID
默认值为 USER_ID
 * @method void setUserType(string $UserType) 设置用户类型，枚举值
USER_ID: 用户ID
ANONYMOUS: 匿名类型 USER_ID
默认值为 USER_ID
 * @method SceneInfo getSceneInfo() 获取场景信息
 * @method void setSceneInfo(SceneInfo $SceneInfo) 设置场景信息
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
 */
class SyncContractDataRequest extends AbstractModel
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
     * @var string 签约使用的渠道
     */
    public $Channel;

    /**
     * @var string 业务签约合同协议号
     */
    public $OutContractCode;

    /**
     * @var string 签约状态，枚举值
CONTRACT_STATUS_INVALID=无效状态
CONTRACT_STATUS_SIGNED=已签约
CONTRACT_STATUS_TERMINATED=已解约
CONTRACT_STATUS_PENDING=签约进行中
     */
    public $ContractStatus;

    /**
     * @var ContractSyncInfo 签约同步信息
     */
    public $ContractSyncInfo;

    /**
     * @var string 按照聚鑫安全密钥计算的签名
     */
    public $MidasSignature;

    /**
     * @var string 聚鑫分配的安全ID
     */
    public $MidasSecretId;

    /**
     * @var string 聚鑫计费SubAppId，代表子商户
     */
    public $SubAppId;

    /**
     * @var string 用户类型，枚举值
USER_ID: 用户ID
ANONYMOUS: 匿名类型 USER_ID
默认值为 USER_ID
     */
    public $UserType;

    /**
     * @var SceneInfo 场景信息
     */
    public $SceneInfo;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $MidasEnvironment;

    /**
     * @param string $MidasAppId 聚鑫分配的支付主MidasAppId
     * @param string $UserId 用户ID，长度不小于5位，仅支持字母和数字的组合
     * @param string $Channel 签约使用的渠道
     * @param string $OutContractCode 业务签约合同协议号
     * @param string $ContractStatus 签约状态，枚举值
CONTRACT_STATUS_INVALID=无效状态
CONTRACT_STATUS_SIGNED=已签约
CONTRACT_STATUS_TERMINATED=已解约
CONTRACT_STATUS_PENDING=签约进行中
     * @param ContractSyncInfo $ContractSyncInfo 签约同步信息
     * @param string $MidasSignature 按照聚鑫安全密钥计算的签名
     * @param string $MidasSecretId 聚鑫分配的安全ID
     * @param string $SubAppId 聚鑫计费SubAppId，代表子商户
     * @param string $UserType 用户类型，枚举值
USER_ID: 用户ID
ANONYMOUS: 匿名类型 USER_ID
默认值为 USER_ID
     * @param SceneInfo $SceneInfo 场景信息
     * @param string $MidasEnvironment 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
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

        if (array_key_exists("OutContractCode",$param) and $param["OutContractCode"] !== null) {
            $this->OutContractCode = $param["OutContractCode"];
        }

        if (array_key_exists("ContractStatus",$param) and $param["ContractStatus"] !== null) {
            $this->ContractStatus = $param["ContractStatus"];
        }

        if (array_key_exists("ContractSyncInfo",$param) and $param["ContractSyncInfo"] !== null) {
            $this->ContractSyncInfo = new ContractSyncInfo();
            $this->ContractSyncInfo->deserialize($param["ContractSyncInfo"]);
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("SceneInfo",$param) and $param["SceneInfo"] !== null) {
            $this->SceneInfo = new SceneInfo();
            $this->SceneInfo->deserialize($param["SceneInfo"]);
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}
