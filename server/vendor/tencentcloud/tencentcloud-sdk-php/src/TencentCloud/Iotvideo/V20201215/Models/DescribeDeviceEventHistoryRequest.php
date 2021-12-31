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
namespace TencentCloud\Iotvideo\V20201215\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceEventHistory请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getType() 获取搜索的事件类型：alert 表示告警，fault 表示故障，info 表示信息，为空则表示查询上述所有类型事件
 * @method void setType(string $Type) 设置搜索的事件类型：alert 表示告警，fault 表示故障，info 表示信息，为空则表示查询上述所有类型事件
 * @method integer getStartTime() 获取起始时间（Unix 时间戳，秒级）, 为0 表示 当前时间 - 24h
 * @method void setStartTime(integer $StartTime) 设置起始时间（Unix 时间戳，秒级）, 为0 表示 当前时间 - 24h
 * @method integer getEndTime() 获取结束时间（Unix 时间戳，秒级）, 为0 表示当前时间
 * @method void setEndTime(integer $EndTime) 设置结束时间（Unix 时间戳，秒级）, 为0 表示当前时间
 * @method string getContext() 获取搜索上下文, 用作查询游标
 * @method void setContext(string $Context) 设置搜索上下文, 用作查询游标
 * @method integer getSize() 获取单次获取的历史数据项目的最大数量, 缺省10
 * @method void setSize(integer $Size) 设置单次获取的历史数据项目的最大数量, 缺省10
 * @method string getEventId() 获取事件标识符，可以用来指定查询特定的事件，如果不指定，则查询所有事件。
 * @method void setEventId(string $EventId) 设置事件标识符，可以用来指定查询特定的事件，如果不指定，则查询所有事件。
 */
class DescribeDeviceEventHistoryRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 搜索的事件类型：alert 表示告警，fault 表示故障，info 表示信息，为空则表示查询上述所有类型事件
     */
    public $Type;

    /**
     * @var integer 起始时间（Unix 时间戳，秒级）, 为0 表示 当前时间 - 24h
     */
    public $StartTime;

    /**
     * @var integer 结束时间（Unix 时间戳，秒级）, 为0 表示当前时间
     */
    public $EndTime;

    /**
     * @var string 搜索上下文, 用作查询游标
     */
    public $Context;

    /**
     * @var integer 单次获取的历史数据项目的最大数量, 缺省10
     */
    public $Size;

    /**
     * @var string 事件标识符，可以用来指定查询特定的事件，如果不指定，则查询所有事件。
     */
    public $EventId;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $Type 搜索的事件类型：alert 表示告警，fault 表示故障，info 表示信息，为空则表示查询上述所有类型事件
     * @param integer $StartTime 起始时间（Unix 时间戳，秒级）, 为0 表示 当前时间 - 24h
     * @param integer $EndTime 结束时间（Unix 时间戳，秒级）, 为0 表示当前时间
     * @param string $Context 搜索上下文, 用作查询游标
     * @param integer $Size 单次获取的历史数据项目的最大数量, 缺省10
     * @param string $EventId 事件标识符，可以用来指定查询特定的事件，如果不指定，则查询所有事件。
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
