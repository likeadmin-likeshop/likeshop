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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CallbackStatusStatistics请求参数结构体
 *
 * @method string getBeginTime() 获取起始时间，格式为yyyymmddhh，精确到小时，例如2021050113，表示2021年5月1号13时。
 * @method void setBeginTime(string $BeginTime) 设置起始时间，格式为yyyymmddhh，精确到小时，例如2021050113，表示2021年5月1号13时。
 * @method string getEndTime() 获取结束时间，格式为yyyymmddhh，精确到小时，例如2021050118，表示2021年5月1号18时。
注：EndTime 必须大于 BeginTime，且相差不超过32天。
 * @method void setEndTime(string $EndTime) 设置结束时间，格式为yyyymmddhh，精确到小时，例如2021050118，表示2021年5月1号18时。
注：EndTime 必须大于 BeginTime，且相差不超过32天。
 * @method string getSmsSdkAppId() 获取短信 SdkAppId 在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
 * @method void setSmsSdkAppId(string $SmsSdkAppId) 设置短信 SdkAppId 在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
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
     * @var string 起始时间，格式为yyyymmddhh，精确到小时，例如2021050113，表示2021年5月1号13时。
     */
    public $BeginTime;

    /**
     * @var string 结束时间，格式为yyyymmddhh，精确到小时，例如2021050118，表示2021年5月1号18时。
注：EndTime 必须大于 BeginTime，且相差不超过32天。
     */
    public $EndTime;

    /**
     * @var string 短信 SdkAppId 在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
     */
    public $SmsSdkAppId;

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
     * @param string $BeginTime 起始时间，格式为yyyymmddhh，精确到小时，例如2021050113，表示2021年5月1号13时。
     * @param string $EndTime 结束时间，格式为yyyymmddhh，精确到小时，例如2021050118，表示2021年5月1号18时。
注：EndTime 必须大于 BeginTime，且相差不超过32天。
     * @param string $SmsSdkAppId 短信 SdkAppId 在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SmsSdkAppId",$param) and $param["SmsSdkAppId"] !== null) {
            $this->SmsSdkAppId = $param["SmsSdkAppId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
