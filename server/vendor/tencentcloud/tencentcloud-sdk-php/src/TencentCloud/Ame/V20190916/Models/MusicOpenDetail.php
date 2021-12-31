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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对外开放信息
 *
 * @method string getMusicId() 获取音乐Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMusicId(string $MusicId) 设置音乐Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlbumName() 获取专辑名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlbumName(string $AlbumName) 设置专辑名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlbumImageUrl() 获取专辑图片路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlbumImageUrl(string $AlbumImageUrl) 设置专辑图片路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMusicName() 获取音乐名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMusicName(string $MusicName) 设置音乐名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMusicImageUrl() 获取音乐图片路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMusicImageUrl(string $MusicImageUrl) 设置音乐图片路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSingers() 获取歌手
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSingers(array $Singers) 设置歌手
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取播放时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置播放时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLyricUrl() 获取歌词url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLyricUrl(string $LyricUrl) 设置歌词url
注意：此字段可能返回 null，表示取不到有效值。
 */
class MusicOpenDetail extends AbstractModel
{
    /**
     * @var string 音乐Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MusicId;

    /**
     * @var string 专辑名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlbumName;

    /**
     * @var string 专辑图片路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlbumImageUrl;

    /**
     * @var string 音乐名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MusicName;

    /**
     * @var string 音乐图片路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MusicImageUrl;

    /**
     * @var array 歌手
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Singers;

    /**
     * @var integer 播放时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string 歌词url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LyricUrl;

    /**
     * @param string $MusicId 音乐Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlbumName 专辑名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlbumImageUrl 专辑图片路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MusicName 音乐名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MusicImageUrl 音乐图片路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Singers 歌手
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 播放时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LyricUrl 歌词url
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
        if (array_key_exists("MusicId",$param) and $param["MusicId"] !== null) {
            $this->MusicId = $param["MusicId"];
        }

        if (array_key_exists("AlbumName",$param) and $param["AlbumName"] !== null) {
            $this->AlbumName = $param["AlbumName"];
        }

        if (array_key_exists("AlbumImageUrl",$param) and $param["AlbumImageUrl"] !== null) {
            $this->AlbumImageUrl = $param["AlbumImageUrl"];
        }

        if (array_key_exists("MusicName",$param) and $param["MusicName"] !== null) {
            $this->MusicName = $param["MusicName"];
        }

        if (array_key_exists("MusicImageUrl",$param) and $param["MusicImageUrl"] !== null) {
            $this->MusicImageUrl = $param["MusicImageUrl"];
        }

        if (array_key_exists("Singers",$param) and $param["Singers"] !== null) {
            $this->Singers = $param["Singers"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("LyricUrl",$param) and $param["LyricUrl"] !== null) {
            $this->LyricUrl = $param["LyricUrl"];
        }
    }
}
