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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步规则过滤器
 *
 * @method string getType() 获取类型（name、tag和resource）
 * @method void setType(string $Type) 设置类型（name、tag和resource）
 * @method string getValue() 获取默认为空
 * @method void setValue(string $Value) 设置默认为空
 */
class ReplicationFilter extends AbstractModel
{
    /**
     * @var string 类型（name、tag和resource）
     */
    public $Type;

    /**
     * @var string 默认为空
     */
    public $Value;

    /**
     * @param string $Type 类型（name、tag和resource）
     * @param string $Value 默认为空
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
