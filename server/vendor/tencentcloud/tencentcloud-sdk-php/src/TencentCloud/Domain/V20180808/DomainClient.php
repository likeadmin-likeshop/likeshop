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

namespace TencentCloud\Domain\V20180808;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Domain\V20180808\Models as Models;

/**
 * @method Models\BatchModifyDomainInfoResponse BatchModifyDomainInfo(Models\BatchModifyDomainInfoRequest $req) 本接口 ( BatchModifyDomainInfo ) 用于批量域名信息修改 。
 * @method Models\CheckBatchStatusResponse CheckBatchStatus(Models\CheckBatchStatusRequest $req) 本接口 ( CheckBatchStatus ) 用于查询批量操作日志状态 。
 * @method Models\CheckDomainResponse CheckDomain(Models\CheckDomainRequest $req) 检查域名是否可以注册。
 * @method Models\CreateDomainBatchResponse CreateDomainBatch(Models\CreateDomainBatchRequest $req) 本接口 ( CreateDomainBatch ) 用于批量域名注册 。
 * @method Models\CreateTemplateResponse CreateTemplate(Models\CreateTemplateRequest $req) 本接口 ( CreateTemplate ) 用于添加域名信息模板 。
 * @method Models\DeleteTemplateResponse DeleteTemplate(Models\DeleteTemplateRequest $req) 本接口 ( DeleteTemplate ) 用于删除信息模板。
 * @method Models\DescribeBatchOperationLogDetailsResponse DescribeBatchOperationLogDetails(Models\DescribeBatchOperationLogDetailsRequest $req) 本接口 ( DescribeBatchOperationLogDetails ) 用于获取批量操作日志详情。
 * @method Models\DescribeBatchOperationLogsResponse DescribeBatchOperationLogs(Models\DescribeBatchOperationLogsRequest $req) 本接口 ( DescribeBatchOperationLogs ) 用于获取批量操作日志 。
 * @method Models\DescribeDomainBaseInfoResponse DescribeDomainBaseInfo(Models\DescribeDomainBaseInfoRequest $req) 本接口 (  DescribeDomainBaseInfo) 获取域名基本信息。

 * @method Models\DescribeDomainNameListResponse DescribeDomainNameList(Models\DescribeDomainNameListRequest $req) 本接口 (  DescribeDomainNameList ) 我的域名列表。

 * @method Models\DescribeDomainPriceListResponse DescribeDomainPriceList(Models\DescribeDomainPriceListRequest $req) 按照域名后缀获取对应的价格列表
 * @method Models\DescribeTemplateResponse DescribeTemplate(Models\DescribeTemplateRequest $req) 本接口 (DescribeTemplate) 用于获取模板信息。
 * @method Models\DescribeTemplateListResponse DescribeTemplateList(Models\DescribeTemplateListRequest $req) 本接口 (DescribeTemplateList) 用于获取信息模板列表。

 * @method Models\ModifyDomainDNSBatchResponse ModifyDomainDNSBatch(Models\ModifyDomainDNSBatchRequest $req) 本接口 ( ModifyDomainDNSBatch) 用于批量域名 DNS 修改 。
 * @method Models\ModifyDomainOwnerBatchResponse ModifyDomainOwnerBatch(Models\ModifyDomainOwnerBatchRequest $req) 本接口 ( ModifyDomainOwnerBatch) 用于域名批量账号间转移 。
 * @method Models\RenewDomainBatchResponse RenewDomainBatch(Models\RenewDomainBatchRequest $req) 本接口 ( RenewDomainBatch ) 用于批量续费域名 。

 * @method Models\SetDomainAutoRenewResponse SetDomainAutoRenew(Models\SetDomainAutoRenewRequest $req) 本接口 ( SetDomainAutoRenew ) 用于设置域名自动续费。
 * @method Models\TransferInDomainBatchResponse TransferInDomainBatch(Models\TransferInDomainBatchRequest $req) 本接口 ( TransferInDomainBatch ) 用于批量转入域名 。
 * @method Models\TransferProhibitionBatchResponse TransferProhibitionBatch(Models\TransferProhibitionBatchRequest $req) 本接口 ( TransferProhibitionBatch ) 用于批量禁止域名转移 。
 * @method Models\UpdateProhibitionBatchResponse UpdateProhibitionBatch(Models\UpdateProhibitionBatchRequest $req) 本接口 ( UpdateProhibitionBatch ) 用于批量禁止更新锁。
 * @method Models\UploadImageResponse UploadImage(Models\UploadImageRequest $req) 本接口 ( UploadImage ) 用于证件图片上传 。
 */

class DomainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "domain.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "domain";

    /**
     * @var string
     */
    protected $version = "2018-08-08";

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
        $respClass = "TencentCloud"."\\".ucfirst("domain")."\\"."V20180808\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
