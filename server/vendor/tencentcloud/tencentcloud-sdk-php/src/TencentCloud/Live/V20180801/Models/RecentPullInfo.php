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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播拉流当前正在拉的文件信息。
 *
 * @method string getFileUrl() 获取当前正在拉的文件地址。
 * @method void setFileUrl(string $FileUrl) 设置当前正在拉的文件地址。
 * @method integer getOffsetTime() 获取当前正在拉的文件偏移，单位：秒。
 * @method void setOffsetTime(integer $OffsetTime) 设置当前正在拉的文件偏移，单位：秒。
 * @method string getReportTime() 获取最新上报偏移信息时间。UTC格式。
如：2020-07-23T03:20:39Z。
注意：与北京时间相差八小时。
 * @method void setReportTime(string $ReportTime) 设置最新上报偏移信息时间。UTC格式。
如：2020-07-23T03:20:39Z。
注意：与北京时间相差八小时。
 * @method integer getLoopedTimes() 获取已经轮播的次数。
 * @method void setLoopedTimes(integer $LoopedTimes) 设置已经轮播的次数。
 */
class RecentPullInfo extends AbstractModel
{
    /**
     * @var string 当前正在拉的文件地址。
     */
    public $FileUrl;

    /**
     * @var integer 当前正在拉的文件偏移，单位：秒。
     */
    public $OffsetTime;

    /**
     * @var string 最新上报偏移信息时间。UTC格式。
如：2020-07-23T03:20:39Z。
注意：与北京时间相差八小时。
     */
    public $ReportTime;

    /**
     * @var integer 已经轮播的次数。
     */
    public $LoopedTimes;

    /**
     * @param string $FileUrl 当前正在拉的文件地址。
     * @param integer $OffsetTime 当前正在拉的文件偏移，单位：秒。
     * @param string $ReportTime 最新上报偏移信息时间。UTC格式。
如：2020-07-23T03:20:39Z。
注意：与北京时间相差八小时。
     * @param integer $LoopedTimes 已经轮播的次数。
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
        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("ReportTime",$param) and $param["ReportTime"] !== null) {
            $this->ReportTime = $param["ReportTime"];
        }

        if (array_key_exists("LoopedTimes",$param) and $param["LoopedTimes"] !== null) {
            $this->LoopedTimes = $param["LoopedTimes"];
        }
    }
}
