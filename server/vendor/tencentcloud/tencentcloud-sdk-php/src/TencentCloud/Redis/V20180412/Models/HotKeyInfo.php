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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 热Key详细信息
 *
 * @method string getKey() 获取热Key
 * @method void setKey(string $Key) 设置热Key
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method integer getCount() 获取数量
 * @method void setCount(integer $Count) 设置数量
 */
class HotKeyInfo extends AbstractModel
{
    /**
     * @var string 热Key
     */
    public $Key;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var integer 数量
     */
    public $Count;

    /**
     * @param string $Key 热Key
     * @param string $Type 类型
     * @param integer $Count 数量
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
