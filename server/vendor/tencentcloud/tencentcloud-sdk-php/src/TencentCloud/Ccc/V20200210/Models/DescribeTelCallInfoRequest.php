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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTelCallInfo请求参数结构体
 *
 * @method integer getStartTimeStamp() 获取起始时间戳，Unix 时间戳
 * @method void setStartTimeStamp(integer $StartTimeStamp) 设置起始时间戳，Unix 时间戳
 * @method integer getEndTimeStamp() 获取结束时间戳，Unix 时间戳，查询时间范围最大为90天
 * @method void setEndTimeStamp(integer $EndTimeStamp) 设置结束时间戳，Unix 时间戳，查询时间范围最大为90天
 * @method array getSdkAppIdList() 获取应用ID列表，多个ID时，返回值为多个ID使用总和
 * @method void setSdkAppIdList(array $SdkAppIdList) 设置应用ID列表，多个ID时，返回值为多个ID使用总和
 */
class DescribeTelCallInfoRequest extends AbstractModel
{
    /**
     * @var integer 起始时间戳，Unix 时间戳
     */
    public $StartTimeStamp;

    /**
     * @var integer 结束时间戳，Unix 时间戳，查询时间范围最大为90天
     */
    public $EndTimeStamp;

    /**
     * @var array 应用ID列表，多个ID时，返回值为多个ID使用总和
     */
    public $SdkAppIdList;

    /**
     * @param integer $StartTimeStamp 起始时间戳，Unix 时间戳
     * @param integer $EndTimeStamp 结束时间戳，Unix 时间戳，查询时间范围最大为90天
     * @param array $SdkAppIdList 应用ID列表，多个ID时，返回值为多个ID使用总和
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
        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }

        if (array_key_exists("SdkAppIdList",$param) and $param["SdkAppIdList"] !== null) {
            $this->SdkAppIdList = $param["SdkAppIdList"];
        }
    }
}
