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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述密钥对信息
 *
 * @method string getKeyId() 获取密钥对的`ID`，是密钥对的唯一标识。
 * @method void setKeyId(string $KeyId) 设置密钥对的`ID`，是密钥对的唯一标识。
 * @method string getKeyName() 获取密钥对名称。
 * @method void setKeyName(string $KeyName) 设置密钥对名称。
 * @method integer getProjectId() 获取密钥对所属的项目`ID`。
 * @method void setProjectId(integer $ProjectId) 设置密钥对所属的项目`ID`。
 * @method string getDescription() 获取密钥对描述信息。
 * @method void setDescription(string $Description) 设置密钥对描述信息。
 * @method string getPublicKey() 获取密钥对的纯文本公钥。
 * @method void setPublicKey(string $PublicKey) 设置密钥对的纯文本公钥。
 * @method string getPrivateKey() 获取密钥对的纯文本私钥。腾讯云不会保管私钥，请用户自行妥善保存。
 * @method void setPrivateKey(string $PrivateKey) 设置密钥对的纯文本私钥。腾讯云不会保管私钥，请用户自行妥善保存。
 * @method array getAssociatedInstanceIds() 获取密钥关联的实例`ID`列表。
 * @method void setAssociatedInstanceIds(array $AssociatedInstanceIds) 设置密钥关联的实例`ID`列表。
 * @method string getCreatedTime() 获取创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
 */
class KeyPair extends AbstractModel
{
    /**
     * @var string 密钥对的`ID`，是密钥对的唯一标识。
     */
    public $KeyId;

    /**
     * @var string 密钥对名称。
     */
    public $KeyName;

    /**
     * @var integer 密钥对所属的项目`ID`。
     */
    public $ProjectId;

    /**
     * @var string 密钥对描述信息。
     */
    public $Description;

    /**
     * @var string 密钥对的纯文本公钥。
     */
    public $PublicKey;

    /**
     * @var string 密钥对的纯文本私钥。腾讯云不会保管私钥，请用户自行妥善保存。
     */
    public $PrivateKey;

    /**
     * @var array 密钥关联的实例`ID`列表。
     */
    public $AssociatedInstanceIds;

    /**
     * @var string 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
     */
    public $CreatedTime;

    /**
     * @param string $KeyId 密钥对的`ID`，是密钥对的唯一标识。
     * @param string $KeyName 密钥对名称。
     * @param integer $ProjectId 密钥对所属的项目`ID`。
     * @param string $Description 密钥对描述信息。
     * @param string $PublicKey 密钥对的纯文本公钥。
     * @param string $PrivateKey 密钥对的纯文本私钥。腾讯云不会保管私钥，请用户自行妥善保存。
     * @param array $AssociatedInstanceIds 密钥关联的实例`ID`列表。
     * @param string $CreatedTime 创建时间。按照`ISO8601`标准表示，并且使用`UTC`时间。格式为：`YYYY-MM-DDThh:mm:ssZ`。
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

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("AssociatedInstanceIds",$param) and $param["AssociatedInstanceIds"] !== null) {
            $this->AssociatedInstanceIds = $param["AssociatedInstanceIds"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
