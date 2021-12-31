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
 * 查询汇率数据
 *
 * @method string getRate() 获取汇率
 * @method void setRate(string $Rate) 设置汇率
 * @method string getSourceCurrency() 获取源币种
 * @method void setSourceCurrency(string $SourceCurrency) 设置源币种
 * @method string getTargetCurrency() 获取目的币种
 * @method void setTargetCurrency(string $TargetCurrency) 设置目的币种
 * @method string getRateTime() 获取汇率时间
 * @method void setRateTime(string $RateTime) 设置汇率时间
 * @method string getBaseCurrency() 获取基准币种
 * @method void setBaseCurrency(string $BaseCurrency) 设置基准币种
 */
class QueryExchangerateData extends AbstractModel
{
    /**
     * @var string 汇率
     */
    public $Rate;

    /**
     * @var string 源币种
     */
    public $SourceCurrency;

    /**
     * @var string 目的币种
     */
    public $TargetCurrency;

    /**
     * @var string 汇率时间
     */
    public $RateTime;

    /**
     * @var string 基准币种
     */
    public $BaseCurrency;

    /**
     * @param string $Rate 汇率
     * @param string $SourceCurrency 源币种
     * @param string $TargetCurrency 目的币种
     * @param string $RateTime 汇率时间
     * @param string $BaseCurrency 基准币种
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
        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("SourceCurrency",$param) and $param["SourceCurrency"] !== null) {
            $this->SourceCurrency = $param["SourceCurrency"];
        }

        if (array_key_exists("TargetCurrency",$param) and $param["TargetCurrency"] !== null) {
            $this->TargetCurrency = $param["TargetCurrency"];
        }

        if (array_key_exists("RateTime",$param) and $param["RateTime"] !== null) {
            $this->RateTime = $param["RateTime"];
        }

        if (array_key_exists("BaseCurrency",$param) and $param["BaseCurrency"] !== null) {
            $this->BaseCurrency = $param["BaseCurrency"];
        }
    }
}
