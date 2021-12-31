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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改负载均衡计费方式的监听器信息。
 *
 * @method string getListenerId() 获取监听器ID。
 * @method void setListenerId(string $ListenerId) 设置监听器ID。
 * @method string getProtocol() 获取协议类型。
 * @method void setProtocol(string $Protocol) 设置协议类型。
 * @method integer getBandwidth() 获取带宽。
 * @method void setBandwidth(integer $Bandwidth) 设置带宽。
 */
class ModifyLoadBalancerChargeModeListener extends AbstractModel
{
    /**
     * @var string 监听器ID。
     */
    public $ListenerId;

    /**
     * @var string 协议类型。
     */
    public $Protocol;

    /**
     * @var integer 带宽。
     */
    public $Bandwidth;

    /**
     * @param string $ListenerId 监听器ID。
     * @param string $Protocol 协议类型。
     * @param integer $Bandwidth 带宽。
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }
    }
}
