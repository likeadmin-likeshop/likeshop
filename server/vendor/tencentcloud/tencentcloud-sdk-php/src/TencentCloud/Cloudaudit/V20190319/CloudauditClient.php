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

namespace TencentCloud\Cloudaudit\V20190319;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cloudaudit\V20190319\Models as Models;

/**
 * @method Models\CreateAuditResponse CreateAudit(Models\CreateAuditRequest $req) 参数要求：
1、如果IsCreateNewBucket的值存在的话，cosRegion和cosBucketName都是必填参数。
2、如果IsEnableCmqNotify的值是1的话，IsCreateNewQueue、CmqRegion和CmqQueueName都是必填参数。
3、如果IsEnableCmqNotify的值是0的话，IsCreateNewQueue、CmqRegion和CmqQueueName都不能传。
4、如果IsEnableKmsEncry的值是1的话，KmsRegion和KeyId属于必填项
 * @method Models\DeleteAuditResponse DeleteAudit(Models\DeleteAuditRequest $req) 删除跟踪集
 * @method Models\DescribeAuditResponse DescribeAudit(Models\DescribeAuditRequest $req) 查询跟踪集详情
 * @method Models\DescribeEventsResponse DescribeEvents(Models\DescribeEventsRequest $req) 查询云审计日志
 * @method Models\GetAttributeKeyResponse GetAttributeKey(Models\GetAttributeKeyRequest $req) 查询AttributeKey的有效取值范围
 * @method Models\InquireAuditCreditResponse InquireAuditCredit(Models\InquireAuditCreditRequest $req) 查询用户可创建跟踪集的数量
 * @method Models\ListAuditsResponse ListAudits(Models\ListAuditsRequest $req) 查询跟踪集概要
 * @method Models\ListCmqEnableRegionResponse ListCmqEnableRegion(Models\ListCmqEnableRegionRequest $req) 查询云审计支持的cmq的可用区
 * @method Models\ListCosEnableRegionResponse ListCosEnableRegion(Models\ListCosEnableRegionRequest $req) 查询云审计支持的cos可用区
 * @method Models\ListKeyAliasByRegionResponse ListKeyAliasByRegion(Models\ListKeyAliasByRegionRequest $req) 根据地域获取KMS密钥别名
 * @method Models\LookUpEventsResponse LookUpEvents(Models\LookUpEventsRequest $req) 用于对操作日志进行检索，便于用户进行查询相关的操作信息。
 * @method Models\StartLoggingResponse StartLogging(Models\StartLoggingRequest $req) 开启跟踪集
 * @method Models\StopLoggingResponse StopLogging(Models\StopLoggingRequest $req) 关闭跟踪集
 * @method Models\UpdateAuditResponse UpdateAudit(Models\UpdateAuditRequest $req) 参数要求：
1、如果IsCreateNewBucket的值存在的话，cosRegion和cosBucketName都是必填参数。
2、如果IsEnableCmqNotify的值是1的话，IsCreateNewQueue、CmqRegion和CmqQueueName都是必填参数。
3、如果IsEnableCmqNotify的值是0的话，IsCreateNewQueue、CmqRegion和CmqQueueName都不能传。
4、如果IsEnableKmsEncry的值是1的话，KmsRegion和KeyId属于必填项
 */

class CloudauditClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cloudaudit.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cloudaudit";

    /**
     * @var string
     */
    protected $version = "2019-03-19";

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
        $respClass = "TencentCloud"."\\".ucfirst("cloudaudit")."\\"."V20190319\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
