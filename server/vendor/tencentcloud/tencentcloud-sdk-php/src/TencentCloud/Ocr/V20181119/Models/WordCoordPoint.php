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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 英文OCR识别出的单词在原图中的四点坐标数组
 *
 * @method array getWordCoordinate() 获取英文OCR识别出的每个单词在原图中的四点坐标。
 * @method void setWordCoordinate(array $WordCoordinate) 设置英文OCR识别出的每个单词在原图中的四点坐标。
 */
class WordCoordPoint extends AbstractModel
{
    /**
     * @var array 英文OCR识别出的每个单词在原图中的四点坐标。
     */
    public $WordCoordinate;

    /**
     * @param array $WordCoordinate 英文OCR识别出的每个单词在原图中的四点坐标。
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
        if (array_key_exists("WordCoordinate",$param) and $param["WordCoordinate"] !== null) {
            $this->WordCoordinate = [];
            foreach ($param["WordCoordinate"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->WordCoordinate, $obj);
            }
        }
    }
}
