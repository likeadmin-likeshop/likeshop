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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCostSummaryByResource请求参数结构体
 *
 * @method string getBeginTime() 获取目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。
 * @method void setBeginTime(string $BeginTime) 设置目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。
 * @method string getEndTime() 获取目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。
 * @method void setEndTime(string $EndTime) 设置目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。
 * @method integer getLimit() 获取每次获取数据量
 * @method void setLimit(integer $Limit) 设置每次获取数据量
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getPayerUin() 获取查询账单数据的用户UIN
 * @method void setPayerUin(string $PayerUin) 设置查询账单数据的用户UIN
 * @method integer getNeedRecordNum() 获取是否需要返回记录数量，0不需要，1需要，默认不需要
 * @method void setNeedRecordNum(integer $NeedRecordNum) 设置是否需要返回记录数量，0不需要，1需要，默认不需要
 * @method integer getNeedConditionValue() 获取是否需要返回过滤条件，0不需要，1需要，默认不需要
 * @method void setNeedConditionValue(integer $NeedConditionValue) 设置是否需要返回过滤条件，0不需要，1需要，默认不需要
 * @method Conditions getConditions() 获取过滤条件，只支持ResourceKeyword(资源关键字，支持资源id及资源名称模糊查询)，ProjectIds（项目id），RegionIds(地域id)，PayModes(付费模式，可选prePay和postPay)，HideFreeCost（是否隐藏0元流水，可选0和1），OrderByCost（按费用排序规则，可选desc和asc）
 * @method void setConditions(Conditions $Conditions) 设置过滤条件，只支持ResourceKeyword(资源关键字，支持资源id及资源名称模糊查询)，ProjectIds（项目id），RegionIds(地域id)，PayModes(付费模式，可选prePay和postPay)，HideFreeCost（是否隐藏0元流水，可选0和1），OrderByCost（按费用排序规则，可选desc和asc）
 */
class DescribeCostSummaryByResourceRequest extends AbstractModel
{
    /**
     * @var string 目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。
     */
    public $BeginTime;

    /**
     * @var string 目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。
     */
    public $EndTime;

    /**
     * @var integer 每次获取数据量
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 查询账单数据的用户UIN
     */
    public $PayerUin;

    /**
     * @var integer 是否需要返回记录数量，0不需要，1需要，默认不需要
     */
    public $NeedRecordNum;

    /**
     * @var integer 是否需要返回过滤条件，0不需要，1需要，默认不需要
     */
    public $NeedConditionValue;

    /**
     * @var Conditions 过滤条件，只支持ResourceKeyword(资源关键字，支持资源id及资源名称模糊查询)，ProjectIds（项目id），RegionIds(地域id)，PayModes(付费模式，可选prePay和postPay)，HideFreeCost（是否隐藏0元流水，可选0和1），OrderByCost（按费用排序规则，可选desc和asc）
     */
    public $Conditions;

    /**
     * @param string $BeginTime 目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。
     * @param string $EndTime 目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。
     * @param integer $Limit 每次获取数据量
     * @param integer $Offset 偏移量
     * @param string $PayerUin 查询账单数据的用户UIN
     * @param integer $NeedRecordNum 是否需要返回记录数量，0不需要，1需要，默认不需要
     * @param integer $NeedConditionValue 是否需要返回过滤条件，0不需要，1需要，默认不需要
     * @param Conditions $Conditions 过滤条件，只支持ResourceKeyword(资源关键字，支持资源id及资源名称模糊查询)，ProjectIds（项目id），RegionIds(地域id)，PayModes(付费模式，可选prePay和postPay)，HideFreeCost（是否隐藏0元流水，可选0和1），OrderByCost（按费用排序规则，可选desc和asc）
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }

        if (array_key_exists("NeedConditionValue",$param) and $param["NeedConditionValue"] !== null) {
            $this->NeedConditionValue = $param["NeedConditionValue"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = new Conditions();
            $this->Conditions->deserialize($param["Conditions"]);
        }
    }
}
