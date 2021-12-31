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

namespace TencentCloud\Dnspod\V20210323;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dnspod\V20210323\Models as Models;

/**
 * @method Models\CreateDomainResponse CreateDomain(Models\CreateDomainRequest $req) 添加域名

 * @method Models\CreateDomainAliasResponse CreateDomainAlias(Models\CreateDomainAliasRequest $req) 创建域名别名
 * @method Models\CreateDomainBatchResponse CreateDomainBatch(Models\CreateDomainBatchRequest $req) 批量添加域名
 * @method Models\CreateDomainGroupResponse CreateDomainGroup(Models\CreateDomainGroupRequest $req) 创建域名分组
 * @method Models\CreateRecordResponse CreateRecord(Models\CreateRecordRequest $req) 添加记录

 * @method Models\CreateRecordBatchResponse CreateRecordBatch(Models\CreateRecordBatchRequest $req) 批量添加记录
 * @method Models\DeleteDomainResponse DeleteDomain(Models\DeleteDomainRequest $req) 删除域名

 * @method Models\DeleteDomainAliasResponse DeleteDomainAlias(Models\DeleteDomainAliasRequest $req) 删除域名别名
 * @method Models\DeleteRecordResponse DeleteRecord(Models\DeleteRecordRequest $req) 删除记录
 * @method Models\DeleteShareDomainResponse DeleteShareDomain(Models\DeleteShareDomainRequest $req) 删除域名共享
 * @method Models\DescribeBatchTaskResponse DescribeBatchTask(Models\DescribeBatchTaskRequest $req) 获取任务详情
 * @method Models\DescribeDomainResponse DescribeDomain(Models\DescribeDomainRequest $req) 获取域名信息
 * @method Models\DescribeDomainListResponse DescribeDomainList(Models\DescribeDomainListRequest $req) 获取域名列表
 * @method Models\DescribeDomainLogListResponse DescribeDomainLogList(Models\DescribeDomainLogListRequest $req) 获取域名日志
 * @method Models\DescribeDomainPurviewResponse DescribeDomainPurview(Models\DescribeDomainPurviewRequest $req) 获取域名权限
 * @method Models\DescribeDomainShareInfoResponse DescribeDomainShareInfo(Models\DescribeDomainShareInfoRequest $req) 获取域名共享信息
 * @method Models\DescribeRecordResponse DescribeRecord(Models\DescribeRecordRequest $req) 获取记录信息
 * @method Models\DescribeRecordLineListResponse DescribeRecordLineList(Models\DescribeRecordLineListRequest $req) 获取等级允许的线路
 * @method Models\DescribeRecordListResponse DescribeRecordList(Models\DescribeRecordListRequest $req) 获取某个域名下的解析记录
 * @method Models\DescribeRecordTypeResponse DescribeRecordType(Models\DescribeRecordTypeRequest $req) 获取等级允许的记录类型
 * @method Models\DescribeUserDetailResponse DescribeUserDetail(Models\DescribeUserDetailRequest $req) 获取帐户信息
 * @method Models\ModifyDomainLockResponse ModifyDomainLock(Models\ModifyDomainLockRequest $req) 锁定域名
 * @method Models\ModifyDomainOwnerResponse ModifyDomainOwner(Models\ModifyDomainOwnerRequest $req) 域名过户
 * @method Models\ModifyDomainRemarkResponse ModifyDomainRemark(Models\ModifyDomainRemarkRequest $req) 设置域名备注
 * @method Models\ModifyDomainStatusResponse ModifyDomainStatus(Models\ModifyDomainStatusRequest $req) 修改域名状态
 * @method Models\ModifyDomainUnlockResponse ModifyDomainUnlock(Models\ModifyDomainUnlockRequest $req) 域名锁定解锁
 * @method Models\ModifyDynamicDNSResponse ModifyDynamicDNS(Models\ModifyDynamicDNSRequest $req) 更新动态 DNS 记录

 * @method Models\ModifyRecordResponse ModifyRecord(Models\ModifyRecordRequest $req) 修改记录
 * @method Models\ModifyRecordBatchResponse ModifyRecordBatch(Models\ModifyRecordBatchRequest $req) 批量修改记录
 * @method Models\ModifyRecordRemarkResponse ModifyRecordRemark(Models\ModifyRecordRemarkRequest $req) 设置记录备注
 * @method Models\ModifyRecordStatusResponse ModifyRecordStatus(Models\ModifyRecordStatusRequest $req) 修改解析记录的状态
 */

class DnspodClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dnspod.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dnspod";

    /**
     * @var string
     */
    protected $version = "2021-03-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("dnspod")."\\"."V20210323\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
