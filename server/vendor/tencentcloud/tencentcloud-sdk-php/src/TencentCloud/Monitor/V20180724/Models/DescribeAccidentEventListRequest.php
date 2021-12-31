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
 * DescribeAccidentEventList请求参数结构体
 *
 * @method string getModule() 获取接口模块名，当前接口取值monitor
 * @method void setModule(string $Module) 设置接口模块名，当前接口取值monitor
 * @method integer getStartTime() 获取起始时间，默认一天前的时间戳
 * @method void setStartTime(integer $StartTime) 设置起始时间，默认一天前的时间戳
 * @method integer getEndTime() 获取结束时间，默认当前时间戳
 * @method void setEndTime(integer $EndTime) 设置结束时间，默认当前时间戳
 * @method integer getLimit() 获取分页参数，每页返回的数量，取值1~100，默认20
 * @method void setLimit(integer $Limit) 设置分页参数，每页返回的数量，取值1~100，默认20
 * @method integer getOffset() 获取分页参数，页偏移量，从0开始计数，默认0
 * @method void setOffset(integer $Offset) 设置分页参数，页偏移量，从0开始计数，默认0
 * @method string getUpdateTimeOrder() 获取根据UpdateTime排序的规则，取值asc或desc
 * @method void setUpdateTimeOrder(string $UpdateTimeOrder) 设置根据UpdateTime排序的规则，取值asc或desc
 * @method string getOccurTimeOrder() 获取根据OccurTime排序的规则，取值asc或desc（优先根据UpdateTimeOrder排序）
 * @method void setOccurTimeOrder(string $OccurTimeOrder) 设置根据OccurTime排序的规则，取值asc或desc（优先根据UpdateTimeOrder排序）
 * @method array getAccidentType() 获取根据事件类型过滤，1表示服务问题，2表示其他订阅
 * @method void setAccidentType(array $AccidentType) 设置根据事件类型过滤，1表示服务问题，2表示其他订阅
 * @method array getAccidentEvent() 获取根据事件过滤，1表示云服务器存储问题，2表示云服务器网络连接问题，3表示云服务器运行异常，202表示运营商网络抖动
 * @method void setAccidentEvent(array $AccidentEvent) 设置根据事件过滤，1表示云服务器存储问题，2表示云服务器网络连接问题，3表示云服务器运行异常，202表示运营商网络抖动
 * @method array getAccidentStatus() 获取根据事件状态过滤，0表示已恢复，1表示未恢复
 * @method void setAccidentStatus(array $AccidentStatus) 设置根据事件状态过滤，0表示已恢复，1表示未恢复
 * @method array getAccidentRegion() 获取根据事件地域过滤，gz表示广州，sh表示上海等
 * @method void setAccidentRegion(array $AccidentRegion) 设置根据事件地域过滤，gz表示广州，sh表示上海等
 * @method string getAffectResource() 获取根据影响资源过滤，比如ins-19a06bka
 * @method void setAffectResource(string $AffectResource) 设置根据影响资源过滤，比如ins-19a06bka
 */
class DescribeAccidentEventListRequest extends AbstractModel
{
    /**
     * @var string 接口模块名，当前接口取值monitor
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
     * @var string 根据UpdateTime排序的规则，取值asc或desc
     */
    public $UpdateTimeOrder;

    /**
     * @var string 根据OccurTime排序的规则，取值asc或desc（优先根据UpdateTimeOrder排序）
     */
    public $OccurTimeOrder;

    /**
     * @var array 根据事件类型过滤，1表示服务问题，2表示其他订阅
     */
    public $AccidentType;

    /**
     * @var array 根据事件过滤，1表示云服务器存储问题，2表示云服务器网络连接问题，3表示云服务器运行异常，202表示运营商网络抖动
     */
    public $AccidentEvent;

    /**
     * @var array 根据事件状态过滤，0表示已恢复，1表示未恢复
     */
    public $AccidentStatus;

    /**
     * @var array 根据事件地域过滤，gz表示广州，sh表示上海等
     */
    public $AccidentRegion;

    /**
     * @var string 根据影响资源过滤，比如ins-19a06bka
     */
    public $AffectResource;

    /**
     * @param string $Module 接口模块名，当前接口取值monitor
     * @param integer $StartTime 起始时间，默认一天前的时间戳
     * @param integer $EndTime 结束时间，默认当前时间戳
     * @param integer $Limit 分页参数，每页返回的数量，取值1~100，默认20
     * @param integer $Offset 分页参数，页偏移量，从0开始计数，默认0
     * @param string $UpdateTimeOrder 根据UpdateTime排序的规则，取值asc或desc
     * @param string $OccurTimeOrder 根据OccurTime排序的规则，取值asc或desc（优先根据UpdateTimeOrder排序）
     * @param array $AccidentType 根据事件类型过滤，1表示服务问题，2表示其他订阅
     * @param array $AccidentEvent 根据事件过滤，1表示云服务器存储问题，2表示云服务器网络连接问题，3表示云服务器运行异常，202表示运营商网络抖动
     * @param array $AccidentStatus 根据事件状态过滤，0表示已恢复，1表示未恢复
     * @param array $AccidentRegion 根据事件地域过滤，gz表示广州，sh表示上海等
     * @param string $AffectResource 根据影响资源过滤，比如ins-19a06bka
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

        if (array_key_exists("UpdateTimeOrder",$param) and $param["UpdateTimeOrder"] !== null) {
            $this->UpdateTimeOrder = $param["UpdateTimeOrder"];
        }

        if (array_key_exists("OccurTimeOrder",$param) and $param["OccurTimeOrder"] !== null) {
            $this->OccurTimeOrder = $param["OccurTimeOrder"];
        }

        if (array_key_exists("AccidentType",$param) and $param["AccidentType"] !== null) {
            $this->AccidentType = $param["AccidentType"];
        }

        if (array_key_exists("AccidentEvent",$param) and $param["AccidentEvent"] !== null) {
            $this->AccidentEvent = $param["AccidentEvent"];
        }

        if (array_key_exists("AccidentStatus",$param) and $param["AccidentStatus"] !== null) {
            $this->AccidentStatus = $param["AccidentStatus"];
        }

        if (array_key_exists("AccidentRegion",$param) and $param["AccidentRegion"] !== null) {
            $this->AccidentRegion = $param["AccidentRegion"];
        }

        if (array_key_exists("AffectResource",$param) and $param["AffectResource"] !== null) {
            $this->AffectResource = $param["AffectResource"];
        }
    }
}
