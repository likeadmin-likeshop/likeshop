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

namespace TencentCloud\Privatedns\V20201028;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Privatedns\V20201028\Models as Models;

/**
 * @method Models\CreatePrivateZoneResponse CreatePrivateZone(Models\CreatePrivateZoneRequest $req) 创建私有域
 * @method Models\CreatePrivateZoneRecordResponse CreatePrivateZoneRecord(Models\CreatePrivateZoneRecordRequest $req) 添加私有域解析记录
 * @method Models\DeletePrivateZoneResponse DeletePrivateZone(Models\DeletePrivateZoneRequest $req) 删除私有域并停止解析
 * @method Models\DeletePrivateZoneRecordResponse DeletePrivateZoneRecord(Models\DeletePrivateZoneRecordRequest $req) 删除私有域解析记录
 * @method Models\DescribeAuditLogResponse DescribeAuditLog(Models\DescribeAuditLogRequest $req) 获取操作日志列表
 * @method Models\DescribeDashboardResponse DescribeDashboard(Models\DescribeDashboardRequest $req) 获取私有域解析概览
 * @method Models\DescribePrivateZoneResponse DescribePrivateZone(Models\DescribePrivateZoneRequest $req) 获取私有域信息
 * @method Models\DescribePrivateZoneListResponse DescribePrivateZoneList(Models\DescribePrivateZoneListRequest $req) 获取私有域列表
 * @method Models\DescribePrivateZoneRecordListResponse DescribePrivateZoneRecordList(Models\DescribePrivateZoneRecordListRequest $req) 获取私有域记录列表
 * @method Models\DescribePrivateZoneServiceResponse DescribePrivateZoneService(Models\DescribePrivateZoneServiceRequest $req) 查询私有域解析开通状态
 * @method Models\DescribeRequestDataResponse DescribeRequestData(Models\DescribeRequestDataRequest $req) 获取私有域解析请求量
 * @method Models\ModifyPrivateZoneResponse ModifyPrivateZone(Models\ModifyPrivateZoneRequest $req) 修改私有域信息
 * @method Models\ModifyPrivateZoneRecordResponse ModifyPrivateZoneRecord(Models\ModifyPrivateZoneRecordRequest $req) 修改私有域解析记录
 * @method Models\ModifyPrivateZoneVpcResponse ModifyPrivateZoneVpc(Models\ModifyPrivateZoneVpcRequest $req) 修改私有域关联的VPC
 * @method Models\SubscribePrivateZoneServiceResponse SubscribePrivateZoneService(Models\SubscribePrivateZoneServiceRequest $req) 开通私有域解析
 */

class PrivatednsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "privatedns.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "privatedns";

    /**
     * @var string
     */
    protected $version = "2020-10-28";

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
        $respClass = "TencentCloud"."\\".ucfirst("privatedns")."\\"."V20201028\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
