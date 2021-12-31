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
namespace TencentCloud\Tbm\V20180129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户性别画像元素数组
 *
 * @method array getPortraitSet() 获取用户性别画像数组
 * @method void setPortraitSet(array $PortraitSet) 设置用户性别画像数组
 */
class GenderPortraitInfo extends AbstractModel
{
    /**
     * @var array 用户性别画像数组
     */
    public $PortraitSet;

    /**
     * @param array $PortraitSet 用户性别画像数组
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
        if (array_key_exists("PortraitSet",$param) and $param["PortraitSet"] !== null) {
            $this->PortraitSet = [];
            foreach ($param["PortraitSet"] as $key => $value){
                $obj = new GenderPortrait();
                $obj->deserialize($value);
                array_push($this->PortraitSet, $obj);
            }
        }
    }
}
