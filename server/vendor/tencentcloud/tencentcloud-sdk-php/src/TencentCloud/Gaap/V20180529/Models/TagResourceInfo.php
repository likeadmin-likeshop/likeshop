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
 * 标签对应资源信息
 *
 * @method string getResourceType() 获取资源类型，其中：
Proxy表示通道，
ProxyGroup表示通道组，
RealServer表示源站
 * @method void setResourceType(string $ResourceType) 设置资源类型，其中：
Proxy表示通道，
ProxyGroup表示通道组，
RealServer表示源站
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 */
class TagResourceInfo extends AbstractModel
{
    /**
     * @var string 资源类型，其中：
Proxy表示通道，
ProxyGroup表示通道组，
RealServer表示源站
     */
    public $ResourceType;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @param string $ResourceType 资源类型，其中：
Proxy表示通道，
ProxyGroup表示通道组，
RealServer表示源站
     * @param string $ResourceId 资源ID
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
    }
}
