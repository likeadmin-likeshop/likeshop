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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicAlarmList请求参数结构体
 *
 * @method string getModule() 获取接口模块名，当前取值monitor
 * @method void setModule(string $Module) 设置接口模块名，当前取值monitor
 * @method integer getStartTime() 获取起始时间，默认一天前的时间戳
 * @method void setStartTime(integer $StartTime) 设置起始时间，默认一天前的时间戳
 * @method integer getEndTime() 获取结束时间，默认当前时间戳
 * @method void setEndTime(integer $EndTime) 设置结束时间，默认当前时间戳
 * @method integer getLimit() 获取分页参数，每页返回的数量，取值1~100，默认20
 * @method void setLimit(integer $Limit) 设置分页参数，每页返回的数量，取值1~100，默认20
 * @method integer getOffset() 获取分页参数，页偏移量，从0开始计数，默认0
 * @method void setOffset(integer $Offset) 设置分页参数，页偏移量，从0开始计数，默认0
 * @method string getOccurTimeOrder() 获取根据发生时间排序，取值ASC或DESC
 * @method void setOccurTimeOrder(string $OccurTimeOrder) 设置根据发生时间排序，取值ASC或DESC
 * @method array getProjectIds() 获取根据项目ID过滤
 * @method void setProjectIds(array $ProjectIds) 设置根据项目ID过滤
 * @method array getViewNames() 获取根据策略类型过滤
 * @method void setViewNames(array $ViewNames) 设置根据策略类型过滤
 * @method array getAlarmStatus() 获取根据告警状态过滤
 * @method void setAlarmStatus(array $AlarmStatus) 设置根据告警状态过滤
 * @method string getObjLike() 获取根据告警对象过滤
 * @method void setObjLike(string $ObjLike) 设置根据告警对象过滤
 * @method array getInstanceGroupIds() 获取根据实例组ID过滤
 * @method void setInstanceGroupIds(array $InstanceGroupIds) 设置根据实例组ID过滤
 * @method array getMetricNames() 获取根据指标名过滤
 * @method void setMetricNames(array $MetricNames) 设置根据指标名过滤
 */
class DescribeBasicAlarmListRequest extends AbstractModel
{
    /**
     * @var string 接口模块名，当前取值monitor
     */
    public $Module;

    /**
     * @var integer 起始时间，默认一天前的时间戳
     */
    public $StartTime;

    /**
     * @var integer 结束时间，默认当前时间戳
     */
    public $EndTime;

    /**
     * @var integer 分页参数，每页返回的数量，取值1~100，默认20
     */
    public $Limit;

    /**
     * @var integer 分页参数，页偏移量，从0开始计数，默认0
     */
    public $Offset;

    /**
     * @var string 根据发生时间排序，取值ASC或DESC
     */
    public $OccurTimeOrder;

    /**
     * @var array 根据项目ID过滤
     */
    public $ProjectIds;

    /**
     * @var array 根据策略类型过滤
     */
    public $ViewNames;

    /**
     * @var array 根据告警状态过滤
     */
    public $AlarmStatus;

    /**
     * @var string 根据告警对象过滤
     */
    public $ObjLike;

    /**
     * @var array 根据实例组ID过滤
     */
    public $InstanceGroupIds;

    /**
     * @var array 根据指标名过滤
     */
    public $MetricNames;

    /**
     * @param string $Module 接口模块名，当前取值monitor
     * @param integer $StartTime 起始时间，默认一天前的时间戳
     * @param integer $EndTime 结束时间，默认当前时间戳
     * @param integer $Limit 分页参数，每页返回的数量，取值1~100，默认20
     * @param integer $Offset 分页参数，页偏移量，从0开始计数，默认0
     * @param string $OccurTimeOrder 根据发生时间排序，取值ASC或DESC
     * @param array $ProjectIds 根据项目ID过滤
     * @param array $ViewNames 根据策略类型过滤
     * @param array $AlarmStatus 根据告警状态过滤
     * @param string $ObjLike 根据告警对象过滤
     * @param array $InstanceGroupIds 根据实例组ID过滤
     * @param array $MetricNames 根据指标名过滤
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
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

        if (array_key_exists("OccurTimeOrder",$param) and $param["OccurTimeOrder"] !== null) {
            $this->OccurTimeOrder = $param["OccurTimeOrder"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("ViewNames",$param) and $param["ViewNames"] !== null) {
            $this->ViewNames = $param["ViewNames"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("ObjLike",$param) and $param["ObjLike"] !== null) {
            $this->ObjLike = $param["ObjLike"];
        }

        if (array_key_exists("InstanceGroupIds",$param) and $param["InstanceGroupIds"] !== null) {
            $this->InstanceGroupIds = $param["InstanceGroupIds"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }
    }
}
