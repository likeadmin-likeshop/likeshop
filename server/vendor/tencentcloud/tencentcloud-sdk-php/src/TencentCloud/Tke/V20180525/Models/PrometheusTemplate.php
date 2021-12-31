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
 * 模板实例
 *
 * @method string getName() 获取模板名称
 * @method void setName(string $Name) 设置模板名称
 * @method string getLevel() 获取模板维度，支持以下类型
instance 实例级别
cluster 集群级别
 * @method void setLevel(string $Level) 设置模板维度，支持以下类型
instance 实例级别
cluster 集群级别
 * @method string getDescribe() 获取模板描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribe(string $Describe) 设置模板描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlertRules() 获取当Level为instance时有效，
模板中的告警配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertRules(array $AlertRules) 设置当Level为instance时有效，
模板中的告警配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecordRules() 获取当Level为instance时有效，
模板中的聚合规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordRules(array $RecordRules) 设置当Level为instance时有效，
模板中的聚合规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getServiceMonitors() 获取当Level为cluster时有效，
模板中的ServiceMonitor规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceMonitors(array $ServiceMonitors) 设置当Level为cluster时有效，
模板中的ServiceMonitor规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodMonitors() 获取当Level为cluster时有效，
模板中的PodMonitors规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodMonitors(array $PodMonitors) 设置当Level为cluster时有效，
模板中的PodMonitors规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRawJobs() 获取当Level为cluster时有效，
模板中的RawJobs规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRawJobs(array $RawJobs) 设置当Level为cluster时有效，
模板中的RawJobs规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateId() 获取模板的ID, 用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置模板的ID, 用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最近更新时间，用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置最近更新时间，用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取当前版本，用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置当前版本，用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDefault() 获取是否系统提供的默认模板，用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefault(boolean $IsDefault) 设置是否系统提供的默认模板，用于出参
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlertDetailRules() 获取当Level为instance时有效，
模板中的告警配置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertDetailRules(array $AlertDetailRules) 设置当Level为instance时有效，
模板中的告警配置列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrometheusTemplate extends AbstractModel
{
    /**
     * @var string 模板名称
     */
    public $Name;

    /**
     * @var string 模板维度，支持以下类型
instance 实例级别
cluster 集群级别
     */
    public $Level;

    /**
     * @var string 模板描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Describe;

    /**
     * @var array 当Level为instance时有效，
模板中的告警配置列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertRules;

    /**
     * @var array 当Level为instance时有效，
模板中的聚合规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordRules;

    /**
     * @var array 当Level为cluster时有效，
模板中的ServiceMonitor规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceMonitors;

    /**
     * @var array 当Level为cluster时有效，
模板中的PodMonitors规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodMonitors;

    /**
     * @var array 当Level为cluster时有效，
模板中的RawJobs规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RawJobs;

    /**
     * @var string 模板的ID, 用于出参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string 最近更新时间，用于出参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 当前版本，用于出参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var boolean 是否系统提供的默认模板，用于出参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefault;

    /**
     * @var array 当Level为instance时有效，
模板中的告警配置列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertDetailRules;

    /**
     * @param string $Name 模板名称
     * @param string $Level 模板维度，支持以下类型
instance 实例级别
cluster 集群级别
     * @param string $Describe 模板描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlertRules 当Level为instance时有效，
模板中的告警配置列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecordRules 当Level为instance时有效，
模板中的聚合规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ServiceMonitors 当Level为cluster时有效，
模板中的ServiceMonitor规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodMonitors 当Level为cluster时有效，
模板中的PodMonitors规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RawJobs 当Level为cluster时有效，
模板中的RawJobs规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateId 模板的ID, 用于出参
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最近更新时间，用于出参
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 当前版本，用于出参
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDefault 是否系统提供的默认模板，用于出参
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlertDetailRules 当Level为instance时有效，
模板中的告警配置列表
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("AlertRules",$param) and $param["AlertRules"] !== null) {
            $this->AlertRules = [];
            foreach ($param["AlertRules"] as $key => $value){
                $obj = new PrometheusAlertRule();
                $obj->deserialize($value);
                array_push($this->AlertRules, $obj);
            }
        }

        if (array_key_exists("RecordRules",$param) and $param["RecordRules"] !== null) {
            $this->RecordRules = [];
            foreach ($param["RecordRules"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->RecordRules, $obj);
            }
        }

        if (array_key_exists("ServiceMonitors",$param) and $param["ServiceMonitors"] !== null) {
            $this->ServiceMonitors = [];
            foreach ($param["ServiceMonitors"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->ServiceMonitors, $obj);
            }
        }

        if (array_key_exists("PodMonitors",$param) and $param["PodMonitors"] !== null) {
            $this->PodMonitors = [];
            foreach ($param["PodMonitors"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->PodMonitors, $obj);
            }
        }

        if (array_key_exists("RawJobs",$param) and $param["RawJobs"] !== null) {
            $this->RawJobs = [];
            foreach ($param["RawJobs"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->RawJobs, $obj);
            }
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("AlertDetailRules",$param) and $param["AlertDetailRules"] !== null) {
            $this->AlertDetailRules = [];
            foreach ($param["AlertDetailRules"] as $key => $value){
                $obj = new PrometheusAlertRuleDetail();
                $obj->deserialize($value);
                array_push($this->AlertDetailRules, $obj);
            }
        }
    }
}
