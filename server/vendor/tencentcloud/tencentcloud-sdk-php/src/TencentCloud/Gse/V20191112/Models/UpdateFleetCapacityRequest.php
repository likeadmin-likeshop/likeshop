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
 * UpdateFleetCapacity请求参数结构体
 *
 * @method string getFleetId() 获取服务器舰队ID
 * @method void setFleetId(string $FleetId) 设置服务器舰队ID
 * @method integer getDesiredInstances() 获取期望的服务器实例数
 * @method void setDesiredInstances(integer $DesiredInstances) 设置期望的服务器实例数
 * @method integer getMinSize() 获取服务器实例数最小限制，最小值0，最大值不超过最高配额查看各地区最高配额减1
 * @method void setMinSize(integer $MinSize) 设置服务器实例数最小限制，最小值0，最大值不超过最高配额查看各地区最高配额减1
 * @method integer getMaxSize() 获取服务器实例数最大限制，最小值1，最大值不超过最高配额查看各地区最高配额
 * @method void setMaxSize(integer $MaxSize) 设置服务器实例数最大限制，最小值1，最大值不超过最高配额查看各地区最高配额
 * @method integer getScalingInterval() 获取服务器伸缩容间隔，单位分钟，最小值3，最大值30，默认值10
 * @method void setScalingInterval(integer $ScalingInterval) 设置服务器伸缩容间隔，单位分钟，最小值3，最大值30，默认值10
 */
class UpdateFleetCapacityRequest extends AbstractModel
{
    /**
     * @var string 服务器舰队ID
     */
    public $FleetId;

    /**
     * @var integer 期望的服务器实例数
     */
    public $DesiredInstances;

    /**
     * @var integer 服务器实例数最小限制，最小值0，最大值不超过最高配额查看各地区最高配额减1
     */
    public $MinSize;

    /**
     * @var integer 服务器实例数最大限制，最小值1，最大值不超过最高配额查看各地区最高配额
     */
    public $MaxSize;

    /**
     * @var integer 服务器伸缩容间隔，单位分钟，最小值3，最大值30，默认值10
     */
    public $ScalingInterval;

    /**
     * @param string $FleetId 服务器舰队ID
     * @param integer $DesiredInstances 期望的服务器实例数
     * @param integer $MinSize 服务器实例数最小限制，最小值0，最大值不超过最高配额查看各地区最高配额减1
     * @param integer $MaxSize 服务器实例数最大限制，最小值1，最大值不超过最高配额查看各地区最高配额
     * @param integer $ScalingInterval 服务器伸缩容间隔，单位分钟，最小值3，最大值30，默认值10
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

        if (array_key_exists("DesiredInstances",$param) and $param["DesiredInstances"] !== null) {
            $this->DesiredInstances = $param["DesiredInstances"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("ScalingInterval",$param) and $param["ScalingInterval"] !== null) {
            $this->ScalingInterval = $param["ScalingInterval"];
        }
    }
}
