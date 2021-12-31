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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStorageDetails请求参数结构体
 *
 * @method string getStartTime() 获取起始时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setStartTime(string $StartTime) 设置起始时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method string getEndTime() 获取结束时间，需大于开始日期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setEndTime(string $EndTime) 设置结束时间，需大于开始日期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method string getInterval() 获取统计时间粒度，有效值：
<li>Minute：以5分钟为粒度。</li>
<li>Day：以天为粒度。</li>
默认按时间跨度决定，小于等于1天以5分钟为粒度，大于1天则以天为粒度。
 * @method void setInterval(string $Interval) 设置统计时间粒度，有效值：
<li>Minute：以5分钟为粒度。</li>
<li>Day：以天为粒度。</li>
默认按时间跨度决定，小于等于1天以5分钟为粒度，大于1天则以天为粒度。
 * @method string getStorageType() 获取查询的存储类型，有效值：
<li>TotalStorage：存储总量，标准、低频、归档和深度归档存储量之和，不含提前删除量。</li>
<li>StandardStorage：标准存储。</li>
<li>InfrequentStorage：低频存储。</li>
<li>ArchiveStorage：归档存储。</li>
<li>DeepArchiveStorage：深度归档存储。</li>
<li>DeletedArchiveStorage：归档提前删除量。</li>
<li>DeletedDeepArchiveStorage：深度归档提前删除量。
<li>ArchiveStandardRetrieval：归档标准取回量。</li>
<li>ArchiveExpeditedRetrieval：归档快速取回量。</li>
<li>ArchiveBulkRetrieval：归档批量取回量。</li>
<li>DeepArchiveStandardRetrieval：深度归档标准取回量。</li>
<li>DeepArchiveBulkRetrieval：深度归档批量取回量。</li>
默认值为 TotalStorage。
 * @method void setStorageType(string $StorageType) 设置查询的存储类型，有效值：
<li>TotalStorage：存储总量，标准、低频、归档和深度归档存储量之和，不含提前删除量。</li>
<li>StandardStorage：标准存储。</li>
<li>InfrequentStorage：低频存储。</li>
<li>ArchiveStorage：归档存储。</li>
<li>DeepArchiveStorage：深度归档存储。</li>
<li>DeletedArchiveStorage：归档提前删除量。</li>
<li>DeletedDeepArchiveStorage：深度归档提前删除量。
<li>ArchiveStandardRetrieval：归档标准取回量。</li>
<li>ArchiveExpeditedRetrieval：归档快速取回量。</li>
<li>ArchiveBulkRetrieval：归档批量取回量。</li>
<li>DeepArchiveStandardRetrieval：深度归档标准取回量。</li>
<li>DeepArchiveBulkRetrieval：深度归档批量取回量。</li>
默认值为 TotalStorage。
 * @method integer getSubAppId() 获取点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
当该字段为1时，表示以管理员身份查询所有子应用（含主应用）的用量合计。
 * @method void setSubAppId(integer $SubAppId) 设置点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
当该字段为1时，表示以管理员身份查询所有子应用（含主应用）的用量合计。
 * @method string getArea() 获取查询的存储区域，有效值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
默认值为 Chinese Mainland。
 * @method void setArea(string $Area) 设置查询的存储区域，有效值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
默认值为 Chinese Mainland。
 */
class DescribeStorageDetailsRequest extends AbstractModel
{
    /**
     * @var string 起始时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $StartTime;

    /**
     * @var string 结束时间，需大于开始日期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $EndTime;

    /**
     * @var string 统计时间粒度，有效值：
<li>Minute：以5分钟为粒度。</li>
<li>Day：以天为粒度。</li>
默认按时间跨度决定，小于等于1天以5分钟为粒度，大于1天则以天为粒度。
     */
    public $Interval;

    /**
     * @var string 查询的存储类型，有效值：
<li>TotalStorage：存储总量，标准、低频、归档和深度归档存储量之和，不含提前删除量。</li>
<li>StandardStorage：标准存储。</li>
<li>InfrequentStorage：低频存储。</li>
<li>ArchiveStorage：归档存储。</li>
<li>DeepArchiveStorage：深度归档存储。</li>
<li>DeletedArchiveStorage：归档提前删除量。</li>
<li>DeletedDeepArchiveStorage：深度归档提前删除量。
<li>ArchiveStandardRetrieval：归档标准取回量。</li>
<li>ArchiveExpeditedRetrieval：归档快速取回量。</li>
<li>ArchiveBulkRetrieval：归档批量取回量。</li>
<li>DeepArchiveStandardRetrieval：深度归档标准取回量。</li>
<li>DeepArchiveBulkRetrieval：深度归档批量取回量。</li>
默认值为 TotalStorage。
     */
    public $StorageType;

    /**
     * @var integer 点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
当该字段为1时，表示以管理员身份查询所有子应用（含主应用）的用量合计。
     */
    public $SubAppId;

    /**
     * @var string 查询的存储区域，有效值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
默认值为 Chinese Mainland。
     */
    public $Area;

    /**
     * @param string $StartTime 起始时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param string $EndTime 结束时间，需大于开始日期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param string $Interval 统计时间粒度，有效值：
<li>Minute：以5分钟为粒度。</li>
<li>Day：以天为粒度。</li>
默认按时间跨度决定，小于等于1天以5分钟为粒度，大于1天则以天为粒度。
     * @param string $StorageType 查询的存储类型，有效值：
<li>TotalStorage：存储总量，标准、低频、归档和深度归档存储量之和，不含提前删除量。</li>
<li>StandardStorage：标准存储。</li>
<li>InfrequentStorage：低频存储。</li>
<li>ArchiveStorage：归档存储。</li>
<li>DeepArchiveStorage：深度归档存储。</li>
<li>DeletedArchiveStorage：归档提前删除量。</li>
<li>DeletedDeepArchiveStorage：深度归档提前删除量。
<li>ArchiveStandardRetrieval：归档标准取回量。</li>
<li>ArchiveExpeditedRetrieval：归档快速取回量。</li>
<li>ArchiveBulkRetrieval：归档批量取回量。</li>
<li>DeepArchiveStandardRetrieval：深度归档标准取回量。</li>
<li>DeepArchiveBulkRetrieval：深度归档批量取回量。</li>
默认值为 TotalStorage。
     * @param integer $SubAppId 点播 [子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
当该字段为1时，表示以管理员身份查询所有子应用（含主应用）的用量合计。
     * @param string $Area 查询的存储区域，有效值：
<li>Chinese Mainland：中国境内（不包含港澳台）。</li>
<li>Outside Chinese Mainland：中国境外。</li>
默认值为 Chinese Mainland。
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

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
