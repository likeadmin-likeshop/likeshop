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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量包详情
 *
 * @method string getTrafficPackageId() 获取流量包ID。
 * @method void setTrafficPackageId(string $TrafficPackageId) 设置流量包ID。
 * @method integer getTrafficUsed() 获取流量包生效周期内已使用流量，单位字节。
 * @method void setTrafficUsed(integer $TrafficUsed) 设置流量包生效周期内已使用流量，单位字节。
 * @method integer getTrafficPackageTotal() 获取流量包生效周期内的总流量，单位字节。
 * @method void setTrafficPackageTotal(integer $TrafficPackageTotal) 设置流量包生效周期内的总流量，单位字节。
 * @method integer getTrafficPackageRemaining() 获取流量包生效周期内的剩余流量，单位字节。
 * @method void setTrafficPackageRemaining(integer $TrafficPackageRemaining) 设置流量包生效周期内的剩余流量，单位字节。
 * @method integer getTrafficOverflow() 获取流量包生效周期内超出流量包额度的流量，单位字节。
 * @method void setTrafficOverflow(integer $TrafficOverflow) 设置流量包生效周期内超出流量包额度的流量，单位字节。
 * @method string getStartTime() 获取流量包生效周期开始时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置流量包生效周期开始时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取流量包生效周期结束时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置流量包生效周期结束时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeadline() 获取流量包到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadline(string $Deadline) 设置流量包到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取流量包状态：
<li>NETWORK_NORMAL：正常</li>
<li>OVERDUE_NETWORK_DISABLED：欠费断网</li>
 * @method void setStatus(string $Status) 设置流量包状态：
<li>NETWORK_NORMAL：正常</li>
<li>OVERDUE_NETWORK_DISABLED：欠费断网</li>
 */
class TrafficPackage extends AbstractModel
{
    /**
     * @var string 流量包ID。
     */
    public $TrafficPackageId;

    /**
     * @var integer 流量包生效周期内已使用流量，单位字节。
     */
    public $TrafficUsed;

    /**
     * @var integer 流量包生效周期内的总流量，单位字节。
     */
    public $TrafficPackageTotal;

    /**
     * @var integer 流量包生效周期内的剩余流量，单位字节。
     */
    public $TrafficPackageRemaining;

    /**
     * @var integer 流量包生效周期内超出流量包额度的流量，单位字节。
     */
    public $TrafficOverflow;

    /**
     * @var string 流量包生效周期开始时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 流量包生效周期结束时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 流量包到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Deadline;

    /**
     * @var string 流量包状态：
<li>NETWORK_NORMAL：正常</li>
<li>OVERDUE_NETWORK_DISABLED：欠费断网</li>
     */
    public $Status;

    /**
     * @param string $TrafficPackageId 流量包ID。
     * @param integer $TrafficUsed 流量包生效周期内已使用流量，单位字节。
     * @param integer $TrafficPackageTotal 流量包生效周期内的总流量，单位字节。
     * @param integer $TrafficPackageRemaining 流量包生效周期内的剩余流量，单位字节。
     * @param integer $TrafficOverflow 流量包生效周期内超出流量包额度的流量，单位字节。
     * @param string $StartTime 流量包生效周期开始时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 流量包生效周期结束时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Deadline 流量包到期时间。按照 ISO8601 标准表示，并且使用 UTC 时间。 
格式为： YYYY-MM-DDThh:mm:ssZ。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 流量包状态：
<li>NETWORK_NORMAL：正常</li>
<li>OVERDUE_NETWORK_DISABLED：欠费断网</li>
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
        if (array_key_exists("TrafficPackageId",$param) and $param["TrafficPackageId"] !== null) {
            $this->TrafficPackageId = $param["TrafficPackageId"];
        }

        if (array_key_exists("TrafficUsed",$param) and $param["TrafficUsed"] !== null) {
            $this->TrafficUsed = $param["TrafficUsed"];
        }

        if (array_key_exists("TrafficPackageTotal",$param) and $param["TrafficPackageTotal"] !== null) {
            $this->TrafficPackageTotal = $param["TrafficPackageTotal"];
        }

        if (array_key_exists("TrafficPackageRemaining",$param) and $param["TrafficPackageRemaining"] !== null) {
            $this->TrafficPackageRemaining = $param["TrafficPackageRemaining"];
        }

        if (array_key_exists("TrafficOverflow",$param) and $param["TrafficOverflow"] !== null) {
            $this->TrafficOverflow = $param["TrafficOverflow"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
