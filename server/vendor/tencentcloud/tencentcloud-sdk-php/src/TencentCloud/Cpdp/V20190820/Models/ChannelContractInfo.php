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
 * 米大师内部存放的合约信息
 *
 * @method string getOutContractCode() 获取外部合约协议号
 * @method void setOutContractCode(string $OutContractCode) 设置外部合约协议号
 * @method string getChannelContractCode() 获取米大师内部生成的合约协议号
 * @method void setChannelContractCode(string $ChannelContractCode) 设置米大师内部生成的合约协议号
 */
class ChannelContractInfo extends AbstractModel
{
    /**
     * @var string 外部合约协议号
     */
    public $OutContractCode;

    /**
     * @var string 米大师内部生成的合约协议号
     */
    public $ChannelContractCode;

    /**
     * @param string $OutContractCode 外部合约协议号
     * @param string $ChannelContractCode 米大师内部生成的合约协议号
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
        if (array_key_exists("OutContractCode",$param) and $param["OutContractCode"] !== null) {
            $this->OutContractCode = $param["OutContractCode"];
        }

        if (array_key_exists("ChannelContractCode",$param) and $param["ChannelContractCode"] !== null) {
            $this->ChannelContractCode = $param["ChannelContractCode"];
        }
    }
}
