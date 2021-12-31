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
 * SearchMaterial请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。
 * @method array getSearchScopes() 获取指定搜索空间，数组长度不得超过5。
 * @method void setSearchScopes(array $SearchScopes) 设置指定搜索空间，数组长度不得超过5。
 * @method array getMaterialTypes() 获取媒体类型，取值：
<li>AUDIO：音频；</li>
<li>VIDEO：视频 ；</li>
<li>IMAGE：图片。</li>
 * @method void setMaterialTypes(array $MaterialTypes) 设置媒体类型，取值：
<li>AUDIO：音频；</li>
<li>VIDEO：视频 ；</li>
<li>IMAGE：图片。</li>
 * @method string getText() 获取搜索文本，模糊匹配媒体名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：15个字符。
 * @method void setText(string $Text) 设置搜索文本，模糊匹配媒体名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：15个字符。
 * @method string getResolution() 获取按画质检索，取值为：LD/SD/HD/FHD/2K/4K。
 * @method void setResolution(string $Resolution) 设置按画质检索，取值为：LD/SD/HD/FHD/2K/4K。
 * @method IntegerRange getDurationRange() 获取按媒体时长检索，单位s。
 * @method void setDurationRange(IntegerRange $DurationRange) 设置按媒体时长检索，单位s。
 * @method TimeRange getCreateTimeRange() 获取按照媒体创建时间检索。
 * @method void setCreateTimeRange(TimeRange $CreateTimeRange) 设置按照媒体创建时间检索。
 * @method array getTags() 获取按标签检索，填入检索的标签名。
 * @method void setTags(array $Tags) 设置按标签检索，填入检索的标签名。
 * @method SortBy getSort() 获取排序方式。Sort.Field 可选值：CreateTime。指定 Text 搜索时，将根据匹配度排序，该字段无效。
 * @method void setSort(SortBy $Sort) 设置排序方式。Sort.Field 可选值：CreateTime。指定 Text 搜索时，将根据匹配度排序，该字段无效。
 * @method integer getOffset() 获取偏移量。默认值：0。
 * @method void setOffset(integer $Offset) 设置偏移量。默认值：0。
 * @method integer getLimit() 获取返回记录条数，默认值：50。
 * @method void setLimit(integer $Limit) 设置返回记录条数，默认值：50。
 * @method string getOperator() 获取操作者。填写用户的 Id，用于标识调用者及校验媒体访问权限。
 * @method void setOperator(string $Operator) 设置操作者。填写用户的 Id，用于标识调用者及校验媒体访问权限。
 */
class SearchMaterialRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。
     */
    public $Platform;

    /**
     * @var array 指定搜索空间，数组长度不得超过5。
     */
    public $SearchScopes;

    /**
     * @var array 媒体类型，取值：
<li>AUDIO：音频；</li>
<li>VIDEO：视频 ；</li>
<li>IMAGE：图片。</li>
     */
    public $MaterialTypes;

    /**
     * @var string 搜索文本，模糊匹配媒体名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：15个字符。
     */
    public $Text;

    /**
     * @var string 按画质检索，取值为：LD/SD/HD/FHD/2K/4K。
     */
    public $Resolution;

    /**
     * @var IntegerRange 按媒体时长检索，单位s。
     */
    public $DurationRange;

    /**
     * @var TimeRange 按照媒体创建时间检索。
     */
    public $CreateTimeRange;

    /**
     * @var array 按标签检索，填入检索的标签名。
     */
    public $Tags;

    /**
     * @var SortBy 排序方式。Sort.Field 可选值：CreateTime。指定 Text 搜索时，将根据匹配度排序，该字段无效。
     */
    public $Sort;

    /**
     * @var integer 偏移量。默认值：0。
     */
    public $Offset;

    /**
     * @var integer 返回记录条数，默认值：50。
     */
    public $Limit;

    /**
     * @var string 操作者。填写用户的 Id，用于标识调用者及校验媒体访问权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台名称，指定访问的平台。
     * @param array $SearchScopes 指定搜索空间，数组长度不得超过5。
     * @param array $MaterialTypes 媒体类型，取值：
<li>AUDIO：音频；</li>
<li>VIDEO：视频 ；</li>
<li>IMAGE：图片。</li>
     * @param string $Text 搜索文本，模糊匹配媒体名称或描述信息，匹配项越多，匹配度越高，排序越优先。长度限制：15个字符。
     * @param string $Resolution 按画质检索，取值为：LD/SD/HD/FHD/2K/4K。
     * @param IntegerRange $DurationRange 按媒体时长检索，单位s。
     * @param TimeRange $CreateTimeRange 按照媒体创建时间检索。
     * @param array $Tags 按标签检索，填入检索的标签名。
     * @param SortBy $Sort 排序方式。Sort.Field 可选值：CreateTime。指定 Text 搜索时，将根据匹配度排序，该字段无效。
     * @param integer $Offset 偏移量。默认值：0。
     * @param integer $Limit 返回记录条数，默认值：50。
     * @param string $Operator 操作者。填写用户的 Id，用于标识调用者及校验媒体访问权限。
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

        if (array_key_exists("SearchScopes",$param) and $param["SearchScopes"] !== null) {
            $this->SearchScopes = [];
            foreach ($param["SearchScopes"] as $key => $value){
                $obj = new SearchScope();
                $obj->deserialize($value);
                array_push($this->SearchScopes, $obj);
            }
        }

        if (array_key_exists("MaterialTypes",$param) and $param["MaterialTypes"] !== null) {
            $this->MaterialTypes = $param["MaterialTypes"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("DurationRange",$param) and $param["DurationRange"] !== null) {
            $this->DurationRange = new IntegerRange();
            $this->DurationRange->deserialize($param["DurationRange"]);
        }

        if (array_key_exists("CreateTimeRange",$param) and $param["CreateTimeRange"] !== null) {
            $this->CreateTimeRange = new TimeRange();
            $this->CreateTimeRange->deserialize($param["CreateTimeRange"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new SortBy();
            $this->Sort->deserialize($param["Sort"]);
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
