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
 * 批量添加的记录
 *
 * @method string getRecordType() 获取记录类型, 详见 DescribeRecordType 接口。
 * @method void setRecordType(string $RecordType) 设置记录类型, 详见 DescribeRecordType 接口。
 * @method string getValue() 获取记录值。
 * @method void setValue(string $Value) 设置记录值。
 * @method string getSubDomain() 获取子域名(主机记录)。
 * @method void setSubDomain(string $SubDomain) 设置子域名(主机记录)。
 * @method string getRecordLine() 获取解析记录的线路，详见 DescribeRecordLineList 接口。
 * @method void setRecordLine(string $RecordLine) 设置解析记录的线路，详见 DescribeRecordLineList 接口。
 * @method string getRecordLineId() 获取解析记录的线路 ID，RecordLine和RecordLineId都有时，系统优先取 RecordLineId
 * @method void setRecordLineId(string $RecordLineId) 设置解析记录的线路 ID，RecordLine和RecordLineId都有时，系统优先取 RecordLineId
 * @method integer getWeight() 获取记录权重值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置记录权重值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMX() 获取记录的 MX 记录值，非 MX 记录类型，默认为 0，MX记录则必选
 * @method void setMX(integer $MX) 设置记录的 MX 记录值，非 MX 记录类型，默认为 0，MX记录则必选
 * @method integer getTTL() 获取记录的 TTL 值，默认600
 * @method void setTTL(integer $TTL) 设置记录的 TTL 值，默认600
 * @method integer getEnabled() 获取记录状态。0表示禁用，1表示启用，默认启用
 * @method void setEnabled(integer $Enabled) 设置记录状态。0表示禁用，1表示启用，默认启用
 * @method string getRemark() 获取记录别名
 * @method void setRemark(string $Remark) 设置记录别名
 */
class AddRecordBatch extends AbstractModel
{
    /**
     * @var string 记录类型, 详见 DescribeRecordType 接口。
     */
    public $RecordType;

    /**
     * @var string 记录值。
     */
    public $Value;

    /**
     * @var string 子域名(主机记录)。
     */
    public $SubDomain;

    /**
     * @var string 解析记录的线路，详见 DescribeRecordLineList 接口。
     */
    public $RecordLine;

    /**
     * @var string 解析记录的线路 ID，RecordLine和RecordLineId都有时，系统优先取 RecordLineId
     */
    public $RecordLineId;

    /**
     * @var integer 记录权重值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var integer 记录的 MX 记录值，非 MX 记录类型，默认为 0，MX记录则必选
     */
    public $MX;

    /**
     * @var integer 记录的 TTL 值，默认600
     */
    public $TTL;

    /**
     * @var integer 记录状态。0表示禁用，1表示启用，默认启用
     */
    public $Enabled;

    /**
     * @var string 记录别名
     */
    public $Remark;

    /**
     * @param string $RecordType 记录类型, 详见 DescribeRecordType 接口。
     * @param string $Value 记录值。
     * @param string $SubDomain 子域名(主机记录)。
     * @param string $RecordLine 解析记录的线路，详见 DescribeRecordLineList 接口。
     * @param string $RecordLineId 解析记录的线路 ID，RecordLine和RecordLineId都有时，系统优先取 RecordLineId
     * @param integer $Weight 记录权重值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MX 记录的 MX 记录值，非 MX 记录类型，默认为 0，MX记录则必选
     * @param integer $TTL 记录的 TTL 值，默认600
     * @param integer $Enabled 记录状态。0表示禁用，1表示启用，默认启用
     * @param string $Remark 记录别名
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
        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("RecordLineId",$param) and $param["RecordLineId"] !== null) {
            $this->RecordLineId = $param["RecordLineId"];
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
