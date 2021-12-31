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
 * ModifyDDoSPolicy请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method string getPolicyId() 获取策略ID
 * @method void setPolicyId(string $PolicyId) 设置策略ID
 * @method array getDropOptions() 获取协议禁用，必须填写且数组长度必须为1
 * @method void setDropOptions(array $DropOptions) 设置协议禁用，必须填写且数组长度必须为1
 * @method array getPortLimits() 获取端口禁用，当没有禁用端口时填空数组
 * @method void setPortLimits(array $PortLimits) 设置端口禁用，当没有禁用端口时填空数组
 * @method array getIpAllowDenys() 获取IP黑白名单，当没有IP黑白名单时填空数组
 * @method void setIpAllowDenys(array $IpAllowDenys) 设置IP黑白名单，当没有IP黑白名单时填空数组
 * @method array getPacketFilters() 获取报文过滤，当没有报文过滤时填空数组
 * @method void setPacketFilters(array $PacketFilters) 设置报文过滤，当没有报文过滤时填空数组
 * @method array getWaterPrint() 获取水印策略参数，当没有启用水印功能时填空数组，最多只能传一条水印策略（即数组大小不超过1）
 * @method void setWaterPrint(array $WaterPrint) 设置水印策略参数，当没有启用水印功能时填空数组，最多只能传一条水印策略（即数组大小不超过1）
 */
class ModifyDDoSPolicyRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string 策略ID
     */
    public $PolicyId;

    /**
     * @var array 协议禁用，必须填写且数组长度必须为1
     */
    public $DropOptions;

    /**
     * @var array 端口禁用，当没有禁用端口时填空数组
     */
    public $PortLimits;

    /**
     * @var array IP黑白名单，当没有IP黑白名单时填空数组
     */
    public $IpAllowDenys;

    /**
     * @var array 报文过滤，当没有报文过滤时填空数组
     */
    public $PacketFilters;

    /**
     * @var array 水印策略参数，当没有启用水印功能时填空数组，最多只能传一条水印策略（即数组大小不超过1）
     */
    public $WaterPrint;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     * @param string $PolicyId 策略ID
     * @param array $DropOptions 协议禁用，必须填写且数组长度必须为1
     * @param array $PortLimits 端口禁用，当没有禁用端口时填空数组
     * @param array $IpAllowDenys IP黑白名单，当没有IP黑白名单时填空数组
     * @param array $PacketFilters 报文过滤，当没有报文过滤时填空数组
     * @param array $WaterPrint 水印策略参数，当没有启用水印功能时填空数组，最多只能传一条水印策略（即数组大小不超过1）
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("DropOptions",$param) and $param["DropOptions"] !== null) {
            $this->DropOptions = [];
            foreach ($param["DropOptions"] as $key => $value){
                $obj = new DDoSPolicyDropOption();
                $obj->deserialize($value);
                array_push($this->DropOptions, $obj);
            }
        }

        if (array_key_exists("PortLimits",$param) and $param["PortLimits"] !== null) {
            $this->PortLimits = [];
            foreach ($param["PortLimits"] as $key => $value){
                $obj = new DDoSPolicyPortLimit();
                $obj->deserialize($value);
                array_push($this->PortLimits, $obj);
            }
        }

        if (array_key_exists("IpAllowDenys",$param) and $param["IpAllowDenys"] !== null) {
            $this->IpAllowDenys = [];
            foreach ($param["IpAllowDenys"] as $key => $value){
                $obj = new IpBlackWhite();
                $obj->deserialize($value);
                array_push($this->IpAllowDenys, $obj);
            }
        }

        if (array_key_exists("PacketFilters",$param) and $param["PacketFilters"] !== null) {
            $this->PacketFilters = [];
            foreach ($param["PacketFilters"] as $key => $value){
                $obj = new DDoSPolicyPacketFilter();
                $obj->deserialize($value);
                array_push($this->PacketFilters, $obj);
            }
        }

        if (array_key_exists("WaterPrint",$param) and $param["WaterPrint"] !== null) {
            $this->WaterPrint = [];
            foreach ($param["WaterPrint"] as $key => $value){
                $obj = new WaterPrintPolicy();
                $obj->deserialize($value);
                array_push($this->WaterPrint, $obj);
            }
        }
    }
}
