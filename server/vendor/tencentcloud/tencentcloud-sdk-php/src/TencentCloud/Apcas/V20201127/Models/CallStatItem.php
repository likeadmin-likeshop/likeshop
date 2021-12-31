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
namespace TencentCloud\Apcas\V20201127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调用量统计item
 *
 * @method string getDate() 获取当前统计量的时间段
 * @method void setDate(string $Date) 设置当前统计量的时间段
 * @method integer getAmount() 获取当前时间段的调用量
 * @method void setAmount(integer $Amount) 设置当前时间段的调用量
 */
class CallStatItem extends AbstractModel
{
    /**
     * @var string 当前统计量的时间段
     */
    public $Date;

    /**
     * @var integer 当前时间段的调用量
     */
    public $Amount;

    /**
     * @param string $Date 当前统计量的时间段
     * @param integer $Amount 当前时间段的调用量
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }
    }
}
