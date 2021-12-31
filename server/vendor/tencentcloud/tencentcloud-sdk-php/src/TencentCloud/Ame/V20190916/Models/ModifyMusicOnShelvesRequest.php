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
 * ModifyMusicOnShelves请求参数结构体
 *
 * @method MusicDetailInfo getMusicDetailInfos() 获取歌曲变更信息
 * @method void setMusicDetailInfos(MusicDetailInfo $MusicDetailInfos) 设置歌曲变更信息
 * @method string getAmeKey() 获取ame对接资源方密钥
 * @method void setAmeKey(string $AmeKey) 设置ame对接资源方密钥
 */
class ModifyMusicOnShelvesRequest extends AbstractModel
{
    /**
     * @var MusicDetailInfo 歌曲变更信息
     */
    public $MusicDetailInfos;

    /**
     * @var string ame对接资源方密钥
     */
    public $AmeKey;

    /**
     * @param MusicDetailInfo $MusicDetailInfos 歌曲变更信息
     * @param string $AmeKey ame对接资源方密钥
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
        if (array_key_exists("MusicDetailInfos",$param) and $param["MusicDetailInfos"] !== null) {
            $this->MusicDetailInfos = new MusicDetailInfo();
            $this->MusicDetailInfos->deserialize($param["MusicDetailInfos"]);
        }

        if (array_key_exists("AmeKey",$param) and $param["AmeKey"] !== null) {
            $this->AmeKey = $param["AmeKey"];
        }
    }
}
