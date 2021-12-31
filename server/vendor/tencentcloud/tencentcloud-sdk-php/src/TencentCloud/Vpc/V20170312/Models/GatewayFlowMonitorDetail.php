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
 * 网关流量监控明细
 *
 * @method string getPrivateIpAddress() 获取来源`IP`。
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置来源`IP`。
 * @method integer getInPkg() 获取入包量。
 * @method void setInPkg(integer $InPkg) 设置入包量。
 * @method integer getOutPkg() 获取出包量。
 * @method void setOutPkg(integer $OutPkg) 设置出包量。
 * @method integer getInTraffic() 获取入流量，单位：`Byte`。
 * @method void setInTraffic(integer $InTraffic) 设置入流量，单位：`Byte`。
 * @method integer getOutTraffic() 获取出流量，单位：`Byte`。
 * @method void setOutTraffic(integer $OutTraffic) 设置出流量，单位：`Byte`。
 */
class GatewayFlowMonitorDetail extends AbstractModel
{
    /**
     * @var string 来源`IP`。
     */
    public $PrivateIpAddress;

    /**
     * @var integer 入包量。
     */
    public $InPkg;

    /**
     * @var integer 出包量。
     */
    public $OutPkg;

    /**
     * @var integer 入流量，单位：`Byte`。
     */
    public $InTraffic;

    /**
     * @var integer 出流量，单位：`Byte`。
     */
    public $OutTraffic;

    /**
     * @param string $PrivateIpAddress 来源`IP`。
     * @param integer $InPkg 入包量。
     * @param integer $OutPkg 出包量。
     * @param integer $InTraffic 入流量，单位：`Byte`。
     * @param integer $OutTraffic 出流量，单位：`Byte`。
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
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("InPkg",$param) and $param["InPkg"] !== null) {
            $this->InPkg = $param["InPkg"];
        }

        if (array_key_exists("OutPkg",$param) and $param["OutPkg"] !== null) {
            $this->OutPkg = $param["OutPkg"];
        }

        if (array_key_exists("InTraffic",$param) and $param["InTraffic"] !== null) {
            $this->InTraffic = $param["InTraffic"];
        }

        if (array_key_exists("OutTraffic",$param) and $param["OutTraffic"] !== null) {
            $this->OutTraffic = $param["OutTraffic"];
        }
    }
}
