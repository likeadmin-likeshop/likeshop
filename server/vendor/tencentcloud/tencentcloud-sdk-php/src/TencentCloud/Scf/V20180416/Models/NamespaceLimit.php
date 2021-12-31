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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 命名空间限制
 *
 * @method integer getFunctionsCount() 获取函数总数
 * @method void setFunctionsCount(integer $FunctionsCount) 设置函数总数
 * @method TriggerCount getTrigger() 获取Trigger信息
 * @method void setTrigger(TriggerCount $Trigger) 设置Trigger信息
 * @method string getNamespace() 获取Namespace名称
 * @method void setNamespace(string $Namespace) 设置Namespace名称
 * @method integer getConcurrentExecutions() 获取并发量
 * @method void setConcurrentExecutions(integer $ConcurrentExecutions) 设置并发量
 * @method integer getTimeoutLimit() 获取Timeout限制
 * @method void setTimeoutLimit(integer $TimeoutLimit) 设置Timeout限制
 * @method integer getTestModelLimit() 获取测试事件限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTestModelLimit(integer $TestModelLimit) 设置测试事件限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInitTimeoutLimit() 获取初始化超时限制
 * @method void setInitTimeoutLimit(integer $InitTimeoutLimit) 设置初始化超时限制
 * @method integer getRetryNumLimit() 获取异步重试次数限制
 * @method void setRetryNumLimit(integer $RetryNumLimit) 设置异步重试次数限制
 * @method integer getMinMsgTTL() 获取异步重试消息保留时间下限
 * @method void setMinMsgTTL(integer $MinMsgTTL) 设置异步重试消息保留时间下限
 * @method integer getMaxMsgTTL() 获取异步重试消息保留时间上限
 * @method void setMaxMsgTTL(integer $MaxMsgTTL) 设置异步重试消息保留时间上限
 */
class NamespaceLimit extends AbstractModel
{
    /**
     * @var integer 函数总数
     */
    public $FunctionsCount;

    /**
     * @var TriggerCount Trigger信息
     */
    public $Trigger;

    /**
     * @var string Namespace名称
     */
    public $Namespace;

    /**
     * @var integer 并发量
     */
    public $ConcurrentExecutions;

    /**
     * @var integer Timeout限制
     */
    public $TimeoutLimit;

    /**
     * @var integer 测试事件限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TestModelLimit;

    /**
     * @var integer 初始化超时限制
     */
    public $InitTimeoutLimit;

    /**
     * @var integer 异步重试次数限制
     */
    public $RetryNumLimit;

    /**
     * @var integer 异步重试消息保留时间下限
     */
    public $MinMsgTTL;

    /**
     * @var integer 异步重试消息保留时间上限
     */
    public $MaxMsgTTL;

    /**
     * @param integer $FunctionsCount 函数总数
     * @param TriggerCount $Trigger Trigger信息
     * @param string $Namespace Namespace名称
     * @param integer $ConcurrentExecutions 并发量
     * @param integer $TimeoutLimit Timeout限制
     * @param integer $TestModelLimit 测试事件限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InitTimeoutLimit 初始化超时限制
     * @param integer $RetryNumLimit 异步重试次数限制
     * @param integer $MinMsgTTL 异步重试消息保留时间下限
     * @param integer $MaxMsgTTL 异步重试消息保留时间上限
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
        if (array_key_exists("FunctionsCount",$param) and $param["FunctionsCount"] !== null) {
            $this->FunctionsCount = $param["FunctionsCount"];
        }

        if (array_key_exists("Trigger",$param) and $param["Trigger"] !== null) {
            $this->Trigger = new TriggerCount();
            $this->Trigger->deserialize($param["Trigger"]);
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ConcurrentExecutions",$param) and $param["ConcurrentExecutions"] !== null) {
            $this->ConcurrentExecutions = $param["ConcurrentExecutions"];
        }

        if (array_key_exists("TimeoutLimit",$param) and $param["TimeoutLimit"] !== null) {
            $this->TimeoutLimit = $param["TimeoutLimit"];
        }

        if (array_key_exists("TestModelLimit",$param) and $param["TestModelLimit"] !== null) {
            $this->TestModelLimit = $param["TestModelLimit"];
        }

        if (array_key_exists("InitTimeoutLimit",$param) and $param["InitTimeoutLimit"] !== null) {
            $this->InitTimeoutLimit = $param["InitTimeoutLimit"];
        }

        if (array_key_exists("RetryNumLimit",$param) and $param["RetryNumLimit"] !== null) {
            $this->RetryNumLimit = $param["RetryNumLimit"];
        }

        if (array_key_exists("MinMsgTTL",$param) and $param["MinMsgTTL"] !== null) {
            $this->MinMsgTTL = $param["MinMsgTTL"];
        }

        if (array_key_exists("MaxMsgTTL",$param) and $param["MaxMsgTTL"] !== null) {
            $this->MaxMsgTTL = $param["MaxMsgTTL"];
        }
    }
}
