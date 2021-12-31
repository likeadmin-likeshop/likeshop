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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServiceLinkedRole请求参数结构体
 *
 * @method array getQCSServiceName() 获取授权服务，附加了此角色的腾讯云服务主体。
 * @method void setQCSServiceName(array $QCSServiceName) 设置授权服务，附加了此角色的腾讯云服务主体。
 * @method string getCustomSuffix() 获取自定义后缀，根据您提供的字符串，与服务提供的前缀组合在一起以形成完整的角色名称。
 * @method void setCustomSuffix(string $CustomSuffix) 设置自定义后缀，根据您提供的字符串，与服务提供的前缀组合在一起以形成完整的角色名称。
 * @method string getDescription() 获取角色说明。
 * @method void setDescription(string $Description) 设置角色说明。
 */
class CreateServiceLinkedRoleRequest extends AbstractModel
{
    /**
     * @var array 授权服务，附加了此角色的腾讯云服务主体。
     */
    public $QCSServiceName;

    /**
     * @var string 自定义后缀，根据您提供的字符串，与服务提供的前缀组合在一起以形成完整的角色名称。
     */
    public $CustomSuffix;

    /**
     * @var string 角色说明。
     */
    public $Description;

    /**
     * @param array $QCSServiceName 授权服务，附加了此角色的腾讯云服务主体。
     * @param string $CustomSuffix 自定义后缀，根据您提供的字符串，与服务提供的前缀组合在一起以形成完整的角色名称。
     * @param string $Description 角色说明。
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
        if (array_key_exists("QCSServiceName",$param) and $param["QCSServiceName"] !== null) {
            $this->QCSServiceName = $param["QCSServiceName"];
        }

        if (array_key_exists("CustomSuffix",$param) and $param["CustomSuffix"] !== null) {
            $this->CustomSuffix = $param["CustomSuffix"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
