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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFleetEvents请求参数结构体
 *
 * @method string getFleetId() 获取服务器舰队 Id
 * @method void setFleetId(string $FleetId) 设置服务器舰队 Id
 * @method integer getLimit() 获取分页时返回服务器舰队事件的数量，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置分页时返回服务器舰队事件的数量，默认为20，最大值为100
 * @method integer getOffset() 获取分页时的数据偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置分页时的数据偏移量，默认为0
 * @method string getEventCode() 获取事件代码
 * @method void setEventCode(string $EventCode) 设置事件代码
 * @method string getStartTime() 获取发生事件的开始时间
 * @method void setStartTime(string $StartTime) 设置发生事件的开始时间
 * @method string getEndTime() 获取发生事件的结束时间
 * @method void setEndTime(string $EndTime) 设置发生事件的结束时间
 */
class DescribeFleetEventsRequest extends AbstractModel
{
    /**
     * @var string 服务器舰队 Id
     */
    public $FleetId;

    /**
     * @var integer 分页时返回服务器舰队事件的数量，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @var integer 分页时的数据偏移量，默认为0
     */
    public $Offset;

    /**
     * @var string 事件代码
     */
    public $EventCode;

    /**
     * @var string 发生事件的开始时间
     */
    public $StartTime;

    /**
     * @var string 发生事件的结束时间
     */
    public $EndTime;

    /**
     * @param string $FleetId 服务器舰队 Id
     * @param integer $Limit 分页时返回服务器舰队事件的数量，默认为20，最大值为100
     * @param integer $Offset 分页时的数据偏移量，默认为0
     * @param string $EventCode 事件代码
     * @param string $StartTime 发生事件的开始时间
     * @param string $EndTime 发生事件的结束时间
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("EventCode",$param) and $param["EventCode"] !== null) {
            $this->EventCode = $param["EventCode"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
