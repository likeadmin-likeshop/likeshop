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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealtimeQuality请求参数结构体
 *
 * @method integer getStartTime() 获取查询开始时间，24小时内。本地unix时间戳（1588031999s）
 * @method void setStartTime(integer $StartTime) 设置查询开始时间，24小时内。本地unix时间戳（1588031999s）
 * @method integer getEndTime() 获取查询结束时间，本地unix时间戳（1588031999s）
 * @method void setEndTime(integer $EndTime) 设置查询结束时间，本地unix时间戳（1588031999s）
 * @method string getSdkAppId() 获取用户sdkappid
 * @method void setSdkAppId(string $SdkAppId) 设置用户sdkappid
 * @method array getDataType() 获取查询的数据类型
enterTotalSuccPercent：进房成功率
fistFreamInSecRate：首帧秒开率
blockPercent：视频卡顿率
audioBlockPercent：音频卡顿率
 * @method void setDataType(array $DataType) 设置查询的数据类型
enterTotalSuccPercent：进房成功率
fistFreamInSecRate：首帧秒开率
blockPercent：视频卡顿率
audioBlockPercent：音频卡顿率
 */
class DescribeRealtimeQualityRequest extends AbstractModel
{
    /**
     * @var integer 查询开始时间，24小时内。本地unix时间戳（1588031999s）
     */
    public $StartTime;

    /**
     * @var integer 查询结束时间，本地unix时间戳（1588031999s）
     */
    public $EndTime;

    /**
     * @var string 用户sdkappid
     */
    public $SdkAppId;

    /**
     * @var array 查询的数据类型
enterTotalSuccPercent：进房成功率
fistFreamInSecRate：首帧秒开率
blockPercent：视频卡顿率
audioBlockPercent：音频卡顿率
     */
    public $DataType;

    /**
     * @param integer $StartTime 查询开始时间，24小时内。本地unix时间戳（1588031999s）
     * @param integer $EndTime 查询结束时间，本地unix时间戳（1588031999s）
     * @param string $SdkAppId 用户sdkappid
     * @param array $DataType 查询的数据类型
enterTotalSuccPercent：进房成功率
fistFreamInSecRate：首帧秒开率
blockPercent：视频卡顿率
audioBlockPercent：音频卡顿率
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
