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
 * 返回的合约信息
 *
 * @method ContractInfo getContractInfo() 获取合约信息
 * @method void setContractInfo(ContractInfo $ContractInfo) 设置合约信息
 * @method ChannelReturnContractInfo getChannelReturnContractInfo() 获取米大师内部生成的合约信息
 * @method void setChannelReturnContractInfo(ChannelReturnContractInfo $ChannelReturnContractInfo) 设置米大师内部生成的合约信息
 * @method ExternalReturnContractInfo getExternalReturnContractInfo() 获取第三方渠道合约信息
 * @method void setExternalReturnContractInfo(ExternalReturnContractInfo $ExternalReturnContractInfo) 设置第三方渠道合约信息
 */
class ReturnContractInfo extends AbstractModel
{
    /**
     * @var ContractInfo 合约信息
     */
    public $ContractInfo;

    /**
     * @var ChannelReturnContractInfo 米大师内部生成的合约信息
     */
    public $ChannelReturnContractInfo;

    /**
     * @var ExternalReturnContractInfo 第三方渠道合约信息
     */
    public $ExternalReturnContractInfo;

    /**
     * @param ContractInfo $ContractInfo 合约信息
     * @param ChannelReturnContractInfo $ChannelReturnContractInfo 米大师内部生成的合约信息
     * @param ExternalReturnContractInfo $ExternalReturnContractInfo 第三方渠道合约信息
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
        if (array_key_exists("ContractInfo",$param) and $param["ContractInfo"] !== null) {
            $this->ContractInfo = new ContractInfo();
            $this->ContractInfo->deserialize($param["ContractInfo"]);
        }

        if (array_key_exists("ChannelReturnContractInfo",$param) and $param["ChannelReturnContractInfo"] !== null) {
            $this->ChannelReturnContractInfo = new ChannelReturnContractInfo();
            $this->ChannelReturnContractInfo->deserialize($param["ChannelReturnContractInfo"]);
        }

        if (array_key_exists("ExternalReturnContractInfo",$param) and $param["ExternalReturnContractInfo"] !== null) {
            $this->ExternalReturnContractInfo = new ExternalReturnContractInfo();
            $this->ExternalReturnContractInfo->deserialize($param["ExternalReturnContractInfo"]);
        }
    }
}
