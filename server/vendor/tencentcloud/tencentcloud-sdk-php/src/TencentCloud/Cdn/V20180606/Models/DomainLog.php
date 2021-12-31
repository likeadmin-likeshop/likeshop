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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志包下载链接详情
 *
 * @method string getStartTime() 获取日志包起始时间
 * @method void setStartTime(string $StartTime) 设置日志包起始时间
 * @method string getEndTime() 获取日志包结束时间
 * @method void setEndTime(string $EndTime) 设置日志包结束时间
 * @method string getLogPath() 获取日志包下载链接
 * @method void setLogPath(string $LogPath) 设置日志包下载链接
 * @method string getArea() 获取日志包对应加速区域
mainland：境内
overseas：境外
 * @method void setArea(string $Area) 设置日志包对应加速区域
mainland：境内
overseas：境外
 * @method string getLogName() 获取日志包文件名
 * @method void setLogName(string $LogName) 设置日志包文件名
 */
class DomainLog extends AbstractModel
{
    /**
     * @var string 日志包起始时间
     */
    public $StartTime;

    /**
     * @var string 日志包结束时间
     */
    public $EndTime;

    /**
     * @var string 日志包下载链接
     */
    public $LogPath;

    /**
     * @var string 日志包对应加速区域
mainland：境内
overseas：境外
     */
    public $Area;

    /**
     * @var string 日志包文件名
     */
    public $LogName;

    /**
     * @param string $StartTime 日志包起始时间
     * @param string $EndTime 日志包结束时间
     * @param string $LogPath 日志包下载链接
     * @param string $Area 日志包对应加速区域
mainland：境内
overseas：境外
     * @param string $LogName 日志包文件名
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogName",$param) and $param["LogName"] !== null) {
            $this->LogName = $param["LogName"];
        }
    }
}
