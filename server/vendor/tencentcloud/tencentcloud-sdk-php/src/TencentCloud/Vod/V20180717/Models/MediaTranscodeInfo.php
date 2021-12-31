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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播文件转码信息
 *
 * @method array getTranscodeSet() 获取各规格的转码信息集合，每个元素代表一个规格的转码结果。
 * @method void setTranscodeSet(array $TranscodeSet) 设置各规格的转码信息集合，每个元素代表一个规格的转码结果。
 */
class MediaTranscodeInfo extends AbstractModel
{
    /**
     * @var array 各规格的转码信息集合，每个元素代表一个规格的转码结果。
     */
    public $TranscodeSet;

    /**
     * @param array $TranscodeSet 各规格的转码信息集合，每个元素代表一个规格的转码结果。
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
        if (array_key_exists("TranscodeSet",$param) and $param["TranscodeSet"] !== null) {
            $this->TranscodeSet = [];
            foreach ($param["TranscodeSet"] as $key => $value){
                $obj = new MediaTranscodeItem();
                $obj->deserialize($value);
                array_push($this->TranscodeSet, $obj);
            }
        }
    }
}
