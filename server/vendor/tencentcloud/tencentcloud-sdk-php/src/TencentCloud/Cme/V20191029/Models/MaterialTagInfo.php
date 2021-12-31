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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 素材标签信息
 *
 * @method string getType() 获取标签类型，取值为：
<li>PRESET：预置标签；</li>
 * @method void setType(string $Type) 设置标签类型，取值为：
<li>PRESET：预置标签；</li>
 * @method string getId() 获取标签 Id 。当标签类型为 PRESET 时，标签 Id 为预置标签 Id 。
 * @method void setId(string $Id) 设置标签 Id 。当标签类型为 PRESET 时，标签 Id 为预置标签 Id 。
 * @method string getName() 获取标签名称。
 * @method void setName(string $Name) 设置标签名称。
 */
class MaterialTagInfo extends AbstractModel
{
    /**
     * @var string 标签类型，取值为：
<li>PRESET：预置标签；</li>
     */
    public $Type;

    /**
     * @var string 标签 Id 。当标签类型为 PRESET 时，标签 Id 为预置标签 Id 。
     */
    public $Id;

    /**
     * @var string 标签名称。
     */
    public $Name;

    /**
     * @param string $Type 标签类型，取值为：
<li>PRESET：预置标签；</li>
     * @param string $Id 标签 Id 。当标签类型为 PRESET 时，标签 Id 为预置标签 Id 。
     * @param string $Name 标签名称。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
