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
 * DeleteProvisionedConcurrencyConfig请求参数结构体
 *
 * @method string getFunctionName() 获取需要删除预置并发的函数的名称
 * @method void setFunctionName(string $FunctionName) 设置需要删除预置并发的函数的名称
 * @method string getQualifier() 获取函数的版本号
 * @method void setQualifier(string $Qualifier) 设置函数的版本号
 * @method string getNamespace() 获取函数所属命名空间，默认为default
 * @method void setNamespace(string $Namespace) 设置函数所属命名空间，默认为default
 */
class DeleteProvisionedConcurrencyConfigRequest extends AbstractModel
{
    /**
     * @var string 需要删除预置并发的函数的名称
     */
    public $FunctionName;

    /**
     * @var string 函数的版本号
     */
    public $Qualifier;

    /**
     * @var string 函数所属命名空间，默认为default
     */
    public $Namespace;

    /**
     * @param string $FunctionName 需要删除预置并发的函数的名称
     * @param string $Qualifier 函数的版本号
     * @param string $Namespace 函数所属命名空间，默认为default
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

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
