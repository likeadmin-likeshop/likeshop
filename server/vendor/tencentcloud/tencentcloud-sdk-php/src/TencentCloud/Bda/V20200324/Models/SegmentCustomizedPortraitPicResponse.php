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
namespace TencentCloud\Bda\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SegmentCustomizedPortraitPic返回参数结构体
 *
 * @method string getPortraitImage() 获取根据指定标签分割输出的透明背景人像图片的 base64 数据。
 * @method void setPortraitImage(string $PortraitImage) 设置根据指定标签分割输出的透明背景人像图片的 base64 数据。
 * @method string getMaskImage() 获取指定标签处理后的Mask。一个通过 Base64 编码的文件，解码后文件由 Float 型浮点数组成。这些浮点数代表原图从左上角开始的每一行的每一个像素点，每一个浮点数的值是原图相应像素点位于人体轮廓内的置信度（0-1）转化的灰度值（0-255）
 * @method void setMaskImage(string $MaskImage) 设置指定标签处理后的Mask。一个通过 Base64 编码的文件，解码后文件由 Float 型浮点数组成。这些浮点数代表原图从左上角开始的每一行的每一个像素点，每一个浮点数的值是原图相应像素点位于人体轮廓内的置信度（0-1）转化的灰度值（0-255）
 * @method array getImageRects() 获取坐标信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageRects(array $ImageRects) 设置坐标信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class SegmentCustomizedPortraitPicResponse extends AbstractModel
{
    /**
     * @var string 根据指定标签分割输出的透明背景人像图片的 base64 数据。
     */
    public $PortraitImage;

    /**
     * @var string 指定标签处理后的Mask。一个通过 Base64 编码的文件，解码后文件由 Float 型浮点数组成。这些浮点数代表原图从左上角开始的每一行的每一个像素点，每一个浮点数的值是原图相应像素点位于人体轮廓内的置信度（0-1）转化的灰度值（0-255）
     */
    public $MaskImage;

    /**
     * @var array 坐标信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageRects;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $PortraitImage 根据指定标签分割输出的透明背景人像图片的 base64 数据。
     * @param string $MaskImage 指定标签处理后的Mask。一个通过 Base64 编码的文件，解码后文件由 Float 型浮点数组成。这些浮点数代表原图从左上角开始的每一行的每一个像素点，每一个浮点数的值是原图相应像素点位于人体轮廓内的置信度（0-1）转化的灰度值（0-255）
     * @param array $ImageRects 坐标信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = $param["PortraitImage"];
        }

        if (array_key_exists("MaskImage",$param) and $param["MaskImage"] !== null) {
            $this->MaskImage = $param["MaskImage"];
        }

        if (array_key_exists("ImageRects",$param) and $param["ImageRects"] !== null) {
            $this->ImageRects = [];
            foreach ($param["ImageRects"] as $key => $value){
                $obj = new ImageRect();
                $obj->deserialize($value);
                array_push($this->ImageRects, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
