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
 * UserAgent黑白名单规则配置
 *
 * @method string getRuleType() 获取访问路径生效类型
all: 所有访问路径生效
file: 根据文件后缀类型生效
directory: 根据目录生效
path: 根据完整访问路径生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置访问路径生效类型
all: 所有访问路径生效
file: 根据文件后缀类型生效
directory: 根据目录生效
path: 根据完整访问路径生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRulePaths() 获取访问路径生效内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRulePaths(array $RulePaths) 设置访问路径生效内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserAgents() 获取UserAgent列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAgents(array $UserAgents) 设置UserAgent列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilterType() 获取黑名单或白名单，blacklist或whitelist
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilterType(string $FilterType) 设置黑名单或白名单，blacklist或whitelist
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserAgentFilterRule extends AbstractModel
{
    /**
     * @var string 访问路径生效类型
all: 所有访问路径生效
file: 根据文件后缀类型生效
directory: 根据目录生效
path: 根据完整访问路径生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var array 访问路径生效内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RulePaths;

    /**
     * @var array UserAgent列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAgents;

    /**
     * @var string 黑名单或白名单，blacklist或whitelist
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilterType;

    /**
     * @param string $RuleType 访问路径生效类型
all: 所有访问路径生效
file: 根据文件后缀类型生效
directory: 根据目录生效
path: 根据完整访问路径生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RulePaths 访问路径生效内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserAgents UserAgent列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilterType 黑名单或白名单，blacklist或whitelist
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }

        if (array_key_exists("UserAgents",$param) and $param["UserAgents"] !== null) {
            $this->UserAgents = $param["UserAgents"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }
    }
}
