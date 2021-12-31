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
namespace TencentCloud\Cr\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryProducts请求参数结构体
 *
 * @method string getModule() 获取模块名。默认值（固定）：Product
 * @method void setModule(string $Module) 设置模块名。默认值（固定）：Product
 * @method string getOperation() 获取操作名。默认值（固定）：QueryProducts
 * @method void setOperation(string $Operation) 设置操作名。默认值（固定）：QueryProducts
 * @method string getInstanceId() 获取实例Id。
 * @method void setInstanceId(string $InstanceId) 设置实例Id。
 */
class QueryProductsRequest extends AbstractModel
{
    /**
     * @var string 模块名。默认值（固定）：Product
     */
    public $Module;

    /**
     * @var string 操作名。默认值（固定）：QueryProducts
     */
    public $Operation;

    /**
     * @var string 实例Id。
     */
    public $InstanceId;

    /**
     * @param string $Module 模块名。默认值（固定）：Product
     * @param string $Operation 操作名。默认值（固定）：QueryProducts
     * @param string $InstanceId 实例Id。
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
