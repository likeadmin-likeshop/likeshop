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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TcaplusDB服务地域信息详情
 *
 * @method string getRegionName() 获取地域Ap-Code
 * @method void setRegionName(string $RegionName) 设置地域Ap-Code
 * @method string getRegionAbbr() 获取地域缩写
 * @method void setRegionAbbr(string $RegionAbbr) 设置地域缩写
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method integer getIpv6Enable() 获取是否支持ipv6，0:不支持，1:支持
 * @method void setIpv6Enable(integer $Ipv6Enable) 设置是否支持ipv6，0:不支持，1:支持
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string 地域Ap-Code
     */
    public $RegionName;

    /**
     * @var string 地域缩写
     */
    public $RegionAbbr;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var integer 是否支持ipv6，0:不支持，1:支持
     */
    public $Ipv6Enable;

    /**
     * @param string $RegionName 地域Ap-Code
     * @param string $RegionAbbr 地域缩写
     * @param integer $RegionId 地域ID
     * @param integer $Ipv6Enable 是否支持ipv6，0:不支持，1:支持
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
        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionAbbr",$param) and $param["RegionAbbr"] !== null) {
            $this->RegionAbbr = $param["RegionAbbr"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Ipv6Enable",$param) and $param["Ipv6Enable"] !== null) {
            $this->Ipv6Enable = $param["Ipv6Enable"];
        }
    }
}
