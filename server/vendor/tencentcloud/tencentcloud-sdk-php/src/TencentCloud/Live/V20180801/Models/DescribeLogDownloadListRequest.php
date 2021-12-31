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
 * DescribeLogDownloadList请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
 * @method void setStartTime(string $StartTime) 设置开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
 * @method string getEndTime() 获取结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注意：结束时间 - 开始时间 <=7天。
 * @method void setEndTime(string $EndTime) 设置结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注意：结束时间 - 开始时间 <=7天。
 * @method array getPlayDomains() 获取域名列表。
 * @method void setPlayDomains(array $PlayDomains) 设置域名列表。
 */
class DescribeLogDownloadListRequest extends AbstractModel
{
    /**
     * @var string 开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
     */
    public $StartTime;

    /**
     * @var string 结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注意：结束时间 - 开始时间 <=7天。
     */
    public $EndTime;

    /**
     * @var array 域名列表。
     */
    public $PlayDomains;

    /**
     * @param string $StartTime 开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
     * @param string $EndTime 结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注意：结束时间 - 开始时间 <=7天。
     * @param array $PlayDomains 域名列表。
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

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }
    }
}
