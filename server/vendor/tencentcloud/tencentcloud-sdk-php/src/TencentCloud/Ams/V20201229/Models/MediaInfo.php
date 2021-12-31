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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体类型
 *
 * @method string getCodecs() 获取编码格式
 * @method void setCodecs(string $Codecs) 设置编码格式
 * @method integer getDuration() 获取流检测时分片时长
注意：此字段可能返回 0，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置流检测时分片时长
注意：此字段可能返回 0，表示取不到有效值。
 * @method integer getWidth() 获取宽，单位为像素
 * @method void setWidth(integer $Width) 设置宽，单位为像素
 * @method integer getHeight() 获取高，单位为像素
 * @method void setHeight(integer $Height) 设置高，单位为像素
 * @method string getThumbnail() 获取缩略图
 * @method void setThumbnail(string $Thumbnail) 设置缩略图
 */
class MediaInfo extends AbstractModel
{
    /**
     * @var string 编码格式
     */
    public $Codecs;

    /**
     * @var integer 流检测时分片时长
注意：此字段可能返回 0，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 宽，单位为像素
     */
    public $Width;

    /**
     * @var integer 高，单位为像素
     */
    public $Height;

    /**
     * @var string 缩略图
     */
    public $Thumbnail;

    /**
     * @param string $Codecs 编码格式
     * @param integer $Duration 流检测时分片时长
注意：此字段可能返回 0，表示取不到有效值。
     * @param integer $Width 宽，单位为像素
     * @param integer $Height 高，单位为像素
     * @param string $Thumbnail 缩略图
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
        if (array_key_exists("Codecs",$param) and $param["Codecs"] !== null) {
            $this->Codecs = $param["Codecs"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Thumbnail",$param) and $param["Thumbnail"] !== null) {
            $this->Thumbnail = $param["Thumbnail"];
        }
    }
}
