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

namespace TencentCloud\Bmeip\V20180625;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Bmeip\V20180625\Models as Models;

/**
 * @method Models\BindEipAclsResponse BindEipAcls(Models\BindEipAclsRequest $req) 此接口用于为某个 EIP 关联 ACL。
 * @method Models\BindHostedResponse BindHosted(Models\BindHostedRequest $req) BindHosted接口用于绑定黑石弹性公网IP到黑石托管机器上
 * @method Models\BindRsResponse BindRs(Models\BindRsRequest $req) 绑定黑石EIP
 * @method Models\BindVpcIpResponse BindVpcIp(Models\BindVpcIpRequest $req) 黑石EIP绑定VPCIP
 * @method Models\CreateEipResponse CreateEip(Models\CreateEipRequest $req) 创建黑石弹性公网IP
 * @method Models\CreateEipAclResponse CreateEipAcl(Models\CreateEipAclRequest $req) 创建黑石弹性公网 EIPACL
 * @method Models\DeleteEipResponse DeleteEip(Models\DeleteEipRequest $req) 释放黑石弹性公网IP
 * @method Models\DeleteEipAclResponse DeleteEipAcl(Models\DeleteEipAclRequest $req) 删除弹性公网IP ACL
 * @method Models\DescribeEipAclsResponse DescribeEipAcls(Models\DescribeEipAclsRequest $req) 查询弹性公网IP ACL
 * @method Models\DescribeEipQuotaResponse DescribeEipQuota(Models\DescribeEipQuotaRequest $req) 查询黑石EIP 限额
 * @method Models\DescribeEipTaskResponse DescribeEipTask(Models\DescribeEipTaskRequest $req) 黑石EIP查询任务状态
 * @method Models\DescribeEipsResponse DescribeEips(Models\DescribeEipsRequest $req) 黑石EIP查询接口
 * @method Models\ModifyEipAclResponse ModifyEipAcl(Models\ModifyEipAclRequest $req) 修改弹性公网IP ACL
 * @method Models\ModifyEipChargeResponse ModifyEipCharge(Models\ModifyEipChargeRequest $req) 黑石EIP修改计费方式
 * @method Models\ModifyEipNameResponse ModifyEipName(Models\ModifyEipNameRequest $req) 更新黑石EIP名称
 * @method Models\UnbindEipAclsResponse UnbindEipAcls(Models\UnbindEipAclsRequest $req) 解绑弹性公网IP ACL
 * @method Models\UnbindHostedResponse UnbindHosted(Models\UnbindHostedRequest $req) UnbindHosted接口用于解绑托管机器上的EIP
 * @method Models\UnbindRsResponse UnbindRs(Models\UnbindRsRequest $req) 解绑黑石EIP
 * @method Models\UnbindRsListResponse UnbindRsList(Models\UnbindRsListRequest $req) 批量解绑物理机弹性公网IP接口
 * @method Models\UnbindVpcIpResponse UnbindVpcIp(Models\UnbindVpcIpRequest $req) 黑石EIP解绑VPCIP
 */

class BmeipClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "bmeip.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "bmeip";

    /**
     * @var string
     */
    protected $version = "2018-06-25";

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
        $respClass = "TencentCloud"."\\".ucfirst("bmeip")."\\"."V20180625\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
