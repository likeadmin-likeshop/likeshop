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
namespace TencentCloud\Tics\V20181115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签及对应的解释
 *
 * @method string getTag() 获取标签
 * @method void setTag(string $Tag) 设置标签
 * @method string getDesc() 获取标签对应的中文解释
 * @method void setDesc(string $Desc) 设置标签对应的中文解释
 */
class TagType extends AbstractModel
{
    /**
     * @var string 标签
     */
    public $Tag;

    /**
     * @var string 标签对应的中文解释
     */
    public $Desc;

    /**
     * @param string $Tag 标签
     * @param string $Desc 标签对应的中文解释
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
