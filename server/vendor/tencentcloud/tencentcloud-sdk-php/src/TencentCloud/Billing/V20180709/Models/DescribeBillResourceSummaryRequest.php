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
 * DescribeBillResourceSummary请求参数结构体
 *
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取数量，最大值为1000
 * @method void setLimit(integer $Limit) 设置数量，最大值为1000
 * @method string getPeriodType() 获取周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
 * @method void setPeriodType(string $PeriodType) 设置周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
 * @method string getMonth() 获取月份，格式为yyyy-mm。不能早于开通账单2.0的月份，最多可拉取24个月内的数据。
 * @method void setMonth(string $Month) 设置月份，格式为yyyy-mm。不能早于开通账单2.0的月份，最多可拉取24个月内的数据。
 * @method integer getNeedRecordNum() 获取是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
 * @method void setNeedRecordNum(integer $NeedRecordNum) 设置是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
 * @method string getActionType() 获取查询交易类型。如 按量计费日结，按量计费小时结 等
 * @method void setActionType(string $ActionType) 设置查询交易类型。如 按量计费日结，按量计费小时结 等
 */
class DescribeBillResourceSummaryRequest extends AbstractModel
{
    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 数量，最大值为1000
     */
    public $Limit;

    /**
     * @var string 周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
     */
    public $PeriodType;

    /**
     * @var string 月份，格式为yyyy-mm。不能早于开通账单2.0的月份，最多可拉取24个月内的数据。
     */
    public $Month;

    /**
     * @var integer 是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
     */
    public $NeedRecordNum;

    /**
     * @var string 查询交易类型。如 按量计费日结，按量计费小时结 等
     */
    public $ActionType;

    /**
     * @param integer $Offset 偏移量
     * @param integer $Limit 数量，最大值为1000
     * @param string $PeriodType 周期类型，byUsedTime按计费周期/byPayTime按扣费周期。需要与费用中心该月份账单的周期保持一致。您可前往[账单概览](https://console.cloud.tencent.com/expense/bill/overview)页面顶部查看确认您的账单统计周期类型。
     * @param string $Month 月份，格式为yyyy-mm。不能早于开通账单2.0的月份，最多可拉取24个月内的数据。
     * @param integer $NeedRecordNum 是否需要访问列表的总记录数，用于前端分页
1-表示需要， 0-表示不需要
     * @param string $ActionType 查询交易类型。如 按量计费日结，按量计费小时结 等
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }
    }
}
