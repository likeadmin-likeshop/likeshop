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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 缓存配置规则。
 *
 * @method string getCacheType() 获取缓存类型，支持all，file，directory，path，index，分别表示全部文件，后缀类型，目录，完整路径，首页。
 * @method void setCacheType(string $CacheType) 设置缓存类型，支持all，file，directory，path，index，分别表示全部文件，后缀类型，目录，完整路径，首页。
 * @method array getCacheContents() 获取缓存内容列表。
 * @method void setCacheContents(array $CacheContents) 设置缓存内容列表。
 * @method integer getCacheTime() 获取缓存时间，单位秒。
 * @method void setCacheTime(integer $CacheTime) 设置缓存时间，单位秒。
 */
class CacheRule extends AbstractModel
{
    /**
     * @var string 缓存类型，支持all，file，directory，path，index，分别表示全部文件，后缀类型，目录，完整路径，首页。
     */
    public $CacheType;

    /**
     * @var array 缓存内容列表。
     */
    public $CacheContents;

    /**
     * @var integer 缓存时间，单位秒。
     */
    public $CacheTime;

    /**
     * @param string $CacheType 缓存类型，支持all，file，directory，path，index，分别表示全部文件，后缀类型，目录，完整路径，首页。
     * @param array $CacheContents 缓存内容列表。
     * @param integer $CacheTime 缓存时间，单位秒。
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
        if (array_key_exists("CacheType",$param) and $param["CacheType"] !== null) {
            $this->CacheType = $param["CacheType"];
        }

        if (array_key_exists("CacheContents",$param) and $param["CacheContents"] !== null) {
            $this->CacheContents = $param["CacheContents"];
        }

        if (array_key_exists("CacheTime",$param) and $param["CacheTime"] !== null) {
            $this->CacheTime = $param["CacheTime"];
        }
    }
}
