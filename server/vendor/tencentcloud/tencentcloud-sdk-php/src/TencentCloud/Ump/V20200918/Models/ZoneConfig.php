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
namespace TencentCloud\Ump\V20200918\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点位包含绑定、调试信息
 *
 * @method integer getZoneId() 获取点位ID
 * @method void setZoneId(integer $ZoneId) 设置点位ID
 * @method string getZoneName() 获取点位名称
 * @method void setZoneName(string $ZoneName) 设置点位名称
 * @method integer getZoneType() 获取点位类型:
1: 场门
3: 层门
5: 特殊区域
7: 门店
8: 补位
10: 开放式门店
11: 品类区
12: 公共区
 * @method void setZoneType(integer $ZoneType) 设置点位类型:
1: 场门
3: 层门
5: 特殊区域
7: 门店
8: 补位
10: 开放式门店
11: 品类区
12: 公共区
 * @method string getBunkCodes() 获取铺位编码
 * @method void setBunkCodes(string $BunkCodes) 设置铺位编码
 * @method string getFloorName() 获取楼层名称
 * @method void setFloorName(string $FloorName) 设置楼层名称
 * @method integer getFloorId() 获取楼层ID
 * @method void setFloorId(integer $FloorId) 设置楼层ID
 * @method integer getBindNum() 获取绑定数
 * @method void setBindNum(integer $BindNum) 设置绑定数
 * @method integer getDebugNum() 获取调试数
 * @method void setDebugNum(integer $DebugNum) 设置调试数
 * @method integer getState() 获取下发状态:
1: 不可下发
2: 可下发
3: 已下发
 * @method void setState(integer $State) 设置下发状态:
1: 不可下发
2: 可下发
3: 已下发
 */
class ZoneConfig extends AbstractModel
{
    /**
     * @var integer 点位ID
     */
    public $ZoneId;

    /**
     * @var string 点位名称
     */
    public $ZoneName;

    /**
     * @var integer 点位类型:
1: 场门
3: 层门
5: 特殊区域
7: 门店
8: 补位
10: 开放式门店
11: 品类区
12: 公共区
     */
    public $ZoneType;

    /**
     * @var string 铺位编码
     */
    public $BunkCodes;

    /**
     * @var string 楼层名称
     */
    public $FloorName;

    /**
     * @var integer 楼层ID
     */
    public $FloorId;

    /**
     * @var integer 绑定数
     */
    public $BindNum;

    /**
     * @var integer 调试数
     */
    public $DebugNum;

    /**
     * @var integer 下发状态:
1: 不可下发
2: 可下发
3: 已下发
     */
    public $State;

    /**
     * @param integer $ZoneId 点位ID
     * @param string $ZoneName 点位名称
     * @param integer $ZoneType 点位类型:
1: 场门
3: 层门
5: 特殊区域
7: 门店
8: 补位
10: 开放式门店
11: 品类区
12: 公共区
     * @param string $BunkCodes 铺位编码
     * @param string $FloorName 楼层名称
     * @param integer $FloorId 楼层ID
     * @param integer $BindNum 绑定数
     * @param integer $DebugNum 调试数
     * @param integer $State 下发状态:
1: 不可下发
2: 可下发
3: 已下发
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneType",$param) and $param["ZoneType"] !== null) {
            $this->ZoneType = $param["ZoneType"];
        }

        if (array_key_exists("BunkCodes",$param) and $param["BunkCodes"] !== null) {
            $this->BunkCodes = $param["BunkCodes"];
        }

        if (array_key_exists("FloorName",$param) and $param["FloorName"] !== null) {
            $this->FloorName = $param["FloorName"];
        }

        if (array_key_exists("FloorId",$param) and $param["FloorId"] !== null) {
            $this->FloorId = $param["FloorId"];
        }

        if (array_key_exists("BindNum",$param) and $param["BindNum"] !== null) {
            $this->BindNum = $param["BindNum"];
        }

        if (array_key_exists("DebugNum",$param) and $param["DebugNum"] !== null) {
            $this->DebugNum = $param["DebugNum"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
