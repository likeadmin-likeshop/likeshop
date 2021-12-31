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
 * 节点 IP 信息
 *
 * @method string getIp() 获取节点 IP
 * @method void setIp(string $Ip) 设置节点 IP
 * @method string getDistrict() 获取节点所属区域
 * @method void setDistrict(string $District) 设置节点所属区域
 * @method string getIsp() 获取节点所属运营商
 * @method void setIsp(string $Isp) 设置节点所属运营商
 * @method string getCity() 获取节点所在城市
 * @method void setCity(string $City) 设置节点所在城市
 * @method string getStatus() 获取节点状态
online：上线状态，正常调度服务中
offline：下线状态
 * @method void setStatus(string $Status) 设置节点状态
online：上线状态，正常调度服务中
offline：下线状态
 */
class IpStatus extends AbstractModel
{
    /**
     * @var string 节点 IP
     */
    public $Ip;

    /**
     * @var string 节点所属区域
     */
    public $District;

    /**
     * @var string 节点所属运营商
     */
    public $Isp;

    /**
     * @var string 节点所在城市
     */
    public $City;

    /**
     * @var string 节点状态
online：上线状态，正常调度服务中
offline：下线状态
     */
    public $Status;

    /**
     * @param string $Ip 节点 IP
     * @param string $District 节点所属区域
     * @param string $Isp 节点所属运营商
     * @param string $City 节点所在城市
     * @param string $Status 节点状态
online：上线状态，正常调度服务中
offline：下线状态
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
