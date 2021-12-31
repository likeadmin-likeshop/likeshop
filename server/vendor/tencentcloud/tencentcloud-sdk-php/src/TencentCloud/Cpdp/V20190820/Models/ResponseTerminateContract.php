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
 * 解约数据
 *
 * @method string getExternalReturnCode() 获取第三方渠道错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnCode(string $ExternalReturnCode) 设置第三方渠道错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnMessage() 获取第三方渠道错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnMessage(string $ExternalReturnMessage) 设置第三方渠道错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnData() 获取第三方渠道返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnData(string $ExternalReturnData) 设置第三方渠道返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResponseTerminateContract extends AbstractModel
{
    /**
     * @var string 第三方渠道错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnCode;

    /**
     * @var string 第三方渠道错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnMessage;

    /**
     * @var string 第三方渠道返回的原始数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnData;

    /**
     * @param string $ExternalReturnCode 第三方渠道错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnMessage 第三方渠道错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnData 第三方渠道返回的原始数据
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
        if (array_key_exists("ExternalReturnCode",$param) and $param["ExternalReturnCode"] !== null) {
            $this->ExternalReturnCode = $param["ExternalReturnCode"];
        }

        if (array_key_exists("ExternalReturnMessage",$param) and $param["ExternalReturnMessage"] !== null) {
            $this->ExternalReturnMessage = $param["ExternalReturnMessage"];
        }

        if (array_key_exists("ExternalReturnData",$param) and $param["ExternalReturnData"] !== null) {
            $this->ExternalReturnData = $param["ExternalReturnData"];
        }
    }
}
