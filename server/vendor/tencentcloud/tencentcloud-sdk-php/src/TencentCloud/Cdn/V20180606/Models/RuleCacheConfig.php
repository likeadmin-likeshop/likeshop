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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 路径缓存缓存配置（三种缓存模式中选取一种）
 *
 * @method CacheConfigCache getCache() 获取缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCache(CacheConfigCache $Cache) 设置缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheConfigNoCache getNoCache() 获取不缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoCache(CacheConfigNoCache $NoCache) 设置不缓存配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheConfigFollowOrigin getFollowOrigin() 获取遵循源站配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowOrigin(CacheConfigFollowOrigin $FollowOrigin) 设置遵循源站配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleCacheConfig extends AbstractModel
{
    /**
     * @var CacheConfigCache 缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cache;

    /**
     * @var CacheConfigNoCache 不缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoCache;

    /**
     * @var CacheConfigFollowOrigin 遵循源站配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowOrigin;

    /**
     * @param CacheConfigCache $Cache 缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheConfigNoCache $NoCache 不缓存配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheConfigFollowOrigin $FollowOrigin 遵循源站配置
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
        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new CacheConfigCache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("NoCache",$param) and $param["NoCache"] !== null) {
            $this->NoCache = new CacheConfigNoCache();
            $this->NoCache->deserialize($param["NoCache"]);
        }

        if (array_key_exists("FollowOrigin",$param) and $param["FollowOrigin"] !== null) {
            $this->FollowOrigin = new CacheConfigFollowOrigin();
            $this->FollowOrigin->deserialize($param["FollowOrigin"]);
        }
    }
}
