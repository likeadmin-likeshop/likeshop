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
 * DescribeDeviceActionHistory请求参数结构体
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getMinTime() 获取开始范围的 unix 毫秒时间戳
 * @method void setMinTime(integer $MinTime) 设置开始范围的 unix 毫秒时间戳
 * @method integer getMaxTime() 获取结束范围的 unix 毫秒时间戳
 * @method void setMaxTime(integer $MaxTime) 设置结束范围的 unix 毫秒时间戳
 * @method string getActionId() 获取动作Id
 * @method void setActionId(string $ActionId) 设置动作Id
 * @method integer getLimit() 获取查询条数
 * @method void setLimit(integer $Limit) 设置查询条数
 * @method string getContext() 获取游标，标识查询位置。
 * @method void setContext(string $Context) 设置游标，标识查询位置。
 */
class DescribeDeviceActionHistoryRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 开始范围的 unix 毫秒时间戳
     */
    public $MinTime;

    /**
     * @var integer 结束范围的 unix 毫秒时间戳
     */
    public $MaxTime;

    /**
     * @var string 动作Id
     */
    public $ActionId;

    /**
     * @var integer 查询条数
     */
    public $Limit;

    /**
     * @var string 游标，标识查询位置。
     */
    public $Context;

    /**
     * @param string $ProductId 产品Id
     * @param string $DeviceName 设备名称
     * @param integer $MinTime 开始范围的 unix 毫秒时间戳
     * @param integer $MaxTime 结束范围的 unix 毫秒时间戳
     * @param string $ActionId 动作Id
     * @param integer $Limit 查询条数
     * @param string $Context 游标，标识查询位置。
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

        if (array_key_exists("MinTime",$param) and $param["MinTime"] !== null) {
            $this->MinTime = $param["MinTime"];
        }

        if (array_key_exists("MaxTime",$param) and $param["MaxTime"] !== null) {
            $this->MaxTime = $param["MaxTime"];
        }

        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }
    }
}
