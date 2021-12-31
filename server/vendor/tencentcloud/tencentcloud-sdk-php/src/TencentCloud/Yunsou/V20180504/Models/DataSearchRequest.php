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
namespace TencentCloud\Yunsou\V20180504\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataSearch请求参数结构体
 *
 * @method integer getResourceId() 获取云搜的业务ID，用以表明当前数据请求的业务
 * @method void setResourceId(integer $ResourceId) 设置云搜的业务ID，用以表明当前数据请求的业务
 * @method string getSearchQuery() 获取检索串
 * @method void setSearchQuery(string $SearchQuery) 设置检索串
 * @method integer getPageId() 获取当前页，从第0页开始计算
 * @method void setPageId(integer $PageId) 设置当前页，从第0页开始计算
 * @method integer getNumPerPage() 获取每页结果数
 * @method void setNumPerPage(integer $NumPerPage) 设置每页结果数
 * @method string getSearchId() 获取当前检索号，用于定位问题，建议指定并且全局唯一
 * @method void setSearchId(string $SearchId) 设置当前检索号，用于定位问题，建议指定并且全局唯一
 * @method integer getQueryEncode() 获取请求编码，0表示utf8，1表示gbk，建议指定
 * @method void setQueryEncode(integer $QueryEncode) 设置请求编码，0表示utf8，1表示gbk，建议指定
 * @method integer getRankType() 获取排序类型
 * @method void setRankType(integer $RankType) 设置排序类型
 * @method string getNumFilter() 获取数值过滤，结果中按属性过滤
 * @method void setNumFilter(string $NumFilter) 设置数值过滤，结果中按属性过滤
 * @method string getClFilter() 获取分类过滤，导航类检索请求
 * @method void setClFilter(string $ClFilter) 设置分类过滤，导航类检索请求
 * @method string getExtra() 获取检索用户相关字段
 * @method void setExtra(string $Extra) 设置检索用户相关字段
 * @method integer getSourceId() 获取检索来源
 * @method void setSourceId(integer $SourceId) 设置检索来源
 * @method integer getSecondSearch() 获取是否进行二次检索，0关闭，1打开
 * @method void setSecondSearch(integer $SecondSearch) 设置是否进行二次检索，0关闭，1打开
 * @method integer getMaxDocReturn() 获取指定返回最大篇数，无特殊原因不建议指定
 * @method void setMaxDocReturn(integer $MaxDocReturn) 设置指定返回最大篇数，无特殊原因不建议指定
 * @method integer getIsSmartbox() 获取是否smartbox检索，0关闭，1打开
 * @method void setIsSmartbox(integer $IsSmartbox) 设置是否smartbox检索，0关闭，1打开
 * @method integer getEnableAbsHighlight() 获取是否打开高红标亮，0关闭，1打开
 * @method void setEnableAbsHighlight(integer $EnableAbsHighlight) 设置是否打开高红标亮，0关闭，1打开
 * @method integer getQcBid() 获取指定访问QC纠错业务ID
 * @method void setQcBid(integer $QcBid) 设置指定访问QC纠错业务ID
 * @method string getGroupBy() 获取按指定字段进行group by，只能对数值字段进行操作
 * @method void setGroupBy(string $GroupBy) 设置按指定字段进行group by，只能对数值字段进行操作
 * @method string getDistinct() 获取按指定字段进行distinct，只能对数值字段进行操作
 * @method void setDistinct(string $Distinct) 设置按指定字段进行distinct，只能对数值字段进行操作
 * @method string getL4RankExpression() 获取高级排序参数，具体参见高级排序说明
 * @method void setL4RankExpression(string $L4RankExpression) 设置高级排序参数，具体参见高级排序说明
 * @method string getMatchValue() 获取高级排序参数，具体参见高级排序说明
 * @method void setMatchValue(string $MatchValue) 设置高级排序参数，具体参见高级排序说明
 * @method float getLongitude() 获取经度信息
 * @method void setLongitude(float $Longitude) 设置经度信息
 * @method float getLatitude() 获取纬度信息
 * @method void setLatitude(float $Latitude) 设置纬度信息
 * @method array getMultiFilter() 获取分类过滤并集
 * @method void setMultiFilter(array $MultiFilter) 设置分类过滤并集
 */
class DataSearchRequest extends AbstractModel
{
    /**
     * @var integer 云搜的业务ID，用以表明当前数据请求的业务
     */
    public $ResourceId;

    /**
     * @var string 检索串
     */
    public $SearchQuery;

    /**
     * @var integer 当前页，从第0页开始计算
     */
    public $PageId;

    /**
     * @var integer 每页结果数
     */
    public $NumPerPage;

    /**
     * @var string 当前检索号，用于定位问题，建议指定并且全局唯一
     */
    public $SearchId;

    /**
     * @var integer 请求编码，0表示utf8，1表示gbk，建议指定
     */
    public $QueryEncode;

    /**
     * @var integer 排序类型
     */
    public $RankType;

    /**
     * @var string 数值过滤，结果中按属性过滤
     */
    public $NumFilter;

    /**
     * @var string 分类过滤，导航类检索请求
     */
    public $ClFilter;

    /**
     * @var string 检索用户相关字段
     */
    public $Extra;

    /**
     * @var integer 检索来源
     */
    public $SourceId;

    /**
     * @var integer 是否进行二次检索，0关闭，1打开
     */
    public $SecondSearch;

    /**
     * @var integer 指定返回最大篇数，无特殊原因不建议指定
     */
    public $MaxDocReturn;

    /**
     * @var integer 是否smartbox检索，0关闭，1打开
     */
    public $IsSmartbox;

    /**
     * @var integer 是否打开高红标亮，0关闭，1打开
     */
    public $EnableAbsHighlight;

    /**
     * @var integer 指定访问QC纠错业务ID
     */
    public $QcBid;

    /**
     * @var string 按指定字段进行group by，只能对数值字段进行操作
     */
    public $GroupBy;

    /**
     * @var string 按指定字段进行distinct，只能对数值字段进行操作
     */
    public $Distinct;

    /**
     * @var string 高级排序参数，具体参见高级排序说明
     */
    public $L4RankExpression;

    /**
     * @var string 高级排序参数，具体参见高级排序说明
     */
    public $MatchValue;

    /**
     * @var float 经度信息
     */
    public $Longitude;

    /**
     * @var float 纬度信息
     */
    public $Latitude;

    /**
     * @var array 分类过滤并集
     */
    public $MultiFilter;

    /**
     * @param integer $ResourceId 云搜的业务ID，用以表明当前数据请求的业务
     * @param string $SearchQuery 检索串
     * @param integer $PageId 当前页，从第0页开始计算
     * @param integer $NumPerPage 每页结果数
     * @param string $SearchId 当前检索号，用于定位问题，建议指定并且全局唯一
     * @param integer $QueryEncode 请求编码，0表示utf8，1表示gbk，建议指定
     * @param integer $RankType 排序类型
     * @param string $NumFilter 数值过滤，结果中按属性过滤
     * @param string $ClFilter 分类过滤，导航类检索请求
     * @param string $Extra 检索用户相关字段
     * @param integer $SourceId 检索来源
     * @param integer $SecondSearch 是否进行二次检索，0关闭，1打开
     * @param integer $MaxDocReturn 指定返回最大篇数，无特殊原因不建议指定
     * @param integer $IsSmartbox 是否smartbox检索，0关闭，1打开
     * @param integer $EnableAbsHighlight 是否打开高红标亮，0关闭，1打开
     * @param integer $QcBid 指定访问QC纠错业务ID
     * @param string $GroupBy 按指定字段进行group by，只能对数值字段进行操作
     * @param string $Distinct 按指定字段进行distinct，只能对数值字段进行操作
     * @param string $L4RankExpression 高级排序参数，具体参见高级排序说明
     * @param string $MatchValue 高级排序参数，具体参见高级排序说明
     * @param float $Longitude 经度信息
     * @param float $Latitude 纬度信息
     * @param array $MultiFilter 分类过滤并集
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("SearchQuery",$param) and $param["SearchQuery"] !== null) {
            $this->SearchQuery = $param["SearchQuery"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("NumPerPage",$param) and $param["NumPerPage"] !== null) {
            $this->NumPerPage = $param["NumPerPage"];
        }

        if (array_key_exists("SearchId",$param) and $param["SearchId"] !== null) {
            $this->SearchId = $param["SearchId"];
        }

        if (array_key_exists("QueryEncode",$param) and $param["QueryEncode"] !== null) {
            $this->QueryEncode = $param["QueryEncode"];
        }

        if (array_key_exists("RankType",$param) and $param["RankType"] !== null) {
            $this->RankType = $param["RankType"];
        }

        if (array_key_exists("NumFilter",$param) and $param["NumFilter"] !== null) {
            $this->NumFilter = $param["NumFilter"];
        }

        if (array_key_exists("ClFilter",$param) and $param["ClFilter"] !== null) {
            $this->ClFilter = $param["ClFilter"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SecondSearch",$param) and $param["SecondSearch"] !== null) {
            $this->SecondSearch = $param["SecondSearch"];
        }

        if (array_key_exists("MaxDocReturn",$param) and $param["MaxDocReturn"] !== null) {
            $this->MaxDocReturn = $param["MaxDocReturn"];
        }

        if (array_key_exists("IsSmartbox",$param) and $param["IsSmartbox"] !== null) {
            $this->IsSmartbox = $param["IsSmartbox"];
        }

        if (array_key_exists("EnableAbsHighlight",$param) and $param["EnableAbsHighlight"] !== null) {
            $this->EnableAbsHighlight = $param["EnableAbsHighlight"];
        }

        if (array_key_exists("QcBid",$param) and $param["QcBid"] !== null) {
            $this->QcBid = $param["QcBid"];
        }

        if (array_key_exists("GroupBy",$param) and $param["GroupBy"] !== null) {
            $this->GroupBy = $param["GroupBy"];
        }

        if (array_key_exists("Distinct",$param) and $param["Distinct"] !== null) {
            $this->Distinct = $param["Distinct"];
        }

        if (array_key_exists("L4RankExpression",$param) and $param["L4RankExpression"] !== null) {
            $this->L4RankExpression = $param["L4RankExpression"];
        }

        if (array_key_exists("MatchValue",$param) and $param["MatchValue"] !== null) {
            $this->MatchValue = $param["MatchValue"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("MultiFilter",$param) and $param["MultiFilter"] !== null) {
            $this->MultiFilter = $param["MultiFilter"];
        }
    }
}
