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
 * 白盒密钥信息
 *
 * @method string getKeyId() 获取白盒密钥的全局唯一标识符
 * @method void setKeyId(string $KeyId) 设置白盒密钥的全局唯一标识符
 * @method string getAlias() 获取作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字. 不可重复
 * @method void setAlias(string $Alias) 设置作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字. 不可重复
 * @method integer getCreatorUin() 获取创建者
 * @method void setCreatorUin(integer $CreatorUin) 设置创建者
 * @method string getDescription() 获取密钥的描述信息
 * @method void setDescription(string $Description) 设置密钥的描述信息
 * @method integer getCreateTime() 获取密钥创建时间，Unix时间戳
 * @method void setCreateTime(integer $CreateTime) 设置密钥创建时间，Unix时间戳
 * @method string getStatus() 获取白盒密钥的状态， 取值为：Enabled | Disabled
 * @method void setStatus(string $Status) 设置白盒密钥的状态， 取值为：Enabled | Disabled
 * @method integer getOwnerUin() 获取创建者
 * @method void setOwnerUin(integer $OwnerUin) 设置创建者
 * @method string getAlgorithm() 获取密钥所用的算法类型
 * @method void setAlgorithm(string $Algorithm) 设置密钥所用的算法类型
 * @method string getEncryptKey() 获取白盒加密密钥，base64编码
 * @method void setEncryptKey(string $EncryptKey) 设置白盒加密密钥，base64编码
 * @method string getDecryptKey() 获取白盒解密密钥，base64编码
 * @method void setDecryptKey(string $DecryptKey) 设置白盒解密密钥，base64编码
 * @method string getResourceId() 获取资源ID，格式：creatorUin/$creatorUin/$keyId
 * @method void setResourceId(string $ResourceId) 设置资源ID，格式：creatorUin/$creatorUin/$keyId
 * @method boolean getDeviceFingerprintBind() 获取是否有设备指纹与当前密钥绑定
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceFingerprintBind(boolean $DeviceFingerprintBind) 设置是否有设备指纹与当前密钥绑定
注意：此字段可能返回 null，表示取不到有效值。
 */
class WhiteboxKeyInfo extends AbstractModel
{
    /**
     * @var string 白盒密钥的全局唯一标识符
     */
    public $KeyId;

    /**
     * @var string 作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字. 不可重复
     */
    public $Alias;

    /**
     * @var integer 创建者
     */
    public $CreatorUin;

    /**
     * @var string 密钥的描述信息
     */
    public $Description;

    /**
     * @var integer 密钥创建时间，Unix时间戳
     */
    public $CreateTime;

    /**
     * @var string 白盒密钥的状态， 取值为：Enabled | Disabled
     */
    public $Status;

    /**
     * @var integer 创建者
     */
    public $OwnerUin;

    /**
     * @var string 密钥所用的算法类型
     */
    public $Algorithm;

    /**
     * @var string 白盒加密密钥，base64编码
     */
    public $EncryptKey;

    /**
     * @var string 白盒解密密钥，base64编码
     */
    public $DecryptKey;

    /**
     * @var string 资源ID，格式：creatorUin/$creatorUin/$keyId
     */
    public $ResourceId;

    /**
     * @var boolean 是否有设备指纹与当前密钥绑定
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceFingerprintBind;

    /**
     * @param string $KeyId 白盒密钥的全局唯一标识符
     * @param string $Alias 作为密钥更容易辨识，更容易被人看懂的别名， 不可为空，1-60个字母数字 - _ 的组合，首字符必须为字母或者数字. 不可重复
     * @param integer $CreatorUin 创建者
     * @param string $Description 密钥的描述信息
     * @param integer $CreateTime 密钥创建时间，Unix时间戳
     * @param string $Status 白盒密钥的状态， 取值为：Enabled | Disabled
     * @param integer $OwnerUin 创建者
     * @param string $Algorithm 密钥所用的算法类型
     * @param string $EncryptKey 白盒加密密钥，base64编码
     * @param string $DecryptKey 白盒解密密钥，base64编码
     * @param string $ResourceId 资源ID，格式：creatorUin/$creatorUin/$keyId
     * @param boolean $DeviceFingerprintBind 是否有设备指纹与当前密钥绑定
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("EncryptKey",$param) and $param["EncryptKey"] !== null) {
            $this->EncryptKey = $param["EncryptKey"];
        }

        if (array_key_exists("DecryptKey",$param) and $param["DecryptKey"] !== null) {
            $this->DecryptKey = $param["DecryptKey"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("DeviceFingerprintBind",$param) and $param["DeviceFingerprintBind"] !== null) {
            $this->DeviceFingerprintBind = $param["DeviceFingerprintBind"];
        }
    }
}
