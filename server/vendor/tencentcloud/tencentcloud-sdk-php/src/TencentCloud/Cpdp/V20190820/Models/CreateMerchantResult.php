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
 * 创建商户结果
 *
 * @method integer getCode() 获取状态码
 * @method void setCode(integer $Code) 设置状态码
 * @method string getMessage() 获取响应消息
 * @method void setMessage(string $Message) 设置响应消息
 * @method CreateMerchantResultData getData() 获取创建商户结果数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(CreateMerchantResultData $Data) 设置创建商户结果数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateMerchantResult extends AbstractModel
{
    /**
     * @var integer 状态码
     */
    public $Code;

    /**
     * @var string 响应消息
     */
    public $Message;

    /**
     * @var CreateMerchantResultData 创建商户结果数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param integer $Code 状态码
     * @param string $Message 响应消息
     * @param CreateMerchantResultData $Data 创建商户结果数据
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new CreateMerchantResultData();
            $this->Data->deserialize($param["Data"]);
        }
    }
}
