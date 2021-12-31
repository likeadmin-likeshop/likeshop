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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CallbackStatusStatistics请求参数结构体
 *
 * @method integer getStartDateTime() 获取开始时间，yyyymmddhh 需要拉取的起始时间，精确到小时。
 * @method void setStartDateTime(integer $StartDateTime) 设置开始时间，yyyymmddhh 需要拉取的起始时间，精确到小时。
 * @method integer getEndDataTime() 获取结束时间，yyyymmddhh 需要拉取的截止时间，精确到小时。
注：EndDataTime 必须大于 StartDateTime。
 * @method void setEndDataTime(integer $EndDataTime) 设置结束时间，yyyymmddhh 需要拉取的截止时间，精确到小时。
注：EndDataTime 必须大于 StartDateTime。
 * @method string getSmsSdkAppid() 获取短信SdkAppid在 [短信控制台](https://console.cloud.tencent.com/smsv2) 添加应用后生成的实际SdkAppid，示例如1400006666。
 * @method void setSmsSdkAppid(string $SmsSdkAppid) 设置短信SdkAppid在 [短信控制台](https://console.cloud.tencent.com/smsv2) 添加应用后生成的实际SdkAppid，示例如1400006666。
 * @method integer getLimit() 获取最大上限。
注：目前固定设置为0。
 * @method void setLimit(integer $Limit) 设置最大上限。
注：目前固定设置为0。
 * @method integer getOffset() 获取偏移量。
注：目前固定设置为0。
 * @method void setOffset(integer $Offset) 设置偏移量。
注：目前固定设置为0。
 */
class CallbackStatusStatisticsRequest extends AbstractModel
{
    /**
     * @var integer 开始时间，yyyymmddhh 需要拉取的起始时间，精确到小时。
     */
    public $StartDateTime;

    /**
     * @var integer 结束时间，yyyymmddhh 需要拉取的截止时间，精确到小时。
注：EndDataTime 必须大于 StartDateTime。
     */
    public $EndDataTime;

    /**
     * @var string 短信SdkAppid在 [短信控制台](https://console.cloud.tencent.com/smsv2) 添加应用后生成的实际SdkAppid，示例如1400006666。
     */
    public $SmsSdkAppid;

    /**
     * @var integer 最大上限。
注：目前固定设置为0。
     */
    public $Limit;

    /**
     * @var integer 偏移量。
注：目前固定设置为0。
     */
    public $Offset;

    /**
     * @param integer $StartDateTime 开始时间，yyyymmddhh 需要拉取的起始时间，精确到小时。
     * @param integer $EndDataTime 结束时间，yyyymmddhh 需要拉取的截止时间，精确到小时。
注：EndDataTime 必须大于 StartDateTime。
     * @param string $SmsSdkAppid 短信SdkAppid在 [短信控制台](https://console.cloud.tencent.com/smsv2) 添加应用后生成的实际SdkAppid，示例如1400006666。
     * @param integer $Limit 最大上限。
注：目前固定设置为0。
     * @param integer $Offset 偏移量。
注：目前固定设置为0。
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
        if (array_key_exists("StartDateTime",$param) and $param["StartDateTime"] !== null) {
            $this->StartDateTime = $param["StartDateTime"];
        }

        if (array_key_exists("EndDataTime",$param) and $param["EndDataTime"] !== null) {
            $this->EndDataTime = $param["EndDataTime"];
        }

        if (array_key_exists("SmsSdkAppid",$param) and $param["SmsSdkAppid"] !== null) {
            $this->SmsSdkAppid = $param["SmsSdkAppid"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
