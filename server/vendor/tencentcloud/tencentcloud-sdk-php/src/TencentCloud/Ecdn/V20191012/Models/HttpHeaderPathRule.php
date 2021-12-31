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
 * 分路径的http头部设置规则。
 *
 * @method string getHeaderMode() 获取http头部设置方式，支持add，set或del，分别表示新增，设置或删除头部。
请求头部暂不支持set。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderMode(string $HeaderMode) 设置http头部设置方式，支持add，set或del，分别表示新增，设置或删除头部。
请求头部暂不支持set。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHeaderName() 获取http头部名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderName(string $HeaderName) 设置http头部名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHeaderValue() 获取http头部值。del时可不填写该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderValue(string $HeaderValue) 设置http头部值。del时可不填写该字段。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取生效的url路径规则类型，支持all，file，directory或path，分别表示全部路径，文件后缀类型，目录或绝对路径生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置生效的url路径规则类型，支持all，file，directory或path，分别表示全部路径，文件后缀类型，目录或绝对路径生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRulePaths() 获取url路径或文件类型列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRulePaths(array $RulePaths) 设置url路径或文件类型列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class HttpHeaderPathRule extends AbstractModel
{
    /**
     * @var string http头部设置方式，支持add，set或del，分别表示新增，设置或删除头部。
请求头部暂不支持set。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderMode;

    /**
     * @var string http头部名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderName;

    /**
     * @var string http头部值。del时可不填写该字段。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderValue;

    /**
     * @var string 生效的url路径规则类型，支持all，file，directory或path，分别表示全部路径，文件后缀类型，目录或绝对路径生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var array url路径或文件类型列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RulePaths;

    /**
     * @param string $HeaderMode http头部设置方式，支持add，set或del，分别表示新增，设置或删除头部。
请求头部暂不支持set。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HeaderName http头部名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HeaderValue http头部值。del时可不填写该字段。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType 生效的url路径规则类型，支持all，file，directory或path，分别表示全部路径，文件后缀类型，目录或绝对路径生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RulePaths url路径或文件类型列表。
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
        if (array_key_exists("HeaderMode",$param) and $param["HeaderMode"] !== null) {
            $this->HeaderMode = $param["HeaderMode"];
        }

        if (array_key_exists("HeaderName",$param) and $param["HeaderName"] !== null) {
            $this->HeaderName = $param["HeaderName"];
        }

        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            $this->HeaderValue = $param["HeaderValue"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RulePaths",$param) and $param["RulePaths"] !== null) {
            $this->RulePaths = $param["RulePaths"];
        }
    }
}
