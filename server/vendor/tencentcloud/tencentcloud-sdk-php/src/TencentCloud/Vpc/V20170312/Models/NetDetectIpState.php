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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络探测目的IP的验证结果。
 *
 * @method string getDetectDestinationIp() 获取探测目的IPv4地址。
 * @method void setDetectDestinationIp(string $DetectDestinationIp) 设置探测目的IPv4地址。
 * @method integer getState() 获取探测结果。
0：成功；
-1：查询不到路由丢包；
-2：外出ACL丢包；
-3：IN ACL丢包；
-4：其他错误；
 * @method void setState(integer $State) 设置探测结果。
0：成功；
-1：查询不到路由丢包；
-2：外出ACL丢包；
-3：IN ACL丢包；
-4：其他错误；
 * @method integer getDelay() 获取时延，单位毫秒
 * @method void setDelay(integer $Delay) 设置时延，单位毫秒
 * @method integer getPacketLossRate() 获取丢包率
 * @method void setPacketLossRate(integer $PacketLossRate) 设置丢包率
 */
class NetDetectIpState extends AbstractModel
{
    /**
     * @var string 探测目的IPv4地址。
     */
    public $DetectDestinationIp;

    /**
     * @var integer 探测结果。
0：成功；
-1：查询不到路由丢包；
-2：外出ACL丢包；
-3：IN ACL丢包；
-4：其他错误；
     */
    public $State;

    /**
     * @var integer 时延，单位毫秒
     */
    public $Delay;

    /**
     * @var integer 丢包率
     */
    public $PacketLossRate;

    /**
     * @param string $DetectDestinationIp 探测目的IPv4地址。
     * @param integer $State 探测结果。
0：成功；
-1：查询不到路由丢包；
-2：外出ACL丢包；
-3：IN ACL丢包；
-4：其他错误；
     * @param integer $Delay 时延，单位毫秒
     * @param integer $PacketLossRate 丢包率
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
        if (array_key_exists("DetectDestinationIp",$param) and $param["DetectDestinationIp"] !== null) {
            $this->DetectDestinationIp = $param["DetectDestinationIp"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Delay",$param) and $param["Delay"] !== null) {
            $this->Delay = $param["Delay"];
        }

        if (array_key_exists("PacketLossRate",$param) and $param["PacketLossRate"] !== null) {
            $this->PacketLossRate = $param["PacketLossRate"];
        }
    }
}
