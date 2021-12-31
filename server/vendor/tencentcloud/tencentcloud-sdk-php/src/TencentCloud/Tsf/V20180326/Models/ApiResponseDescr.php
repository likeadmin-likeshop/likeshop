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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API 响应的参数结构描述
 *
 * @method string getName() 获取参数描述
 * @method void setName(string $Name) 设置参数描述
 * @method string getType() 获取参数类型
 * @method void setType(string $Type) 设置参数类型
 * @method string getDescription() 获取参数描述
 * @method void setDescription(string $Description) 设置参数描述
 */
class ApiResponseDescr extends AbstractModel
{
    /**
     * @var string 参数描述
     */
    public $Name;

    /**
     * @var string 参数类型
     */
    public $Type;

    /**
     * @var string 参数描述
     */
    public $Description;

    /**
     * @param string $Name 参数描述
     * @param string $Type 参数类型
     * @param string $Description 参数描述
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
