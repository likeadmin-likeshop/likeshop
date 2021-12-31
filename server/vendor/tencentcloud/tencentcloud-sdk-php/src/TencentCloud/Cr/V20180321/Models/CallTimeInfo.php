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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品拨打时间信息
 *
 * @method string getStartTime() 获取产品开始拨打时间，HHmmss格式,默认090000
 * @method void setStartTime(string $StartTime) 设置产品开始拨打时间，HHmmss格式,默认090000
 * @method string getEndTime() 获取产品结束拨打时间，HHmmss格式.默认200000
 * @method void setEndTime(string $EndTime) 设置产品结束拨打时间，HHmmss格式.默认200000
 */
class CallTimeInfo extends AbstractModel
{
    /**
     * @var string 产品开始拨打时间，HHmmss格式,默认090000
     */
    public $StartTime;

    /**
     * @var string 产品结束拨打时间，HHmmss格式.默认200000
     */
    public $EndTime;

    /**
     * @param string $StartTime 产品开始拨打时间，HHmmss格式,默认090000
     * @param string $EndTime 产品结束拨打时间，HHmmss格式.默认200000
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
