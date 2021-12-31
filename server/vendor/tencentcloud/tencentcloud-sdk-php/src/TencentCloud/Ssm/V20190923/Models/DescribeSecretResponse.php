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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecret返回参数结构体
 *
 * @method string getSecretName() 获取凭据名称。
 * @method void setSecretName(string $SecretName) 设置凭据名称。
 * @method string getDescription() 获取凭据描述信息。
 * @method void setDescription(string $Description) 设置凭据描述信息。
 * @method string getKmsKeyId() 获取用于加密的KMS CMK ID。
 * @method void setKmsKeyId(string $KmsKeyId) 设置用于加密的KMS CMK ID。
 * @method integer getCreateUin() 获取创建者UIN。
 * @method void setCreateUin(integer $CreateUin) 设置创建者UIN。
 * @method string getStatus() 获取凭据状态：Enabled、Disabled、PendingDelete
 * @method void setStatus(string $Status) 设置凭据状态：Enabled、Disabled、PendingDelete
 * @method integer getDeleteTime() 获取删除日期，uinx 时间戳，非计划删除状态的凭据为0。
 * @method void setDeleteTime(integer $DeleteTime) 设置删除日期，uinx 时间戳，非计划删除状态的凭据为0。
 * @method integer getCreateTime() 获取创建日期。
 * @method void setCreateTime(integer $CreateTime) 设置创建日期。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecretResponse extends AbstractModel
{
    /**
     * @var string 凭据名称。
     */
    public $SecretName;

    /**
     * @var string 凭据描述信息。
     */
    public $Description;

    /**
     * @var string 用于加密的KMS CMK ID。
     */
    public $KmsKeyId;

    /**
     * @var integer 创建者UIN。
     */
    public $CreateUin;

    /**
     * @var string 凭据状态：Enabled、Disabled、PendingDelete
     */
    public $Status;

    /**
     * @var integer 删除日期，uinx 时间戳，非计划删除状态的凭据为0。
     */
    public $DeleteTime;

    /**
     * @var integer 创建日期。
     */
    public $CreateTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SecretName 凭据名称。
     * @param string $Description 凭据描述信息。
     * @param string $KmsKeyId 用于加密的KMS CMK ID。
     * @param integer $CreateUin 创建者UIN。
     * @param string $Status 凭据状态：Enabled、Disabled、PendingDelete
     * @param integer $DeleteTime 删除日期，uinx 时间戳，非计划删除状态的凭据为0。
     * @param integer $CreateTime 创建日期。
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
