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

namespace TencentCloud\Dc\V20180410;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dc\V20180410\Models as Models;

/**
 * @method Models\AcceptDirectConnectTunnelResponse AcceptDirectConnectTunnel(Models\AcceptDirectConnectTunnelRequest $req) 接受专用通道申请
 * @method Models\ApplyInternetAddressResponse ApplyInternetAddress(Models\ApplyInternetAddressRequest $req) 申请互联网CIDR地址
 * @method Models\CreateDirectConnectResponse CreateDirectConnect(Models\CreateDirectConnectRequest $req) 申请物理专线接入。
调用该接口时，请注意：
账号要进行实名认证，否则不允许申请物理专线；
若账户下存在欠费状态的物理专线，则不能申请更多的物理专线。
 * @method Models\CreateDirectConnectTunnelResponse CreateDirectConnectTunnel(Models\CreateDirectConnectTunnelRequest $req) 用于创建专用通道的接口
 * @method Models\DeleteDirectConnectResponse DeleteDirectConnect(Models\DeleteDirectConnectRequest $req) 删除物理专线。
只能删除处于已连接状态的物理专线。
 * @method Models\DeleteDirectConnectTunnelResponse DeleteDirectConnectTunnel(Models\DeleteDirectConnectTunnelRequest $req) 删除专用通道
 * @method Models\DescribeAccessPointsResponse DescribeAccessPoints(Models\DescribeAccessPointsRequest $req) 查询物理专线接入点

 * @method Models\DescribeDirectConnectTunnelExtraResponse DescribeDirectConnectTunnelExtra(Models\DescribeDirectConnectTunnelExtraRequest $req) 本接口（DescribeDirectConnectTunnelExtra）用于查询专用通道扩展信息
 * @method Models\DescribeDirectConnectTunnelsResponse DescribeDirectConnectTunnels(Models\DescribeDirectConnectTunnelsRequest $req) 用于查询专用通道列表。
 * @method Models\DescribeDirectConnectsResponse DescribeDirectConnects(Models\DescribeDirectConnectsRequest $req) 查询物理专线列表。
 * @method Models\DescribeInternetAddressResponse DescribeInternetAddress(Models\DescribeInternetAddressRequest $req) 获取用户互联网公网地址信息
 * @method Models\DescribeInternetAddressQuotaResponse DescribeInternetAddressQuota(Models\DescribeInternetAddressQuotaRequest $req) 获取用户互联网公网地址配额
 * @method Models\DescribeInternetAddressStatisticsResponse DescribeInternetAddressStatistics(Models\DescribeInternetAddressStatisticsRequest $req) 获取用户互联网公网地址分配统计信息
 * @method Models\DescribePublicDirectConnectTunnelRoutesResponse DescribePublicDirectConnectTunnelRoutes(Models\DescribePublicDirectConnectTunnelRoutesRequest $req) 本接口（DescribePublicDirectConnectTunnelRoutes）用于查询互联网通道路由列表
 * @method Models\DisableInternetAddressResponse DisableInternetAddress(Models\DisableInternetAddressRequest $req) 停用用户申请的公网互联网地址
 * @method Models\EnableInternetAddressResponse EnableInternetAddress(Models\EnableInternetAddressRequest $req) 启用已停用的互联网公网地址
 * @method Models\ModifyDirectConnectAttributeResponse ModifyDirectConnectAttribute(Models\ModifyDirectConnectAttributeRequest $req) 修改物理专线的属性。
 * @method Models\ModifyDirectConnectTunnelAttributeResponse ModifyDirectConnectTunnelAttribute(Models\ModifyDirectConnectTunnelAttributeRequest $req) 修改专用通道属性
 * @method Models\ModifyDirectConnectTunnelExtraResponse ModifyDirectConnectTunnelExtra(Models\ModifyDirectConnectTunnelExtraRequest $req) 本接口（ModifyDirectConnectTunnelExtra）用于修改专用通道扩展信息
 * @method Models\RejectDirectConnectTunnelResponse RejectDirectConnectTunnel(Models\RejectDirectConnectTunnelRequest $req) 拒绝专用通道申请
 * @method Models\ReleaseInternetAddressResponse ReleaseInternetAddress(Models\ReleaseInternetAddressRequest $req) 释放已申请的互联网地址
 */

class DcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dc";

    /**
     * @var string
     */
    protected $version = "2018-04-10";

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
        $respClass = "TencentCloud"."\\".ucfirst("dc")."\\"."V20180410\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
