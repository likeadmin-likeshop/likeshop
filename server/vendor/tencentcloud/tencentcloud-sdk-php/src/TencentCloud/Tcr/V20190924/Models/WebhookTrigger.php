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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Webhook 触发器
 *
 * @method string getName() 获取触发器名称
 * @method void setName(string $Name) 设置触发器名称
 * @method array getTargets() 获取触发器目标
 * @method void setTargets(array $Targets) 设置触发器目标
 * @method array getEventTypes() 获取触发动作
 * @method void setEventTypes(array $EventTypes) 设置触发动作
 * @method string getCondition() 获取触发规则
 * @method void setCondition(string $Condition) 设置触发规则
 * @method boolean getEnabled() 获取启用触发器
 * @method void setEnabled(boolean $Enabled) 设置启用触发器
 * @method integer getId() 获取触发器Id
 * @method void setId(integer $Id) 设置触发器Id
 * @method string getDescription() 获取触发器描述
 * @method void setDescription(string $Description) 设置触发器描述
 * @method integer getNamespaceId() 获取触发器所属命名空间 Id
 * @method void setNamespaceId(integer $NamespaceId) 设置触发器所属命名空间 Id
 */
class WebhookTrigger extends AbstractModel
{
    /**
     * @var string 触发器名称
     */
    public $Name;

    /**
     * @var array 触发器目标
     */
    public $Targets;

    /**
     * @var array 触发动作
     */
    public $EventTypes;

    /**
     * @var string 触发规则
     */
    public $Condition;

    /**
     * @var boolean 启用触发器
     */
    public $Enabled;

    /**
     * @var integer 触发器Id
     */
    public $Id;

    /**
     * @var string 触发器描述
     */
    public $Description;

    /**
     * @var integer 触发器所属命名空间 Id
     */
    public $NamespaceId;

    /**
     * @param string $Name 触发器名称
     * @param array $Targets 触发器目标
     * @param array $EventTypes 触发动作
     * @param string $Condition 触发规则
     * @param boolean $Enabled 启用触发器
     * @param integer $Id 触发器Id
     * @param string $Description 触发器描述
     * @param integer $NamespaceId 触发器所属命名空间 Id
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

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new WebhookTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("EventTypes",$param) and $param["EventTypes"] !== null) {
            $this->EventTypes = $param["EventTypes"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }
    }
}
