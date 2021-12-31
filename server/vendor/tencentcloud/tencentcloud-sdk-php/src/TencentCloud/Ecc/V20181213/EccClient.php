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

namespace TencentCloud\Ecc\V20181213;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ecc\V20181213\Models as Models;

/**
 * @method Models\CorrectMultiImageResponse CorrectMultiImage(Models\CorrectMultiImageRequest $req) https://ecc.tencentcloudapi.com/?Action=CorrectMultiImage
多图像识别批改接口
 * @method Models\DescribeTaskResponse DescribeTask(Models\DescribeTaskRequest $req) 异步任务结果查询接口
 * @method Models\ECCResponse ECC(Models\ECCRequest $req) 接口请求域名： ecc.tencentcloudapi.com 
纯文本英语作文批改
 * @method Models\EHOCRResponse EHOCR(Models\EHOCRRequest $req) https://ecc.tencentcloudapi.com/?Action=EHOCR
图像识别批改接口
 */

class EccClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ecc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ecc";

    /**
     * @var string
     */
    protected $version = "2018-12-13";

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
        $respClass = "TencentCloud"."\\".ucfirst("ecc")."\\"."V20181213\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
