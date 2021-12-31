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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 记录列表元素
 *
 * @method integer getRecordId() 获取记录Id
 * @method void setRecordId(integer $RecordId) 设置记录Id
 * @method string getValue() 获取记录值
 * @method void setValue(string $Value) 设置记录值
 * @method string getStatus() 获取记录状态，启用：ENABLE，暂停：DISABLE
 * @method void setStatus(string $Status) 设置记录状态，启用：ENABLE，暂停：DISABLE
 * @method string getUpdatedOn() 获取更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置更新时间
 * @method string getName() 获取主机名
 * @method void setName(string $Name) 设置主机名
 * @method string getLine() 获取记录线路
 * @method void setLine(string $Line) 设置记录线路
 * @method string getLineId() 获取线路Id
 * @method void setLineId(string $LineId) 设置线路Id
 * @method string getType() 获取记录类型
 * @method void setType(string $Type) 设置记录类型
 * @method integer getWeight() 获取记录权重，用于负载均衡记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置记录权重，用于负载均衡记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMonitorStatus() 获取记录监控状态，正常：OK，告警：WARN，宕机：DOWN，未设置监控或监控暂停则为空
 * @method void setMonitorStatus(string $MonitorStatus) 设置记录监控状态，正常：OK，告警：WARN，宕机：DOWN，未设置监控或监控暂停则为空
 * @method string getRemark() 获取记录备注说明
 * @method void setRemark(string $Remark) 设置记录备注说明
 * @method integer getTTL() 获取记录缓存时间
 * @method void setTTL(integer $TTL) 设置记录缓存时间
 * @method integer getMX() 获取MX值，只有MX记录有
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMX(integer $MX) 设置MX值，只有MX记录有
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecordListItem extends AbstractModel
{
    /**
     * @var integer 记录Id
     */
    public $RecordId;

    /**
     * @var string 记录值
     */
    public $Value;

    /**
     * @var string 记录状态，启用：ENABLE，暂停：DISABLE
     */
    public $Status;

    /**
     * @var string 更新时间
     */
    public $UpdatedOn;

    /**
     * @var string 主机名
     */
    public $Name;

    /**
     * @var string 记录线路
     */
    public $Line;

    /**
     * @var string 线路Id
     */
    public $LineId;

    /**
     * @var string 记录类型
     */
    public $Type;

    /**
     * @var integer 记录权重，用于负载均衡记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var string 记录监控状态，正常：OK，告警：WARN，宕机：DOWN，未设置监控或监控暂停则为空
     */
    public $MonitorStatus;

    /**
     * @var string 记录备注说明
     */
    public $Remark;

    /**
     * @var integer 记录缓存时间
     */
    public $TTL;

    /**
     * @var integer MX值，只有MX记录有
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MX;

    /**
     * @param integer $RecordId 记录Id
     * @param string $Value 记录值
     * @param string $Status 记录状态，启用：ENABLE，暂停：DISABLE
     * @param string $UpdatedOn 更新时间
     * @param string $Name 主机名
     * @param string $Line 记录线路
     * @param string $LineId 线路Id
     * @param string $Type 记录类型
     * @param integer $Weight 记录权重，用于负载均衡记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MonitorStatus 记录监控状态，正常：OK，告警：WARN，宕机：DOWN，未设置监控或监控暂停则为空
     * @param string $Remark 记录备注说明
     * @param integer $TTL 记录缓存时间
     * @param integer $MX MX值，只有MX记录有
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            $this->LineId = $param["LineId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }
    }
}
