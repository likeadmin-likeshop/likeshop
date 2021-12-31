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

namespace TencentCloud\Tav\V20190118;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tav\V20190118\Models as Models;

/**
 * @method Models\GetLocalEngineResponse GetLocalEngine(Models\GetLocalEngineRequest $req) 获取TAV本地引擎
 * @method Models\GetScanResultResponse GetScanResult(Models\GetScanResultRequest $req) tav文件上传扫描结果查询
 * @method Models\ScanFileResponse ScanFile(Models\ScanFileRequest $req) tav文件上传扫描
 * @method Models\ScanFileHashResponse ScanFileHash(Models\ScanFileHashRequest $req) 通过文件哈希值获取文件黑白属性
 */

class TavClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tav.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tav";

    /**
     * @var string
     */
    protected $version = "2019-01-18";

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
        $respClass = "TencentCloud"."\\".ucfirst("tav")."\\"."V20190118\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
