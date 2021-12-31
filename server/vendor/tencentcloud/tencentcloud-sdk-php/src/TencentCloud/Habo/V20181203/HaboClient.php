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

namespace TencentCloud\Habo\V20181203;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Habo\V20181203\Models as Models;

/**
 * @method Models\DescribeStatusResponse DescribeStatus(Models\DescribeStatusRequest $req) 查询指定md5样本是否分析完成，并获取分析日志下载地址。
 * @method Models\StartAnalyseResponse StartAnalyse(Models\StartAnalyseRequest $req) 上传样本到哈勃进行分析，异步生成分析日志。
 */

class HaboClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "habo.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "habo";

    /**
     * @var string
     */
    protected $version = "2018-12-03";

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
        $respClass = "TencentCloud"."\\".ucfirst("habo")."\\"."V20181203\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
