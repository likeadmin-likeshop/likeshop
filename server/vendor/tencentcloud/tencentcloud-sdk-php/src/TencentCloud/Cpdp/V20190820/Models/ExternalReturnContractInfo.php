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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 第三方渠道合约信息
 *
 * @method string getExternalReturnAgreementId() 获取第三方渠道协议id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnAgreementId(string $ExternalReturnAgreementId) 设置第三方渠道协议id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnContractEffectiveTimestamp() 获取第三方渠道协议生效时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnContractEffectiveTimestamp(string $ExternalReturnContractEffectiveTimestamp) 设置第三方渠道协议生效时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnContractTerminationTimestamp() 获取第三方渠道协议解约时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnContractTerminationTimestamp(string $ExternalReturnContractTerminationTimestamp) 设置第三方渠道协议解约时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnContractStatus() 获取平台合约状态
协议状态，枚举值：
CONTRACT_STATUS_SIGNED：已签约
CONTRACT_STATUS_TERMINATED：未签约
CONTRACT_STATUS_PENDING：签约进行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnContractStatus(string $ExternalReturnContractStatus) 设置平台合约状态
协议状态，枚举值：
CONTRACT_STATUS_SIGNED：已签约
CONTRACT_STATUS_TERMINATED：未签约
CONTRACT_STATUS_PENDING：签约进行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnRequestId() 获取第三方渠道请求序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnRequestId(string $ExternalReturnRequestId) 设置第三方渠道请求序列号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnContractSignedTimestamp() 获取第三方渠道协议签署时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnContractSignedTimestamp(string $ExternalReturnContractSignedTimestamp) 设置第三方渠道协议签署时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnContractExpiredTimestamp() 获取第三方渠道协议到期时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnContractExpiredTimestamp(string $ExternalReturnContractExpiredTimestamp) 设置第三方渠道协议到期时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnContractData() 获取第三方渠道返回的合约数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnContractData(string $ExternalReturnContractData) 设置第三方渠道返回的合约数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnContractTerminationRemark() 获取第三方渠道解约备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnContractTerminationRemark(string $ExternalReturnContractTerminationRemark) 设置第三方渠道解约备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnContractTerminationMode() 获取第三方渠道协议解约方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnContractTerminationMode(string $ExternalReturnContractTerminationMode) 设置第三方渠道协议解约方式
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExternalReturnContractInfo extends AbstractModel
{
    /**
     * @var string 第三方渠道协议id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnAgreementId;

    /**
     * @var string 第三方渠道协议生效时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnContractEffectiveTimestamp;

    /**
     * @var string 第三方渠道协议解约时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnContractTerminationTimestamp;

    /**
     * @var string 平台合约状态
协议状态，枚举值：
CONTRACT_STATUS_SIGNED：已签约
CONTRACT_STATUS_TERMINATED：未签约
CONTRACT_STATUS_PENDING：签约进行中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnContractStatus;

    /**
     * @var string 第三方渠道请求序列号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnRequestId;

    /**
     * @var string 第三方渠道协议签署时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnContractSignedTimestamp;

    /**
     * @var string 第三方渠道协议到期时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnContractExpiredTimestamp;

    /**
     * @var string 第三方渠道返回的合约数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnContractData;

    /**
     * @var string 第三方渠道解约备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnContractTerminationRemark;

    /**
     * @var string 第三方渠道协议解约方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnContractTerminationMode;

    /**
     * @param string $ExternalReturnAgreementId 第三方渠道协议id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnContractEffectiveTimestamp 第三方渠道协议生效时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnContractTerminationTimestamp 第三方渠道协议解约时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnContractStatus 平台合约状态
协议状态，枚举值：
CONTRACT_STATUS_SIGNED：已签约
CONTRACT_STATUS_TERMINATED：未签约
CONTRACT_STATUS_PENDING：签约进行中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnRequestId 第三方渠道请求序列号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnContractSignedTimestamp 第三方渠道协议签署时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnContractExpiredTimestamp 第三方渠道协议到期时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnContractData 第三方渠道返回的合约数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnContractTerminationRemark 第三方渠道解约备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnContractTerminationMode 第三方渠道协议解约方式
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
        if (array_key_exists("ExternalReturnAgreementId",$param) and $param["ExternalReturnAgreementId"] !== null) {
            $this->ExternalReturnAgreementId = $param["ExternalReturnAgreementId"];
        }

        if (array_key_exists("ExternalReturnContractEffectiveTimestamp",$param) and $param["ExternalReturnContractEffectiveTimestamp"] !== null) {
            $this->ExternalReturnContractEffectiveTimestamp = $param["ExternalReturnContractEffectiveTimestamp"];
        }

        if (array_key_exists("ExternalReturnContractTerminationTimestamp",$param) and $param["ExternalReturnContractTerminationTimestamp"] !== null) {
            $this->ExternalReturnContractTerminationTimestamp = $param["ExternalReturnContractTerminationTimestamp"];
        }

        if (array_key_exists("ExternalReturnContractStatus",$param) and $param["ExternalReturnContractStatus"] !== null) {
            $this->ExternalReturnContractStatus = $param["ExternalReturnContractStatus"];
        }

        if (array_key_exists("ExternalReturnRequestId",$param) and $param["ExternalReturnRequestId"] !== null) {
            $this->ExternalReturnRequestId = $param["ExternalReturnRequestId"];
        }

        if (array_key_exists("ExternalReturnContractSignedTimestamp",$param) and $param["ExternalReturnContractSignedTimestamp"] !== null) {
            $this->ExternalReturnContractSignedTimestamp = $param["ExternalReturnContractSignedTimestamp"];
        }

        if (array_key_exists("ExternalReturnContractExpiredTimestamp",$param) and $param["ExternalReturnContractExpiredTimestamp"] !== null) {
            $this->ExternalReturnContractExpiredTimestamp = $param["ExternalReturnContractExpiredTimestamp"];
        }

        if (array_key_exists("ExternalReturnContractData",$param) and $param["ExternalReturnContractData"] !== null) {
            $this->ExternalReturnContractData = $param["ExternalReturnContractData"];
        }

        if (array_key_exists("ExternalReturnContractTerminationRemark",$param) and $param["ExternalReturnContractTerminationRemark"] !== null) {
            $this->ExternalReturnContractTerminationRemark = $param["ExternalReturnContractTerminationRemark"];
        }

        if (array_key_exists("ExternalReturnContractTerminationMode",$param) and $param["ExternalReturnContractTerminationMode"] !== null) {
            $this->ExternalReturnContractTerminationMode = $param["ExternalReturnContractTerminationMode"];
        }
    }
}
