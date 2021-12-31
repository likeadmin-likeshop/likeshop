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
 * Referer 黑白名单配置规则，针对特定资源生效
 *
 * @method string getRuleType() 获取规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
 * @method void setRuleType(string $RuleType) 设置规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
 * @method array getRulePaths() 获取RuleType 对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test/
path 时填充绝对路径，如 /xxx/test.html
 * @method void setRulePaths(array $RulePaths) 设置RuleType 对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test/
path 时填充绝对路径，如 /xxx/test.html
 * @method string getRefererType() 获取referer 配置类型
whitelist：白名单
blacklist：黑名单
 * @method void setRefererType(string $RefererType) 设置referer 配置类型
whitelist：白名单
blacklist：黑名单
 * @method array getReferers() 获取referer 内容列表列表
 * @method void setReferers(array $Referers) 设置referer 内容列表列表
 * @method boolean getAllowEmpty() 获取是否允许空 referer
true：允许空 referer
false：不允许空 referer
 * @method void setAllowEmpty(boolean $AllowEmpty) 设置是否允许空 referer
true：允许空 referer
false：不允许空 referer
 */
class RefererRule extends AbstractModel
{
    /**
     * @var string 规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
     */
    public $RuleType;

    /**
     * @var array RuleType 对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test/
path 时填充绝对路径，如 /xxx/test.html
     */
    public $RulePaths;

    /**
     * @var string referer 配置类型
whitelist：白名单
blacklist：黑名单
     */
    public $RefererType;

    /**
     * @var array referer 内容列表列表
     */
    public $Referers;

    /**
     * @var boolean 是否允许空 referer
true：允许空 referer
false：不允许空 referer
     */
    public $AllowEmpty;

    /**
     * @param string $RuleType 规则类型：
all：所有文件生效
file：指定文件后缀生效
directory：指定路径生效
path：指定绝对路径生效
     * @param array $RulePaths RuleType 对应类型下的匹配内容：
all 时填充 *
file 时填充后缀名，如 jpg、txt
directory 时填充路径，如 /xxx/test/
path 时填充绝对路径，如 /xxx/test.html
     * @param string $RefererType referer 配置类型
whitelist：白名单
blacklist：黑名单
     * @param array $Referers referer 内容列表列表
     * @param boolean $AllowEmpty 是否允许空 referer
true：允许空 referer
false：不允许空 referer
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

        if (array_key_exists("RefererType",$param) and $param["RefererType"] !== null) {
            $this->RefererType = $param["RefererType"];
        }

        if (array_key_exists("Referers",$param) and $param["Referers"] !== null) {
            $this->Referers = $param["Referers"];
        }

        if (array_key_exists("AllowEmpty",$param) and $param["AllowEmpty"] !== null) {
            $this->AllowEmpty = $param["AllowEmpty"];
        }
    }
}
