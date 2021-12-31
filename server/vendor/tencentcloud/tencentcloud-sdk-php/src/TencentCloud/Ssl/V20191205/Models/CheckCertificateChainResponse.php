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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckCertificateChain返回参数结构体
 *
 * @method boolean getIsValid() 获取true为通过检查，false为未通过检查。
 * @method void setIsValid(boolean $IsValid) 设置true为通过检查，false为未通过检查。
 * @method boolean getIsTrustedCA() 获取true为可信CA，false为不可信CA。
 * @method void setIsTrustedCA(boolean $IsTrustedCA) 设置true为可信CA，false为不可信CA。
 * @method array getChains() 获取包含证书链中每一段证书的通用名称。
 * @method void setChains(array $Chains) 设置包含证书链中每一段证书的通用名称。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckCertificateChainResponse extends AbstractModel
{
    /**
     * @var boolean true为通过检查，false为未通过检查。
     */
    public $IsValid;

    /**
     * @var boolean true为可信CA，false为不可信CA。
     */
    public $IsTrustedCA;

    /**
     * @var array 包含证书链中每一段证书的通用名称。
     */
    public $Chains;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $IsValid true为通过检查，false为未通过检查。
     * @param boolean $IsTrustedCA true为可信CA，false为不可信CA。
     * @param array $Chains 包含证书链中每一段证书的通用名称。
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
        if (array_key_exists("IsValid",$param) and $param["IsValid"] !== null) {
            $this->IsValid = $param["IsValid"];
        }

        if (array_key_exists("IsTrustedCA",$param) and $param["IsTrustedCA"] !== null) {
            $this->IsTrustedCA = $param["IsTrustedCA"];
        }

        if (array_key_exists("Chains",$param) and $param["Chains"] !== null) {
            $this->Chains = $param["Chains"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
