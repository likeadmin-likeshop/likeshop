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
 * 媒体轨道的片段信息
 *
 * @method string getType() 获取片段类型。取值有：
<li>Video：视频片段。</li>
<li>Audio：音频片段。</li>
<li>Sticker：贴图片段。</li>
<li>Transition：转场。</li>
<li>Empty：空白片段。</li>
 * @method void setType(string $Type) 设置片段类型。取值有：
<li>Video：视频片段。</li>
<li>Audio：音频片段。</li>
<li>Sticker：贴图片段。</li>
<li>Transition：转场。</li>
<li>Empty：空白片段。</li>
 * @method VideoTrackItem getVideoItem() 获取视频片段，当 Type = Video 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoItem(VideoTrackItem $VideoItem) 设置视频片段，当 Type = Video 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AudioTrackItem getAudioItem() 获取音频片段，当 Type = Audio 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioItem(AudioTrackItem $AudioItem) 设置音频片段，当 Type = Audio 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method StickerTrackItem getStickerItem() 获取贴图片段，当 Type = Sticker 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStickerItem(StickerTrackItem $StickerItem) 设置贴图片段，当 Type = Sticker 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MediaTransitionItem getTransitionItem() 获取转场，当 Type = Transition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransitionItem(MediaTransitionItem $TransitionItem) 设置转场，当 Type = Transition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method EmptyTrackItem getEmptyItem() 获取空白片段，当 Type = Empty 时有效。空片段用于时间轴的占位。<li>如需要两个音频片段之间有一段时间的静音，可以用 EmptyTrackItem 来进行占位。</li>
<li>使用 EmptyTrackItem 进行占位，来定位某个Item。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmptyItem(EmptyTrackItem $EmptyItem) 设置空白片段，当 Type = Empty 时有效。空片段用于时间轴的占位。<li>如需要两个音频片段之间有一段时间的静音，可以用 EmptyTrackItem 来进行占位。</li>
<li>使用 EmptyTrackItem 进行占位，来定位某个Item。</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaTrackItem extends AbstractModel
{
    /**
     * @var string 片段类型。取值有：
<li>Video：视频片段。</li>
<li>Audio：音频片段。</li>
<li>Sticker：贴图片段。</li>
<li>Transition：转场。</li>
<li>Empty：空白片段。</li>
     */
    public $Type;

    /**
     * @var VideoTrackItem 视频片段，当 Type = Video 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoItem;

    /**
     * @var AudioTrackItem 音频片段，当 Type = Audio 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioItem;

    /**
     * @var StickerTrackItem 贴图片段，当 Type = Sticker 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StickerItem;

    /**
     * @var MediaTransitionItem 转场，当 Type = Transition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransitionItem;

    /**
     * @var EmptyTrackItem 空白片段，当 Type = Empty 时有效。空片段用于时间轴的占位。<li>如需要两个音频片段之间有一段时间的静音，可以用 EmptyTrackItem 来进行占位。</li>
<li>使用 EmptyTrackItem 进行占位，来定位某个Item。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmptyItem;

    /**
     * @param string $Type 片段类型。取值有：
<li>Video：视频片段。</li>
<li>Audio：音频片段。</li>
<li>Sticker：贴图片段。</li>
<li>Transition：转场。</li>
<li>Empty：空白片段。</li>
     * @param VideoTrackItem $VideoItem 视频片段，当 Type = Video 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AudioTrackItem $AudioItem 音频片段，当 Type = Audio 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param StickerTrackItem $StickerItem 贴图片段，当 Type = Sticker 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MediaTransitionItem $TransitionItem 转场，当 Type = Transition 时有效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param EmptyTrackItem $EmptyItem 空白片段，当 Type = Empty 时有效。空片段用于时间轴的占位。<li>如需要两个音频片段之间有一段时间的静音，可以用 EmptyTrackItem 来进行占位。</li>
<li>使用 EmptyTrackItem 进行占位，来定位某个Item。</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VideoItem",$param) and $param["VideoItem"] !== null) {
            $this->VideoItem = new VideoTrackItem();
            $this->VideoItem->deserialize($param["VideoItem"]);
        }

        if (array_key_exists("AudioItem",$param) and $param["AudioItem"] !== null) {
            $this->AudioItem = new AudioTrackItem();
            $this->AudioItem->deserialize($param["AudioItem"]);
        }

        if (array_key_exists("StickerItem",$param) and $param["StickerItem"] !== null) {
            $this->StickerItem = new StickerTrackItem();
            $this->StickerItem->deserialize($param["StickerItem"]);
        }

        if (array_key_exists("TransitionItem",$param) and $param["TransitionItem"] !== null) {
            $this->TransitionItem = new MediaTransitionItem();
            $this->TransitionItem->deserialize($param["TransitionItem"]);
        }

        if (array_key_exists("EmptyItem",$param) and $param["EmptyItem"] !== null) {
            $this->EmptyItem = new EmptyTrackItem();
            $this->EmptyItem->deserialize($param["EmptyItem"]);
        }
    }
}
