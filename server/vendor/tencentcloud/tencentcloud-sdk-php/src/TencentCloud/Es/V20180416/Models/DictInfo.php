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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ik插件词典信息
 *
 * @method string getKey() 获取词典键值
 * @method void setKey(string $Key) 设置词典键值
 * @method string getName() 获取词典名称
 * @method void setName(string $Name) 设置词典名称
 * @method integer getSize() 获取词典大小，单位B
 * @method void setSize(integer $Size) 设置词典大小，单位B
 */
class DictInfo extends AbstractModel
{
    /**
     * @var string 词典键值
     */
    public $Key;

    /**
     * @var string 词典名称
     */
    public $Name;

    /**
     * @var integer 词典大小，单位B
     */
    public $Size;

    /**
     * @param string $Key 词典键值
     * @param string $Name 词典名称
     * @param integer $Size 词典大小，单位B
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
