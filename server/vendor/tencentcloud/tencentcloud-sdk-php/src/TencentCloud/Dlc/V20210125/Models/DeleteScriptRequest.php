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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteScript请求参数结构体
 *
 * @method array getScriptIds() 获取脚本id，其可以通过DescribeScripts接口提取
 * @method void setScriptIds(array $ScriptIds) 设置脚本id，其可以通过DescribeScripts接口提取
 */
class DeleteScriptRequest extends AbstractModel
{
    /**
     * @var array 脚本id，其可以通过DescribeScripts接口提取
     */
    public $ScriptIds;

    /**
     * @param array $ScriptIds 脚本id，其可以通过DescribeScripts接口提取
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
        if (array_key_exists("ScriptIds",$param) and $param["ScriptIds"] !== null) {
            $this->ScriptIds = $param["ScriptIds"];
        }
    }
}
