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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 嘴巴信息。
 *
 * @method AttributeItem getMouthOpen() 获取是否张嘴信息。
AttributeItem对应的Type为 —— 0：不张嘴，1：张嘴。
 * @method void setMouthOpen(AttributeItem $MouthOpen) 设置是否张嘴信息。
AttributeItem对应的Type为 —— 0：不张嘴，1：张嘴。
 */
class Mouth extends AbstractModel
{
    /**
     * @var AttributeItem 是否张嘴信息。
AttributeItem对应的Type为 —— 0：不张嘴，1：张嘴。
     */
    public $MouthOpen;

    /**
     * @param AttributeItem $MouthOpen 是否张嘴信息。
AttributeItem对应的Type为 —— 0：不张嘴，1：张嘴。
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
        if (array_key_exists("MouthOpen",$param) and $param["MouthOpen"] !== null) {
            $this->MouthOpen = new AttributeItem();
            $this->MouthOpen->deserialize($param["MouthOpen"]);
        }
    }
}
