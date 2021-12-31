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
 * 缓存键分路径配置
 *
 * @method array getRulePaths() 获取CacheType 对应类型下的匹配内容：
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
index 时填充 /
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRulePaths(array $RulePaths) 设置CacheType 对应类型下的匹配内容：
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
index 时填充 /
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取规则类型：
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
index：首页
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置规则类型：
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
index：首页
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullUrlCache() 获取是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullUrlCache(string $FullUrlCache) 设置是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIgnoreCase() 获取是否忽略大小写缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreCase(string $IgnoreCase) 设置是否忽略大小写缓存
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleQueryString getQueryString() 获取CacheKey中包含请求参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryString(RuleQueryString $QueryString) 设置CacheKey中包含请求参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleTag() 获取路径缓存键标签，传 user
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleTag(string $RuleTag) 设置路径缓存键标签，传 user
注意：此字段可能返回 null，表示取不到有效值。
 */
class KeyRule extends AbstractModel
{
    /**
     * @var array CacheType 对应类型下的匹配内容：
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
index 时填充 /
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RulePaths;

    /**
     * @var string 规则类型：
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
index：首页
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var string 是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullUrlCache;

    /**
     * @var string 是否忽略大小写缓存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreCase;

    /**
     * @var RuleQueryString CacheKey中包含请求参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryString;

    /**
     * @var string 路径缓存键标签，传 user
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleTag;

    /**
     * @param array $RulePaths CacheType 对应类型下的匹配内容：
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test
path 时填充绝对路径，如 /xxx/test.html
index 时填充 /
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType 规则类型：
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
index：首页
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullUrlCache 是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IgnoreCase 是否忽略大小写缓存
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleQueryString $QueryString CacheKey中包含请求参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleTag 路径缓存键标签，传 user
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
        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("FullUrlCache",$param) and $param["FullUrlCache"] !== null) {
            $this->FullUrlCache = $param["FullUrlCache"];
        }

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new RuleQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }

        if (array_key_exists("RuleTag",$param) and $param["RuleTag"] !== null) {
            $this->RuleTag = $param["RuleTag"];
        }
    }
}
