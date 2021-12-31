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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubAppId请求参数结构体
 *
 * @method string getName() 获取子应用名称，长度限制：40个字符。
 * @method void setName(string $Name) 设置子应用名称，长度限制：40个字符。
 * @method string getDescription() 获取子应用简介，长度限制： 300个字符。
 * @method void setDescription(string $Description) 设置子应用简介，长度限制： 300个字符。
 */
class CreateSubAppIdRequest extends AbstractModel
{
    /**
     * @var string 子应用名称，长度限制：40个字符。
     */
    public $Name;

    /**
     * @var string 子应用简介，长度限制： 300个字符。
     */
    public $Description;

    /**
     * @param string $Name 子应用名称，长度限制：40个字符。
     * @param string $Description 子应用简介，长度限制： 300个字符。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
