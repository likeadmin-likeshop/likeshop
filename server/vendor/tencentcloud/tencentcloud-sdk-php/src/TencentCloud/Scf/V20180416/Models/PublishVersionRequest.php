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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PublishVersion请求参数结构体
 *
 * @method string getFunctionName() 获取发布函数的名称
 * @method void setFunctionName(string $FunctionName) 设置发布函数的名称
 * @method string getDescription() 获取函数的描述
 * @method void setDescription(string $Description) 设置函数的描述
 * @method string getNamespace() 获取函数的命名空间
 * @method void setNamespace(string $Namespace) 设置函数的命名空间
 */
class PublishVersionRequest extends AbstractModel
{
    /**
     * @var string 发布函数的名称
     */
    public $FunctionName;

    /**
     * @var string 函数的描述
     */
    public $Description;

    /**
     * @var string 函数的命名空间
     */
    public $Namespace;

    /**
     * @param string $FunctionName 发布函数的名称
     * @param string $Description 函数的描述
     * @param string $Namespace 函数的命名空间
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
