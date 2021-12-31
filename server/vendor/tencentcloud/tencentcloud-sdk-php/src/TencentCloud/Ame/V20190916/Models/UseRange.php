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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 曲库包用途信息
 *
 * @method integer getUseRangeId() 获取用途id
 * @method void setUseRangeId(integer $UseRangeId) 设置用途id
 * @method string getName() 获取用途范围名称
 * @method void setName(string $Name) 设置用途范围名称
 */
class UseRange extends AbstractModel
{
    /**
     * @var integer 用途id
     */
    public $UseRangeId;

    /**
     * @var string 用途范围名称
     */
    public $Name;

    /**
     * @param integer $UseRangeId 用途id
     * @param string $Name 用途范围名称
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
        if (array_key_exists("UseRangeId",$param) and $param["UseRangeId"] !== null) {
            $this->UseRangeId = $param["UseRangeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
