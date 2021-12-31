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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则信息
 *
 * @method string getRuleName() 获取规则名称 [a-zA-Z0-9-\.]*
 * @method void setRuleName(string $RuleName) 设置规则名称 [a-zA-Z0-9-\.]*
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getRuleDesc() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleDesc(string $RuleDesc) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleScript() 获取规则脚本
 * @method void setRuleScript(string $RuleScript) 设置规则脚本
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMatchCodeList() 获取关联匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchCodeList(array $MatchCodeList) 设置关联匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleCode() 获取规则code
 * @method void setRuleCode(string $RuleCode) 设置规则code
 * @method string getRegion() 获取地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置用户AppId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户Uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUin() 获取用户OwnerUin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUin(string $CreateUin) 设置用户OwnerUin
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleInfo extends AbstractModel
{
    /**
     * @var string 规则名称 [a-zA-Z0-9-\.]*
     */
    public $RuleName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleDesc;

    /**
     * @var string 规则脚本
     */
    public $RuleScript;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 关联匹配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchCodeList;

    /**
     * @var string 规则code
     */
    public $RuleCode;

    /**
     * @var string 地区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 用户OwnerUin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUin;

    /**
     * @param string $RuleName 规则名称 [a-zA-Z0-9-\.]*
     * @param string $CreateTime 创建时间
     * @param string $RuleDesc 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleScript 规则脚本
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MatchCodeList 关联匹配
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleCode 规则code
     * @param string $Region 地区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 用户AppId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户Uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUin 用户OwnerUin
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("RuleScript",$param) and $param["RuleScript"] !== null) {
            $this->RuleScript = $param["RuleScript"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("MatchCodeList",$param) and $param["MatchCodeList"] !== null) {
            $this->MatchCodeList = [];
            foreach ($param["MatchCodeList"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->MatchCodeList, $obj);
            }
        }

        if (array_key_exists("RuleCode",$param) and $param["RuleCode"] !== null) {
            $this->RuleCode = $param["RuleCode"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }
    }
}
