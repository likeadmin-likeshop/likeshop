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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCaptchaTicketData 返回的数据结构
 *
 * @method string getDateKey() 获取时间
 * @method void setDateKey(string $DateKey) 设置时间
 * @method integer getAmount() 获取票据验证总量
 * @method void setAmount(integer $Amount) 设置票据验证总量
 */
class TicketAmountUnit extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $DateKey;

    /**
     * @var integer 票据验证总量
     */
    public $Amount;

    /**
     * @param string $DateKey 时间
     * @param integer $Amount 票据验证总量
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
        if (array_key_exists("DateKey",$param) and $param["DateKey"] !== null) {
            $this->DateKey = $param["DateKey"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }
    }
}
