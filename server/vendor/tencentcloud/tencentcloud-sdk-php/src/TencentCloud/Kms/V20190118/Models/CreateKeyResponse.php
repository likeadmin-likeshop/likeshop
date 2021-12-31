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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKey返回参数结构体
 *
 * @method string getKeyId() 获取CMK的全局唯一标识符
 * @method void setKeyId(string $KeyId) 设置CMK的全局唯一标识符
 * @method string getAlias() 获取作为密钥更容易辨识，更容易被人看懂的别名
 * @method void setAlias(string $Alias) 设置作为密钥更容易辨识，更容易被人看懂的别名
 * @method integer getCreateTime() 获取密钥创建时间，unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置密钥创建时间，unix时间戳
 * @method string getDescription() 获取CMK的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置CMK的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyState() 获取CMK的状态
 * @method void setKeyState(string $KeyState) 设置CMK的状态
 * @method string getKeyUsage() 获取CMK的用途
 * @method void setKeyUsage(string $KeyUsage) 设置CMK的用途
 * @method integer getTagCode() 获取标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagCode(integer $TagCode) 设置标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagMsg() 获取标签操作的返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagMsg(string $TagMsg) 设置标签操作的返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateKeyResponse extends AbstractModel
{
    /**
     * @var string CMK的全局唯一标识符
     */
    public $KeyId;

    /**
     * @var string 作为密钥更容易辨识，更容易被人看懂的别名
     */
    public $Alias;

    /**
     * @var integer 密钥创建时间，unix时间戳
     */
    public $CreateTime;

    /**
     * @var string CMK的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string CMK的状态
     */
    public $KeyState;

    /**
     * @var string CMK的用途
     */
    public $KeyUsage;

    /**
     * @var integer 标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagCode;

    /**
     * @var string 标签操作的返回信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagMsg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $KeyId CMK的全局唯一标识符
     * @param string $Alias 作为密钥更容易辨识，更容易被人看懂的别名
     * @param integer $CreateTime 密钥创建时间，unix时间戳
     * @param string $Description CMK的描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyState CMK的状态
     * @param string $KeyUsage CMK的用途
     * @param integer $TagCode 标签操作的返回码. 0: 成功；1: 内部错误；2: 业务处理错误
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagMsg 标签操作的返回信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KeyState",$param) and $param["KeyState"] !== null) {
            $this->KeyState = $param["KeyState"];
        }

        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("TagCode",$param) and $param["TagCode"] !== null) {
            $this->TagCode = $param["TagCode"];
        }

        if (array_key_exists("TagMsg",$param) and $param["TagMsg"] !== null) {
            $this->TagMsg = $param["TagMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
