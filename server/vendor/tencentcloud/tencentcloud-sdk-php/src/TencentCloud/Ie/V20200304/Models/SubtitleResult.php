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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音字幕识别结果
 *
 * @method array getSubtitleItems() 获取语音字幕数组
 * @method void setSubtitleItems(array $SubtitleItems) 设置语音字幕数组
 */
class SubtitleResult extends AbstractModel
{
    /**
     * @var array 语音字幕数组
     */
    public $SubtitleItems;

    /**
     * @param array $SubtitleItems 语音字幕数组
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
        if (array_key_exists("SubtitleItems",$param) and $param["SubtitleItems"] !== null) {
            $this->SubtitleItems = [];
            foreach ($param["SubtitleItems"] as $key => $value){
                $obj = new SubtitleItem();
                $obj->deserialize($value);
                array_push($this->SubtitleItems, $obj);
            }
        }
    }
}
