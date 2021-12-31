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
 * 媒体详情信息
 *
 * @method MaterialBasicInfo getBasicInfo() 获取媒体基本信息。
 * @method void setBasicInfo(MaterialBasicInfo $BasicInfo) 设置媒体基本信息。
 * @method VideoMaterial getVideoMaterial() 获取视频媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoMaterial(VideoMaterial $VideoMaterial) 设置视频媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioMaterial getAudioMaterial() 获取音频媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioMaterial(AudioMaterial $AudioMaterial) 设置音频媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageMaterial getImageMaterial() 获取图片媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageMaterial(ImageMaterial $ImageMaterial) 设置图片媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method LinkMaterial getLinkMaterial() 获取链接媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkMaterial(LinkMaterial $LinkMaterial) 设置链接媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoEditTemplateMaterial getVideoEditTemplateMaterial() 获取模板媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoEditTemplateMaterial(VideoEditTemplateMaterial $VideoEditTemplateMaterial) 设置模板媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OtherMaterial getOtherMaterial() 获取其他类型媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherMaterial(OtherMaterial $OtherMaterial) 设置其他类型媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MaterialInfo extends AbstractModel
{
    /**
     * @var MaterialBasicInfo 媒体基本信息。
     */
    public $BasicInfo;

    /**
     * @var VideoMaterial 视频媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoMaterial;

    /**
     * @var AudioMaterial 音频媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioMaterial;

    /**
     * @var ImageMaterial 图片媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageMaterial;

    /**
     * @var LinkMaterial 链接媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkMaterial;

    /**
     * @var VideoEditTemplateMaterial 模板媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoEditTemplateMaterial;

    /**
     * @var OtherMaterial 其他类型媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherMaterial;

    /**
     * @param MaterialBasicInfo $BasicInfo 媒体基本信息。
     * @param VideoMaterial $VideoMaterial 视频媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioMaterial $AudioMaterial 音频媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageMaterial $ImageMaterial 图片媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param LinkMaterial $LinkMaterial 链接媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoEditTemplateMaterial $VideoEditTemplateMaterial 模板媒体信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OtherMaterial $OtherMaterial 其他类型媒体信息。
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

        if (array_key_exists("LinkMaterial",$param) and $param["LinkMaterial"] !== null) {
            $this->LinkMaterial = new LinkMaterial();
            $this->LinkMaterial->deserialize($param["LinkMaterial"]);
        }

        if (array_key_exists("VideoEditTemplateMaterial",$param) and $param["VideoEditTemplateMaterial"] !== null) {
            $this->VideoEditTemplateMaterial = new VideoEditTemplateMaterial();
            $this->VideoEditTemplateMaterial->deserialize($param["VideoEditTemplateMaterial"]);
        }

        if (array_key_exists("OtherMaterial",$param) and $param["OtherMaterial"] !== null) {
            $this->OtherMaterial = new OtherMaterial();
            $this->OtherMaterial->deserialize($param["OtherMaterial"]);
        }
    }
}
