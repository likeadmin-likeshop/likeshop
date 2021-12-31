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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prometheus告警规则
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getRule() 获取prometheus语句
 * @method void setRule(string $Rule) 设置prometheus语句
 * @method array getLabels() 获取额外标签
 * @method void setLabels(array $Labels) 设置额外标签
 * @method string getTemplate() 获取告警发送模板
 * @method void setTemplate(string $Template) 设置告警发送模板
 * @method string getFor() 获取持续时间
 * @method void setFor(string $For) 设置持续时间
 * @method string getDescribe() 获取该条规则的描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribe(string $Describe) 设置该条规则的描述信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertRule extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string prometheus语句
     */
    public $Rule;

    /**
     * @var array 额外标签
     */
    public $Labels;

    /**
     * @var string 告警发送模板
     */
    public $Template;

    /**
     * @var string 持续时间
     */
    public $For;

    /**
     * @var string 该条规则的描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Describe;

    /**
     * @param string $Name 规则名称
     * @param string $Rule prometheus语句
     * @param array $Labels 额外标签
     * @param string $Template 告警发送模板
     * @param string $For 持续时间
     * @param string $Describe 该条规则的描述信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("For",$param) and $param["For"] !== null) {
            $this->For = $param["For"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }
    }
}
