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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 密钥详情
 *
 * @method string getAccessKeyId() 获取创建的 API 密钥 ID 。
 * @method void setAccessKeyId(string $AccessKeyId) 设置创建的 API 密钥 ID 。
 * @method string getAccessKeySecret() 获取创建的 API 密钥 Key。
 * @method void setAccessKeySecret(string $AccessKeySecret) 设置创建的 API 密钥 Key。
 * @method string getAccessKeyType() 获取密钥类型，auto 或者 manual。
 * @method void setAccessKeyType(string $AccessKeyType) 设置密钥类型，auto 或者 manual。
 * @method string getSecretName() 获取用户自定义密钥名称。
 * @method void setSecretName(string $SecretName) 设置用户自定义密钥名称。
 * @method string getModifiedTime() 获取最后一次修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method void setModifiedTime(string $ModifiedTime) 设置最后一次修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method integer getStatus() 获取密钥状态。0表示禁用，1表示启用。
 * @method void setStatus(integer $Status) 设置密钥状态。0表示禁用，1表示启用。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
 */
class ApiKey extends AbstractModel
{
    /**
     * @var string 创建的 API 密钥 ID 。
     */
    public $AccessKeyId;

    /**
     * @var string 创建的 API 密钥 Key。
     */
    public $AccessKeySecret;

    /**
     * @var string 密钥类型，auto 或者 manual。
     */
    public $AccessKeyType;

    /**
     * @var string 用户自定义密钥名称。
     */
    public $SecretName;

    /**
     * @var string 最后一次修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     */
    public $ModifiedTime;

    /**
     * @var integer 密钥状态。0表示禁用，1表示启用。
     */
    public $Status;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     */
    public $CreatedTime;

    /**
     * @param string $AccessKeyId 创建的 API 密钥 ID 。
     * @param string $AccessKeySecret 创建的 API 密钥 Key。
     * @param string $AccessKeyType 密钥类型，auto 或者 manual。
     * @param string $SecretName 用户自定义密钥名称。
     * @param string $ModifiedTime 最后一次修改时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
     * @param integer $Status 密钥状态。0表示禁用，1表示启用。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。格式为：YYYY-MM-DDThh:mm:ssZ。
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("AccessKeySecret",$param) and $param["AccessKeySecret"] !== null) {
            $this->AccessKeySecret = $param["AccessKeySecret"];
        }

        if (array_key_exists("AccessKeyType",$param) and $param["AccessKeyType"] !== null) {
            $this->AccessKeyType = $param["AccessKeyType"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
