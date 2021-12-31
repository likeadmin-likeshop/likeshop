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
 * 米大师内部生成的合约信息
 *
 * @method string getContractStatus() 获取平台合约状态
协议状态，枚举值：
CONTRACT_STATUS_SIGNED：已签约
CONTRACT_STATUS_TERMINATED：未签约
CONTRACT_STATUS_PENDING：签约进行中
 * @method void setContractStatus(string $ContractStatus) 设置平台合约状态
协议状态，枚举值：
CONTRACT_STATUS_SIGNED：已签约
CONTRACT_STATUS_TERMINATED：未签约
CONTRACT_STATUS_PENDING：签约进行中
 * @method ChannelContractInfo getChannelContractInfo() 获取米大师内部存放的合约信息
 * @method void setChannelContractInfo(ChannelContractInfo $ChannelContractInfo) 设置米大师内部存放的合约信息
 */
class ChannelReturnContractInfo extends AbstractModel
{
    /**
     * @var string 平台合约状态
协议状态，枚举值：
CONTRACT_STATUS_SIGNED：已签约
CONTRACT_STATUS_TERMINATED：未签约
CONTRACT_STATUS_PENDING：签约进行中
     */
    public $ContractStatus;

    /**
     * @var ChannelContractInfo 米大师内部存放的合约信息
     */
    public $ChannelContractInfo;

    /**
     * @param string $ContractStatus 平台合约状态
协议状态，枚举值：
CONTRACT_STATUS_SIGNED：已签约
CONTRACT_STATUS_TERMINATED：未签约
CONTRACT_STATUS_PENDING：签约进行中
     * @param ChannelContractInfo $ChannelContractInfo 米大师内部存放的合约信息
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
        if (array_key_exists("ContractStatus",$param) and $param["ContractStatus"] !== null) {
            $this->ContractStatus = $param["ContractStatus"];
        }

        if (array_key_exists("ChannelContractInfo",$param) and $param["ChannelContractInfo"] !== null) {
            $this->ChannelContractInfo = new ChannelContractInfo();
            $this->ChannelContractInfo->deserialize($param["ChannelContractInfo"]);
        }
    }
}
