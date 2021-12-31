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

namespace TencentCloud\Iottid\V20190411;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Iottid\V20190411\Models as Models;

/**
 * @method Models\AuthTestTidResponse AuthTestTid(Models\AuthTestTidRequest $req) 单向认证测试TID 
 * @method Models\BurnTidNotifyResponse BurnTidNotify(Models\BurnTidNotifyRequest $req) 安全芯片TID烧录回执 
 * @method Models\DeliverTidNotifyResponse DeliverTidNotify(Models\DeliverTidNotifyRequest $req) 安全芯片为载体的TID空发回执，绑定TID与订单号。 
 * @method Models\DeliverTidsResponse DeliverTids(Models\DeliverTidsRequest $req) 设备服务商请求空发产品订单的TID信息 
 * @method Models\DescribeAvailableLibCountResponse DescribeAvailableLibCount(Models\DescribeAvailableLibCountRequest $req) 查询指定订单的可空发的白盒密钥数量
 * @method Models\DescribePermissionResponse DescribePermission(Models\DescribePermissionRequest $req) 查询企业用户TID平台控制台权限 
 * @method Models\DownloadTidsResponse DownloadTids(Models\DownloadTidsRequest $req) 下载芯片订单的TID 
 * @method Models\UploadDeviceUniqueCodeResponse UploadDeviceUniqueCode(Models\UploadDeviceUniqueCodeRequest $req) 上传硬件唯一标识码，是软加固设备身份参数。本接口如遇到错误数据，则所有当次上传数据失效。
 * @method Models\VerifyChipBurnInfoResponse VerifyChipBurnInfo(Models\VerifyChipBurnInfoRequest $req) 下载控制台验证芯片烧录信息，保证TID与中心信息一致 
 */

class IottidClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "iottid.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "iottid";

    /**
     * @var string
     */
    protected $version = "2019-04-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("iottid")."\\"."V20190411\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
