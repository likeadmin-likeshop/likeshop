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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 性别年龄分组下的客流信息
 *
 * @method integer getGender() 获取性别: 0男1女
 * @method void setGender(integer $Gender) 设置性别: 0男1女
 * @method string getAgeGap() 获取年龄区间，枚举值：0-17、18-23、24-30、31-40、41-50、51-60、>60
 * @method void setAgeGap(string $AgeGap) 设置年龄区间，枚举值：0-17、18-23、24-30、31-40、41-50、51-60、>60
 * @method integer getTrafficCount() 获取客流量
 * @method void setTrafficCount(integer $TrafficCount) 设置客流量
 */
class GenderAgeTrafficDetail extends AbstractModel
{
    /**
     * @var integer 性别: 0男1女
     */
    public $Gender;

    /**
     * @var string 年龄区间，枚举值：0-17、18-23、24-30、31-40、41-50、51-60、>60
     */
    public $AgeGap;

    /**
     * @var integer 客流量
     */
    public $TrafficCount;

    /**
     * @param integer $Gender 性别: 0男1女
     * @param string $AgeGap 年龄区间，枚举值：0-17、18-23、24-30、31-40、41-50、51-60、>60
     * @param integer $TrafficCount 客流量
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
        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("AgeGap",$param) and $param["AgeGap"] !== null) {
            $this->AgeGap = $param["AgeGap"];
        }

        if (array_key_exists("TrafficCount",$param) and $param["TrafficCount"] !== null) {
            $this->TrafficCount = $param["TrafficCount"];
        }
    }
}
