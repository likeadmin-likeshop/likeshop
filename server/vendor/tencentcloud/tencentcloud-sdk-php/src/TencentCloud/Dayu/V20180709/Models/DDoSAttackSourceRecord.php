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
 * 攻击源信息
 *
 * @method string getSrcIp() 获取攻击源ip
 * @method void setSrcIp(string $SrcIp) 设置攻击源ip
 * @method string getProvince() 获取省份（国内有效，不包含港澳台）
 * @method void setProvince(string $Province) 设置省份（国内有效，不包含港澳台）
 * @method string getNation() 获取国家
 * @method void setNation(string $Nation) 设置国家
 * @method integer getPacketSum() 获取累计攻击包量
 * @method void setPacketSum(integer $PacketSum) 设置累计攻击包量
 * @method integer getPacketLen() 获取累计攻击流量
 * @method void setPacketLen(integer $PacketLen) 设置累计攻击流量
 */
class DDoSAttackSourceRecord extends AbstractModel
{
    /**
     * @var string 攻击源ip
     */
    public $SrcIp;

    /**
     * @var string 省份（国内有效，不包含港澳台）
     */
    public $Province;

    /**
     * @var string 国家
     */
    public $Nation;

    /**
     * @var integer 累计攻击包量
     */
    public $PacketSum;

    /**
     * @var integer 累计攻击流量
     */
    public $PacketLen;

    /**
     * @param string $SrcIp 攻击源ip
     * @param string $Province 省份（国内有效，不包含港澳台）
     * @param string $Nation 国家
     * @param integer $PacketSum 累计攻击包量
     * @param integer $PacketLen 累计攻击流量
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
        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("PacketSum",$param) and $param["PacketSum"] !== null) {
            $this->PacketSum = $param["PacketSum"];
        }

        if (array_key_exists("PacketLen",$param) and $param["PacketLen"] !== null) {
            $this->PacketLen = $param["PacketLen"];
        }
    }
}
