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
 * DescribeProductEventList请求参数结构体
 *
 * @method string getModule() 获取接口模块名，固定值"monitor"
 * @method void setModule(string $Module) 设置接口模块名，固定值"monitor"
 * @method array getProductName() 获取产品类型过滤，比如"cvm"表示云服务器
 * @method void setProductName(array $ProductName) 设置产品类型过滤，比如"cvm"表示云服务器
 * @method array getEventName() 获取事件名称过滤，比如"guest_reboot"表示机器重启
 * @method void setEventName(array $EventName) 设置事件名称过滤，比如"guest_reboot"表示机器重启
 * @method array getInstanceId() 获取影响对象，比如"ins-19708ino"
 * @method void setInstanceId(array $InstanceId) 设置影响对象，比如"ins-19708ino"
 * @method array getDimensions() 获取维度过滤，比如外网IP:10.0.0.1
 * @method void setDimensions(array $Dimensions) 设置维度过滤，比如外网IP:10.0.0.1
 * @method array getRegionList() 获取产品事件地域过滤参数，比如gz，各地域缩写可参见[地域列表](https://cloud.tencent.com/document/product/248/50863)
 * @method void setRegionList(array $RegionList) 设置产品事件地域过滤参数，比如gz，各地域缩写可参见[地域列表](https://cloud.tencent.com/document/product/248/50863)
 * @method array getType() 获取事件类型过滤，取值范围["status_change","abnormal"]，分别表示状态变更、异常事件
 * @method void setType(array $Type) 设置事件类型过滤，取值范围["status_change","abnormal"]，分别表示状态变更、异常事件
 * @method array getStatus() 获取事件状态过滤，取值范围["recover","alarm","-"]，分别表示已恢复、未恢复、无状态
 * @method void setStatus(array $Status) 设置事件状态过滤，取值范围["recover","alarm","-"]，分别表示已恢复、未恢复、无状态
 * @method array getProject() 获取项目ID过滤
 * @method void setProject(array $Project) 设置项目ID过滤
 * @method integer getIsAlarmConfig() 获取告警状态配置过滤，1表示已配置，0表示未配置
 * @method void setIsAlarmConfig(integer $IsAlarmConfig) 设置告警状态配置过滤，1表示已配置，0表示未配置
 * @method string getTimeOrder() 获取按更新时间排序，ASC表示升序，DESC表示降序，默认DESC
 * @method void setTimeOrder(string $TimeOrder) 设置按更新时间排序，ASC表示升序，DESC表示降序，默认DESC
 * @method integer getStartTime() 获取起始时间，默认一天前的时间戳
 * @method void setStartTime(integer $StartTime) 设置起始时间，默认一天前的时间戳
 * @method integer getEndTime() 获取结束时间，默认当前时间戳
 * @method void setEndTime(integer $EndTime) 设置结束时间，默认当前时间戳
 * @method integer getOffset() 获取页偏移量，默认0
 * @method void setOffset(integer $Offset) 设置页偏移量，默认0
 * @method integer getLimit() 获取每页返回的数量，默认20
 * @method void setLimit(integer $Limit) 设置每页返回的数量，默认20
 */
class DescribeProductEventListRequest extends AbstractModel
{
    /**
     * @var string 接口模块名，固定值"monitor"
     */
    public $Module;

    /**
     * @var array 产品类型过滤，比如"cvm"表示云服务器
     */
    public $ProductName;

    /**
     * @var array 事件名称过滤，比如"guest_reboot"表示机器重启
     */
    public $EventName;

    /**
     * @var array 影响对象，比如"ins-19708ino"
     */
    public $InstanceId;

    /**
     * @var array 维度过滤，比如外网IP:10.0.0.1
     */
    public $Dimensions;

    /**
     * @var array 产品事件地域过滤参数，比如gz，各地域缩写可参见[地域列表](https://cloud.tencent.com/document/product/248/50863)
     */
    public $RegionList;

    /**
     * @var array 事件类型过滤，取值范围["status_change","abnormal"]，分别表示状态变更、异常事件
     */
    public $Type;

    /**
     * @var array 事件状态过滤，取值范围["recover","alarm","-"]，分别表示已恢复、未恢复、无状态
     */
    public $Status;

    /**
     * @var array 项目ID过滤
     */
    public $Project;

    /**
     * @var integer 告警状态配置过滤，1表示已配置，0表示未配置
     */
    public $IsAlarmConfig;

    /**
     * @var string 按更新时间排序，ASC表示升序，DESC表示降序，默认DESC
     */
    public $TimeOrder;

    /**
     * @var integer 起始时间，默认一天前的时间戳
     */
    public $StartTime;

    /**
     * @var integer 结束时间，默认当前时间戳
     */
    public $EndTime;

    /**
     * @var integer 页偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 每页返回的数量，默认20
     */
    public $Limit;

    /**
     * @param string $Module 接口模块名，固定值"monitor"
     * @param array $ProductName 产品类型过滤，比如"cvm"表示云服务器
     * @param array $EventName 事件名称过滤，比如"guest_reboot"表示机器重启
     * @param array $InstanceId 影响对象，比如"ins-19708ino"
     * @param array $Dimensions 维度过滤，比如外网IP:10.0.0.1
     * @param array $RegionList 产品事件地域过滤参数，比如gz，各地域缩写可参见[地域列表](https://cloud.tencent.com/document/product/248/50863)
     * @param array $Type 事件类型过滤，取值范围["status_change","abnormal"]，分别表示状态变更、异常事件
     * @param array $Status 事件状态过滤，取值范围["recover","alarm","-"]，分别表示已恢复、未恢复、无状态
     * @param array $Project 项目ID过滤
     * @param integer $IsAlarmConfig 告警状态配置过滤，1表示已配置，0表示未配置
     * @param string $TimeOrder 按更新时间排序，ASC表示升序，DESC表示降序，默认DESC
     * @param integer $StartTime 起始时间，默认一天前的时间戳
     * @param integer $EndTime 结束时间，默认当前时间戳
     * @param integer $Offset 页偏移量，默认0
     * @param integer $Limit 每页返回的数量，默认20
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

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DescribeProductEventListDimensions();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("RegionList",$param) and $param["RegionList"] !== null) {
            $this->RegionList = $param["RegionList"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = $param["Project"];
        }

        if (array_key_exists("IsAlarmConfig",$param) and $param["IsAlarmConfig"] !== null) {
            $this->IsAlarmConfig = $param["IsAlarmConfig"];
        }

        if (array_key_exists("TimeOrder",$param) and $param["TimeOrder"] !== null) {
            $this->TimeOrder = $param["TimeOrder"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
