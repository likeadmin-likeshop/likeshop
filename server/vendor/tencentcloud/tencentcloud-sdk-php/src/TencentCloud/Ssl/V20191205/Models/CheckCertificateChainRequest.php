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
 * CheckCertificateChain请求参数结构体
 *
 * @method string getCertificateChain() 获取待检查的证书链
 * @method void setCertificateChain(string $CertificateChain) 设置待检查的证书链
 */
class CheckCertificateChainRequest extends AbstractModel
{
    /**
     * @var string 待检查的证书链
     */
    public $CertificateChain;

    /**
     * @param string $CertificateChain 待检查的证书链
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
        if (array_key_exists("CertificateChain",$param) and $param["CertificateChain"] !== null) {
            $this->CertificateChain = $param["CertificateChain"];
        }
    }
}
