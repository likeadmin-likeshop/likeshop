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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenDBExtranetAccess请求参数结构体
 *
 * @method string getInstanceId() 获取待开放外网访问的实例ID。形如：dcdbt-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置待开放外网访问的实例ID。形如：dcdbt-ow728lmc。
 * @method integer getIpv6Flag() 获取是否IPv6，默认0
 * @method void setIpv6Flag(integer $Ipv6Flag) 设置是否IPv6，默认0
 */
class OpenDBExtranetAccessRequest extends AbstractModel
{
    /**
     * @var string 待开放外网访问的实例ID。形如：dcdbt-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var integer 是否IPv6，默认0
     */
    public $Ipv6Flag;

    /**
     * @param string $InstanceId 待开放外网访问的实例ID。形如：dcdbt-ow728lmc。
     * @param integer $Ipv6Flag 是否IPv6，默认0
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }
    }
}
