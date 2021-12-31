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
 * 记录信息
 *
 * @method integer getId() 获取记录 ID 。
 * @method void setId(integer $Id) 设置记录 ID 。
 * @method string getSubDomain() 获取子域名(主机记录)。
 * @method void setSubDomain(string $SubDomain) 设置子域名(主机记录)。
 * @method string getRecordType() 获取记录类型, 详见 DescribeRecordType 接口。
 * @method void setRecordType(string $RecordType) 设置记录类型, 详见 DescribeRecordType 接口。
 * @method string getRecordLine() 获取解析记录的线路，详见 DescribeRecordLineList 接口。
 * @method void setRecordLine(string $RecordLine) 设置解析记录的线路，详见 DescribeRecordLineList 接口。
 * @method string getRecordLineId() 获取解析记录的线路 ID ，详见 DescribeRecordLineList 接口。
 * @method void setRecordLineId(string $RecordLineId) 设置解析记录的线路 ID ，详见 DescribeRecordLineList 接口。
 * @method string getValue() 获取记录值。
 * @method void setValue(string $Value) 设置记录值。
 * @method integer getWeight() 获取记录权重值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置记录权重值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMX() 获取记录的 MX 记录值，非 MX 记录类型，默认为 0。
 * @method void setMX(integer $MX) 设置记录的 MX 记录值，非 MX 记录类型，默认为 0。
 * @method integer getTTL() 获取记录的 TTL 值。
 * @method void setTTL(integer $TTL) 设置记录的 TTL 值。
 * @method integer getEnabled() 获取记录状态。0表示禁用，1表示启用。
 * @method void setEnabled(integer $Enabled) 设置记录状态。0表示禁用，1表示启用。
 * @method string getMonitorStatus() 获取该记录的 D 监控状态。
"Ok" : 服务器正常。
"Warn" : 该记录有报警, 服务器返回 4XX。
"Down" : 服务器宕机。
"" : 该记录未开启 D 监控。
 * @method void setMonitorStatus(string $MonitorStatus) 设置该记录的 D 监控状态。
"Ok" : 服务器正常。
"Warn" : 该记录有报警, 服务器返回 4XX。
"Down" : 服务器宕机。
"" : 该记录未开启 D 监控。
 * @method string getRemark() 获取记录的备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置记录的备注。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedOn() 获取记录最后更新时间。
 * @method void setUpdatedOn(string $UpdatedOn) 设置记录最后更新时间。
 * @method integer getDomainId() 获取域名 ID 。
 * @method void setDomainId(integer $DomainId) 设置域名 ID 。
 */
class RecordInfo extends AbstractModel
{
    /**
     * @var integer 记录 ID 。
     */
    public $Id;

    /**
     * @var string 子域名(主机记录)。
     */
    public $SubDomain;

    /**
     * @var string 记录类型, 详见 DescribeRecordType 接口。
     */
    public $RecordType;

    /**
     * @var string 解析记录的线路，详见 DescribeRecordLineList 接口。
     */
    public $RecordLine;

    /**
     * @var string 解析记录的线路 ID ，详见 DescribeRecordLineList 接口。
     */
    public $RecordLineId;

    /**
     * @var string 记录值。
     */
    public $Value;

    /**
     * @var integer 记录权重值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var integer 记录的 MX 记录值，非 MX 记录类型，默认为 0。
     */
    public $MX;

    /**
     * @var integer 记录的 TTL 值。
     */
    public $TTL;

    /**
     * @var integer 记录状态。0表示禁用，1表示启用。
     */
    public $Enabled;

    /**
     * @var string 该记录的 D 监控状态。
"Ok" : 服务器正常。
"Warn" : 该记录有报警, 服务器返回 4XX。
"Down" : 服务器宕机。
"" : 该记录未开启 D 监控。
     */
    public $MonitorStatus;

    /**
     * @var string 记录的备注。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 记录最后更新时间。
     */
    public $UpdatedOn;

    /**
     * @var integer 域名 ID 。
     */
    public $DomainId;

    /**
     * @param integer $Id 记录 ID 。
     * @param string $SubDomain 子域名(主机记录)。
     * @param string $RecordType 记录类型, 详见 DescribeRecordType 接口。
     * @param string $RecordLine 解析记录的线路，详见 DescribeRecordLineList 接口。
     * @param string $RecordLineId 解析记录的线路 ID ，详见 DescribeRecordLineList 接口。
     * @param string $Value 记录值。
     * @param integer $Weight 记录权重值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MX 记录的 MX 记录值，非 MX 记录类型，默认为 0。
     * @param integer $TTL 记录的 TTL 值。
     * @param integer $Enabled 记录状态。0表示禁用，1表示启用。
     * @param string $MonitorStatus 该记录的 D 监控状态。
"Ok" : 服务器正常。
"Warn" : 该记录有报警, 服务器返回 4XX。
"Down" : 服务器宕机。
"" : 该记录未开启 D 监控。
     * @param string $Remark 记录的备注。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedOn 记录最后更新时间。
     * @param integer $DomainId 域名 ID 。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("RecordLineId",$param) and $param["RecordLineId"] !== null) {
            $this->RecordLineId = $param["RecordLineId"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
