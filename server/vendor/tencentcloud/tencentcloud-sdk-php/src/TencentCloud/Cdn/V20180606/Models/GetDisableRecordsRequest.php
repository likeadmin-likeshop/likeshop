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
 * GetDisableRecords请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，如：2018-12-12 10:24:00。
 * @method void setStartTime(string $StartTime) 设置开始时间，如：2018-12-12 10:24:00。
 * @method string getEndTime() 获取结束时间，如：2018-12-14 10:24:00。
 * @method void setEndTime(string $EndTime) 设置结束时间，如：2018-12-14 10:24:00。
 * @method string getUrl() 获取指定 URL 查询
 * @method void setUrl(string $Url) 设置指定 URL 查询
 * @method string getStatus() 获取URL 当前状态
disable：当前仍为禁用状态，访问返回 403
enable：当前为可用状态，已解禁，可正常访问
 * @method void setStatus(string $Status) 设置URL 当前状态
disable：当前仍为禁用状态，访问返回 403
enable：当前为可用状态，已解禁，可正常访问
 * @method integer getOffset() 获取分页查询偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为 0
 * @method integer getLimit() 获取分页查询限制数目，默认为20。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目，默认为20。
 */
class GetDisableRecordsRequest extends AbstractModel
{
    /**
     * @var string 开始时间，如：2018-12-12 10:24:00。
     */
    public $StartTime;

    /**
     * @var string 结束时间，如：2018-12-14 10:24:00。
     */
    public $EndTime;

    /**
     * @var string 指定 URL 查询
     */
    public $Url;

    /**
     * @var string URL 当前状态
disable：当前仍为禁用状态，访问返回 403
enable：当前为可用状态，已解禁，可正常访问
     */
    public $Status;

    /**
     * @var integer 分页查询偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目，默认为20。
     */
    public $Limit;

    /**
     * @param string $StartTime 开始时间，如：2018-12-12 10:24:00。
     * @param string $EndTime 结束时间，如：2018-12-14 10:24:00。
     * @param string $Url 指定 URL 查询
     * @param string $Status URL 当前状态
disable：当前仍为禁用状态，访问返回 403
enable：当前为可用状态，已解禁，可正常访问
     * @param integer $Offset 分页查询偏移量，默认为 0
     * @param integer $Limit 分页查询限制数目，默认为20。
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
