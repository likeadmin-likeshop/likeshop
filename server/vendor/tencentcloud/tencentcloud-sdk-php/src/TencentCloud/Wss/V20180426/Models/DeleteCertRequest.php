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
namespace TencentCloud\Wss\V20180426\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCert请求参数结构体
 *
 * @method string getId() 获取证书 ID，即通过 GetList 拿到的证书列表的 ID 字段。
 * @method void setId(string $Id) 设置证书 ID，即通过 GetList 拿到的证书列表的 ID 字段。
 * @method string getModuleType() 获取模块名称，应填 ssl。
 * @method void setModuleType(string $ModuleType) 设置模块名称，应填 ssl。
 */
class DeleteCertRequest extends AbstractModel
{
    /**
     * @var string 证书 ID，即通过 GetList 拿到的证书列表的 ID 字段。
     */
    public $Id;

    /**
     * @var string 模块名称，应填 ssl。
     */
    public $ModuleType;

    /**
     * @param string $Id 证书 ID，即通过 GetList 拿到的证书列表的 ID 字段。
     * @param string $ModuleType 模块名称，应填 ssl。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }
    }
}
