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
 * 操作数据查询方法DescribeCaptchaOperData 的返回结果，安全验证码加载耗时type = 1
 *
 * @method string getDateKey() 获取时间
 * @method void setDateKey(string $DateKey) 设置时间
 * @method float getMarketLoadTime() 获取Market加载时间
 * @method void setMarketLoadTime(float $MarketLoadTime) 设置Market加载时间
 * @method float getAppIdLoadTime() 获取AppId加载时间
 * @method void setAppIdLoadTime(float $AppIdLoadTime) 设置AppId加载时间
 */
class CaptchaOperDataLoadTimeUnit extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $DateKey;

    /**
     * @var float Market加载时间
     */
    public $MarketLoadTime;

    /**
     * @var float AppId加载时间
     */
    public $AppIdLoadTime;

    /**
     * @param string $DateKey 时间
     * @param float $MarketLoadTime Market加载时间
     * @param float $AppIdLoadTime AppId加载时间
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

        if (array_key_exists("MarketLoadTime",$param) and $param["MarketLoadTime"] !== null) {
            $this->MarketLoadTime = $param["MarketLoadTime"];
        }

        if (array_key_exists("AppIdLoadTime",$param) and $param["AppIdLoadTime"] !== null) {
            $this->AppIdLoadTime = $param["AppIdLoadTime"];
        }
    }
}
