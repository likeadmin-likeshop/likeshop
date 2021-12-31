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
 * 日志url信息。
 *
 * @method string getLogName() 获取日志名称。
 * @method void setLogName(string $LogName) 设置日志名称。
 * @method string getLogUrl() 获取日志 URL。
 * @method void setLogUrl(string $LogUrl) 设置日志 URL。
 * @method string getLogTime() 获取日志生成时间。
 * @method void setLogTime(string $LogTime) 设置日志生成时间。
 * @method integer getFileSize() 获取文件大小。
 * @method void setFileSize(integer $FileSize) 设置文件大小。
 */
class LogInfo extends AbstractModel
{
    /**
     * @var string 日志名称。
     */
    public $LogName;

    /**
     * @var string 日志 URL。
     */
    public $LogUrl;

    /**
     * @var string 日志生成时间。
     */
    public $LogTime;

    /**
     * @var integer 文件大小。
     */
    public $FileSize;

    /**
     * @param string $LogName 日志名称。
     * @param string $LogUrl 日志 URL。
     * @param string $LogTime 日志生成时间。
     * @param integer $FileSize 文件大小。
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
        if (array_key_exists("LogName",$param) and $param["LogName"] !== null) {
            $this->LogName = $param["LogName"];
        }

        if (array_key_exists("LogUrl",$param) and $param["LogUrl"] !== null) {
            $this->LogUrl = $param["LogUrl"];
        }

        if (array_key_exists("LogTime",$param) and $param["LogTime"] !== null) {
            $this->LogTime = $param["LogTime"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }
    }
}
