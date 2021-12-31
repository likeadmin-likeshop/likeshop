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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述可用区的编码和状态信息
 *
 * @method string getZone() 获取该可用区的英文名称
 * @method void setZone(string $Zone) 设置该可用区的英文名称
 * @method string getZoneName() 获取该可用区的中文名称
 * @method void setZoneName(string $ZoneName) 设置该可用区的中文名称
 * @method integer getZoneId() 获取该可用区对应的数字编号
 * @method void setZoneId(integer $ZoneId) 设置该可用区对应的数字编号
 * @method string getZoneState() 获取可用状态，UNAVAILABLE表示不可用，AVAILABLE表示可用
 * @method void setZoneState(string $ZoneState) 设置可用状态，UNAVAILABLE表示不可用，AVAILABLE表示可用
 * @method integer getZoneSupportIpv6() 获取该可用区是否支持Ipv6
 * @method void setZoneSupportIpv6(integer $ZoneSupportIpv6) 设置该可用区是否支持Ipv6
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string 该可用区的英文名称
     */
    public $Zone;

    /**
     * @var string 该可用区的中文名称
     */
    public $ZoneName;

    /**
     * @var integer 该可用区对应的数字编号
     */
    public $ZoneId;

    /**
     * @var string 可用状态，UNAVAILABLE表示不可用，AVAILABLE表示可用
     */
    public $ZoneState;

    /**
     * @var integer 该可用区是否支持Ipv6
     */
    public $ZoneSupportIpv6;

    /**
     * @param string $Zone 该可用区的英文名称
     * @param string $ZoneName 该可用区的中文名称
     * @param integer $ZoneId 该可用区对应的数字编号
     * @param string $ZoneState 可用状态，UNAVAILABLE表示不可用，AVAILABLE表示可用
     * @param integer $ZoneSupportIpv6 该可用区是否支持Ipv6
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneState",$param) and $param["ZoneState"] !== null) {
            $this->ZoneState = $param["ZoneState"];
        }

        if (array_key_exists("ZoneSupportIpv6",$param) and $param["ZoneSupportIpv6"] !== null) {
            $this->ZoneSupportIpv6 = $param["ZoneSupportIpv6"];
        }
    }
}
