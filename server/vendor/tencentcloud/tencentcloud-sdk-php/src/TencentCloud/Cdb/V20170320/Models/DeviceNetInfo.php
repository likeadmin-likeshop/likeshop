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
 * 实例所在物理机网络监控信息
 *
 * @method array getConn() 获取tcp连接数
 * @method void setConn(array $Conn) 设置tcp连接数
 * @method array getPackageIn() 获取网卡入包量，单位：个/秒
 * @method void setPackageIn(array $PackageIn) 设置网卡入包量，单位：个/秒
 * @method array getPackageOut() 获取网卡出包量，单位：个/秒
 * @method void setPackageOut(array $PackageOut) 设置网卡出包量，单位：个/秒
 * @method array getFlowIn() 获取入流量，单位：kbps
 * @method void setFlowIn(array $FlowIn) 设置入流量，单位：kbps
 * @method array getFlowOut() 获取出流量，单位：kbps
 * @method void setFlowOut(array $FlowOut) 设置出流量，单位：kbps
 */
class DeviceNetInfo extends AbstractModel
{
    /**
     * @var array tcp连接数
     */
    public $Conn;

    /**
     * @var array 网卡入包量，单位：个/秒
     */
    public $PackageIn;

    /**
     * @var array 网卡出包量，单位：个/秒
     */
    public $PackageOut;

    /**
     * @var array 入流量，单位：kbps
     */
    public $FlowIn;

    /**
     * @var array 出流量，单位：kbps
     */
    public $FlowOut;

    /**
     * @param array $Conn tcp连接数
     * @param array $PackageIn 网卡入包量，单位：个/秒
     * @param array $PackageOut 网卡出包量，单位：个/秒
     * @param array $FlowIn 入流量，单位：kbps
     * @param array $FlowOut 出流量，单位：kbps
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
        if (array_key_exists("Conn",$param) and $param["Conn"] !== null) {
            $this->Conn = $param["Conn"];
        }

        if (array_key_exists("PackageIn",$param) and $param["PackageIn"] !== null) {
            $this->PackageIn = $param["PackageIn"];
        }

        if (array_key_exists("PackageOut",$param) and $param["PackageOut"] !== null) {
            $this->PackageOut = $param["PackageOut"];
        }

        if (array_key_exists("FlowIn",$param) and $param["FlowIn"] !== null) {
            $this->FlowIn = $param["FlowIn"];
        }

        if (array_key_exists("FlowOut",$param) and $param["FlowOut"] !== null) {
            $this->FlowOut = $param["FlowOut"];
        }
    }
}
