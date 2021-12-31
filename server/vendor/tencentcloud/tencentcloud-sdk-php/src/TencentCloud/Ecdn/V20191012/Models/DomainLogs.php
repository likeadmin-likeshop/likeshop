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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名日志信息
 *
 * @method string getStartTime() 获取日志起始时间。
 * @method void setStartTime(string $StartTime) 设置日志起始时间。
 * @method string getEndTime() 获取日志结束时间。
 * @method void setEndTime(string $EndTime) 设置日志结束时间。
 * @method string getLogPath() 获取日志下载路径。
 * @method void setLogPath(string $LogPath) 设置日志下载路径。
 */
class DomainLogs extends AbstractModel
{
    /**
     * @var string 日志起始时间。
     */
    public $StartTime;

    /**
     * @var string 日志结束时间。
     */
    public $EndTime;

    /**
     * @var string 日志下载路径。
     */
    public $LogPath;

    /**
     * @param string $StartTime 日志起始时间。
     * @param string $EndTime 日志结束时间。
     * @param string $LogPath 日志下载路径。
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

        if (array_key_exists("LogPath",$param) and $param["LogPath"] !== null) {
            $this->LogPath = $param["LogPath"];
        }
    }
}
