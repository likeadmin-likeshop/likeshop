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
 * CreateAddressTemplateGroup请求参数结构体
 *
 * @method string getAddressTemplateGroupName() 获取IP地址模版集合名称。
 * @method void setAddressTemplateGroupName(string $AddressTemplateGroupName) 设置IP地址模版集合名称。
 * @method array getAddressTemplateIds() 获取IP地址模版实例ID，例如：ipm-mdunqeb6。
 * @method void setAddressTemplateIds(array $AddressTemplateIds) 设置IP地址模版实例ID，例如：ipm-mdunqeb6。
 */
class CreateAddressTemplateGroupRequest extends AbstractModel
{
    /**
     * @var string IP地址模版集合名称。
     */
    public $AddressTemplateGroupName;

    /**
     * @var array IP地址模版实例ID，例如：ipm-mdunqeb6。
     */
    public $AddressTemplateIds;

    /**
     * @param string $AddressTemplateGroupName IP地址模版集合名称。
     * @param array $AddressTemplateIds IP地址模版实例ID，例如：ipm-mdunqeb6。
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
        if (array_key_exists("AddressTemplateGroupName",$param) and $param["AddressTemplateGroupName"] !== null) {
            $this->AddressTemplateGroupName = $param["AddressTemplateGroupName"];
        }

        if (array_key_exists("AddressTemplateIds",$param) and $param["AddressTemplateIds"] !== null) {
            $this->AddressTemplateIds = $param["AddressTemplateIds"];
        }
    }
}
