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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志详情
 *
 * @method string getEventId() 获取日志ID
 * @method void setEventId(string $EventId) 设置日志ID
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method string getEventTime() 获取事件时间
 * @method void setEventTime(string $EventTime) 设置事件时间
 * @method string getCloudAuditEvent() 获取日志详情
 * @method void setCloudAuditEvent(string $CloudAuditEvent) 设置日志详情
 * @method string getResourceTypeCn() 获取资源类型中文描述（此字段请按需使用，如果您是其他语言使用者，可以忽略该字段描述）
 * @method void setResourceTypeCn(string $ResourceTypeCn) 设置资源类型中文描述（此字段请按需使用，如果您是其他语言使用者，可以忽略该字段描述）
 * @method integer getErrorCode() 获取鉴权错误码
 * @method void setErrorCode(integer $ErrorCode) 设置鉴权错误码
 * @method string getEventName() 获取事件名称
 * @method void setEventName(string $EventName) 设置事件名称
 * @method string getSecretId() 获取证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretId(string $SecretId) 设置证书ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventSource() 获取请求来源
 * @method void setEventSource(string $EventSource) 设置请求来源
 * @method string getRequestID() 获取请求ID
 * @method void setRequestID(string $RequestID) 设置请求ID
 * @method string getResourceRegion() 获取资源地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源地域
 * @method integer getAccountID() 获取主账号ID
 * @method void setAccountID(integer $AccountID) 设置主账号ID
 * @method string getSourceIPAddress() 获取源IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceIPAddress(string $SourceIPAddress) 设置源IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventNameCn() 获取事件名称中文描述（此字段请按需使用，如果您是其他语言使用者，可以忽略该字段描述）
 * @method void setEventNameCn(string $EventNameCn) 设置事件名称中文描述（此字段请按需使用，如果您是其他语言使用者，可以忽略该字段描述）
 * @method Resource getResources() 获取资源对
 * @method void setResources(Resource $Resources) 设置资源对
 * @method string getEventRegion() 获取事件地域
 * @method void setEventRegion(string $EventRegion) 设置事件地域
 * @method string getLocation() 获取IP 归属地
 * @method void setLocation(string $Location) 设置IP 归属地
 */
class Event extends AbstractModel
{
    /**
     * @var string 日志ID
     */
    public $EventId;

    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var string 事件时间
     */
    public $EventTime;

    /**
     * @var string 日志详情
     */
    public $CloudAuditEvent;

    /**
     * @var string 资源类型中文描述（此字段请按需使用，如果您是其他语言使用者，可以忽略该字段描述）
     */
    public $ResourceTypeCn;

    /**
     * @var integer 鉴权错误码
     */
    public $ErrorCode;

    /**
     * @var string 事件名称
     */
    public $EventName;

    /**
     * @var string 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretId;

    /**
     * @var string 请求来源
     */
    public $EventSource;

    /**
     * @var string 请求ID
     */
    public $RequestID;

    /**
     * @var string 资源地域
     */
    public $ResourceRegion;

    /**
     * @var integer 主账号ID
     */
    public $AccountID;

    /**
     * @var string 源IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceIPAddress;

    /**
     * @var string 事件名称中文描述（此字段请按需使用，如果您是其他语言使用者，可以忽略该字段描述）
     */
    public $EventNameCn;

    /**
     * @var Resource 资源对
     */
    public $Resources;

    /**
     * @var string 事件地域
     */
    public $EventRegion;

    /**
     * @var string IP 归属地
     */
    public $Location;

    /**
     * @param string $EventId 日志ID
     * @param string $Username 用户名
     * @param string $EventTime 事件时间
     * @param string $CloudAuditEvent 日志详情
     * @param string $ResourceTypeCn 资源类型中文描述（此字段请按需使用，如果您是其他语言使用者，可以忽略该字段描述）
     * @param integer $ErrorCode 鉴权错误码
     * @param string $EventName 事件名称
     * @param string $SecretId 证书ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventSource 请求来源
     * @param string $RequestID 请求ID
     * @param string $ResourceRegion 资源地域
     * @param integer $AccountID 主账号ID
     * @param string $SourceIPAddress 源IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventNameCn 事件名称中文描述（此字段请按需使用，如果您是其他语言使用者，可以忽略该字段描述）
     * @param Resource $Resources 资源对
     * @param string $EventRegion 事件地域
     * @param string $Location IP 归属地
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("CloudAuditEvent",$param) and $param["CloudAuditEvent"] !== null) {
            $this->CloudAuditEvent = $param["CloudAuditEvent"];
        }

        if (array_key_exists("ResourceTypeCn",$param) and $param["ResourceTypeCn"] !== null) {
            $this->ResourceTypeCn = $param["ResourceTypeCn"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("EventSource",$param) and $param["EventSource"] !== null) {
            $this->EventSource = $param["EventSource"];
        }

        if (array_key_exists("RequestID",$param) and $param["RequestID"] !== null) {
            $this->RequestID = $param["RequestID"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("AccountID",$param) and $param["AccountID"] !== null) {
            $this->AccountID = $param["AccountID"];
        }

        if (array_key_exists("SourceIPAddress",$param) and $param["SourceIPAddress"] !== null) {
            $this->SourceIPAddress = $param["SourceIPAddress"];
        }

        if (array_key_exists("EventNameCn",$param) and $param["EventNameCn"] !== null) {
            $this->EventNameCn = $param["EventNameCn"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = new Resource();
            $this->Resources->deserialize($param["Resources"]);
        }

        if (array_key_exists("EventRegion",$param) and $param["EventRegion"] !== null) {
            $this->EventRegion = $param["EventRegion"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }
    }
}
