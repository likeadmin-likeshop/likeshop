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
 * 托管prometheus告警配置实例
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method array getRules() 获取规则列表
 * @method void setRules(array $Rules) 设置规则列表
 * @method string getUpdatedAt() 获取最后修改时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置最后修改时间
 * @method PrometheusNotification getNotification() 获取告警渠道
 * @method void setNotification(PrometheusNotification $Notification) 设置告警渠道
 * @method string getId() 获取告警 id
 * @method void setId(string $Id) 设置告警 id
 * @method string getTemplateId() 获取如果该告警来至模板下发，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置如果该告警来至模板下发，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInterval() 获取计算周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterval(string $Interval) 设置计算周期
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusAlertRuleDetail extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var array 规则列表
     */
    public $Rules;

    /**
     * @var string 最后修改时间
     */
    public $UpdatedAt;

    /**
     * @var PrometheusNotification 告警渠道
     */
    public $Notification;

    /**
     * @var string 告警 id
     */
    public $Id;

    /**
     * @var string 如果该告警来至模板下发，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string 计算周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Interval;

    /**
     * @param string $Name 规则名称
     * @param array $Rules 规则列表
     * @param string $UpdatedAt 最后修改时间
     * @param PrometheusNotification $Notification 告警渠道
     * @param string $Id 告警 id
     * @param string $TemplateId 如果该告警来至模板下发，则TemplateId为模板id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Interval 计算周期
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

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new PrometheusAlertRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Notification",$param) and $param["Notification"] !== null) {
            $this->Notification = new PrometheusNotification();
            $this->Notification->deserialize($param["Notification"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
