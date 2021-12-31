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
namespace TencentCloud\Fmu\V20191213\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频美颜返回结果
 *
 * @method string getVideoUrl() 获取视频美颜输出的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoUrl(string $VideoUrl) 设置视频美颜输出的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVideoMD5() 获取视频美颜输出的视频MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoMD5(string $VideoMD5) 设置视频美颜输出的视频MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCoverImage() 获取美颜输出的视频封面图base64字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverImage(string $CoverImage) 设置美颜输出的视频封面图base64字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWidth() 获取视频宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置视频宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取视频高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置视频高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFps() 获取每秒传输帧数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFps(float $Fps) 设置每秒传输帧数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDurationInSec() 获取视频播放时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDurationInSec(float $DurationInSec) 设置视频播放时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class BeautifyVideoOutput extends AbstractModel
{
    /**
     * @var string 视频美颜输出的url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoUrl;

    /**
     * @var string 视频美颜输出的视频MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoMD5;

    /**
     * @var string 美颜输出的视频封面图base64字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverImage;

    /**
     * @var integer 视频宽度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 视频高度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @var float 每秒传输帧数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fps;

    /**
     * @var float 视频播放时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DurationInSec;

    /**
     * @param string $VideoUrl 视频美颜输出的url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VideoMD5 视频美颜输出的视频MD5，用于校验
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CoverImage 美颜输出的视频封面图base64字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Width 视频宽度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 视频高度
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Fps 每秒传输帧数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DurationInSec 视频播放时长，单位为秒
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("VideoMD5",$param) and $param["VideoMD5"] !== null) {
            $this->VideoMD5 = $param["VideoMD5"];
        }

        if (array_key_exists("CoverImage",$param) and $param["CoverImage"] !== null) {
            $this->CoverImage = $param["CoverImage"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("DurationInSec",$param) and $param["DurationInSec"] !== null) {
            $this->DurationInSec = $param["DurationInSec"];
        }
    }
}
