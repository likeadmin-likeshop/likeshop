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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 样本管理，标签操作。
 *
 * @method string getType() 获取操作类型，可选值：add（添加）、delete（删除）、reset（重置）。
 * @method void setType(string $Type) 设置操作类型，可选值：add（添加）、delete（删除）、reset（重置）。
 * @method array getTags() 获取标签，长度限制：128 个字符。
 * @method void setTags(array $Tags) 设置标签，长度限制：128 个字符。
 */
class AiSampleTagOperation extends AbstractModel
{
    /**
     * @var string 操作类型，可选值：add（添加）、delete（删除）、reset（重置）。
     */
    public $Type;

    /**
     * @var array 标签，长度限制：128 个字符。
     */
    public $Tags;

    /**
     * @param string $Type 操作类型，可选值：add（添加）、delete（删除）、reset（重置）。
     * @param array $Tags 标签，长度限制：128 个字符。
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
