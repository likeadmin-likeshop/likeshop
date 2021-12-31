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
 * 缓存键配置（过滤参数配置）
 *
 * @method string getFullUrlCache() 获取是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
 * @method void setFullUrlCache(string $FullUrlCache) 设置是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
 * @method string getIgnoreCase() 获取是否忽略大小写缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreCase(string $IgnoreCase) 设置是否忽略大小写缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method QueryStringKey getQueryString() 获取CacheKey中包含请求参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryString(QueryStringKey $QueryString) 设置CacheKey中包含请求参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method CookieKey getCookie() 获取CacheKey中包含Cookie
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCookie(CookieKey $Cookie) 设置CacheKey中包含Cookie
注意：此字段可能返回 null，表示取不到有效值。
 * @method HeaderKey getHeader() 获取CacheKey中包含请求头部
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeader(HeaderKey $Header) 设置CacheKey中包含请求头部
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheTagKey getCacheTag() 获取CacheKey中包含自定义字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheTag(CacheTagKey $CacheTag) 设置CacheKey中包含自定义字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method SchemeKey getScheme() 获取CacheKey中包含请求协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheme(SchemeKey $Scheme) 设置CacheKey中包含请求协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeyRules() 获取分路径缓存键配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyRules(array $KeyRules) 设置分路径缓存键配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class CacheKey extends AbstractModel
{
    /**
     * @var string 是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
     */
    public $FullUrlCache;

    /**
     * @var string 是否忽略大小写缓存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreCase;

    /**
     * @var QueryStringKey CacheKey中包含请求参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryString;

    /**
     * @var CookieKey CacheKey中包含Cookie
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cookie;

    /**
     * @var HeaderKey CacheKey中包含请求头部
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Header;

    /**
     * @var CacheTagKey CacheKey中包含自定义字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheTag;

    /**
     * @var SchemeKey CacheKey中包含请求协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scheme;

    /**
     * @var array 分路径缓存键配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyRules;

    /**
     * @param string $FullUrlCache 是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
     * @param string $IgnoreCase 是否忽略大小写缓存
注意：此字段可能返回 null，表示取不到有效值。
     * @param QueryStringKey $QueryString CacheKey中包含请求参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param CookieKey $Cookie CacheKey中包含Cookie
注意：此字段可能返回 null，表示取不到有效值。
     * @param HeaderKey $Header CacheKey中包含请求头部
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheTagKey $CacheTag CacheKey中包含自定义字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param SchemeKey $Scheme CacheKey中包含请求协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KeyRules 分路径缓存键配置
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
        if (array_key_exists("FullUrlCache",$param) and $param["FullUrlCache"] !== null) {
            $this->FullUrlCache = $param["FullUrlCache"];
        }

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new QueryStringKey();
            $this->QueryString->deserialize($param["QueryString"]);
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = new CookieKey();
            $this->Cookie->deserialize($param["Cookie"]);
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = new HeaderKey();
            $this->Header->deserialize($param["Header"]);
        }

        if (array_key_exists("CacheTag",$param) and $param["CacheTag"] !== null) {
            $this->CacheTag = new CacheTagKey();
            $this->CacheTag->deserialize($param["CacheTag"]);
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = new SchemeKey();
            $this->Scheme->deserialize($param["Scheme"]);
        }

        if (array_key_exists("KeyRules",$param) and $param["KeyRules"] !== null) {
            $this->KeyRules = [];
            foreach ($param["KeyRules"] as $key => $value){
                $obj = new KeyRule();
                $obj->deserialize($value);
                array_push($this->KeyRules, $obj);
            }
        }
    }
}
