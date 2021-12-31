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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务日志
 *
 * @method string getInstanceId() 获取实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取日志内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置日志内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取日志时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置日志时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceIp() 获取实例IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceIp(string $InstanceIp) 设置实例IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogId() 获取日志ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogId(string $LogId) 设置日志ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置部署组ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class BusinessLogV2 extends AbstractModel
{
    /**
     * @var string 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 日志内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var integer 日志时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string 实例IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceIp;

    /**
     * @var string 日志ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogId;

    /**
     * @var string 部署组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @param string $InstanceId 实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 日志内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp 日志时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceIp 实例IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogId 日志ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 部署组ID
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("InstanceIp",$param) and $param["InstanceIp"] !== null) {
            $this->InstanceIp = $param["InstanceIp"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
