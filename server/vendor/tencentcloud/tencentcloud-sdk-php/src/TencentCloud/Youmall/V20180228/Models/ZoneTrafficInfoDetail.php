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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 门店区域客流详细信息
 *
 * @method integer getZoneId() 获取区域ID
 * @method void setZoneId(integer $ZoneId) 设置区域ID
 * @method string getZoneName() 获取区域名称
 * @method void setZoneName(string $ZoneName) 设置区域名称
 * @method integer getTrafficTotalCount() 获取客流量
 * @method void setTrafficTotalCount(integer $TrafficTotalCount) 设置客流量
 * @method integer getAvgStayTime() 获取平均停留时间
 * @method void setAvgStayTime(integer $AvgStayTime) 设置平均停留时间
 */
class ZoneTrafficInfoDetail extends AbstractModel
{
    /**
     * @var integer 区域ID
     */
    public $ZoneId;

    /**
     * @var string 区域名称
     */
    public $ZoneName;

    /**
     * @var integer 客流量
     */
    public $TrafficTotalCount;

    /**
     * @var integer 平均停留时间
     */
    public $AvgStayTime;

    /**
     * @param integer $ZoneId 区域ID
     * @param string $ZoneName 区域名称
     * @param integer $TrafficTotalCount 客流量
     * @param integer $AvgStayTime 平均停留时间
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

        if (array_key_exists("TrafficTotalCount",$param) and $param["TrafficTotalCount"] !== null) {
            $this->TrafficTotalCount = $param["TrafficTotalCount"];
        }

        if (array_key_exists("AvgStayTime",$param) and $param["AvgStayTime"] !== null) {
            $this->AvgStayTime = $param["AvgStayTime"];
        }
    }
}
