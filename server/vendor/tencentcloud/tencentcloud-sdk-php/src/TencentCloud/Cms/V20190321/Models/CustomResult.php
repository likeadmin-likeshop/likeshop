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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本返回的自定义词库结果
 *
 * @method array getKeywords() 获取命中的自定义关键词
 * @method void setKeywords(array $Keywords) 设置命中的自定义关键词
 * @method string getLibId() 获取自定义库id
 * @method void setLibId(string $LibId) 设置自定义库id
 * @method string getLibName() 获取自定义词库名称
 * @method void setLibName(string $LibName) 设置自定义词库名称
 * @method string getType() 获取命中的自定义关键词的类型
 * @method void setType(string $Type) 设置命中的自定义关键词的类型
 */
class CustomResult extends AbstractModel
{
    /**
     * @var array 命中的自定义关键词
     */
    public $Keywords;

    /**
     * @var string 自定义库id
     */
    public $LibId;

    /**
     * @var string 自定义词库名称
     */
    public $LibName;

    /**
     * @var string 命中的自定义关键词的类型
     */
    public $Type;

    /**
     * @param array $Keywords 命中的自定义关键词
     * @param string $LibId 自定义库id
     * @param string $LibName 自定义词库名称
     * @param string $Type 命中的自定义关键词的类型
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
        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
