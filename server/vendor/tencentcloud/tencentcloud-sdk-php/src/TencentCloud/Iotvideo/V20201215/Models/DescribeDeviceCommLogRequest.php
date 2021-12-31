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
 * DescribeDeviceCommLog请求参数结构体
 *
 * @method integer getMinTime() 获取开始时间
 * @method void setMinTime(integer $MinTime) 设置开始时间
 * @method integer getMaxTime() 获取结束时间
 * @method void setMaxTime(integer $MaxTime) 设置结束时间
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method integer getLimit() 获取返回条数
 * @method void setLimit(integer $Limit) 设置返回条数
 * @method string getContext() 获取检索上下文
 * @method void setContext(string $Context) 设置检索上下文
 * @method string getType() 获取类型：shadow 下行，device 上行
 * @method void setType(string $Type) 设置类型：shadow 下行，device 上行
 */
class DescribeDeviceCommLogRequest extends AbstractModel
{
    /**
     * @var integer 开始时间
     */
    public $MinTime;

    /**
     * @var integer 结束时间
     */
    public $MaxTime;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var integer 返回条数
     */
    public $Limit;

    /**
     * @var string 检索上下文
     */
    public $Context;

    /**
     * @var string 类型：shadow 下行，device 上行
     */
    public $Type;

    /**
     * @param integer $MinTime 开始时间
     * @param integer $MaxTime 结束时间
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param integer $Limit 返回条数
     * @param string $Context 检索上下文
     * @param string $Type 类型：shadow 下行，device 上行
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
        if (array_key_exists("MinTime",$param) and $param["MinTime"] !== null) {
            $this->MinTime = $param["MinTime"];
        }

        if (array_key_exists("MaxTime",$param) and $param["MaxTime"] !== null) {
            $this->MaxTime = $param["MaxTime"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
