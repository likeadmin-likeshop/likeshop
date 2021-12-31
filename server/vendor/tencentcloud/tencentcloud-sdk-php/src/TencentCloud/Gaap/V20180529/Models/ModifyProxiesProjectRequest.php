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
 * ModifyProxiesProject请求参数结构体
 *
 * @method integer getProjectId() 获取需要修改到的项目ID。
 * @method void setProjectId(integer $ProjectId) 设置需要修改到的项目ID。
 * @method array getInstanceIds() 获取（旧参数，请切换到ProxyIds）一个或多个待操作的通道ID。
 * @method void setInstanceIds(array $InstanceIds) 设置（旧参数，请切换到ProxyIds）一个或多个待操作的通道ID。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
更多详细信息请参阅：如何保证幂等性。
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
更多详细信息请参阅：如何保证幂等性。
 * @method array getProxyIds() 获取（新参数）一个或多个待操作的通道ID。
 * @method void setProxyIds(array $ProxyIds) 设置（新参数）一个或多个待操作的通道ID。
 */
class ModifyProxiesProjectRequest extends AbstractModel
{
    /**
     * @var integer 需要修改到的项目ID。
     */
    public $ProjectId;

    /**
     * @var array （旧参数，请切换到ProxyIds）一个或多个待操作的通道ID。
     */
    public $InstanceIds;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
更多详细信息请参阅：如何保证幂等性。
     */
    public $ClientToken;

    /**
     * @var array （新参数）一个或多个待操作的通道ID。
     */
    public $ProxyIds;

    /**
     * @param integer $ProjectId 需要修改到的项目ID。
     * @param array $InstanceIds （旧参数，请切换到ProxyIds）一个或多个待操作的通道ID。
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。
更多详细信息请参阅：如何保证幂等性。
     * @param array $ProxyIds （新参数）一个或多个待操作的通道ID。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("ProxyIds",$param) and $param["ProxyIds"] !== null) {
            $this->ProxyIds = $param["ProxyIds"];
        }
    }
}
