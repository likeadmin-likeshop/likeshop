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
 * DescribePurgeTasks请求参数结构体
 *
 * @method string getPurgeType() 获取指定刷新类型查询
url：url 刷新记录
path：目录刷新记录
 * @method void setPurgeType(string $PurgeType) 设置指定刷新类型查询
url：url 刷新记录
path：目录刷新记录
 * @method string getStartTime() 获取根据时间区间查询时，填充开始时间，如 2018-08-08 00:00:00
 * @method void setStartTime(string $StartTime) 设置根据时间区间查询时，填充开始时间，如 2018-08-08 00:00:00
 * @method string getEndTime() 获取根据时间区间查询时，填充结束时间，如 2018-08-08 23:59:59
 * @method void setEndTime(string $EndTime) 设置根据时间区间查询时，填充结束时间，如 2018-08-08 23:59:59
 * @method string getTaskId() 获取根据任务 ID 查询时，填充任务 ID
查询时任务 ID 与起始时间必须填充一项
 * @method void setTaskId(string $TaskId) 设置根据任务 ID 查询时，填充任务 ID
查询时任务 ID 与起始时间必须填充一项
 * @method integer getOffset() 获取分页查询偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为 0
 * @method integer getLimit() 获取分页查询限制数目，默认为 20
 * @method void setLimit(integer $Limit) 设置分页查询限制数目，默认为 20
 * @method string getKeyword() 获取支持域名过滤，或 http(s):// 开头完整 URL 过滤
 * @method void setKeyword(string $Keyword) 设置支持域名过滤，或 http(s):// 开头完整 URL 过滤
 * @method string getStatus() 获取指定任务状态查询
fail：刷新失败
done：刷新成功
process：刷新中
 * @method void setStatus(string $Status) 设置指定任务状态查询
fail：刷新失败
done：刷新成功
process：刷新中
 * @method string getArea() 获取指定刷新地域查询
mainland：境内
overseas：境外
global：全球
 * @method void setArea(string $Area) 设置指定刷新地域查询
mainland：境内
overseas：境外
global：全球
 */
class DescribePurgeTasksRequest extends AbstractModel
{
    /**
     * @var string 指定刷新类型查询
url：url 刷新记录
path：目录刷新记录
     */
    public $PurgeType;

    /**
     * @var string 根据时间区间查询时，填充开始时间，如 2018-08-08 00:00:00
     */
    public $StartTime;

    /**
     * @var string 根据时间区间查询时，填充结束时间，如 2018-08-08 23:59:59
     */
    public $EndTime;

    /**
     * @var string 根据任务 ID 查询时，填充任务 ID
查询时任务 ID 与起始时间必须填充一项
     */
    public $TaskId;

    /**
     * @var integer 分页查询偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目，默认为 20
     */
    public $Limit;

    /**
     * @var string 支持域名过滤，或 http(s):// 开头完整 URL 过滤
     */
    public $Keyword;

    /**
     * @var string 指定任务状态查询
fail：刷新失败
done：刷新成功
process：刷新中
     */
    public $Status;

    /**
     * @var string 指定刷新地域查询
mainland：境内
overseas：境外
global：全球
     */
    public $Area;

    /**
     * @param string $PurgeType 指定刷新类型查询
url：url 刷新记录
path：目录刷新记录
     * @param string $StartTime 根据时间区间查询时，填充开始时间，如 2018-08-08 00:00:00
     * @param string $EndTime 根据时间区间查询时，填充结束时间，如 2018-08-08 23:59:59
     * @param string $TaskId 根据任务 ID 查询时，填充任务 ID
查询时任务 ID 与起始时间必须填充一项
     * @param integer $Offset 分页查询偏移量，默认为 0
     * @param integer $Limit 分页查询限制数目，默认为 20
     * @param string $Keyword 支持域名过滤，或 http(s):// 开头完整 URL 过滤
     * @param string $Status 指定任务状态查询
fail：刷新失败
done：刷新成功
process：刷新中
     * @param string $Area 指定刷新地域查询
mainland：境内
overseas：境外
global：全球
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
        if (array_key_exists("PurgeType",$param) and $param["PurgeType"] !== null) {
            $this->PurgeType = $param["PurgeType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
