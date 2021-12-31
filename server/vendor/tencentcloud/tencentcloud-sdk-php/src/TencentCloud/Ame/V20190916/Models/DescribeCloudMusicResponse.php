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
 * DescribeCloudMusic返回参数结构体
 *
 * @method string getMusicId() 获取歌曲Id
 * @method void setMusicId(string $MusicId) 设置歌曲Id
 * @method string getMusicName() 获取歌曲名称
 * @method void setMusicName(string $MusicName) 设置歌曲名称
 * @method integer getDuration() 获取歌曲时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置歌曲时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMusicUrl() 获取歌曲链接
 * @method void setMusicUrl(string $MusicUrl) 设置歌曲链接
 * @method string getMusicImageUrl() 获取歌曲图片
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMusicImageUrl(string $MusicImageUrl) 设置歌曲图片
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSingers() 获取歌手列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSingers(array $Singers) 设置歌手列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCloudMusicResponse extends AbstractModel
{
    /**
     * @var string 歌曲Id
     */
    public $MusicId;

    /**
     * @var string 歌曲名称
     */
    public $MusicName;

    /**
     * @var integer 歌曲时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 歌曲链接
     */
    public $MusicUrl;

    /**
     * @var string 歌曲图片
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MusicImageUrl;

    /**
     * @var array 歌手列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Singers;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MusicId 歌曲Id
     * @param string $MusicName 歌曲名称
     * @param integer $Duration 歌曲时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MusicUrl 歌曲链接
     * @param string $MusicImageUrl 歌曲图片
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Singers 歌手列表
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
        if (array_key_exists("MusicId",$param) and $param["MusicId"] !== null) {
            $this->MusicId = $param["MusicId"];
        }

        if (array_key_exists("MusicName",$param) and $param["MusicName"] !== null) {
            $this->MusicName = $param["MusicName"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("MusicUrl",$param) and $param["MusicUrl"] !== null) {
            $this->MusicUrl = $param["MusicUrl"];
        }

        if (array_key_exists("MusicImageUrl",$param) and $param["MusicImageUrl"] !== null) {
            $this->MusicImageUrl = $param["MusicImageUrl"];
        }

        if (array_key_exists("Singers",$param) and $param["Singers"] !== null) {
            $this->Singers = $param["Singers"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
