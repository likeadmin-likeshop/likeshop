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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 从图片中检测到的二维码，可能为多个
 *
 * @method array getCodePosition() 获取二维码在图片中的位置，由边界点的坐标表示
 * @method void setCodePosition(array $CodePosition) 设置二维码在图片中的位置，由边界点的坐标表示
 * @method string getCodeCharset() 获取二维码文本的编码格式
 * @method void setCodeCharset(string $CodeCharset) 设置二维码文本的编码格式
 * @method string getCodeText() 获取二维码的文本内容
 * @method void setCodeText(string $CodeText) 设置二维码的文本内容
 * @method integer getCodeType() 获取二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX
 * @method void setCodeType(integer $CodeType) 设置二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX
 */
class CodeDetail extends AbstractModel
{
    /**
     * @var array 二维码在图片中的位置，由边界点的坐标表示
     */
    public $CodePosition;

    /**
     * @var string 二维码文本的编码格式
     */
    public $CodeCharset;

    /**
     * @var string 二维码的文本内容
     */
    public $CodeText;

    /**
     * @var integer 二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX
     */
    public $CodeType;

    /**
     * @param array $CodePosition 二维码在图片中的位置，由边界点的坐标表示
     * @param string $CodeCharset 二维码文本的编码格式
     * @param string $CodeText 二维码的文本内容
     * @param integer $CodeType 二维码的类型：1:ONED_BARCODE，2:QRCOD，3:WXCODE，4:PDF417，5:DATAMATRIX
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
        if (array_key_exists("CodePosition",$param) and $param["CodePosition"] !== null) {
            $this->CodePosition = [];
            foreach ($param["CodePosition"] as $key => $value){
                $obj = new CodePosition();
                $obj->deserialize($value);
                array_push($this->CodePosition, $obj);
            }
        }

        if (array_key_exists("CodeCharset",$param) and $param["CodeCharset"] !== null) {
            $this->CodeCharset = $param["CodeCharset"];
        }

        if (array_key_exists("CodeText",$param) and $param["CodeText"] !== null) {
            $this->CodeText = $param["CodeText"];
        }

        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            $this->CodeType = $param["CodeType"];
        }
    }
}
