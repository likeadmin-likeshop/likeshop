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
 * DescribeCaptchaOperData操作数据查询尝试次数 type = 3
 *
 * @method string getDateKey() 获取时间
 * @method void setDateKey(string $DateKey) 设置时间
 * @method array getCntPerPass() 获取平均尝试次数
 * @method void setCntPerPass(array $CntPerPass) 设置平均尝试次数
 * @method float getMarketCntPerPass() 获取market平均尝试次数
 * @method void setMarketCntPerPass(float $MarketCntPerPass) 设置market平均尝试次数
 */
class CaptchaOperDataTryTimesUnit extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $DateKey;

    /**
     * @var array 平均尝试次数
     */
    public $CntPerPass;

    /**
     * @var float market平均尝试次数
     */
    public $MarketCntPerPass;

    /**
     * @param string $DateKey 时间
     * @param array $CntPerPass 平均尝试次数
     * @param float $MarketCntPerPass market平均尝试次数
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

        if (array_key_exists("CntPerPass",$param) and $param["CntPerPass"] !== null) {
            $this->CntPerPass = $param["CntPerPass"];
        }

        if (array_key_exists("MarketCntPerPass",$param) and $param["MarketCntPerPass"] !== null) {
            $this->MarketCntPerPass = $param["MarketCntPerPass"];
        }
    }
}
