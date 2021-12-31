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
 * 调用量统计信息，包括周/日/月/总调用量
 *
 * @method integer getTodayAmount() 获取今日调用量
 * @method void setTodayAmount(integer $TodayAmount) 设置今日调用量
 * @method integer getWeekAmount() 获取本周调用量
 * @method void setWeekAmount(integer $WeekAmount) 设置本周调用量
 * @method integer getMonthAmount() 获取本月调用量
 * @method void setMonthAmount(integer $MonthAmount) 设置本月调用量
 * @method integer getTotalAmount() 获取总调用量
 * @method void setTotalAmount(integer $TotalAmount) 设置总调用量
 */
class GeneralStat extends AbstractModel
{
    /**
     * @var integer 今日调用量
     */
    public $TodayAmount;

    /**
     * @var integer 本周调用量
     */
    public $WeekAmount;

    /**
     * @var integer 本月调用量
     */
    public $MonthAmount;

    /**
     * @var integer 总调用量
     */
    public $TotalAmount;

    /**
     * @param integer $TodayAmount 今日调用量
     * @param integer $WeekAmount 本周调用量
     * @param integer $MonthAmount 本月调用量
     * @param integer $TotalAmount 总调用量
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
        if (array_key_exists("TodayAmount",$param) and $param["TodayAmount"] !== null) {
            $this->TodayAmount = $param["TodayAmount"];
        }

        if (array_key_exists("WeekAmount",$param) and $param["WeekAmount"] !== null) {
            $this->WeekAmount = $param["WeekAmount"];
        }

        if (array_key_exists("MonthAmount",$param) and $param["MonthAmount"] !== null) {
            $this->MonthAmount = $param["MonthAmount"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }
    }
}
