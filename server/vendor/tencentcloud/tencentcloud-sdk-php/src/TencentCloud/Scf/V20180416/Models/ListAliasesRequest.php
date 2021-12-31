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
 * ListAliases请求参数结构体
 *
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getNamespace() 获取函数所在的命名空间
 * @method void setNamespace(string $Namespace) 设置函数所在的命名空间
 * @method string getFunctionVersion() 获取如果提供此参数，则只返回与该函数版本有关联的别名
 * @method void setFunctionVersion(string $FunctionVersion) 设置如果提供此参数，则只返回与该函数版本有关联的别名
 * @method string getOffset() 获取数据偏移量，默认值为 0
 * @method void setOffset(string $Offset) 设置数据偏移量，默认值为 0
 * @method string getLimit() 获取返回数据长度，默认值为 20
 * @method void setLimit(string $Limit) 设置返回数据长度，默认值为 20
 */
class ListAliasesRequest extends AbstractModel
{
    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数所在的命名空间
     */
    public $Namespace;

    /**
     * @var string 如果提供此参数，则只返回与该函数版本有关联的别名
     */
    public $FunctionVersion;

    /**
     * @var string 数据偏移量，默认值为 0
     */
    public $Offset;

    /**
     * @var string 返回数据长度，默认值为 20
     */
    public $Limit;

    /**
     * @param string $FunctionName 函数名称
     * @param string $Namespace 函数所在的命名空间
     * @param string $FunctionVersion 如果提供此参数，则只返回与该函数版本有关联的别名
     * @param string $Offset 数据偏移量，默认值为 0
     * @param string $Limit 返回数据长度，默认值为 20
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionVersion",$param) and $param["FunctionVersion"] !== null) {
            $this->FunctionVersion = $param["FunctionVersion"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
