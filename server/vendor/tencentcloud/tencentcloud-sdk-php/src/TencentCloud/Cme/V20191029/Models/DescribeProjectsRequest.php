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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjects请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method array getProjectIds() 获取项目 Id 列表，N 从 0 开始取值，最大 19。
 * @method void setProjectIds(array $ProjectIds) 设置项目 Id 列表，N 从 0 开始取值，最大 19。
 * @method array getAspectRatioSet() 获取画布宽高比集合。
 * @method void setAspectRatioSet(array $AspectRatioSet) 设置画布宽高比集合。
 * @method array getCategorySet() 获取项目类别，取值有：
<li>VIDEO_EDIT：视频编辑。</li>
<li>SWITCHER：导播台。</li>
<li>VIDEO_SEGMENTATION：视频拆条。</li>
<li>STREAM_CONNECT：云转推。</li>
<li>RECORD_REPLAY：录制回放。</li>
 * @method void setCategorySet(array $CategorySet) 设置项目类别，取值有：
<li>VIDEO_EDIT：视频编辑。</li>
<li>SWITCHER：导播台。</li>
<li>VIDEO_SEGMENTATION：视频拆条。</li>
<li>STREAM_CONNECT：云转推。</li>
<li>RECORD_REPLAY：录制回放。</li>
 * @method array getModes() 获取项目模式，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Default：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>
 * @method void setModes(array $Modes) 设置项目模式，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Default：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>
 * @method SortBy getSort() 获取列表排序，支持下列排序字段：
<li>CreateTime：创建时间；</li>
<li>UpdateTime：更新时间。</li>
 * @method void setSort(SortBy $Sort) 设置列表排序，支持下列排序字段：
<li>CreateTime：创建时间；</li>
<li>UpdateTime：更新时间。</li>
 * @method Entity getOwner() 获取项目归属者。
 * @method void setOwner(Entity $Owner) 设置项目归属者。
 * @method integer getOffset() 获取分页返回的起始偏移量，默认值：0。
 * @method void setOffset(integer $Offset) 设置分页返回的起始偏移量，默认值：0。
 * @method integer getLimit() 获取分页返回的记录条数，默认值：10。
 * @method void setLimit(integer $Limit) 设置分页返回的记录条数，默认值：10。
 * @method string getOperator() 获取操作者。填写用户的 Id，用于标识调用者及校验项目访问权限。
 * @method void setOperator(string $Operator) 设置操作者。填写用户的 Id，用于标识调用者及校验项目访问权限。
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var array 项目 Id 列表，N 从 0 开始取值，最大 19。
     */
    public $ProjectIds;

    /**
     * @var array 画布宽高比集合。
     */
    public $AspectRatioSet;

    /**
     * @var array 项目类别，取值有：
<li>VIDEO_EDIT：视频编辑。</li>
<li>SWITCHER：导播台。</li>
<li>VIDEO_SEGMENTATION：视频拆条。</li>
<li>STREAM_CONNECT：云转推。</li>
<li>RECORD_REPLAY：录制回放。</li>
     */
    public $CategorySet;

    /**
     * @var array 项目模式，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Default：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>
     */
    public $Modes;

    /**
     * @var SortBy 列表排序，支持下列排序字段：
<li>CreateTime：创建时间；</li>
<li>UpdateTime：更新时间。</li>
     */
    public $Sort;

    /**
     * @var Entity 项目归属者。
     */
    public $Owner;

    /**
     * @var integer 分页返回的起始偏移量，默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页返回的记录条数，默认值：10。
     */
    public $Limit;

    /**
     * @var string 操作者。填写用户的 Id，用于标识调用者及校验项目访问权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param array $ProjectIds 项目 Id 列表，N 从 0 开始取值，最大 19。
     * @param array $AspectRatioSet 画布宽高比集合。
     * @param array $CategorySet 项目类别，取值有：
<li>VIDEO_EDIT：视频编辑。</li>
<li>SWITCHER：导播台。</li>
<li>VIDEO_SEGMENTATION：视频拆条。</li>
<li>STREAM_CONNECT：云转推。</li>
<li>RECORD_REPLAY：录制回放。</li>
     * @param array $Modes 项目模式，一个项目可以有多种模式并相互切换。
当 Category 为 VIDEO_EDIT 时，可选模式有：
<li>Default：默认模式。</li>
<li>VideoEditTemplate：视频编辑模板制作模式。</li>
     * @param SortBy $Sort 列表排序，支持下列排序字段：
<li>CreateTime：创建时间；</li>
<li>UpdateTime：更新时间。</li>
     * @param Entity $Owner 项目归属者。
     * @param integer $Offset 分页返回的起始偏移量，默认值：0。
     * @param integer $Limit 分页返回的记录条数，默认值：10。
     * @param string $Operator 操作者。填写用户的 Id，用于标识调用者及校验项目访问权限。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("AspectRatioSet",$param) and $param["AspectRatioSet"] !== null) {
            $this->AspectRatioSet = $param["AspectRatioSet"];
        }

        if (array_key_exists("CategorySet",$param) and $param["CategorySet"] !== null) {
            $this->CategorySet = $param["CategorySet"];
        }

        if (array_key_exists("Modes",$param) and $param["Modes"] !== null) {
            $this->Modes = $param["Modes"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortBy();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
