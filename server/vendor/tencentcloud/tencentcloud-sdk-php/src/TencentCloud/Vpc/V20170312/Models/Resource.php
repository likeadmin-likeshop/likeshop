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
 * 描述带宽包资源信息的结构
 *
 * @method string getResourceType() 获取带宽包资源类型，包括'Address'和'LoadBalance'
 * @method void setResourceType(string $ResourceType) 设置带宽包资源类型，包括'Address'和'LoadBalance'
 * @method string getResourceId() 获取带宽包资源Id，形如'eip-xxxx', 'lb-xxxx'
 * @method void setResourceId(string $ResourceId) 设置带宽包资源Id，形如'eip-xxxx', 'lb-xxxx'
 * @method string getAddressIp() 获取带宽包资源Ip
 * @method void setAddressIp(string $AddressIp) 设置带宽包资源Ip
 */
class Resource extends AbstractModel
{
    /**
     * @var string 带宽包资源类型，包括'Address'和'LoadBalance'
     */
    public $ResourceType;

    /**
     * @var string 带宽包资源Id，形如'eip-xxxx', 'lb-xxxx'
     */
    public $ResourceId;

    /**
     * @var string 带宽包资源Ip
     */
    public $AddressIp;

    /**
     * @param string $ResourceType 带宽包资源类型，包括'Address'和'LoadBalance'
     * @param string $ResourceId 带宽包资源Id，形如'eip-xxxx', 'lb-xxxx'
     * @param string $AddressIp 带宽包资源Ip
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AddressIp",$param) and $param["AddressIp"] !== null) {
            $this->AddressIp = $param["AddressIp"];
        }
    }
}
