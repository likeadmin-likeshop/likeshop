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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备机信息
 *
 * @method integer getVport() 获取端口号
 * @method void setVport(integer $Vport) 设置端口号
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method string getVip() 获取虚拟 IP 信息
 * @method void setVip(string $Vip) 设置虚拟 IP 信息
 * @method string getZone() 获取可用区信息
 * @method void setZone(string $Zone) 设置可用区信息
 */
class SlaveInstanceInfo extends AbstractModel
{
    /**
     * @var integer 端口号
     */
    public $Vport;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var string 虚拟 IP 信息
     */
    public $Vip;

    /**
     * @var string 可用区信息
     */
    public $Zone;

    /**
     * @param integer $Vport 端口号
     * @param string $Region 地域信息
     * @param string $Vip 虚拟 IP 信息
     * @param string $Zone 可用区信息
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
        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
