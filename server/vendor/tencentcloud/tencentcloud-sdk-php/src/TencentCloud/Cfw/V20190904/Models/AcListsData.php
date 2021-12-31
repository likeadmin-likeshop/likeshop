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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问控制列表对象
 *
 * @method integer getId() 获取规则id
 * @method void setId(integer $Id) 设置规则id
 * @method string getSourceIp() 获取访问源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceIp(string $SourceIp) 设置访问源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetIp() 获取访问目的
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetIp(string $TargetIp) 设置访问目的
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPort() 获取端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategy() 获取策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategy(integer $Strategy) 设置策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetail() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(string $Detail) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取命中次数
 * @method void setCount(integer $Count) 设置命中次数
 * @method integer getOrderIndex() 获取执行顺序
 * @method void setOrderIndex(integer $OrderIndex) 设置执行顺序
 * @method string getLogId() 获取告警规则id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogId(string $LogId) 设置告警规则id
注意：此字段可能返回 null，表示取不到有效值。
 */
class AcListsData extends AbstractModel
{
    /**
     * @var integer 规则id
     */
    public $Id;

    /**
     * @var string 访问源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceIp;

    /**
     * @var string 访问目的
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetIp;

    /**
     * @var string 协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var string 端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var integer 策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Strategy;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @var integer 命中次数
     */
    public $Count;

    /**
     * @var integer 执行顺序
     */
    public $OrderIndex;

    /**
     * @var string 告警规则id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogId;

    /**
     * @param integer $Id 规则id
     * @param string $SourceIp 访问源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetIp 访问目的
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Port 端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Strategy 策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Detail 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 命中次数
     * @param integer $OrderIndex 执行顺序
     * @param string $LogId 告警规则id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("TargetIp",$param) and $param["TargetIp"] !== null) {
            $this->TargetIp = $param["TargetIp"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }
    }
}
