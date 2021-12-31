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
 * 分时客流量详细信息
 *
 * @method integer getHour() 获取小时 取值为：0，1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23
 * @method void setHour(integer $Hour) 设置小时 取值为：0，1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23
 * @method integer getHourTrafficTotalCount() 获取分时客流量
 * @method void setHourTrafficTotalCount(integer $HourTrafficTotalCount) 设置分时客流量
 */
class HourTrafficInfoDetail extends AbstractModel
{
    /**
     * @var integer 小时 取值为：0，1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23
     */
    public $Hour;

    /**
     * @var integer 分时客流量
     */
    public $HourTrafficTotalCount;

    /**
     * @param integer $Hour 小时 取值为：0，1，2，3，4，5，6，7，8，9，10，11，12，13，14，15，16，17，18，19，20，21，22，23
     * @param integer $HourTrafficTotalCount 分时客流量
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
        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("HourTrafficTotalCount",$param) and $param["HourTrafficTotalCount"] !== null) {
            $this->HourTrafficTotalCount = $param["HourTrafficTotalCount"];
        }
    }
}
