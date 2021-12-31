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
namespace TencentCloud\Btoe\V20210303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDepositCert返回参数结构体
 *
 * @method string getEvidenceId() 获取存证编码
 * @method void setEvidenceId(string $EvidenceId) 设置存证编码
 * @method string getEvidenceCert() 获取存证证书文件临时链接
 * @method void setEvidenceCert(string $EvidenceCert) 设置存证证书文件临时链接
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetDepositCertResponse extends AbstractModel
{
    /**
     * @var string 存证编码
     */
    public $EvidenceId;

    /**
     * @var string 存证证书文件临时链接
     */
    public $EvidenceCert;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $EvidenceId 存证编码
     * @param string $EvidenceCert 存证证书文件临时链接
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
        if (array_key_exists("EvidenceId",$param) and $param["EvidenceId"] !== null) {
            $this->EvidenceId = $param["EvidenceId"];
        }

        if (array_key_exists("EvidenceCert",$param) and $param["EvidenceCert"] !== null) {
            $this->EvidenceCert = $param["EvidenceCert"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
