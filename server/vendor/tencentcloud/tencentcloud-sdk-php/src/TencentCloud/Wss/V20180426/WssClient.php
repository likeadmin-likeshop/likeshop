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

namespace TencentCloud\Wss\V20180426;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Wss\V20180426\Models as Models;

/**
 * @method Models\DeleteCertResponse DeleteCert(Models\DeleteCertRequest $req) 本接口（DeleteCert）用于删除证书。
 * @method Models\DescribeCertListResponse DescribeCertList(Models\DescribeCertListRequest $req) 本接口(DescribeCertList)用于获取证书列表。
 * @method Models\UploadCertResponse UploadCert(Models\UploadCertRequest $req) 本接口（UploadCert）用于上传证书。
 */

class WssClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "wss.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "wss";

    /**
     * @var string
     */
    protected $version = "2018-04-26";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("wss")."\\"."V20180426\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
