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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 链接素材信息
 *
 * @method MaterialBasicInfo getBasicInfo() 获取素材基本信息。
 * @method void setBasicInfo(MaterialBasicInfo $BasicInfo) 设置素材基本信息。
 * @method VideoMaterial getVideoMaterial() 获取视频素材信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoMaterial(VideoMaterial $VideoMaterial) 设置视频素材信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioMaterial getAudioMaterial() 获取音频素材信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioMaterial(AudioMaterial $AudioMaterial) 设置音频素材信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageMaterial getImageMaterial() 获取图片素材信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageMaterial(ImageMaterial $ImageMaterial) 设置图片素材信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LinkMaterialInfo extends AbstractModel
{
    /**
     * @var MaterialBasicInfo 素材基本信息。
     */
    public $BasicInfo;

    /**
     * @var VideoMaterial 视频素材信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoMaterial;

    /**
     * @var AudioMaterial 音频素材信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioMaterial;

    /**
     * @var ImageMaterial 图片素材信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageMaterial;

    /**
     * @param MaterialBasicInfo $BasicInfo 素材基本信息。
     * @param VideoMaterial $VideoMaterial 视频素材信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioMaterial $AudioMaterial 音频素材信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageMaterial $ImageMaterial 图片素材信息。
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
        if (array_key_exists("BasicInfo",$param) and $param["BasicInfo"] !== null) {
            $this->BasicInfo = new MaterialBasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }

        if (array_key_exists("VideoMaterial",$param) and $param["VideoMaterial"] !== null) {
            $this->VideoMaterial = new VideoMaterial();
            $this->VideoMaterial->deserialize($param["VideoMaterial"]);
        }

        if (array_key_exists("AudioMaterial",$param) and $param["AudioMaterial"] !== null) {
            $this->AudioMaterial = new AudioMaterial();
            $this->AudioMaterial->deserialize($param["AudioMaterial"]);
        }

        if (array_key_exists("ImageMaterial",$param) and $param["ImageMaterial"] !== null) {
            $this->ImageMaterial = new ImageMaterial();
            $this->ImageMaterial->deserialize($param["ImageMaterial"]);
        }
    }
}
