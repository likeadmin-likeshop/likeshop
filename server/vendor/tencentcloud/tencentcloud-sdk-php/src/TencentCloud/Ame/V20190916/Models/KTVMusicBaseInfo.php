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
 * KTV 曲目基础信息
 *
 * @method string getMusicId() 获取歌曲 Id
 * @method void setMusicId(string $MusicId) 设置歌曲 Id
 * @method string getName() 获取歌曲名称
 * @method void setName(string $Name) 设置歌曲名称
 * @method array getSingerSet() 获取演唱者列表
 * @method void setSingerSet(array $SingerSet) 设置演唱者列表
 * @method array getLyricistSet() 获取作词者列表
 * @method void setLyricistSet(array $LyricistSet) 设置作词者列表
 * @method array getComposerSet() 获取作曲者列表
 * @method void setComposerSet(array $ComposerSet) 设置作曲者列表
 * @method array getTagSet() 获取标签列表
 * @method void setTagSet(array $TagSet) 设置标签列表
 */
class KTVMusicBaseInfo extends AbstractModel
{
    /**
     * @var string 歌曲 Id
     */
    public $MusicId;

    /**
     * @var string 歌曲名称
     */
    public $Name;

    /**
     * @var array 演唱者列表
     */
    public $SingerSet;

    /**
     * @var array 作词者列表
     */
    public $LyricistSet;

    /**
     * @var array 作曲者列表
     */
    public $ComposerSet;

    /**
     * @var array 标签列表
     */
    public $TagSet;

    /**
     * @param string $MusicId 歌曲 Id
     * @param string $Name 歌曲名称
     * @param array $SingerSet 演唱者列表
     * @param array $LyricistSet 作词者列表
     * @param array $ComposerSet 作曲者列表
     * @param array $TagSet 标签列表
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SingerSet",$param) and $param["SingerSet"] !== null) {
            $this->SingerSet = $param["SingerSet"];
        }

        if (array_key_exists("LyricistSet",$param) and $param["LyricistSet"] !== null) {
            $this->LyricistSet = $param["LyricistSet"];
        }

        if (array_key_exists("ComposerSet",$param) and $param["ComposerSet"] !== null) {
            $this->ComposerSet = $param["ComposerSet"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }
    }
}
