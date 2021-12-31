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
 * CopyFunction请求参数结构体
 *
 * @method string getFunctionName() 获取要复制的函数的名称
 * @method void setFunctionName(string $FunctionName) 设置要复制的函数的名称
 * @method string getNewFunctionName() 获取新函数的名称
 * @method void setNewFunctionName(string $NewFunctionName) 设置新函数的名称
 * @method string getNamespace() 获取要复制的函数所在的命名空间，默认为default
 * @method void setNamespace(string $Namespace) 设置要复制的函数所在的命名空间，默认为default
 * @method string getTargetNamespace() 获取将函数复制到的命名空间，默认为default
 * @method void setTargetNamespace(string $TargetNamespace) 设置将函数复制到的命名空间，默认为default
 * @method string getDescription() 获取新函数的描述
 * @method void setDescription(string $Description) 设置新函数的描述
 * @method string getTargetRegion() 获取要将函数复制到的地域，不填则默认为当前地域
 * @method void setTargetRegion(string $TargetRegion) 设置要将函数复制到的地域，不填则默认为当前地域
 * @method boolean getOverride() 获取如果目标Namespace下已有同名函数，是否覆盖，默认为否
（注意：如果选择覆盖，会导致同名函数被删除，请慎重操作）
TRUE：覆盖同名函数
FALSE：不覆盖同名函数
 * @method void setOverride(boolean $Override) 设置如果目标Namespace下已有同名函数，是否覆盖，默认为否
（注意：如果选择覆盖，会导致同名函数被删除，请慎重操作）
TRUE：覆盖同名函数
FALSE：不覆盖同名函数
 * @method boolean getCopyConfiguration() 获取是否复制函数的属性，包括环境变量、内存、超时、函数描述、标签、VPC等，默认为是。
TRUE：复制函数配置
FALSE：不复制函数配置
 * @method void setCopyConfiguration(boolean $CopyConfiguration) 设置是否复制函数的属性，包括环境变量、内存、超时、函数描述、标签、VPC等，默认为是。
TRUE：复制函数配置
FALSE：不复制函数配置
 */
class CopyFunctionRequest extends AbstractModel
{
    /**
     * @var string 要复制的函数的名称
     */
    public $FunctionName;

    /**
     * @var string 新函数的名称
     */
    public $NewFunctionName;

    /**
     * @var string 要复制的函数所在的命名空间，默认为default
     */
    public $Namespace;

    /**
     * @var string 将函数复制到的命名空间，默认为default
     */
    public $TargetNamespace;

    /**
     * @var string 新函数的描述
     */
    public $Description;

    /**
     * @var string 要将函数复制到的地域，不填则默认为当前地域
     */
    public $TargetRegion;

    /**
     * @var boolean 如果目标Namespace下已有同名函数，是否覆盖，默认为否
（注意：如果选择覆盖，会导致同名函数被删除，请慎重操作）
TRUE：覆盖同名函数
FALSE：不覆盖同名函数
     */
    public $Override;

    /**
     * @var boolean 是否复制函数的属性，包括环境变量、内存、超时、函数描述、标签、VPC等，默认为是。
TRUE：复制函数配置
FALSE：不复制函数配置
     */
    public $CopyConfiguration;

    /**
     * @param string $FunctionName 要复制的函数的名称
     * @param string $NewFunctionName 新函数的名称
     * @param string $Namespace 要复制的函数所在的命名空间，默认为default
     * @param string $TargetNamespace 将函数复制到的命名空间，默认为default
     * @param string $Description 新函数的描述
     * @param string $TargetRegion 要将函数复制到的地域，不填则默认为当前地域
     * @param boolean $Override 如果目标Namespace下已有同名函数，是否覆盖，默认为否
（注意：如果选择覆盖，会导致同名函数被删除，请慎重操作）
TRUE：覆盖同名函数
FALSE：不覆盖同名函数
     * @param boolean $CopyConfiguration 是否复制函数的属性，包括环境变量、内存、超时、函数描述、标签、VPC等，默认为是。
TRUE：复制函数配置
FALSE：不复制函数配置
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

        if (array_key_exists("NewFunctionName",$param) and $param["NewFunctionName"] !== null) {
            $this->NewFunctionName = $param["NewFunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TargetNamespace",$param) and $param["TargetNamespace"] !== null) {
            $this->TargetNamespace = $param["TargetNamespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("Override",$param) and $param["Override"] !== null) {
            $this->Override = $param["Override"];
        }

        if (array_key_exists("CopyConfiguration",$param) and $param["CopyConfiguration"] !== null) {
            $this->CopyConfiguration = $param["CopyConfiguration"];
        }
    }
}
