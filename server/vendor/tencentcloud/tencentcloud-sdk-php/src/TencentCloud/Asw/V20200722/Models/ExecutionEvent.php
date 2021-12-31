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
namespace TencentCloud\Asw\V20200722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行的事件历史
 *
 * @method string getExecutionResourceName() 获取执行资源名
 * @method void setExecutionResourceName(string $ExecutionResourceName) 设置执行资源名
 * @method integer getEventId() 获取自增序号
 * @method void setEventId(integer $EventId) 设置自增序号
 * @method string getEventCategory() 获取事件类型
 * @method void setEventCategory(string $EventCategory) 设置事件类型
 * @method string getStepName() 获取步骤节点名称
 * @method void setStepName(string $StepName) 设置步骤节点名称
 * @method string getResourceName() 获取该步骤引用的资源名
 * @method void setResourceName(string $ResourceName) 设置该步骤引用的资源名
 * @method string getTimestamp() 获取该事件发生时间，毫秒
 * @method void setTimestamp(string $Timestamp) 设置该事件发生时间，毫秒
 * @method string getContent() 获取事件内容
 * @method void setContent(string $Content) 设置事件内容
 * @method string getException() 获取异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setException(string $Exception) 设置异常信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExecutionEvent extends AbstractModel
{
    /**
     * @var string 执行资源名
     */
    public $ExecutionResourceName;

    /**
     * @var integer 自增序号
     */
    public $EventId;

    /**
     * @var string 事件类型
     */
    public $EventCategory;

    /**
     * @var string 步骤节点名称
     */
    public $StepName;

    /**
     * @var string 该步骤引用的资源名
     */
    public $ResourceName;

    /**
     * @var string 该事件发生时间，毫秒
     */
    public $Timestamp;

    /**
     * @var string 事件内容
     */
    public $Content;

    /**
     * @var string 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Exception;

    /**
     * @param string $ExecutionResourceName 执行资源名
     * @param integer $EventId 自增序号
     * @param string $EventCategory 事件类型
     * @param string $StepName 步骤节点名称
     * @param string $ResourceName 该步骤引用的资源名
     * @param string $Timestamp 该事件发生时间，毫秒
     * @param string $Content 事件内容
     * @param string $Exception 异常信息
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
        if (array_key_exists("ExecutionResourceName",$param) and $param["ExecutionResourceName"] !== null) {
            $this->ExecutionResourceName = $param["ExecutionResourceName"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("EventCategory",$param) and $param["EventCategory"] !== null) {
            $this->EventCategory = $param["EventCategory"];
        }

        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Exception",$param) and $param["Exception"] !== null) {
            $this->Exception = $param["Exception"];
        }
    }
}
