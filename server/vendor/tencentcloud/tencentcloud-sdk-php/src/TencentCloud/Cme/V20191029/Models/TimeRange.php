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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 时间范围
 *
 * @method string getStartTime() 获取开始时间，使用 ISO 日期格式。
 * @method void setStartTime(string $StartTime) 设置开始时间，使用 ISO 日期格式。
 * @method string getEndTime() 获取结束时间，使用 ISO 日期格式。
 * @method void setEndTime(string $EndTime) 设置结束时间，使用 ISO 日期格式。
 */
class TimeRange extends AbstractModel
{
    /**
     * @var string 开始时间，使用 ISO 日期格式。
     */
    public $StartTime;

    /**
     * @var string 结束时间，使用 ISO 日期格式。
     */
    public $EndTime;

    /**
     * @param string $StartTime 开始时间，使用 ISO 日期格式。
     * @param string $EndTime 结束时间，使用 ISO 日期格式。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
