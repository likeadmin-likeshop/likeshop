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
namespace TencentCloud\Tiems\V20190416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteServiceConfig请求参数结构体
 *
 * @method string getServiceConfigId() 获取服务配置Id
 * @method void setServiceConfigId(string $ServiceConfigId) 设置服务配置Id
 * @method string getServiceConfigName() 获取服务配置名称
 * @method void setServiceConfigName(string $ServiceConfigName) 设置服务配置名称
 */
class DeleteServiceConfigRequest extends AbstractModel
{
    /**
     * @var string 服务配置Id
     */
    public $ServiceConfigId;

    /**
     * @var string 服务配置名称
     */
    public $ServiceConfigName;

    /**
     * @param string $ServiceConfigId 服务配置Id
     * @param string $ServiceConfigName 服务配置名称
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
        if (array_key_exists("ServiceConfigId",$param) and $param["ServiceConfigId"] !== null) {
            $this->ServiceConfigId = $param["ServiceConfigId"];
        }

        if (array_key_exists("ServiceConfigName",$param) and $param["ServiceConfigName"] !== null) {
            $this->ServiceConfigName = $param["ServiceConfigName"];
        }
    }
}
