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
 * 点播文件信息
 *
 * @method MediaBasicInfo getBasicInfo() 获取基础信息。包括视频名称、分类、播放地址、封面图片等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBasicInfo(MediaBasicInfo $BasicInfo) 设置基础信息。包括视频名称、分类、播放地址、封面图片等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMetaData getMetaData() 获取元信息。包括大小、时长、视频流信息、音频流信息等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetaData(MediaMetaData $MetaData) 设置元信息。包括大小、时长、视频流信息、音频流信息等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaTranscodeInfo getTranscodeInfo() 获取转码结果信息。包括该视频转码生成的各种码率的视频的地址、规格、码率、分辨率等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeInfo(MediaTranscodeInfo $TranscodeInfo) 设置转码结果信息。包括该视频转码生成的各种码率的视频的地址、规格、码率、分辨率等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaAnimatedGraphicsInfo getAnimatedGraphicsInfo() 获取转动图结果信息。对视频转动图（如 gif）后，动图相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnimatedGraphicsInfo(MediaAnimatedGraphicsInfo $AnimatedGraphicsInfo) 设置转动图结果信息。对视频转动图（如 gif）后，动图相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaSampleSnapshotInfo getSampleSnapshotInfo() 获取采样截图信息。对视频采样截图后，相关截图信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleSnapshotInfo(MediaSampleSnapshotInfo $SampleSnapshotInfo) 设置采样截图信息。对视频采样截图后，相关截图信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaImageSpriteInfo getImageSpriteInfo() 获取雪碧图信息。对视频截取雪碧图之后，雪碧的相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageSpriteInfo(MediaImageSpriteInfo $ImageSpriteInfo) 设置雪碧图信息。对视频截取雪碧图之后，雪碧的相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaSnapshotByTimeOffsetInfo getSnapshotByTimeOffsetInfo() 获取指定时间点截图信息。对视频依照指定时间点截图后，各个截图的信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotByTimeOffsetInfo(MediaSnapshotByTimeOffsetInfo $SnapshotByTimeOffsetInfo) 设置指定时间点截图信息。对视频依照指定时间点截图后，各个截图的信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaKeyFrameDescInfo getKeyFrameDescInfo() 获取视频打点信息。对视频设置的各个打点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyFrameDescInfo(MediaKeyFrameDescInfo $KeyFrameDescInfo) 设置视频打点信息。对视频设置的各个打点信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaAdaptiveDynamicStreamingInfo getAdaptiveDynamicStreamingInfo() 获取转自适应码流信息。包括规格、加密类型、打包格式等相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdaptiveDynamicStreamingInfo(MediaAdaptiveDynamicStreamingInfo $AdaptiveDynamicStreamingInfo) 设置转自适应码流信息。包括规格、加密类型、打包格式等相关信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaMiniProgramReviewInfo getMiniProgramReviewInfo() 获取小程序审核信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniProgramReviewInfo(MediaMiniProgramReviewInfo $MiniProgramReviewInfo) 设置小程序审核信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaSubtitleInfo getSubtitleInfo() 获取字幕信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubtitleInfo(MediaSubtitleInfo $SubtitleInfo) 设置字幕信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileId() 获取媒体文件唯一标识 ID。
 * @method void setFileId(string $FileId) 设置媒体文件唯一标识 ID。
 */
class MediaInfo extends AbstractModel
{
    /**
     * @var MediaBasicInfo 基础信息。包括视频名称、分类、播放地址、封面图片等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BasicInfo;

    /**
     * @var MediaMetaData 元信息。包括大小、时长、视频流信息、音频流信息等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetaData;

    /**
     * @var MediaTranscodeInfo 转码结果信息。包括该视频转码生成的各种码率的视频的地址、规格、码率、分辨率等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeInfo;

    /**
     * @var MediaAnimatedGraphicsInfo 转动图结果信息。对视频转动图（如 gif）后，动图相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnimatedGraphicsInfo;

    /**
     * @var MediaSampleSnapshotInfo 采样截图信息。对视频采样截图后，相关截图信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleSnapshotInfo;

    /**
     * @var MediaImageSpriteInfo 雪碧图信息。对视频截取雪碧图之后，雪碧的相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageSpriteInfo;

    /**
     * @var MediaSnapshotByTimeOffsetInfo 指定时间点截图信息。对视频依照指定时间点截图后，各个截图的信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotByTimeOffsetInfo;

    /**
     * @var MediaKeyFrameDescInfo 视频打点信息。对视频设置的各个打点信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyFrameDescInfo;

    /**
     * @var MediaAdaptiveDynamicStreamingInfo 转自适应码流信息。包括规格、加密类型、打包格式等相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdaptiveDynamicStreamingInfo;

    /**
     * @var MediaMiniProgramReviewInfo 小程序审核信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniProgramReviewInfo;

    /**
     * @var MediaSubtitleInfo 字幕信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubtitleInfo;

    /**
     * @var string 媒体文件唯一标识 ID。
     */
    public $FileId;

    /**
     * @param MediaBasicInfo $BasicInfo 基础信息。包括视频名称、分类、播放地址、封面图片等。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMetaData $MetaData 元信息。包括大小、时长、视频流信息、音频流信息等。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaTranscodeInfo $TranscodeInfo 转码结果信息。包括该视频转码生成的各种码率的视频的地址、规格、码率、分辨率等。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaAnimatedGraphicsInfo $AnimatedGraphicsInfo 转动图结果信息。对视频转动图（如 gif）后，动图相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaSampleSnapshotInfo $SampleSnapshotInfo 采样截图信息。对视频采样截图后，相关截图信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaImageSpriteInfo $ImageSpriteInfo 雪碧图信息。对视频截取雪碧图之后，雪碧的相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaSnapshotByTimeOffsetInfo $SnapshotByTimeOffsetInfo 指定时间点截图信息。对视频依照指定时间点截图后，各个截图的信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaKeyFrameDescInfo $KeyFrameDescInfo 视频打点信息。对视频设置的各个打点信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaAdaptiveDynamicStreamingInfo $AdaptiveDynamicStreamingInfo 转自适应码流信息。包括规格、加密类型、打包格式等相关信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaMiniProgramReviewInfo $MiniProgramReviewInfo 小程序审核信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaSubtitleInfo $SubtitleInfo 字幕信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileId 媒体文件唯一标识 ID。
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
            $this->BasicInfo = new MediaBasicInfo();
            $this->BasicInfo->deserialize($param["BasicInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("TranscodeInfo",$param) and $param["TranscodeInfo"] !== null) {
            $this->TranscodeInfo = new MediaTranscodeInfo();
            $this->TranscodeInfo->deserialize($param["TranscodeInfo"]);
        }

        if (array_key_exists("AnimatedGraphicsInfo",$param) and $param["AnimatedGraphicsInfo"] !== null) {
            $this->AnimatedGraphicsInfo = new MediaAnimatedGraphicsInfo();
            $this->AnimatedGraphicsInfo->deserialize($param["AnimatedGraphicsInfo"]);
        }

        if (array_key_exists("SampleSnapshotInfo",$param) and $param["SampleSnapshotInfo"] !== null) {
            $this->SampleSnapshotInfo = new MediaSampleSnapshotInfo();
            $this->SampleSnapshotInfo->deserialize($param["SampleSnapshotInfo"]);
        }

        if (array_key_exists("ImageSpriteInfo",$param) and $param["ImageSpriteInfo"] !== null) {
            $this->ImageSpriteInfo = new MediaImageSpriteInfo();
            $this->ImageSpriteInfo->deserialize($param["ImageSpriteInfo"]);
        }

        if (array_key_exists("SnapshotByTimeOffsetInfo",$param) and $param["SnapshotByTimeOffsetInfo"] !== null) {
            $this->SnapshotByTimeOffsetInfo = new MediaSnapshotByTimeOffsetInfo();
            $this->SnapshotByTimeOffsetInfo->deserialize($param["SnapshotByTimeOffsetInfo"]);
        }

        if (array_key_exists("KeyFrameDescInfo",$param) and $param["KeyFrameDescInfo"] !== null) {
            $this->KeyFrameDescInfo = new MediaKeyFrameDescInfo();
            $this->KeyFrameDescInfo->deserialize($param["KeyFrameDescInfo"]);
        }

        if (array_key_exists("AdaptiveDynamicStreamingInfo",$param) and $param["AdaptiveDynamicStreamingInfo"] !== null) {
            $this->AdaptiveDynamicStreamingInfo = new MediaAdaptiveDynamicStreamingInfo();
            $this->AdaptiveDynamicStreamingInfo->deserialize($param["AdaptiveDynamicStreamingInfo"]);
        }

        if (array_key_exists("MiniProgramReviewInfo",$param) and $param["MiniProgramReviewInfo"] !== null) {
            $this->MiniProgramReviewInfo = new MediaMiniProgramReviewInfo();
            $this->MiniProgramReviewInfo->deserialize($param["MiniProgramReviewInfo"]);
        }

        if (array_key_exists("SubtitleInfo",$param) and $param["SubtitleInfo"] !== null) {
            $this->SubtitleInfo = new MediaSubtitleInfo();
            $this->SubtitleInfo->deserialize($param["SubtitleInfo"]);
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
