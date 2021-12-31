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
 * 画质增强参数信息
 *
 * @method ArtifactReduction getArtifactReduction() 获取去编码毛刺、伪影参数。
 * @method void setArtifactReduction(ArtifactReduction $ArtifactReduction) 设置去编码毛刺、伪影参数。
 * @method Denoising getDenoising() 获取去噪声参数。
 * @method void setDenoising(Denoising $Denoising) 设置去噪声参数。
 * @method ColorEnhance getColorEnhance() 获取颜色增强参数。
 * @method void setColorEnhance(ColorEnhance $ColorEnhance) 设置颜色增强参数。
 * @method Sharp getSharp() 获取细节增强参数。
 * @method void setSharp(Sharp $Sharp) 设置细节增强参数。
 * @method integer getWdSuperResolution() 获取超分参数，可选项：2，目前仅支持2倍超分。
注意：此参数已经弃用，超分可以使用VideoSuperResolution参数
 * @method void setWdSuperResolution(integer $WdSuperResolution) 设置超分参数，可选项：2，目前仅支持2倍超分。
注意：此参数已经弃用，超分可以使用VideoSuperResolution参数
 * @method FaceProtect getFaceProtect() 获取人脸保护信息。
 * @method void setFaceProtect(FaceProtect $FaceProtect) 设置人脸保护信息。
 * @method integer getWdFps() 获取插帧，取值范围：[0, 60]，单位：Hz。
注意：当取值为 0，表示帧率和原始视频保持一致。
 * @method void setWdFps(integer $WdFps) 设置插帧，取值范围：[0, 60]，单位：Hz。
注意：当取值为 0，表示帧率和原始视频保持一致。
 * @method ScratchRepair getScratchRepair() 获取去划痕参数
 * @method void setScratchRepair(ScratchRepair $ScratchRepair) 设置去划痕参数
 * @method LowLightEnhance getLowLightEnhance() 获取低光照增强参数
 * @method void setLowLightEnhance(LowLightEnhance $LowLightEnhance) 设置低光照增强参数
 * @method VideoSuperResolution getVideoSuperResolution() 获取视频超分参数
 * @method void setVideoSuperResolution(VideoSuperResolution $VideoSuperResolution) 设置视频超分参数
 * @method VideoRepair getVideoRepair() 获取视频画质修复参数
 * @method void setVideoRepair(VideoRepair $VideoRepair) 设置视频画质修复参数
 */
class VideoEnhance extends AbstractModel
{
    /**
     * @var ArtifactReduction 去编码毛刺、伪影参数。
     */
    public $ArtifactReduction;

    /**
     * @var Denoising 去噪声参数。
     */
    public $Denoising;

    /**
     * @var ColorEnhance 颜色增强参数。
     */
    public $ColorEnhance;

    /**
     * @var Sharp 细节增强参数。
     */
    public $Sharp;

    /**
     * @var integer 超分参数，可选项：2，目前仅支持2倍超分。
注意：此参数已经弃用，超分可以使用VideoSuperResolution参数
     */
    public $WdSuperResolution;

    /**
     * @var FaceProtect 人脸保护信息。
     */
    public $FaceProtect;

    /**
     * @var integer 插帧，取值范围：[0, 60]，单位：Hz。
注意：当取值为 0，表示帧率和原始视频保持一致。
     */
    public $WdFps;

    /**
     * @var ScratchRepair 去划痕参数
     */
    public $ScratchRepair;

    /**
     * @var LowLightEnhance 低光照增强参数
     */
    public $LowLightEnhance;

    /**
     * @var VideoSuperResolution 视频超分参数
     */
    public $VideoSuperResolution;

    /**
     * @var VideoRepair 视频画质修复参数
     */
    public $VideoRepair;

    /**
     * @param ArtifactReduction $ArtifactReduction 去编码毛刺、伪影参数。
     * @param Denoising $Denoising 去噪声参数。
     * @param ColorEnhance $ColorEnhance 颜色增强参数。
     * @param Sharp $Sharp 细节增强参数。
     * @param integer $WdSuperResolution 超分参数，可选项：2，目前仅支持2倍超分。
注意：此参数已经弃用，超分可以使用VideoSuperResolution参数
     * @param FaceProtect $FaceProtect 人脸保护信息。
     * @param integer $WdFps 插帧，取值范围：[0, 60]，单位：Hz。
注意：当取值为 0，表示帧率和原始视频保持一致。
     * @param ScratchRepair $ScratchRepair 去划痕参数
     * @param LowLightEnhance $LowLightEnhance 低光照增强参数
     * @param VideoSuperResolution $VideoSuperResolution 视频超分参数
     * @param VideoRepair $VideoRepair 视频画质修复参数
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
        if (array_key_exists("ArtifactReduction",$param) and $param["ArtifactReduction"] !== null) {
            $this->ArtifactReduction = new ArtifactReduction();
            $this->ArtifactReduction->deserialize($param["ArtifactReduction"]);
        }

        if (array_key_exists("Denoising",$param) and $param["Denoising"] !== null) {
            $this->Denoising = new Denoising();
            $this->Denoising->deserialize($param["Denoising"]);
        }

        if (array_key_exists("ColorEnhance",$param) and $param["ColorEnhance"] !== null) {
            $this->ColorEnhance = new ColorEnhance();
            $this->ColorEnhance->deserialize($param["ColorEnhance"]);
        }

        if (array_key_exists("Sharp",$param) and $param["Sharp"] !== null) {
            $this->Sharp = new Sharp();
            $this->Sharp->deserialize($param["Sharp"]);
        }

        if (array_key_exists("WdSuperResolution",$param) and $param["WdSuperResolution"] !== null) {
            $this->WdSuperResolution = $param["WdSuperResolution"];
        }

        if (array_key_exists("FaceProtect",$param) and $param["FaceProtect"] !== null) {
            $this->FaceProtect = new FaceProtect();
            $this->FaceProtect->deserialize($param["FaceProtect"]);
        }

        if (array_key_exists("WdFps",$param) and $param["WdFps"] !== null) {
            $this->WdFps = $param["WdFps"];
        }

        if (array_key_exists("ScratchRepair",$param) and $param["ScratchRepair"] !== null) {
            $this->ScratchRepair = new ScratchRepair();
            $this->ScratchRepair->deserialize($param["ScratchRepair"]);
        }

        if (array_key_exists("LowLightEnhance",$param) and $param["LowLightEnhance"] !== null) {
            $this->LowLightEnhance = new LowLightEnhance();
            $this->LowLightEnhance->deserialize($param["LowLightEnhance"]);
        }

        if (array_key_exists("VideoSuperResolution",$param) and $param["VideoSuperResolution"] !== null) {
            $this->VideoSuperResolution = new VideoSuperResolution();
            $this->VideoSuperResolution->deserialize($param["VideoSuperResolution"]);
        }

        if (array_key_exists("VideoRepair",$param) and $param["VideoRepair"] !== null) {
            $this->VideoRepair = new VideoRepair();
            $this->VideoRepair->deserialize($param["VideoRepair"]);
        }
    }
}
