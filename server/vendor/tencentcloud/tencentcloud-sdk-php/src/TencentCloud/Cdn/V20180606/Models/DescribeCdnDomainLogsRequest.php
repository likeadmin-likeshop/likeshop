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
 * DescribeCdnDomainLogs请求参数结构体
 *
 * @method string getDomain() 获取指定域名查询
 * @method void setDomain(string $Domain) 设置指定域名查询
 * @method string getStartTime() 获取开始时间，如 2019-09-04 00:00:00
 * @method void setStartTime(string $StartTime) 设置开始时间，如 2019-09-04 00:00:00
 * @method string getEndTime() 获取结束时间，如 2019-09-04 12:00:00
 * @method void setEndTime(string $EndTime) 设置结束时间，如 2019-09-04 12:00:00
 * @method integer getOffset() 获取分页查询偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为 0
 * @method integer getLimit() 获取分页查询限制数目，默认为 100，最大为 1000
 * @method void setLimit(integer $Limit) 设置分页查询限制数目，默认为 100，最大为 1000
 * @method string getArea() 获取指定区域下载日志
mainland：获取境内加速日志包下载链接
overseas：获取境外加速日志包下载链接
global：同时获取境内、境外加速日志包下载链接（分开打包）
不指定时默认为 mainland
 * @method void setArea(string $Area) 设置指定区域下载日志
mainland：获取境内加速日志包下载链接
overseas：获取境外加速日志包下载链接
global：同时获取境内、境外加速日志包下载链接（分开打包）
不指定时默认为 mainland
 * @method string getLogType() 获取指定下载日志的类型。
access：获取访问日志
 * @method void setLogType(string $LogType) 设置指定下载日志的类型。
access：获取访问日志
 */
class DescribeCdnDomainLogsRequest extends AbstractModel
{
    /**
     * @var string 指定域名查询
     */
    public $Domain;

    /**
     * @var string 开始时间，如 2019-09-04 00:00:00
     */
    public $StartTime;

    /**
     * @var string 结束时间，如 2019-09-04 12:00:00
     */
    public $EndTime;

    /**
     * @var integer 分页查询偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目，默认为 100，最大为 1000
     */
    public $Limit;

    /**
     * @var string 指定区域下载日志
mainland：获取境内加速日志包下载链接
overseas：获取境外加速日志包下载链接
global：同时获取境内、境外加速日志包下载链接（分开打包）
不指定时默认为 mainland
     */
    public $Area;

    /**
     * @var string 指定下载日志的类型。
access：获取访问日志
     */
    public $LogType;

    /**
     * @param string $Domain 指定域名查询
     * @param string $StartTime 开始时间，如 2019-09-04 00:00:00
     * @param string $EndTime 结束时间，如 2019-09-04 12:00:00
     * @param integer $Offset 分页查询偏移量，默认为 0
     * @param integer $Limit 分页查询限制数目，默认为 100，最大为 1000
     * @param string $Area 指定区域下载日志
mainland：获取境内加速日志包下载链接
overseas：获取境外加速日志包下载链接
global：同时获取境内、境外加速日志包下载链接（分开打包）
不指定时默认为 mainland
     * @param string $LogType 指定下载日志的类型。
access：获取访问日志
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }
    }
}
