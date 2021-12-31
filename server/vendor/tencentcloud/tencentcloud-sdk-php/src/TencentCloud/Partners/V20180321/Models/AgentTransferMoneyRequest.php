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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AgentTransferMoney请求参数结构体
 *
 * @method string getClientUin() 获取客户账号ID
 * @method void setClientUin(string $ClientUin) 设置客户账号ID
 * @method integer getAmount() 获取转账金额，单位分
 * @method void setAmount(integer $Amount) 设置转账金额，单位分
 */
class AgentTransferMoneyRequest extends AbstractModel
{
    /**
     * @var string 客户账号ID
     */
    public $ClientUin;

    /**
     * @var integer 转账金额，单位分
     */
    public $Amount;

    /**
     * @param string $ClientUin 客户账号ID
     * @param integer $Amount 转账金额，单位分
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }
    }
}
