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
 * PutMusicOnTheShelves请求参数结构体
 *
 * @method array getMusicIds() 获取资源方歌曲Id
 * @method void setMusicIds(array $MusicIds) 设置资源方歌曲Id
 */
class PutMusicOnTheShelvesRequest extends AbstractModel
{
    /**
     * @var array 资源方歌曲Id
     */
    public $MusicIds;

    /**
     * @param array $MusicIds 资源方歌曲Id
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
        if (array_key_exists("MusicIds",$param) and $param["MusicIds"] !== null) {
            $this->MusicIds = $param["MusicIds"];
        }
    }
}
