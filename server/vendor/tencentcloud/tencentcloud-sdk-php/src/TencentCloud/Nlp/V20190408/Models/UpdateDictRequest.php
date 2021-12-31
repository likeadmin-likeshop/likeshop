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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDict请求参数结构体
 *
 * @method string getDictId() 获取自定义词库ID。
 * @method void setDictId(string $DictId) 设置自定义词库ID。
 * @method string getDescription() 获取词库描述，不超过100字。
 * @method void setDescription(string $Description) 设置词库描述，不超过100字。
 * @method string getName() 获取词库名称，不超过20字。
 * @method void setName(string $Name) 设置词库名称，不超过20字。
 */
class UpdateDictRequest extends AbstractModel
{
    /**
     * @var string 自定义词库ID。
     */
    public $DictId;

    /**
     * @var string 词库描述，不超过100字。
     */
    public $Description;

    /**
     * @var string 词库名称，不超过20字。
     */
    public $Name;

    /**
     * @param string $DictId 自定义词库ID。
     * @param string $Description 词库描述，不超过100字。
     * @param string $Name 词库名称，不超过20字。
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
        if (array_key_exists("DictId",$param) and $param["DictId"] !== null) {
            $this->DictId = $param["DictId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
