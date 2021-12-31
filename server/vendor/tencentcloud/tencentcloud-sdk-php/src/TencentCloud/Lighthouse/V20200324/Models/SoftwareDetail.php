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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述镜像软件详细信息。
 *
 * @method string getKey() 获取详情唯一键。
 * @method void setKey(string $Key) 设置详情唯一键。
 * @method string getTitle() 获取详情标题。
 * @method void setTitle(string $Title) 设置详情标题。
 * @method string getValue() 获取详情值。
 * @method void setValue(string $Value) 设置详情值。
 */
class SoftwareDetail extends AbstractModel
{
    /**
     * @var string 详情唯一键。
     */
    public $Key;

    /**
     * @var string 详情标题。
     */
    public $Title;

    /**
     * @var string 详情值。
     */
    public $Value;

    /**
     * @param string $Key 详情唯一键。
     * @param string $Title 详情标题。
     * @param string $Value 详情值。
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
