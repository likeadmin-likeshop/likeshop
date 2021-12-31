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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos临时帐号信息
 *
 * @method string getSessionToken() 获取会话Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionToken(string $SessionToken) 设置会话Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmpAppId() 获取临时应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmpAppId(string $TmpAppId) 设置临时应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmpSecretId() 获取临时调用者身份ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时调用者身份ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTmpSecretKey() 获取临时密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时密钥
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpiredTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(integer $ExpiredTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取所在域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置所在域
注意：此字段可能返回 null，表示取不到有效值。
 */
class CosCredentials extends AbstractModel
{
    /**
     * @var string 会话Token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionToken;

    /**
     * @var string 临时应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmpAppId;

    /**
     * @var string 临时调用者身份ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmpSecretId;

    /**
     * @var string 临时密钥
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TmpSecretKey;

    /**
     * @var integer 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var string 所在域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @param string $SessionToken 会话Token
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TmpAppId 临时应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TmpSecretId 临时调用者身份ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TmpSecretKey 临时密钥
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpiredTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 所在域
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
        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("TmpAppId",$param) and $param["TmpAppId"] !== null) {
            $this->TmpAppId = $param["TmpAppId"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
