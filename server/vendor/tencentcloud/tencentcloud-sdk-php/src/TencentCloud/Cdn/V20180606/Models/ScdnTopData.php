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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCDN攻击数据Top展示
 *
 * @method string getTime() 获取时间
 * @method void setTime(string $Time) 设置时间
 * @method integer getValue() 获取数值
 * @method void setValue(integer $Value) 设置数值
 * @method string getIsp() 获取运营商
 * @method void setIsp(string $Isp) 设置运营商
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method string getDistrict() 获取区域
 * @method void setDistrict(string $District) 设置区域
 */
class ScdnTopData extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Time;

    /**
     * @var integer 数值
     */
    public $Value;

    /**
     * @var string 运营商
     */
    public $Isp;

    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var string 区域
     */
    public $District;

    /**
     * @param string $Time 时间
     * @param integer $Value 数值
     * @param string $Isp 运营商
     * @param string $Ip IP地址
     * @param string $District 区域
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }
    }
}
