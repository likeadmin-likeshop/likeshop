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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于描述发件人相关信息
 *
 * @method string getEmailAddress() 获取发信地址
 * @method void setEmailAddress(string $EmailAddress) 设置发信地址
 * @method string getEmailSenderName() 获取发信人别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmailSenderName(string $EmailSenderName) 设置发信人别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreatedTimestamp() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTimestamp(integer $CreatedTimestamp) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmailSender extends AbstractModel
{
    /**
     * @var string 发信地址
     */
    public $EmailAddress;

    /**
     * @var string 发信人别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmailSenderName;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTimestamp;

    /**
     * @param string $EmailAddress 发信地址
     * @param string $EmailSenderName 发信人别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreatedTimestamp 创建时间
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
        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }

        if (array_key_exists("EmailSenderName",$param) and $param["EmailSenderName"] !== null) {
            $this->EmailSenderName = $param["EmailSenderName"];
        }

        if (array_key_exists("CreatedTimestamp",$param) and $param["CreatedTimestamp"] !== null) {
            $this->CreatedTimestamp = $param["CreatedTimestamp"];
        }
    }
}
