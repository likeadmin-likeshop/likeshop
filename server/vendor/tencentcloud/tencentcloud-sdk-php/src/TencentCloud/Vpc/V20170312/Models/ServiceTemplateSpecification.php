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
 * 协议端口模版
 *
 * @method string getServiceId() 获取协议端口ID，例如：ppm-f5n1f8da。
 * @method void setServiceId(string $ServiceId) 设置协议端口ID，例如：ppm-f5n1f8da。
 * @method string getServiceGroupId() 获取协议端口组ID，例如：ppmg-f5n1f8da。
 * @method void setServiceGroupId(string $ServiceGroupId) 设置协议端口组ID，例如：ppmg-f5n1f8da。
 */
class ServiceTemplateSpecification extends AbstractModel
{
    /**
     * @var string 协议端口ID，例如：ppm-f5n1f8da。
     */
    public $ServiceId;

    /**
     * @var string 协议端口组ID，例如：ppmg-f5n1f8da。
     */
    public $ServiceGroupId;

    /**
     * @param string $ServiceId 协议端口ID，例如：ppm-f5n1f8da。
     * @param string $ServiceGroupId 协议端口组ID，例如：ppmg-f5n1f8da。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }
    }
}
