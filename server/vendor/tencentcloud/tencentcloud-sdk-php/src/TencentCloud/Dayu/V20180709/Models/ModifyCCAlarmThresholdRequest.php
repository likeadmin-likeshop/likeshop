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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCCAlarmThreshold请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（shield表示棋牌；bgpip表示高防IP；bgp表示高防包；bgp-multip表示多ip高防包；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（shield表示棋牌；bgpip表示高防IP；bgp表示高防包；bgp-multip表示多ip高防包；net表示高防IP专业版）
 * @method string getRsId() 获取资源ID,字符串类型
 * @method void setRsId(string $RsId) 设置资源ID,字符串类型
 * @method integer getAlarmThreshold() 获取告警阈值，大于0（目前排定的值），后台设置默认值为1000
 * @method void setAlarmThreshold(integer $AlarmThreshold) 设置告警阈值，大于0（目前排定的值），后台设置默认值为1000
 * @method array getIpList() 获取资源关联的IP列表，高防包未绑定时，传空数组，高防IP专业版传多个IP的数据
 * @method void setIpList(array $IpList) 设置资源关联的IP列表，高防包未绑定时，传空数组，高防IP专业版传多个IP的数据
 */
class ModifyCCAlarmThresholdRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（shield表示棋牌；bgpip表示高防IP；bgp表示高防包；bgp-multip表示多ip高防包；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 资源ID,字符串类型
     */
    public $RsId;

    /**
     * @var integer 告警阈值，大于0（目前排定的值），后台设置默认值为1000
     */
    public $AlarmThreshold;

    /**
     * @var array 资源关联的IP列表，高防包未绑定时，传空数组，高防IP专业版传多个IP的数据
     */
    public $IpList;

    /**
     * @param string $Business 大禹子产品代号（shield表示棋牌；bgpip表示高防IP；bgp表示高防包；bgp-multip表示多ip高防包；net表示高防IP专业版）
     * @param string $RsId 资源ID,字符串类型
     * @param integer $AlarmThreshold 告警阈值，大于0（目前排定的值），后台设置默认值为1000
     * @param array $IpList 资源关联的IP列表，高防包未绑定时，传空数组，高防IP专业版传多个IP的数据
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("RsId",$param) and $param["RsId"] !== null) {
            $this->RsId = $param["RsId"];
        }

        if (array_key_exists("AlarmThreshold",$param) and $param["AlarmThreshold"] !== null) {
            $this->AlarmThreshold = $param["AlarmThreshold"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
