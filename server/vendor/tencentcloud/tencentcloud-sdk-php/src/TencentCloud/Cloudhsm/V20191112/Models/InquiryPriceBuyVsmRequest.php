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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceBuyVsm请求参数结构体
 *
 * @method integer getGoodsNum() 获取需购买实例的数量
 * @method void setGoodsNum(integer $GoodsNum) 设置需购买实例的数量
 * @method integer getPayMode() 获取付费模式：0表示按需计费/后付费，1表示预付费
 * @method void setPayMode(integer $PayMode) 设置付费模式：0表示按需计费/后付费，1表示预付费
 * @method string getTimeSpan() 获取商品的时间大小
 * @method void setTimeSpan(string $TimeSpan) 设置商品的时间大小
 * @method string getTimeUnit() 获取商品的时间单位，m表示月，y表示年
 * @method void setTimeUnit(string $TimeUnit) 设置商品的时间单位，m表示月，y表示年
 * @method string getCurrency() 获取货币类型，默认为CNY
 * @method void setCurrency(string $Currency) 设置货币类型，默认为CNY
 * @method string getType() 获取默认为CREATE，可选RENEW
 * @method void setType(string $Type) 设置默认为CREATE，可选RENEW
 */
class InquiryPriceBuyVsmRequest extends AbstractModel
{
    /**
     * @var integer 需购买实例的数量
     */
    public $GoodsNum;

    /**
     * @var integer 付费模式：0表示按需计费/后付费，1表示预付费
     */
    public $PayMode;

    /**
     * @var string 商品的时间大小
     */
    public $TimeSpan;

    /**
     * @var string 商品的时间单位，m表示月，y表示年
     */
    public $TimeUnit;

    /**
     * @var string 货币类型，默认为CNY
     */
    public $Currency;

    /**
     * @var string 默认为CREATE，可选RENEW
     */
    public $Type;

    /**
     * @param integer $GoodsNum 需购买实例的数量
     * @param integer $PayMode 付费模式：0表示按需计费/后付费，1表示预付费
     * @param string $TimeSpan 商品的时间大小
     * @param string $TimeUnit 商品的时间单位，m表示月，y表示年
     * @param string $Currency 货币类型，默认为CNY
     * @param string $Type 默认为CREATE，可选RENEW
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
        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
