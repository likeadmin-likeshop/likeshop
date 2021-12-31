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
 * 每日客流统计子结构
 *
 * @method string getDay() 获取日期，如 2018-08-6
 * @method void setDay(string $Day) 设置日期，如 2018-08-6
 * @method integer getFlowCount() 获取客流量
 * @method void setFlowCount(integer $FlowCount) 设置客流量
 */
class ZoneDayFlow extends AbstractModel
{
    /**
     * @var string 日期，如 2018-08-6
     */
    public $Day;

    /**
     * @var integer 客流量
     */
    public $FlowCount;

    /**
     * @param string $Day 日期，如 2018-08-6
     * @param integer $FlowCount 客流量
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
        if (array_key_exists("Day",$param) and $param["Day"] !== null) {
            $this->Day = $param["Day"];
        }

        if (array_key_exists("FlowCount",$param) and $param["FlowCount"] !== null) {
            $this->FlowCount = $param["FlowCount"];
        }
    }
}
