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
 * 客流停留统计子结构
 *
 * @method integer getZoneId() 获取区域id
 * @method void setZoneId(integer $ZoneId) 设置区域id
 * @method string getZoneName() 获取区域名称
 * @method void setZoneName(string $ZoneName) 设置区域名称
 * @method integer getFlowCount() 获取人流量
 * @method void setFlowCount(integer $FlowCount) 设置人流量
 * @method integer getAvrStayTime() 获取平均停留时长
 * @method void setAvrStayTime(integer $AvrStayTime) 设置平均停留时长
 */
class ZoneFlowAndAvrStayTime extends AbstractModel
{
    /**
     * @var integer 区域id
     */
    public $ZoneId;

    /**
     * @var string 区域名称
     */
    public $ZoneName;

    /**
     * @var integer 人流量
     */
    public $FlowCount;

    /**
     * @var integer 平均停留时长
     */
    public $AvrStayTime;

    /**
     * @param integer $ZoneId 区域id
     * @param string $ZoneName 区域名称
     * @param integer $FlowCount 人流量
     * @param integer $AvrStayTime 平均停留时长
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

        if (array_key_exists("FlowCount",$param) and $param["FlowCount"] !== null) {
            $this->FlowCount = $param["FlowCount"];
        }

        if (array_key_exists("AvrStayTime",$param) and $param["AvrStayTime"] !== null) {
            $this->AvrStayTime = $param["AvrStayTime"];
        }
    }
}
