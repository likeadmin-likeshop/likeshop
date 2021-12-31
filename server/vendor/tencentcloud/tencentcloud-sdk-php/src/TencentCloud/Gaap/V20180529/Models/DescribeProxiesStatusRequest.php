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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProxiesStatus请求参数结构体
 *
 * @method array getInstanceIds() 获取（旧参数，请切换到ProxyIds）通道ID列表。
 * @method void setInstanceIds(array $InstanceIds) 设置（旧参数，请切换到ProxyIds）通道ID列表。
 * @method array getProxyIds() 获取（新参数）通道ID列表。
 * @method void setProxyIds(array $ProxyIds) 设置（新参数）通道ID列表。
 */
class DescribeProxiesStatusRequest extends AbstractModel
{
    /**
     * @var array （旧参数，请切换到ProxyIds）通道ID列表。
     */
    public $InstanceIds;

    /**
     * @var array （新参数）通道ID列表。
     */
    public $ProxyIds;

    /**
     * @param array $InstanceIds （旧参数，请切换到ProxyIds）通道ID列表。
     * @param array $ProxyIds （新参数）通道ID列表。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }
    }
}
