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
 * 数学试题识别结果
 *
 * @method string getItem() 获取识别出的字段名称（关键字）
 * @method void setItem(string $Item) 设置识别出的字段名称（关键字）
 * @method string getDetectedText() 获取识别出的字段名称对应的值，也就是字段Item对应的字符串结果
 * @method void setDetectedText(string $DetectedText) 设置识别出的字段名称对应的值，也就是字段Item对应的字符串结果
 * @method ItemCoord getItemcoord() 获取文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）
 * @method void setItemcoord(ItemCoord $Itemcoord) 设置文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）
 */
class TextEduPaper extends AbstractModel
{
    /**
     * @var string 识别出的字段名称（关键字）
     */
    public $Item;

    /**
     * @var string 识别出的字段名称对应的值，也就是字段Item对应的字符串结果
     */
    public $DetectedText;

    /**
     * @var ItemCoord 文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）
     */
    public $Itemcoord;

    /**
     * @param string $Item 识别出的字段名称（关键字）
     * @param string $DetectedText 识别出的字段名称对应的值，也就是字段Item对应的字符串结果
     * @param ItemCoord $Itemcoord 文本行在旋转纠正之后的图像中的像素坐标，表示为（左上角x, 左上角y，宽width，高height）
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = $param["Item"];
        }

        if (array_key_exists("DetectedText",$param) and $param["DetectedText"] !== null) {
            $this->DetectedText = $param["DetectedText"];
        }

        if (array_key_exists("Itemcoord",$param) and $param["Itemcoord"] !== null) {
            $this->Itemcoord = new ItemCoord();
            $this->Itemcoord->deserialize($param["Itemcoord"]);
        }
    }
}
