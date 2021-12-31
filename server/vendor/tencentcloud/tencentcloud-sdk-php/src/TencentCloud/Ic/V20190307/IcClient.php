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

namespace TencentCloud\Ic\V20190307;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Ic\V20190307\Models as Models;

/**
 * @method Models\DescribeAppResponse DescribeApp(Models\DescribeAppRequest $req) 根据应用id查询物联卡应用详情
 * @method Models\DescribeCardResponse DescribeCard(Models\DescribeCardRequest $req) 查询卡片详细信息
 * @method Models\DescribeCardsResponse DescribeCards(Models\DescribeCardsRequest $req) 查询卡片列表信息
 * @method Models\ModifyUserCardRemarkResponse ModifyUserCardRemark(Models\ModifyUserCardRemarkRequest $req) 编辑卡片备注
 * @method Models\RenewCardsResponse RenewCards(Models\RenewCardsRequest $req) 批量为卡片续费，此接口建议调用至少间隔10s,如果出现返回deal lock failed相关的错误，请过10s再重试。
续费的必要条件：
1、单次续费的卡片不可以超过 100张。
2、接口只支持在控制台购买的卡片进行续费
3、销户和未激活的卡片不支持续费。
4、每张物联网卡，续费总周期不能超过24个月
 * @method Models\SendMultiSmsResponse SendMultiSms(Models\SendMultiSmsRequest $req) 群发短信
 * @method Models\SendSmsResponse SendSms(Models\SendSmsRequest $req) 发送短信息接口
 */

class IcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "ic.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "ic";

    /**
     * @var string
     */
    protected $version = "2019-03-07";

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
        $respClass = "TencentCloud"."\\".ucfirst("ic")."\\"."V20190307\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
