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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云监控告警通知模板 - 回调通知详情
 *
 * @method string getURL() 获取回调 url（限长256字符）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setURL(string $URL) 设置回调 url（限长256字符）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsValid() 获取是否通过验证 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsValid(integer $IsValid) 设置是否通过验证 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidationCode() 获取验证码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidationCode(string $ValidationCode) 设置验证码
注意：此字段可能返回 null，表示取不到有效值。
 */
class URLNotice extends AbstractModel
{
    /**
     * @var string 回调 url（限长256字符）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $URL;

    /**
     * @var integer 是否通过验证 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsValid;

    /**
     * @var string 验证码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidationCode;

    /**
     * @param string $URL 回调 url（限长256字符）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsValid 是否通过验证 0=否 1=是
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidationCode 验证码
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
        if (array_key_exists("URL",$param) and $param["URL"] !== null) {
            $this->URL = $param["URL"];
        }

        if (array_key_exists("IsValid",$param) and $param["IsValid"] !== null) {
            $this->IsValid = $param["IsValid"];
        }

        if (array_key_exists("ValidationCode",$param) and $param["ValidationCode"] !== null) {
            $this->ValidationCode = $param["ValidationCode"];
        }
    }
}
