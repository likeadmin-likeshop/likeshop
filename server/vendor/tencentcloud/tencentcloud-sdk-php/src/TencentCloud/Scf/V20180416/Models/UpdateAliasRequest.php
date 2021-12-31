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
 * UpdateAlias请求参数结构体
 *
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getName() 获取别名的名称
 * @method void setName(string $Name) 设置别名的名称
 * @method string getFunctionVersion() 获取别名指向的主版本
 * @method void setFunctionVersion(string $FunctionVersion) 设置别名指向的主版本
 * @method string getNamespace() 获取函数所在的命名空间
 * @method void setNamespace(string $Namespace) 设置函数所在的命名空间
 * @method RoutingConfig getRoutingConfig() 获取别名的路由信息，需要为别名指定附加版本时，必须提供此参数
 * @method void setRoutingConfig(RoutingConfig $RoutingConfig) 设置别名的路由信息，需要为别名指定附加版本时，必须提供此参数
 * @method string getDescription() 获取别名的描述
 * @method void setDescription(string $Description) 设置别名的描述
 */
class UpdateAliasRequest extends AbstractModel
{
    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 别名的名称
     */
    public $Name;

    /**
     * @var string 别名指向的主版本
     */
    public $FunctionVersion;

    /**
     * @var string 函数所在的命名空间
     */
    public $Namespace;

    /**
     * @var RoutingConfig 别名的路由信息，需要为别名指定附加版本时，必须提供此参数
     */
    public $RoutingConfig;

    /**
     * @var string 别名的描述
     */
    public $Description;

    /**
     * @param string $FunctionName 函数名称
     * @param string $Name 别名的名称
     * @param string $FunctionVersion 别名指向的主版本
     * @param string $Namespace 函数所在的命名空间
     * @param RoutingConfig $RoutingConfig 别名的路由信息，需要为别名指定附加版本时，必须提供此参数
     * @param string $Description 别名的描述
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("RoutingConfig",$param) and $param["RoutingConfig"] !== null) {
            $this->RoutingConfig = new RoutingConfig();
            $this->RoutingConfig->deserialize($param["RoutingConfig"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
