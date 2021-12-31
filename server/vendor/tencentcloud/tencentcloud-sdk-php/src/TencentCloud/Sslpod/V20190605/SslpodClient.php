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

namespace TencentCloud\Sslpod\V20190605;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Sslpod\V20190605\Models as Models;

/**
 * @method Models\CreateDomainResponse CreateDomain(Models\CreateDomainRequest $req) 通过域名端口添加监控
 * @method Models\DeleteDomainResponse DeleteDomain(Models\DeleteDomainRequest $req) 通过域名ID删除监控的域名
 * @method Models\DescribeDashboardResponse DescribeDashboard(Models\DescribeDashboardRequest $req) 获取仪表盘数据
 * @method Models\DescribeDomainCertsResponse DescribeDomainCerts(Models\DescribeDomainCertsRequest $req) 获取域名关联证书
 * @method Models\DescribeDomainTagsResponse DescribeDomainTags(Models\DescribeDomainTagsRequest $req) 获取账号下所有tag
 * @method Models\DescribeDomainsResponse DescribeDomains(Models\DescribeDomainsRequest $req) 通过searchType搜索已经添加的域名
 * @method Models\DescribeNoticeInfoResponse DescribeNoticeInfo(Models\DescribeNoticeInfoRequest $req) 获取通知额度信息
 * @method Models\ModifyDomainTagsResponse ModifyDomainTags(Models\ModifyDomainTagsRequest $req) 修改域名tag
 * @method Models\RefreshDomainResponse RefreshDomain(Models\RefreshDomainRequest $req) 强制重新检测域名
 * @method Models\ResolveDomainResponse ResolveDomain(Models\ResolveDomainRequest $req) 解析域名获得多个IP地址
 */

class SslpodClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "sslpod.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "sslpod";

    /**
     * @var string
     */
    protected $version = "2019-06-05";

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
        $respClass = "TencentCloud"."\\".ucfirst("sslpod")."\\"."V20190605\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
