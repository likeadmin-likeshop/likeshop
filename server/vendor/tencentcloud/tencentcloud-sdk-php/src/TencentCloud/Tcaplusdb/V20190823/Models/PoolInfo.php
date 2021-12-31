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
 * center资源池中的机器信息
 *
 * @method integer getPoolUid() 获取唯一id
 * @method void setPoolUid(integer $PoolUid) 设置唯一id
 * @method integer getIpv6Enable() 获取是否支持ipv6
 * @method void setIpv6Enable(integer $Ipv6Enable) 设置是否支持ipv6
 * @method integer getAvailableAppCount() 获取剩余可用app
 * @method void setAvailableAppCount(integer $AvailableAppCount) 设置剩余可用app
 * @method array getServerList() 获取svr机器列表
 * @method void setServerList(array $ServerList) 设置svr机器列表
 * @method array getProxyList() 获取proxy机器列表
 * @method void setProxyList(array $ProxyList) 设置proxy机器列表
 */
class PoolInfo extends AbstractModel
{
    /**
     * @var integer 唯一id
     */
    public $PoolUid;

    /**
     * @var integer 是否支持ipv6
     */
    public $Ipv6Enable;

    /**
     * @var integer 剩余可用app
     */
    public $AvailableAppCount;

    /**
     * @var array svr机器列表
     */
    public $ServerList;

    /**
     * @var array proxy机器列表
     */
    public $ProxyList;

    /**
     * @param integer $PoolUid 唯一id
     * @param integer $Ipv6Enable 是否支持ipv6
     * @param integer $AvailableAppCount 剩余可用app
     * @param array $ServerList svr机器列表
     * @param array $ProxyList proxy机器列表
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
        if (array_key_exists("PoolUid",$param) and $param["PoolUid"] !== null) {
            $this->PoolUid = $param["PoolUid"];
        }

        if (array_key_exists("Ipv6Enable",$param) and $param["Ipv6Enable"] !== null) {
            $this->Ipv6Enable = $param["Ipv6Enable"];
        }

        if (array_key_exists("AvailableAppCount",$param) and $param["AvailableAppCount"] !== null) {
            $this->AvailableAppCount = $param["AvailableAppCount"];
        }

        if (array_key_exists("ServerList",$param) and $param["ServerList"] !== null) {
            $this->ServerList = [];
            foreach ($param["ServerList"] as $key => $value){
                $obj = new ServerMachineInfo();
                $obj->deserialize($value);
                array_push($this->ServerList, $obj);
            }
        }

        if (array_key_exists("ProxyList",$param) and $param["ProxyList"] !== null) {
            $this->ProxyList = [];
            foreach ($param["ProxyList"] as $key => $value){
                $obj = new ProxyMachineInfo();
                $obj->deserialize($value);
                array_push($this->ProxyList, $obj);
            }
        }
    }
}
