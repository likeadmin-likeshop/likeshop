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

namespace TencentCloud\Npp\V20190823;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Npp\V20190823\Models as Models;

/**
 * @method Models\CreateCallBackResponse CreateCallBack(Models\CreateCallBackRequest $req) 回拨呼叫请求
 * @method Models\DelVirtualNumResponse DelVirtualNum(Models\DelVirtualNumRequest $req) 直拨解绑中间号
 * @method Models\DeleteCallBackResponse DeleteCallBack(Models\DeleteCallBackRequest $req) 回拨呼叫取消
 * @method Models\DescribeCallBackCdrResponse DescribeCallBackCdr(Models\DescribeCallBackCdrRequest $req) 回拨话单获取接口
 * @method Models\DescribeCallBackStatusResponse DescribeCallBackStatus(Models\DescribeCallBackStatusRequest $req) 回拨通话状态获取
 * @method Models\DescribeCallerDisplayListResponse DescribeCallerDisplayList(Models\DescribeCallerDisplayListRequest $req) 回拨拉取主叫显号号码集合
 * @method Models\Get400CdrResponse Get400Cdr(Models\Get400CdrRequest $req) 直拨话单获取接口
 * @method Models\GetVirtualNumResponse GetVirtualNum(Models\GetVirtualNumRequest $req) 直拨获取中间号（App 使用方发起）
 */

class NppClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "npp.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "npp";

    /**
     * @var string
     */
    protected $version = "2019-08-23";

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
        $respClass = "TencentCloud"."\\".ucfirst("npp")."\\"."V20190823\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
