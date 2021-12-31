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

namespace TencentCloud\Cloudhsm\V20191112;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cloudhsm\V20191112\Models as Models;

/**
 * @method Models\DescribeHSMBySubnetIdResponse DescribeHSMBySubnetId(Models\DescribeHSMBySubnetIdRequest $req) 通过SubnetId获取Hsm资源数
 * @method Models\DescribeHSMByVpcIdResponse DescribeHSMByVpcId(Models\DescribeHSMByVpcIdRequest $req) 通过VpcId获取Hsm资源数
 * @method Models\DescribeSubnetResponse DescribeSubnet(Models\DescribeSubnetRequest $req) 查询子网列表
 * @method Models\DescribeSupportedHsmResponse DescribeSupportedHsm(Models\DescribeSupportedHsmRequest $req) 获取当前地域所支持的设备列表
 * @method Models\DescribeUsgResponse DescribeUsg(Models\DescribeUsgRequest $req) 根据用户的AppId获取用户安全组列表
 * @method Models\DescribeUsgRuleResponse DescribeUsgRule(Models\DescribeUsgRuleRequest $req) 获取安全组详情
 * @method Models\DescribeVpcResponse DescribeVpc(Models\DescribeVpcRequest $req) 查询用户的私有网络列表
 * @method Models\DescribeVsmAttributesResponse DescribeVsmAttributes(Models\DescribeVsmAttributesRequest $req) 获取VSM属性
 * @method Models\DescribeVsmsResponse DescribeVsms(Models\DescribeVsmsRequest $req) 获取用户VSM列表
 * @method Models\InquiryPriceBuyVsmResponse InquiryPriceBuyVsm(Models\InquiryPriceBuyVsmRequest $req) 购买询价接口
 * @method Models\ModifyVsmAttributesResponse ModifyVsmAttributes(Models\ModifyVsmAttributesRequest $req) 修改VSM属性
 */

class CloudhsmClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "cloudhsm.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "cloudhsm";

    /**
     * @var string
     */
    protected $version = "2019-11-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("cloudhsm")."\\"."V20191112\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
