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
 * UpdateEmailIdentity返回参数结构体
 *
 * @method string getIdentityType() 获取验证类型。固定值：DOMAIN
 * @method void setIdentityType(string $IdentityType) 设置验证类型。固定值：DOMAIN
 * @method boolean getVerifiedForSendingStatus() 获取是否已通过验证
 * @method void setVerifiedForSendingStatus(boolean $VerifiedForSendingStatus) 设置是否已通过验证
 * @method array getAttributes() 获取需要配置的DNS信息
 * @method void setAttributes(array $Attributes) 设置需要配置的DNS信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class UpdateEmailIdentityResponse extends AbstractModel
{
    /**
     * @var string 验证类型。固定值：DOMAIN
     */
    public $IdentityType;

    /**
     * @var boolean 是否已通过验证
     */
    public $VerifiedForSendingStatus;

    /**
     * @var array 需要配置的DNS信息
     */
    public $Attributes;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $IdentityType 验证类型。固定值：DOMAIN
     * @param boolean $VerifiedForSendingStatus 是否已通过验证
     * @param array $Attributes 需要配置的DNS信息
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
        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }

        if (array_key_exists("VerifiedForSendingStatus",$param) and $param["VerifiedForSendingStatus"] !== null) {
            $this->VerifiedForSendingStatus = $param["VerifiedForSendingStatus"];
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = [];
            foreach ($param["Attributes"] as $key => $value){
                $obj = new DNSAttributes();
                $obj->deserialize($value);
                array_push($this->Attributes, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
